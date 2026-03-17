#!/usr/bin/env node

import { spawnSync } from 'node:child_process';
import process from 'node:process';

const args = process.argv.slice(2);
const siteArg = args.find((arg) => arg.startsWith('--site='));
const site = siteArg ? siteArg.replace('--site=', '') : process.env.PW_SITE ?? 'default';

if (site !== 'default') {
  console.error(`No seed handler registered for site \"${site}\".`);
  process.exit(1);
}

const phpSeedCode = `
$storage = \\Drupal::entityTypeManager()->getStorage('node');
$matches = $storage->loadByProperties(['type' => 'page', 'title' => 'E2E Smoke Page']);
$node = $matches ? reset($matches) : NULL;
if (!$node) {
  $node = $storage->create([
    'type' => 'page',
    'title' => 'E2E Smoke Page',
    'status' => 1,
    'uid' => 1,
    'body' => [
      'value' => '<p>Seeded by Playwright for deterministic smoke tests.</p>',
      'format' => 'basic_html',
    ]
  ]);
  print('created');
}
else {
  print('exists');
}

$node->setUnpublished(FALSE);
$node->set('status', 1);
if ($node->hasField('moderation_state')) {
  $node->set('moderation_state', 'published');
}
$node->save();

$alias_storage = \\Drupal::entityTypeManager()->getStorage('path_alias');
$existing_aliases = $alias_storage->loadByProperties(['alias' => '/e2e-smoke-page']);
foreach ($existing_aliases as $existing_alias) {
  $existing_alias->delete();
}
$alias_storage->create([
  'path' => '/node/' . $node->id(),
  'alias' => '/e2e-smoke-page',
  'langcode' => $node->language()->getId(),
])->save();
`;

const result = spawnSync('ddev', ['drush', 'php:eval', phpSeedCode], {
  stdio: 'inherit'
});

if (result.status !== 0) {
  process.exit(result.status ?? 1);
}

console.log('Seed complete for site:', site);

import { test, expect } from '../../../../core/fixtures/test-fixture';
import { assertDrupalHealthy } from '../../../../core/helpers/drupal';

test('drupal responds on key public endpoints @api', async ({ request, runtime }) => {
  await assertDrupalHealthy(request, runtime);
});

test('front page headers include html content type @api', async ({ request }) => {
  const response = await request.get('/');
  expect(response.ok()).toBeTruthy();

  const contentType = response.headers()['content-type'] ?? '';
  expect(contentType).toContain('text/html');
});

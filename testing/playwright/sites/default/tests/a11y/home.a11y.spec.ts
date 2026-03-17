import AxeBuilder from '@axe-core/playwright';
import { test, expect } from '../../../../core/fixtures/test-fixture';

test('front page has no critical accessibility violations @a11y', async ({ page }) => {
  await page.goto('/');

  const results = await new AxeBuilder({ page })
    .withTags(['wcag2a', 'wcag2aa'])
    .exclude('#toolbar-administration')
    .analyze();

  const critical = results.violations.filter((v) => v.impact === 'critical');
  expect(critical, JSON.stringify(critical, null, 2)).toEqual([]);
});

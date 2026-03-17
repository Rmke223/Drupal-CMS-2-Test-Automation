import { test, expect } from '../../../../core/fixtures/test-fixture';

test('front page renders core regions @smoke', async ({ page }) => {
  await page.goto('/');

  await expect(page).toHaveTitle(/.+/);
  await expect(page.getByRole('main')).toBeVisible();
});

test('seeded smoke page is reachable @smoke', async ({ page, runtime }) => {
  await page.goto(runtime.site.contentSmokePath);
  await expect(page.getByRole('heading', { name: /E2E Smoke Page/i })).toBeVisible();
});

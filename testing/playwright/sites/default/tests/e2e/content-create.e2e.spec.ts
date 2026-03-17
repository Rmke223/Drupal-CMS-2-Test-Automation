import { test, expect } from '../../../../core/fixtures/test-fixture';
import { loginAsAdmin } from '../../../../core/helpers/drupal';

test('admin can create a basic page @e2e @admin', async ({ page, runtime }) => {
  test.skip(
    !runtime.admin.username || !runtime.admin.password,
    'Set PW_ADMIN_USER and PW_ADMIN_PASS to run authenticated tests.'
  );

  const title = `PW E2E Page ${Date.now()}`;

  await loginAsAdmin(page, runtime);
  await page.goto('/node/add/page');

  await page.getByLabel(/title/i).fill(title);
  await page.locator('[name="body[0][value]"]').fill('Created by Playwright automated test.');
  await page.getByRole('button', { name: /^save$/i }).click();

  await expect(page).toHaveURL(/\/node\/\d+/);
  await expect(page.getByRole('heading', { name: title })).toBeVisible();
});

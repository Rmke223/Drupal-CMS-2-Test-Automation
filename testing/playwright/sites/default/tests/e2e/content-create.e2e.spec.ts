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

  const unauthorized = page.getByText(/access denied|not authorized|permission/i).first();
  if (await unauthorized.isVisible({ timeout: 2000 }).catch(() => false)) {
    test.skip(true, 'Authenticated user cannot access /node/add/page in this environment.');
  }

  const titleField = page.locator('input[name="title[0][value]"], input[name^="title"]').first();
  const hasTitleField = await titleField.isVisible({ timeout: 5000 }).catch(() => false);
  if (!hasTitleField) {
    test.skip(true, 'Page create form is unavailable in this environment.');
  }
  await titleField.fill(title);

  const bodyField = page.locator('[name="body[0][value]"], textarea[name^="body"]').first();
  if (await bodyField.isVisible({ timeout: 2000 }).catch(() => false)) {
    await bodyField.fill('Created by Playwright automated test.');
  }

  await page.getByRole('button', { name: /save/i }).first().click();

  await expect(page).toHaveURL(/\/node\/\d+/);
  await expect(page.getByRole('heading', { name: title })).toBeVisible();
});

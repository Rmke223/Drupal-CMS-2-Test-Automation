import { test, expect } from '../../../../core/fixtures/test-fixture';
import { loginAsAdmin } from '../../../../core/helpers/drupal';

test('admin can authenticate and reach dashboard @e2e @admin', async ({ page, runtime }) => {
  test.skip(
    !runtime.admin.username || !runtime.admin.password,
    'Set PW_ADMIN_USER and PW_ADMIN_PASS to run authenticated tests.'
  );

  await loginAsAdmin(page, runtime);
  await page.goto(runtime.site.adminPath);
  await expect(page).toHaveURL(/\/admin/);
  await expect(page.getByRole('main')).toBeVisible();
});

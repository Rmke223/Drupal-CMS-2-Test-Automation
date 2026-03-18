import type { APIRequestContext, Page } from '@playwright/test';
import { expect } from '@playwright/test';
import type { RuntimeContext } from '../config/types';

export async function assertDrupalHealthy(
  request: APIRequestContext,
  runtime: RuntimeContext
): Promise<void> {
  const healthPaths = ['/', '/user/login', '/robots.txt'];

  for (const healthPath of healthPaths) {
    const response = await request.get(healthPath, {
      failOnStatusCode: false
    });
    expect(
      response.status(),
      `Expected Drupal health path ${healthPath} to be reachable`
    ).toBeLessThan(500);
  }

  const front = await request.get('/', { failOnStatusCode: false });
  expect(front.url()).toContain(new URL(runtime.baseURL).host);
}

export async function loginAsAdmin(page: Page, runtime: RuntimeContext): Promise<void> {
  const { username, password } = runtime.admin;
  if (!username || !password) {
    throw new Error('PW_ADMIN_USER and PW_ADMIN_PASS are required for admin tests.');
  }

  await page.goto(runtime.site.loginPath);
  await page.getByLabel(/username/i).fill(username);
  await page.getByLabel(/password/i).fill(password);
  await page.getByRole('button', { name: /log in/i }).click();

  // Successful login may land on '/', '/user', '/user/<id>', or '/admin'.
  await expect(page).toHaveURL(/\/user\/\d+|\/admin|\/user|\/$/i);

  // Verify authenticated state, not just redirect behavior.
  await page.goto('/user');
  await expect(page).not.toHaveURL(/\/user\/login/i);
}

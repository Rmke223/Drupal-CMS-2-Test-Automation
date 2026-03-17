import type { Page } from '@playwright/test';

export class LoginPage {
  constructor(private readonly page: Page) {}

  async goto(path = '/user/login'): Promise<void> {
    await this.page.goto(path);
  }

  async login(username: string, password: string): Promise<void> {
    await this.page.getByLabel(/username/i).fill(username);
    await this.page.getByLabel(/password/i).fill(password);
    await this.page.getByRole('button', { name: /log in/i }).click();
  }
}

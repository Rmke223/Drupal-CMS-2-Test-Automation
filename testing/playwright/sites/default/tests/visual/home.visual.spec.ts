import { test, expect } from '../../../../core/fixtures/test-fixture';
import { stabilizeForVisuals } from '../../../../core/helpers/visual';

test('front page visual baseline @visual', async ({ page }) => {
  await page.goto('/');
  await stabilizeForVisuals(page);

  await expect(page.getByRole('main')).toHaveScreenshot('home-main.png', {
    caret: 'hide'
  });
});

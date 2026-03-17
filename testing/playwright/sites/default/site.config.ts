import type { SiteConfig } from '../../core/config/types';

export const defaultSiteConfig: SiteConfig = {
  id: 'default',
  name: 'Drupal CMS Default Site',
  description: 'Primary Drupal CMS site in the current repository.',
  testDir: 'testing/playwright/sites/default/tests',
  contentSmokePath: '/e2e-smoke-page',
  adminPath: '/admin',
  loginPath: '/user/login',
  defaultBaseUrl: 'http://my-cms2-site.ddev.site',
  seedCommand: 'node testing/playwright/scripts/seed-site.mjs --site=default'
};

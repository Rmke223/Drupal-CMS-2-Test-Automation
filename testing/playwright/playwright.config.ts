import path from 'node:path';
import { defineConfig, devices } from '@playwright/test';
import { resolveRuntime } from './core/config/runtime';

const runtime = resolveRuntime();
const artifactsRoot = path.join(runtime.repoRoot, 'testing', 'playwright', 'artifacts', runtime.siteId);

export default defineConfig({
  testDir: path.join(runtime.repoRoot, runtime.site.testDir),
  fullyParallel: false,
  forbidOnly: runtime.isCI,
  retries: runtime.isCI ? 2 : 0,
  workers: runtime.isCI ? 2 : undefined,
  timeout: 60_000,
  expect: {
    timeout: 10_000,
    toHaveScreenshot: {
      maxDiffPixelRatio: 0.015,
      animations: 'disabled'
    }
  },
  snapshotPathTemplate: '{testDir}/__snapshots__/{projectName}/{testFilePath}/{arg}{ext}',
  outputDir: path.join(artifactsRoot, 'test-results'),
  reporter: [
    ['list'],
    [
      'html',
      {
        open: 'never',
        outputFolder: path.join(artifactsRoot, 'html-report')
      }
    ]
  ],
  use: {
    baseURL: runtime.baseURL,
    trace: 'retain-on-failure',
    screenshot: 'only-on-failure',
    video: 'retain-on-failure',
    viewport: { width: 1440, height: 900 },
    ignoreHTTPSErrors: true,
    testIdAttribute: 'data-testid'
  },
  globalSetup: './core/global.setup.ts',
  projects: [
    {
      name: 'smoke-chromium',
      grep: /@smoke/,
      use: { ...devices['Desktop Chrome'] }
    },
    {
      name: 'e2e-chromium',
      grep: /@e2e|@admin/,
      use: { ...devices['Desktop Chrome'] }
    },
    {
      name: 'api-chromium',
      grep: /@api/,
      use: { ...devices['Desktop Chrome'] }
    },
    {
      name: 'a11y-chromium',
      grep: /@a11y/,
      use: { ...devices['Desktop Chrome'] }
    },
    {
      name: 'visual-chromium',
      grep: /@visual/,
      workers: 1,
      use: { ...devices['Desktop Chrome'] }
    }
  ],
  webServer: runtime.skipWebServer
    ? undefined
    : {
        command: runtime.startCommand,
        url: runtime.baseURL,
        timeout: runtime.readyTimeoutMs,
        reuseExistingServer: !runtime.isCI
      }
});

import path from 'node:path';
import { fileURLToPath } from 'node:url';
import dotenv from 'dotenv';
import { getSiteConfig } from './site-registry';
import type { RuntimeContext } from './types';
import { runCommand } from '../helpers/process';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const repoRoot = path.resolve(__dirname, '../../../..');
dotenv.config({ path: path.join(repoRoot, '.env.playwright') });

type DdevDescribe = {
  raw?: {
    httpurl?: string;
    primary_url?: string;
    urls?: string[];
  };
};

function resolveDdevUrl(): string | undefined {
  try {
    const output = runCommand('ddev describe -j');
    const parsed = JSON.parse(output) as DdevDescribe;
    return parsed.raw?.httpurl ?? parsed.raw?.primary_url ?? parsed.raw?.urls?.[0];
  } catch {
    return undefined;
  }
}

function envFlag(name: string, defaultValue: boolean): boolean {
  const value = process.env[name];
  if (value === undefined) {
    return defaultValue;
  }
  return ['1', 'true', 'yes', 'on'].includes(value.toLowerCase());
}

export function resolveRuntime(): RuntimeContext {
  const siteId = process.env.PW_SITE ?? 'default';
  const site = getSiteConfig(siteId);
  const baseURL =
    process.env.PW_BASE_URL ??
    process.env.PLAYWRIGHT_BASE_URL ??
    site.defaultBaseUrl ??
    resolveDdevUrl() ??
    'http://127.0.0.1:8080';

  return {
    repoRoot,
    site,
    siteId,
    baseURL,
    isCI: envFlag('CI', false),
    runSeed: envFlag('PW_RUN_SEED', false),
    skipWebServer: envFlag('PW_SKIP_WEB_SERVER', true),
    skipReadyCheck: envFlag('PW_SKIP_READY_CHECK', false),
    readyTimeoutMs: Number.parseInt(process.env.PW_READY_TIMEOUT_MS ?? '120000', 10),
    startCommand: process.env.PW_DRUPAL_START_CMD ?? 'ddev start',
    admin: {
      username: process.env.PW_ADMIN_USER,
      password: process.env.PW_ADMIN_PASS
    }
  };
}

import { execSync } from 'node:child_process';
import { resolveRuntime } from './config/runtime';
import { waitForBaseUrlReady } from './helpers/readiness';

async function globalSetup(): Promise<void> {
  const runtime = resolveRuntime();
  if (!runtime.skipReadyCheck) {
    await waitForBaseUrlReady(runtime.baseURL, runtime.readyTimeoutMs);
  }

  if (runtime.runSeed && runtime.site.seedCommand) {
    execSync(runtime.site.seedCommand, {
      cwd: runtime.repoRoot,
      stdio: 'inherit'
    });
  }
}

export default globalSetup;

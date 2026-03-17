export async function waitForBaseUrlReady(baseURL: string, timeoutMs: number): Promise<void> {
  const startedAt = Date.now();
  const deadline = startedAt + timeoutMs;

  while (Date.now() < deadline) {
    try {
      const response = await fetch(baseURL, { redirect: 'manual' });
      if (response.status >= 200 && response.status < 500) {
        return;
      }
    } catch {
      // Keep polling until timeout.
    }

    await new Promise((resolve) => setTimeout(resolve, 2000));
  }

  const waited = Date.now() - startedAt;
  throw new Error(`Base URL ${baseURL} was not ready within ${waited}ms.`);
}

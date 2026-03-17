#!/usr/bin/env node

import process from 'node:process';

const timeoutMs = Number.parseInt(process.env.PW_READY_TIMEOUT_MS ?? '120000', 10);
const baseURL = process.env.PW_BASE_URL;

if (!baseURL) {
  console.error('PW_BASE_URL is required for ensure-site-ready script.');
  process.exit(1);
}

const startedAt = Date.now();
const deadline = startedAt + timeoutMs;

while (Date.now() < deadline) {
  try {
    const response = await fetch(baseURL, { redirect: 'manual' });
    if (response.status >= 200 && response.status < 500) {
      console.log(`Site is ready: ${baseURL} (${response.status})`);
      process.exit(0);
    }
  } catch {
    // Continue polling.
  }

  await new Promise((resolve) => setTimeout(resolve, 2000));
}

console.error(`Timed out waiting for ${baseURL} after ${Date.now() - startedAt}ms`);
process.exit(1);

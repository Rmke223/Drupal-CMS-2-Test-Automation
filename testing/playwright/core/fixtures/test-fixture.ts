import { test as base } from '@playwright/test';
import { resolveRuntime } from '../config/runtime';
import type { RuntimeContext } from '../config/types';

type Fixtures = {
  runtime: RuntimeContext;
};

export const test = base.extend<Fixtures>({
  runtime: async ({}, use) => {
    await use(resolveRuntime());
  }
});

export { expect } from '@playwright/test';

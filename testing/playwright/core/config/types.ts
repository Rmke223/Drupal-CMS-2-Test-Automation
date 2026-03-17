export type AdminCredentials = {
  username?: string;
  password?: string;
};

export type SiteConfig = {
  id: string;
  name: string;
  description: string;
  testDir: string;
  contentSmokePath: string;
  adminPath: string;
  loginPath: string;
  defaultBaseUrl?: string;
  seedCommand?: string;
};

export type RuntimeContext = {
  repoRoot: string;
  site: SiteConfig;
  siteId: string;
  baseURL: string;
  isCI: boolean;
  runSeed: boolean;
  skipWebServer: boolean;
  skipReadyCheck: boolean;
  readyTimeoutMs: number;
  startCommand: string;
  admin: AdminCredentials;
};

import type { SiteConfig } from './types';
import { defaultSiteConfig } from '../../sites/default/site.config';

export const siteRegistry: Record<string, SiteConfig> = {
  [defaultSiteConfig.id]: defaultSiteConfig
};

export function getSiteConfig(siteId: string): SiteConfig {
  const site = siteRegistry[siteId];
  if (!site) {
    throw new Error(
      `Unknown PW_SITE \"${siteId}\". Registered sites: ${Object.keys(siteRegistry).join(', ')}`
    );
  }
  return site;
}

# Site Seed Strategy

Current site seeding is implemented by `testing/playwright/scripts/seed-site.mjs`.

Keep seed logic idempotent and deterministic.
When the repository evolves into a monorepo, each site can register its own seed command in `site.config.ts`.

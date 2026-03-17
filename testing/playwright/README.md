# Playwright Test Automation Architecture

This document describes the production-ready test automation platform implemented for this Drupal CMS repository.

## 1. Objectives

The architecture is designed to:
- work immediately for the current single-site repository
- scale to a future multi-site monorepo without redesign
- support deterministic local, CI, and Codespaces execution
- provide layered coverage instead of only a flat E2E suite

## 2. Design Principles

- Platform-first: shared core logic is separate from site-specific tests.
- Determinism: seed + readiness checks reduce flaky startup behavior.
- Layered quality gates: smoke/api/e2e/a11y/visual serve different risk classes.
- CI diagnostics by default: traces, screenshots, videos, HTML report.
- Explicit site selection: `PW_SITE` drives site configuration and test targeting.

## 3. High-Level Architecture

- `testing/playwright/core`: shared runtime, setup, fixtures, helpers, page objects.
- `testing/playwright/sites/<site-id>`: site plugin boundary.
- `testing/playwright/playwright.config.ts`: centralized Playwright orchestration.
- `.github/workflows`: CI pipelines for normal runs and visual baseline updates.

## 4. Folder Structure

```text
testing/playwright/
  core/
    config/
      runtime.ts
      site-registry.ts
      types.ts
    fixtures/
      test-fixture.ts
    helpers/
      drupal.ts
      process.ts
      readiness.ts
      visual.ts
    page-objects/
      login.page.ts
    global.setup.ts
  scripts/
    ensure-site-ready.mjs
    seed-site.mjs
  sites/
    default/
      site.config.ts
      fixtures/
      seed/
      tests/
        smoke/
        api/
        e2e/
        a11y/
        visual/
  playwright.config.ts
```

## 5. Runtime and Site Resolution

Runtime values are resolved in this order:
1. environment variables (`PW_BASE_URL`, `PW_SITE`, etc.)
2. site defaults from `sites/<site-id>/site.config.ts`
3. DDEV discovery (`ddev describe -j`) where available
4. static fallback URL as last resort

Site selection:
- `PW_SITE=default` selects `sites/default/site.config.ts`.
- Registered sites are managed in `core/config/site-registry.ts`.

## 6. Test Layers and Purpose

### Smoke (`@smoke`)
Goal: fast confidence that the site is up and critical public routes render.

### API/Network (`@api`)
Goal: verify public HTTP surface and response health without browser overhead.

### E2E + Admin (`@e2e`, `@admin`)
Goal: validate user-critical and admin-critical workflows (auth + content creation).

### Accessibility (`@a11y`)
Goal: pragmatic axe checks with critical WCAG impact gating.

### Visual (`@visual`)
Goal: stable baseline snapshots of controlled UI regions.

## 7. Drupal-Specific Strategy

### Authentication and admin flows
- Admin tests use `PW_ADMIN_USER` and `PW_ADMIN_PASS`.
- If credentials are absent, admin-only tests skip intentionally.

### Data and state management
- `seed-site.mjs` creates/normalizes deterministic test content.
- Seed is idempotent and safe to run repeatedly.
- Seed enforces published visibility and deterministic alias mapping for smoke routes.

### Selector strategy
- Prefer role/label/text selectors over brittle CSS path selectors.
- Use `data-testid` for custom markup where practical.

## 8. Visual Regression Approach

- Snapshot scope is intentionally narrow (stable content regions, e.g. `<main>`).
- `stabilizeForVisuals()` disables animation/transition-induced drift.
- Dedicated manual workflow updates baselines to avoid accidental drift in PR CI.

Baseline update:
```bash
npm run test:pw:visual:update
```

## 9. Accessibility Approach

- Uses `@axe-core/playwright` with WCAG A/AA tags.
- Fails on critical violations.
- Excludes known volatile admin chrome where appropriate.

## 10. Playwright Configuration Model

`playwright.config.ts` configures:
- project-level separation by layer
- retries in CI only
- controlled worker count for stability
- trace/video/screenshot capture on failures
- artifact output under `testing/playwright/artifacts/<site-id>`

## 11. CI Workflows

### `.github/workflows/playwright.yml`
- triggers on PR, push (`main`/`master`), and manual dispatch
- installs Node + Playwright browser + DDEV
- starts DDEV and installs PHP dependencies
- installs Drupal if missing (`drush site:install` fallback)
- resolves `PW_BASE_URL` from DDEV
- runs full Playwright suite
- uploads HTML report and failure artifacts

### `.github/workflows/playwright-visual-update.yml`
- manual-only visual baseline update pipeline
- bootstraps Drupal similarly
- runs visual project with `--update-snapshots`
- uploads snapshot artifact for review/approval

## 12. Environment Portability

### Local
- Uses DDEV + local env file.
- Optional skip flags exist for constrained host environments.

### GitHub Actions
- Installs all dependencies from scratch.
- Includes bootstrap logic for fresh DB/site states.

### Codespaces
- `.devcontainer/devcontainer.json` installs Node tooling and Playwright browser.
- Supports Docker-outside-of-Docker feature.

## 13. Commands (Developer UX)

```bash
npm run test:pw              # full suite
npm run test:pw:smoke        # smoke layer
npm run test:pw:api          # api checks
npm run test:pw:e2e          # e2e/admin flows
npm run test:pw:a11y         # accessibility checks
npm run test:pw:visual       # visual regression
npm run test:pw:visual:update
npm run test:pw:ui
npm run test:pw:headed
npm run test:pw:debug
npm run test:pw:list
npm run test:pw:seed
```

Examples:
```bash
PW_SITE=default npm run test:pw
npm run test:pw -- testing/playwright/sites/default/tests/smoke/home.smoke.spec.ts
```

## 14. Reports and Debugging

Artifacts include:
- HTML report
- traces
- videos
- screenshots

Local output path:
- `testing/playwright/artifacts/<site-id>/...`

Open trace:
```bash
npx playwright show-trace <trace.zip>
```

## 15. Adding a New Site (Future Monorepo)

1. Add `testing/playwright/sites/<new-site>/site.config.ts`.
2. Add tests under `testing/playwright/sites/<new-site>/tests`.
3. Register it in `core/config/site-registry.ts`.
4. Add it to CI matrix in `playwright.yml`.
5. Run using `PW_SITE=<new-site>`.

No core redesign is required; only site registration and test additions.

## 16. Tradeoffs and Guardrails

- E2E scope is intentionally focused on high-value user/admin paths.
- CI retries are enabled but bounded to avoid masking systemic failures.
- Visual testing is conservative by design to maintain long-term signal quality.
- Readiness/bootstrap flags remain configurable for edge environments.

## 17. Required Repository Secrets

Recommended for CI admin-path coverage:
- `PW_ADMIN_USER`
- `PW_ADMIN_PASS`

If absent, admin tests skip where coded to do so.

## 18. Quick Start

```bash
cp .env.playwright.example .env.playwright
ddev start
npm install
npx playwright install --with-deps chromium
npm run test:pw:smoke
npm run test:pw
```

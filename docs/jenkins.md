# Jenkins VM Setup for Drupal + Playwright CI

This guide sets up a VM-based Jenkins deployment to run the repository's Playwright test automation.

## 1. Target Architecture

Use two VMs:
- Jenkins controller VM: hosts Jenkins UI and orchestration only.
- Jenkins agent VM (`drupal-e2e`): runs Docker/DDEV/Playwright workloads.

Minimum sizing:
- Controller: 2 vCPU, 4 GB RAM, 60 GB disk.
- Agent: 4 vCPU, 8-16 GB RAM, 100+ GB disk.

## 2. Controller Setup (Ubuntu 24.04)

1. Install Java and Jenkins LTS.
2. Expose Jenkins behind TLS (Nginx/Caddy recommended).
3. Enable authentication and least-privilege RBAC.
4. Install plugins:
   - Pipeline
   - Git
   - Credentials Binding
   - Docker Pipeline
   - AnsiColor
   - Timestamper

## 3. Agent Setup (Ubuntu 24.04)

Run bootstrap on the agent VM:

```bash
./jenkins/agent-bootstrap.sh
```

This installs/configures:
- Docker Engine + Compose
- Node.js 22
- DDEV
- base utilities (`git`, `jq`, `curl`, `unzip`)

After script completion:
- re-login or restart agent service so docker group membership is active.

## 4. Jenkins Agent Registration

Register the VM as a Jenkins agent and set label:

```text
drupal-e2e
```

Use SSH or inbound agent mode based on your Jenkins standard.

## 5. Repository Pipeline

This repo includes a root `Jenkinsfile`.

Pipeline behavior:
1. Validates toolchain (`node`, `npm`, `docker`, `ddev`)
2. Installs Node dependencies
3. Installs Playwright Chromium
4. Starts DDEV services
5. Installs PHP dependencies
6. Installs Drupal site if missing
7. Resolves base URL from DDEV
8. Lists tests
9. Runs Playwright suite
10. Archives test artifacts

## 6. Required Jenkins Credentials

Create Jenkins credential:
- Type: `Username with password`
- ID: `drupal-admin-creds`
- Value: Drupal admin username/password for test auth flows

The pipeline binds this as:
- `PW_ADMIN_USER`
- `PW_ADMIN_PASS`

## 7. Job Configuration

Create a Pipeline job:
- Definition: `Pipeline script from SCM`
- SCM: Git
- Branch: `main`
- Script Path: `Jenkinsfile`

Recommended triggers:
- GitHub webhook (push events)
- Optional nightly schedule for regression coverage

## 8. Runtime Parameters

Pipeline parameters:
- `PW_SITE` (default `default`)
- `RUN_VISUAL` (default `false`)
- `RUN_SEED` (default `true`)

Default path excludes visual snapshot gating from regular builds.

## 9. Artifacts and Debugging

Archived artifacts:
- `testing/playwright/artifacts/**/*`

Includes:
- Playwright HTML report
- traces
- screenshots/videos for failures

When builds fail, the pipeline prints:
- DDEV status
- Drush status

## 10. First Run Checklist

1. Agent online with `drupal-e2e` label.
2. `drupal-admin-creds` credential exists.
3. Jenkins job points at `main` and root `Jenkinsfile`.
4. Run build with defaults.
5. Confirm artifacts are archived.

## 11. Scaling Later

When repository becomes a monorepo:
1. Add new site configs under `testing/playwright/sites/<site-id>`.
2. Trigger parallel Jenkins builds by `PW_SITE` value.
3. Add additional agents for throughput.

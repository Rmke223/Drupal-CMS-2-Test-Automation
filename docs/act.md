# Local GitHub Actions with `act`

This repo supports local execution of `.github/workflows/playwright.yml` using `act`.

## Prerequisites

1. Docker running locally.
2. `act` installed (`act --version`).
3. Repo root has:
   - `.actrc` (already included)
   - `.secrets.act` (copy from example)

## Setup

```bash
cp .secrets.act.example .secrets.act
```

Set real values in `.secrets.act` if you want authenticated admin tests.
For this workflow, set `PW_BASE_URL` to a host-running Drupal URL reachable from `act` container.
With DDEV on macOS/OrbStack, `http://host.docker.internal:<ddev-http-port>` is the reliable option.

## Commands

List available jobs:

```bash
npm run ci:act:list
```

Dry-run workflow planning (no execution):

```bash
npm run ci:act:dry
```

Run Playwright workflow job locally:

```bash
npm run ci:act:playwright
```

These scripts set `XDG_CACHE_HOME=.cache` so `act` cache stays inside the repo.

## Apple Silicon note

`.actrc` is configured to run with:

- `--container-architecture linux/amd64`
- `ubuntu-latest=ghcr.io/catthehacker/ubuntu:act-latest`

This improves compatibility with GitHub-hosted runner behavior.

## Common issues

### Docker not ready

If `act` fails before steps run, ensure Docker daemon is active.

### DDEV root-privilege error inside act

`act` jobs run as root in the runner container, and DDEV rejects root usage.
This workflow now skips DDEV bootstrap when `ACT=true`, expects `PW_BASE_URL` in `.secrets.act`,
and disables seed + artifact upload actions that depend on GitHub runtime services.

Typical local flow:

```bash
ddev start
ddev describe
# copy the HTTP host URL/port and set PW_BASE_URL in .secrets.act
npm run ci:act:playwright
```

### Secrets file missing

`ci:act:playwright` requires `.secrets.act`.

### Slow first run

The first run pulls the `act` runner image; later runs are faster.

### `listen tcp :0: bind: operation not permitted`

This usually appears in restricted/sandboxed shells that block local port binding.
Run `act` in your normal local terminal session where Docker networking is allowed.

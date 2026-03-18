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

### Secrets file missing

`ci:act:playwright` requires `.secrets.act`.

### Slow first run

The first run pulls the `act` runner image; later runs are faster.

### `listen tcp :0: bind: operation not permitted`

This usually appears in restricted/sandboxed shells that block local port binding.
Run `act` in your normal local terminal session where Docker networking is allowed.

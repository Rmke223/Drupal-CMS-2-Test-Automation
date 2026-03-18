#!/usr/bin/env bash
set -euo pipefail

# Bootstrap script for a Ubuntu 24.04 Jenkins agent VM used for Drupal + Playwright tests.
# Run as a sudo-capable user once per agent VM.

sudo apt-get update
sudo apt-get install -y \
  ca-certificates \
  curl \
  gnupg \
  lsb-release \
  git \
  jq \
  unzip

# Docker
if ! command -v docker >/dev/null 2>&1; then
  sudo install -m 0755 -d /etc/apt/keyrings
  curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg
  sudo chmod a+r /etc/apt/keyrings/docker.gpg
  echo \
    "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/ubuntu \
    $(. /etc/os-release && echo \"$VERSION_CODENAME\") stable" | \
    sudo tee /etc/apt/sources.list.d/docker.list >/dev/null
  sudo apt-get update
  sudo apt-get install -y docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin
fi

# Node.js 22
if ! command -v node >/dev/null 2>&1; then
  curl -fsSL https://deb.nodesource.com/setup_22.x | sudo -E bash -
  sudo apt-get install -y nodejs
fi

# DDEV
if ! command -v ddev >/dev/null 2>&1; then
  sudo install -m 0755 -d /etc/apt/keyrings
  curl -fsSL https://pkg.ddev.com/apt/gpg.key | gpg --dearmor | sudo tee /etc/apt/keyrings/ddev.gpg >/dev/null
  sudo chmod a+r /etc/apt/keyrings/ddev.gpg
  echo "deb [signed-by=/etc/apt/keyrings/ddev.gpg] https://pkg.ddev.com/apt/ * *" | sudo tee /etc/apt/sources.list.d/ddev.list >/dev/null
  sudo apt-get update
  sudo apt-get install -y ddev
fi

# Add current user and Jenkins user (if present) to docker group.
sudo usermod -aG docker "$USER" || true
if id jenkins >/dev/null 2>&1; then
  sudo usermod -aG docker jenkins || true
fi

# Smoke checks
node -v
npm -v
docker version
ddev version

echo "Agent bootstrap complete. Re-login may be required for docker group membership."

import { execSync } from 'node:child_process';

export function runCommand(command: string): string {
  return execSync(command, {
    stdio: ['ignore', 'pipe', 'pipe'],
    encoding: 'utf8'
  }).trim();
}

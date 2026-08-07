#!/usr/bin/env bash
set -euo pipefail

cd "$(dirname "$0")/.."

while IFS= read -r -d '' file; do
  php -l "$file"
done < <(find . -name '*.php' -not -path './vendor/*' -print0)

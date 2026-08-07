#!/usr/bin/env bash
set -euo pipefail

ROOT="$(cd "$(dirname "$0")/.." && pwd)"
SOURCE="${1:-/Users/dky/Downloads/mark-medicare}"
OUTPUT="${2:-/private/tmp/mark-medicare-php-test}"

php "$ROOT/scripts/convert-bootstrapmade-export.php" \
  --source="$SOURCE" \
  --output="$OUTPUT" \
  --force

while IFS= read -r -d '' file; do
  php -l "$file" >/dev/null
done < <(find "$OUTPUT" -name '*.php' -print0)

page_count=0
while IFS= read -r -d '' page; do
  php -d display_errors=1 -r '
    $path = $argv[1];
    chdir(dirname($path));
    ob_start();
    include basename($path);
    $html = ob_get_clean();

    $required = [
      "<!DOCTYPE html>" => 1,
      "<header id=\"header\"" => 1,
      "<nav id=\"navmenu\"" => 1,
      "<main class=\"main\"" => 1,
      "<footer id=\"footer\"" => 1,
      "</body>" => 1,
      "</html>" => 1,
    ];

    foreach ($required as $needle => $expected) {
      $actual = substr_count($html, $needle);
      if ($actual !== $expected) {
        fwrite(STDERR, basename($path) . ": expected {$expected} occurrence(s) of {$needle}; found {$actual}.\n");
        exit(1);
      }
    }

    if (preg_match("~href=[\"\x27][^\"\x27]*\\.html(?:[?#][^\"\x27]*)?[\"\x27]~i", $html) === 1) {
      fwrite(STDERR, basename($path) . ": rendered output still contains an internal .html link.\n");
      exit(1);
    }

    $decoded = html_entity_decode($html, ENT_QUOTES | ENT_HTML5, "UTF-8");
    preg_match_all(
      "~(?:src|href)=[\"\x27](assets/[^\"\x27]+)|url\\([\"\x27]?(assets/[^)\"\x27]+)~i",
      $decoded,
      $assetMatches,
      PREG_SET_ORDER
    );
    $missing = [];
    foreach ($assetMatches as $match) {
      $asset = $match[1] !== "" ? $match[1] : ($match[2] ?? "");
      $asset = preg_split("~[?#]~", $asset, 2)[0];
      if ($asset !== "" && !is_file(dirname($path) . "/" . $asset)) {
        $missing[$asset] = true;
      }
    }
    if ($missing !== []) {
      foreach (array_keys($missing) as $asset) {
        fwrite(STDERR, basename($path) . ": missing local asset {$asset}.\n");
      }
      exit(1);
    }
  ' "$page"
  page_count=$((page_count + 1))
done < <(find "$OUTPUT" -maxdepth 1 -name '*.php' -print0)

if [[ "$page_count" -eq 0 ]]; then
  echo "No generated root PHP pages found." >&2
  exit 1
fi

printf 'PASS: converted, linted, rendered, and asset-checked %d PHP pages in %s\n' "$page_count" "$OUTPUT"

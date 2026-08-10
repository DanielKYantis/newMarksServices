#!/usr/bin/env bash
set -euo pipefail

ROOT="$(cd "$(dirname "$0")/.." && pwd)"
SOURCE="${1:-/Users/dky/Downloads/mark-medicare}"
OUTPUT="${2:-/private/tmp/mark-medicare-php-test}"

php "$ROOT/scripts/convert-bootstrapmade-export.php" \
  --source="$SOURCE" \
  --output="$OUTPUT" \
  --assets-from="$ROOT/assets" \
  --force

if [[ -f "$ROOT/includes/config.php" ]] && ! cmp -s "$ROOT/includes/config.php" "$OUTPUT/includes/config.php"; then
  echo "Generated config does not exactly match the repository config." >&2
  exit 1
fi
if [[ -f "$ROOT/includes/pages.php" ]] && ! cmp -s "$ROOT/includes/pages.php" "$OUTPUT/includes/pages.php"; then
  echo "Generated page registry does not exactly match the repository page registry." >&2
  exit 1
fi
if [[ -f "$ROOT/includes/services.php" ]] && ! cmp -s "$ROOT/includes/services.php" "$OUTPUT/includes/services.php"; then
  echo "Generated service registry does not exactly match the repository service registry." >&2
  exit 1
fi

php -r '
  $config = require $argv[1];
  $services = $config["services"] ?? [];
  if (count($services) !== 15) {
      fwrite(STDERR, "Expected 15 service records; found " . count($services) . ".\n");
      exit(1);
  }
  foreach ($services as $slug => $service) {
      if (($service["slug"] ?? null) !== $slug) {
          fwrite(STDERR, "Service key and slug differ for {$slug}.\n");
          exit(1);
      }
      if (($service["tasks"] ?? []) === []) {
          fwrite(STDERR, "Service {$slug} has no approved task list.\n");
          exit(1);
      }
      foreach (($service["related"] ?? []) as $related) {
          if (!isset($services[$related])) {
              fwrite(STDERR, "Service {$slug} references missing related service {$related}.\n");
              exit(1);
          }
      }
  }
  foreach (($config["categories"] ?? []) as $category => $data) {
      foreach (($data["services"] ?? []) as $slug) {
          if (!isset($services[$slug])) {
              fwrite(STDERR, "Category {$category} references missing service {$slug}.\n");
              exit(1);
          }
      }
  }
' "$ROOT/includes/services.php"

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

    $registry = require dirname($path) . "/includes/pages.php";
    $pageKey = basename($path);
    $pageConfig = $registry[$pageKey] ?? null;
    if (!is_array($pageConfig)) {
      fwrite(STDERR, "{$pageKey}: missing from includes/pages.php.\n");
      exit(1);
    }
    $expectedTitle = "<title>" . htmlspecialchars($pageConfig["title"], ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") . "</title>";
    if (!str_contains($html, $expectedTitle)) {
      fwrite(STDERR, "{$pageKey}: rendered title does not match includes/pages.php.\n");
      exit(1);
    }
    if (substr_count($html, "<script type=\"application/ld+json\">") > 1) {
      fwrite(STDERR, "{$pageKey}: rendered more than one structured-data block.\n");
      exit(1);
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

if find "$OUTPUT" -iname 'Readme.txt' -print -quit | grep -q .; then
  echo "Readme.txt must not be present in converted output." >&2
  exit 1
fi

printf 'PASS: converted, linted, rendered, and asset-checked %d PHP pages in %s\n' "$page_count" "$OUTPUT"

# BootstrapMade HTML-to-PHP conversion

This converter turns a fresh BootstrapMade Builder export into a PHP site with shared includes while preserving the exported assets, SCSS, JavaScript, forms, and other non-HTML files.

It generates:

- one `.php` file for every root-level `.html` page;
- `includes/config.php` copied unchanged from the repository when present, or created once from safe project defaults when absent;
- `includes/pages.php` as the authoritative page metadata registry;
- `includes/header.php` for the document head and shared header;
- `includes/nav.php` for shared navigation and automatic active-page styling;
- `includes/footer.php` for the shared footer and scripts.

Page titles, descriptions, keywords, body classes, and BootstrapMade custom head/body code remain page-specific. Links ending in `.html` are changed to `.php`.

## Run it

Always write to a different directory from the Builder export:

```bash
php scripts/convert-bootstrapmade-export.php \
  --source=/Users/dky/Downloads/mark-medicare \
  --output=/private/tmp/mark-medicare-php \
  --assets-from=/Users/dky/Projects/newMarksServices/assets
```

Use another page as the shared layout when needed:

```bash
php scripts/convert-bootstrapmade-export.php \
  --source=/path/to/export \
  --output=/path/to/php-site \
  --layout=about.html
```

To regenerate a directory previously created by this converter:

```bash
php scripts/convert-bootstrapmade-export.php \
  --source=/path/to/export \
  --output=/path/to/php-site \
  --force
```

`--force` only removes directories containing the converter's marker file. It refuses to replace an unrelated directory.

`--assets-from` copies the repository's existing asset library into the generated site before applying the Builder export. Exported assets update matching files, while assets omitted by the Builder remain available.

The repository's manually maintained `includes/config.php` is authoritative. The converter copies it unchanged and never derives or overwrites it from Builder HTML. If the repository config is absent, the converter creates a default config based on the approved Mark's Services business constants so it can be reviewed and added manually.

The repository's manually maintained `includes/pages.php` is also authoritative. Generated page files contain only their `$pageKey`, the converted `<main>` element, and shared include calls. When `includes/pages.php` is absent, the converter creates an initial registry from Builder titles, descriptions, keywords, body classes, and filenames; later conversions preserve the repository registry unchanged.

BootstrapMade's `Readme.txt` is always omitted from converted output. Its export metadata is printed as a suggested commit note instead.

## Recommended workflow

1. Make major visual and SCSS changes in BootstrapMade Builder.
2. Export the project to a new source directory.
3. Run the converter into a disposable output directory.
4. Review warnings for header/footer differences.
5. Copy or merge the generated PHP pages, assets, and includes into the repository.
6. Run `scripts/lint-php.sh` and review the site locally with `scripts/serve-local.sh`.

The converter never modifies the source export and intentionally refuses in-place conversion.

## Run the automated smoke test

The smoke test regenerates a disposable output, lints every PHP file, renders every root page, verifies one shared header/nav/main/footer document structure, rejects remaining internal `.html` links, and reports referenced local assets missing from the Builder export:

```bash
./scripts/test-bootstrapmade-conversion.sh
```

Optional source and output arguments:

```bash
./scripts/test-bootstrapmade-conversion.sh /path/to/export /private/tmp/php-test
```

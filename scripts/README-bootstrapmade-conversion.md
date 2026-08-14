# BootstrapMade HTML-to-PHP conversion

This converter turns a fresh BootstrapMade Builder export into a PHP site with shared includes while preserving the exported assets, SCSS, JavaScript, forms, and other non-HTML files.

It generates:

- SEO-named `.php` files for supported root-level `.html` pages;
- `includes/config.php` copied unchanged from the repository when present, or created once from safe project defaults when absent;
- `includes/pages.php` as the authoritative page metadata registry;
- the repository's shared `header.php`, `nav.php`, and `footer.php`, so Builder exports cannot restore stale template menus or metadata;
- four distinct service-area routes, including the three supplemental area wrappers that do not exist in the original export.

The converter maps old Builder filenames to the current SEO routes, updates internal `.html` links, replaces known stock-image references, and normalizes old template selector names. Obsolete category/detail and starter pages are skipped.

Current route migrations include `appointment.html` to `request-a-visit.php`, `doctors.html` to `service-planning.php`, `testimonials.html` to `how-we-work.php`, `gallery.html` to `service-gallery.php`, `faq.html` to `home-repair-faq.php`, and the service-area/service-detail routes.

## Run it

Always write to a different directory from the Builder export:

```bash
php scripts/convert-bootstrapmade-export.php \
  --source=/path/to/marks-services-export \
  --output=/private/tmp/marks-services-php \
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

The repository's manually maintained `includes/pages.php` is also authoritative. It owns titles, descriptions, canonical page identities, social preview images, robots rules, service schema, and FAQ data. Generated page files contain only their `$pageKey`, the converted `<main>` element, and shared include calls. When `includes/pages.php` is absent, the converter creates an initial registry from Builder titles, descriptions, body classes, and migrated filenames; later conversions preserve the repository registry unchanged.

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

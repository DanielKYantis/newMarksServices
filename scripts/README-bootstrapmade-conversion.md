# BootstrapMade HTML-to-PHP conversion

This converter turns a fresh BootstrapMade Builder export into a PHP site with shared includes while preserving the exported assets, SCSS, JavaScript, forms, and other non-HTML files.

It generates:

- one `.php` file for every root-level `.html` page;
- `includes/config.php` for shared site data and helpers;
- `includes/header.php` for the document head and shared header;
- `includes/nav.php` for shared navigation and automatic active-page styling;
- `includes/footer.php` for the shared footer and scripts.

Page titles, descriptions, keywords, body classes, and BootstrapMade custom head/body code remain page-specific. Links ending in `.html` are changed to `.php`.

## Run it

Always write to a different directory from the Builder export:

```bash
php scripts/convert-bootstrapmade-export.php \
  --source=/Users/dky/Downloads/mark-medicare \
  --output=/private/tmp/mark-medicare-php
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

## Recommended workflow

1. Make major visual and SCSS changes in BootstrapMade Builder.
2. Export the project to a new source directory.
3. Run the converter into a disposable output directory.
4. Review warnings for header/footer differences.
5. Copy or merge the generated PHP pages, assets, and includes into the repository.
6. Run `scripts/lint-php.sh` and review the site locally with `scripts/serve-local.sh`.

The converter never modifies the source export and intentionally refuses in-place conversion.

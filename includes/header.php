<?php

declare(strict_types=1);
require_once __DIR__ . '/config.php';

$pages = require __DIR__ . '/pages.php';
$pageKey = $pageKey ?? 'index.php';
$page = $pages[$pageKey] ?? $pages['index.php'] ?? [
    'title' => SITE_NAME,
    'description' => '',
    'keywords' => '',
    'body_class' => '',
    'label' => SITE_NAME,
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?= e($page['title']) ?></title>
  <meta name="description" content="<?= e($page['description']) ?>">
  <meta name="keywords" content="<?= e($page['keywords']) ?>">
  <link rel="canonical" href="<?= e(page_url($pageKey)) ?>">
  <meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
  <meta property="og:title" content="<?= e($page['title']) ?>">
  <meta property="og:description" content="<?= e($page['description']) ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= e(page_url($pageKey)) ?>">
  <meta name="twitter:card" content="summary_large_image">
  <?php if (function_exists('structured_data_for_page')): ?>
  <script type="application/ld+json">
<?= json_encode(structured_data_for_page($pageKey, $page), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>
  </script>
  <?php endif; ?>
<!-- Favicons -->
  <link href="assets/img/uploads/favicon-32x32-clarity.png" rel="icon">
  <link href="assets/img/uploads/apple-touch-icon-180x180-2.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="<?= e($page['body_class']) ?>">

<header id="header" class="header d-flex align-items-center position-relative" style="">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- <img src="assets/img/uploads/logo_enhanced.png" alt=""> -->
        <i class="bi bi-house-gear"></i>
        <h1 class="sitename">Mark's Services</h1>
      </a>
<?php require __DIR__ . '/nav.php'; ?>
<a class="btn-getstarted" href="contact.php">Contact</a>

    </div>
  </header>

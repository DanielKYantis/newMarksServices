<?php
declare(strict_types=1);

$navServiceRegistry = require __DIR__ . '/services.php';
$navMajorServiceGroups = $navServiceRegistry['major_groups'] ?? [];
$serviceAreaPages = [
    'service-areas.php', 'sun-city-texas-home-repair.php', 'berry-creek-texas-home-repair.php',
    'georgetown-texas-home-repair.php', 'williamson-county-home-repair.php',
];
?>
<nav id="navmenu" class="navmenu" aria-label="Primary navigation">
  <ul>
    <li><a href="index.php" class="<?= is_active($pageKey, 'index.php') ?>">Home Page</a></li>
    <li><a href="about.php" class="<?= is_active($pageKey, 'about.php') ?>">About Us</a></li>
    <li class="dropdown">
      <a href="service-areas.php" class="<?= is_active($pageKey, $serviceAreaPages) ?>">
        <span>Service Areas</span> <i class="bi bi-chevron-down toggle-dropdown" aria-hidden="true"></i>
      </a>
      <ul aria-label="Service areas">
        <li><a href="sun-city-texas-home-repair.php">Sun City Texas 78633</a></li>
        <li><a href="berry-creek-texas-home-repair.php">Berry Creek, Texas 78628</a></li>
        <li><a href="georgetown-texas-home-repair.php">Georgetown, Texas 78626</a></li>
        <li><a href="williamson-county-home-repair.php">Williamson County 78627</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="services.php" class="<?= is_active($pageKey, ['services.php', 'plumbing-fixture-repair.php']) ?>">
        <span>Our Services</span> <i class="bi bi-chevron-down toggle-dropdown" aria-hidden="true"></i>
      </a>
      <ul aria-label="Major service groups">
        <?php foreach ($navMajorServiceGroups as $serviceGroup): ?>
          <li><a href="<?= e($serviceGroup['href']) ?>"><?= e($serviceGroup['label']) ?></a></li>
        <?php endforeach; ?>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#"><span>More</span> <i class="bi bi-chevron-down toggle-dropdown" aria-hidden="true"></i></a>
      <ul>
        <li><a href="service-planning.php" class="<?= is_active($pageKey, 'service-planning.php') ?>">Service Planning</a></li>
        <li><a href="request-a-visit.php" class="<?= is_active($pageKey, 'request-a-visit.php') ?>">Request a Visit</a></li>
        <li><a href="how-we-work.php" class="<?= is_active($pageKey, 'how-we-work.php') ?>">How We Work</a></li>
        <li><a href="service-gallery.php" class="<?= is_active($pageKey, 'service-gallery.php') ?>">Service Gallery</a></li>
        <li><a href="home-repair-faq.php" class="<?= is_active($pageKey, 'home-repair-faq.php') ?>">FAQs (Questions)</a></li>
        <li><a href="terms.php" class="<?= is_active($pageKey, 'terms.php') ?>">Terms of Service</a></li>
        <li><a href="privacy.php" class="<?= is_active($pageKey, 'privacy.php') ?>">Privacy Notice</a></li>
      </ul>
    </li>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list" aria-label="Toggle navigation"></i>
</nav>

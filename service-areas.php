<?php
declare(strict_types=1);
$pageKey = 'service-areas.php';
require __DIR__ . '/includes/header.php';
$serviceAreaRoutes = [
    'sun-city-texas-home-repair.php' => ['image' => 'assets/img/brand/sun-city-home-exterior.webp', 'icon' => 'fa-house', 'delay' => 100],
    'berry-creek-texas-home-repair.php' => ['image' => 'assets/img/services/exterior.webp', 'icon' => 'fa-screwdriver-wrench', 'delay' => 150],
    'georgetown-texas-home-repair.php' => ['image' => 'assets/img/services/lighting.webp', 'icon' => 'fa-lightbulb', 'delay' => 200],
    'williamson-county-home-repair.php' => ['image' => 'assets/img/services/toolkit.webp', 'icon' => 'fa-toolbox', 'delay' => 250],
];
?>
<main class="main">
  <div class="page-title light-background">
    <div class="title-wrapper">
      <h1>Home Repair Service Areas</h1>
      <p>We provide in-home repair and handyman services in Sun City, Berry Creek, Georgetown, and nearby Williamson County ZIP codes.</p>
    </div>
  </div>

  <section id="service-areas" class="service-areas section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row g-3 justify-content-center">
        <?php foreach ($serviceAreaRoutes as $route => $card): $areaPage = $pages[$route]; $area = $areaPage['service_area']; ?>
          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="<?= e((string) $card['delay']) ?>">
            <article class="area-card">
              <div class="area-card-media">
                <img src="<?= e($card['image']) ?>" alt="Home repair service in <?= e($area['label']) ?>" class="img-fluid" loading="lazy">
                <span class="area-tag"><?= e($area['priority']) ?></span>
              </div>
              <div class="area-card-body">
                <header class="area-card-head">
                  <span class="area-icon-box"><i class="fas <?= e($card['icon']) ?>" aria-hidden="true"></i></span>
                  <div><h2 class="area-card-title"><?= e($area['name']) ?></h2><p class="area-card-meta"><?= e($area['postal_code']) ?></p></div>
                </header>
                <p class="area-card-desc"><?= e($areaPage['description']) ?></p>
                <ul class="area-feature-list">
                  <li><i class="fas fa-check"></i> We come to your home</li>
                  <li><i class="fas fa-check"></i> Small repairs and maintenance</li>
                </ul>
              </div>
              <footer class="area-card-foot">
                <a href="<?= e($route) ?>" class="area-link-btn"><span>View <?= e($area['label']) ?></span><i class="fas fa-arrow-right"></i></a>
              </footer>
            </article>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>

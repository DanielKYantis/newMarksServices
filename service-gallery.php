<?php

declare(strict_types=1);

$pageKey = 'service-gallery.php';
require __DIR__ . '/includes/header.php';
?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <!-- <div class="breadcrumbs">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Category</a></li>
        <li class="breadcrumb-item active current">Current Page</li>
      </ol>
    </nav>
  </div> -->

      <div class="title-wrapper">
        <h1>Home Repair Service Gallery</h1>
        <p>Browse representative categories for approved home repair, installation, and maintenance services.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="filter-bar" data-aos="fade-up" data-aos-delay="150">
            <span class="filter-label">Service Gallery</span>
            <ul class="shadcn-filters isotope-filters">
              <li data-filter="*" class="filter-active">
                <span>All</span>
                <span class="filter-count">08</span>
              </li>
              <li data-filter=".filter-nature">
                <span>Plumbing</span>
                <span class="filter-count">03</span>
              </li>
              <li data-filter=".filter-architecture">
                <span>Electrical</span>
                <span class="filter-count">03</span>
              </li>
              <li data-filter=".filter-people">
                <span>Maintenance</span>
                <span class="filter-count">02</span>
              </li>
            </ul>
          </div><!-- End Filter Bar -->

          <div class="row g-3 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <article class="col-lg-4 col-md-6 gallery-item isotope-item filter-nature">
              <div class="shadcn-card">
                <div class="card-media">
                  <img src="assets/img/gallery/gallery-1.webp" class="img-fluid" loading="lazy" alt="Kitchen faucet repair and replacement">
                  <span class="card-badge">Plumbing</span>
                </div>
                <div class="card-body">
                  <header class="card-head">
                    <h3 class="card-title">Plumbing Fixtures &amp; Water Systems</h3>
                    <p class="card-desc">Representative category for faucets, sinks, toilets, drains, water heaters, softeners, and filtration.</p>
                  </header>
                  <footer class="card-foot">
                    <a href="assets/img/gallery/gallery-1.webp" class="glightbox btn-ghost" title="Plumbing Fixtures &amp; Water Systems">
                      <i class="bi bi-arrows-fullscreen"></i> View
                    </a>
                    <a href="services.php" class="btn-link">
                      Service Details <i class="bi bi-arrow-up-right"></i>
                    </a>
                  </footer>
                </div>
              </div>
            </article><!-- End Gallery Item -->

            <article class="col-lg-4 col-md-6 gallery-item isotope-item filter-architecture">
              <div class="shadcn-card">
                <div class="card-media">
                  <img src="assets/img/gallery/gallery-2.webp" class="img-fluid" loading="lazy" alt="Residential ceiling-light installation">
                  <span class="card-badge">Electrical</span>
                </div>
                <div class="card-body">
                  <header class="card-head">
                    <h3 class="card-title">Electrical Fixtures &amp; Lighting</h3>
                    <p class="card-desc">Representative category for lights, fans, switches, outlets, GFCIs, doorbells, detectors, and garage lighting.</p>
                  </header>
                  <footer class="card-foot">
                    <a href="assets/img/gallery/gallery-2.webp" class="glightbox btn-ghost" title="Electrical Fixtures &amp; Lighting">
                      <i class="bi bi-arrows-fullscreen"></i> View
                    </a>
                    <a href="services.php" class="btn-link">
                      Service Details <i class="bi bi-arrow-up-right"></i>
                    </a>
                  </footer>
                </div>
              </div>
            </article><!-- End Gallery Item -->

            <article class="col-lg-4 col-md-6 gallery-item isotope-item filter-people">
              <div class="shadcn-card">
                <div class="card-media">
                  <img src="assets/img/gallery/gallery-3.webp" class="img-fluid" loading="lazy" alt="Video doorbell and smart lock installation">
                  <span class="card-badge">Maintenance</span>
                </div>
                <div class="card-body">
                  <header class="card-head">
                    <h3 class="card-title">Home Security &amp; Smart Devices</h3>
                    <p class="card-desc">Representative category for video doorbells, cameras, compatible panels, smart locks, and exterior requirement checks.</p>
                  </header>
                  <footer class="card-foot">
                    <a href="assets/img/gallery/gallery-3.webp" class="glightbox btn-ghost" title="Home Security &amp; Smart Devices">
                      <i class="bi bi-arrows-fullscreen"></i> View
                    </a>
                    <a href="services.php" class="btn-link">
                      Service Details <i class="bi bi-arrow-up-right"></i>
                    </a>
                  </footer>
                </div>
              </div>
            </article><!-- End Gallery Item -->

            <article class="col-lg-4 col-md-6 gallery-item isotope-item filter-nature">
              <div class="shadcn-card">
                <div class="card-media">
                  <img src="assets/img/gallery/gallery-4.webp" class="img-fluid" loading="lazy" alt="Interior door hinge adjustment">
                  <span class="card-badge">Plumbing</span>
                </div>
                <div class="card-body">
                  <header class="card-head">
                    <h3 class="card-title">Doors, Trim &amp; Small Carpentry</h3>
                    <p class="card-desc">Representative category for doors, locks, cabinet hardware, trim, shelves, closets, and vanities.</p>
                  </header>
                  <footer class="card-foot">
                    <a href="assets/img/gallery/gallery-4.webp" class="glightbox btn-ghost" title="Doors, Trim &amp; Small Carpentry">
                      <i class="bi bi-arrows-fullscreen"></i> View
                    </a>
                    <a href="services.php" class="btn-link">
                      Service Details <i class="bi bi-arrow-up-right"></i>
                    </a>
                  </footer>
                </div>
              </div>
            </article><!-- End Gallery Item -->

            <article class="col-lg-4 col-md-6 gallery-item isotope-item filter-architecture">
              <div class="shadcn-card">
                <div class="card-media">
                  <img src="assets/img/gallery/gallery-5.webp" class="img-fluid" loading="lazy" alt="Small drywall patch and texture repair">
                  <span class="card-badge">Electrical</span>
                </div>
                <div class="card-body">
                  <header class="card-head">
                    <h3 class="card-title">Drywall, Texture &amp; Mounting</h3>
                    <p class="card-desc">Representative category for wall repairs, wallpaper preparation, repair-related touch-ups, mirrors, blinds, TVs, and grab bars.</p>
                  </header>
                  <footer class="card-foot">
                    <a href="assets/img/gallery/gallery-5.webp" class="glightbox btn-ghost" title="Drywall, Texture &amp; Mounting">
                      <i class="bi bi-arrows-fullscreen"></i> View
                    </a>
                    <a href="services.php" class="btn-link">
                      Service Details <i class="bi bi-arrow-up-right"></i>
                    </a>
                  </footer>
                </div>
              </div>
            </article><!-- End Gallery Item -->

            <article class="col-lg-4 col-md-6 gallery-item isotope-item filter-people">
              <div class="shadcn-card">
                <div class="card-media">
                  <img src="assets/img/gallery/gallery-6.webp" class="img-fluid" loading="lazy" alt="Organized tools for home maintenance and punch-list work">
                  <span class="card-badge">Maintenance</span>
                </div>
                <div class="card-body">
                  <header class="card-head">
                    <h3 class="card-title">Maintenance &amp; Punch Lists</h3>
                    <p class="card-desc">Representative category for inspection repairs, sale punch lists, high-reach replacements, and small installations.</p>
                  </header>
                  <footer class="card-foot">
                    <a href="assets/img/gallery/gallery-6.webp" class="glightbox btn-ghost" title="Maintenance &amp; Punch Lists">
                      <i class="bi bi-arrows-fullscreen"></i> View
                    </a>
                    <a href="services.php" class="btn-link">
                      Service Details <i class="bi bi-arrow-up-right"></i>
                    </a>
                  </footer>
                </div>
              </div>
            </article><!-- End Gallery Item -->

            <article class="col-lg-4 col-md-6 gallery-item isotope-item filter-nature">
              <div class="shadcn-card">
                <div class="card-media">
                  <img src="assets/img/gallery/gallery-7.webp" class="img-fluid" loading="lazy" alt="Exterior window sealing and downspout check">
                  <span class="card-badge">Plumbing</span>
                </div>
                <div class="card-body">
                  <header class="card-head">
                    <h3 class="card-title">Small Exterior Maintenance</h3>
                    <p class="card-desc">Representative category for gutters, downspouts, fascia, caulking, mailboxes, washing, and dryer vent assistance.</p>
                  </header>
                  <footer class="card-foot">
                    <a href="assets/img/gallery/gallery-7.webp" class="glightbox btn-ghost" title="Small Exterior Maintenance">
                      <i class="bi bi-arrows-fullscreen"></i> View
                    </a>
                    <a href="services.php" class="btn-link">
                      Service Details <i class="bi bi-arrow-up-right"></i>
                    </a>
                  </footer>
                </div>
              </div>
            </article><!-- End Gallery Item -->

            <article class="col-lg-4 col-md-6 gallery-item isotope-item filter-architecture">
              <div class="shadcn-card">
                <div class="card-media">
                  <img src="assets/img/gallery/gallery-8.webp" class="img-fluid" loading="lazy" alt="Homeowner and home repair professional reviewing a client-location project">
                  <span class="card-badge">Electrical</span>
                </div>
                <div class="card-body">
                  <header class="card-head">
                    <h3 class="card-title">Mature-Home Repair Planning</h3>
                    <p class="card-desc">Practical repair planning for Sun City and Berry Creek homes, with exterior requirements confirmed when applicable.</p>
                  </header>
                  <footer class="card-foot">
                    <a href="assets/img/gallery/gallery-8.webp" class="glightbox btn-ghost" title="Mature-Home Repair Planning">
                      <i class="bi bi-arrows-fullscreen"></i> View
                    </a>
                    <a href="services.php" class="btn-link">
                      Service Details <i class="bi bi-arrow-up-right"></i>
                    </a>
                  </footer>
                </div>
              </div>
            </article><!-- End Gallery Item -->

          </div>
        </div>

      </div>

    </section><!-- /Gallery Section -->

  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>

<?php

declare(strict_types=1);

$pageKey = 'services.php';
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
        <h1>Home Repair &amp; Handyman Services</h1>
        <p>Explore approved plumbing, water system, electrical, lighting, security, carpentry, wall repair, maintenance, and punch-list services.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="services-toolbar" data-aos="fade-up" data-aos-delay="100">
          <div class="toolbar-left">
            <span class="label">Home Services</span>
            <h3 class="toolbar-title">Practical Repair &amp; Maintenance Services</h3>
          </div>
          <div class="toolbar-right">
            <span class="badge badge-success"><span class="dot"></span> Serving Sun City &amp; Berry Creek</span>
          </div>
        </div>

        <div class="services-grid">
          <div class="row g-3">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <article class="service-card">
                <header class="card-head">
                  <div class="icon-wrap">
                    <i class="bi bi-activity"></i>
                  </div>
                  <span class="badge">Plumbing</span>
                </header>
                <div class="card-content">
                  <h4 class="card-title">Plumbing Fixtures &amp; Minor Leaks</h4>
                  <p class="card-description">Faucets, sinks, toilets, drains, disposals, dishwashers, ice maker lines, bidets, hose bibs, and minor leaks.</p>
                  <ul class="feature-list">
                    <li><i class="bi bi-check2"></i> Fixture Repairs</li>
                    <li><i class="bi bi-check2"></i> Drain &amp; Disposal Help</li>
                    <li><i class="bi bi-check2"></i> Supply-Line Checks</li>
                  </ul>
                </div>
                <footer class="card-foot">
                  <a href="service-details.php" class="btn-ghost">
                    Request a Visit
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </footer>
              </article>
            </div><!-- End Service Card -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
              <article class="service-card featured">
                <header class="card-head">
                  <div class="icon-wrap">
                    <i class="bi bi-heart-pulse"></i>
                  </div>
                  <span class="badge badge-accent">Water Systems</span>
                  <span class="pin">Common Request</span>
                </header>
                <div class="card-content">
                  <h4 class="card-title">Water Heaters &amp; Water Quality</h4>
                  <p class="card-description">Water heaters, point-of-use units, softeners, whole-house filters, reverse osmosis systems, water-flow troubleshooting, and water-test assistance.</p>
                  <ul class="feature-list">
                    <li><i class="bi bi-check2"></i> Water Heaters</li>
                    <li><i class="bi bi-check2"></i> Filters &amp; Softeners</li>
                    <li><i class="bi bi-check2"></i> Flow Troubleshooting</li>
                  </ul>
                </div>
                <footer class="card-foot">
                  <a href="service-details.php" class="btn-primary">
                    Discuss Your Project
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </footer>
              </article>
            </div><!-- End Service Card -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <article class="service-card">
                <header class="card-head">
                  <div class="icon-wrap">
                    <i class="bi bi-clipboard2-pulse"></i>
                  </div>
                  <span class="badge">Electrical</span>
                </header>
                <div class="card-content">
                  <h4 class="card-title">Laboratory Electrical</h4>
                  <p class="card-description">Lights, fans, switches, outlets, GFCIs, doorbells, smoke detectors, media outlets, garage lights, and practical upgrades.</p>
                  <ul class="feature-list">
                    <li><i class="bi bi-check2"></i> Lights &amp; Fans</li>
                    <li><i class="bi bi-check2"></i> Switches &amp; Outlets</li>
                    <li><i class="bi bi-check2"></i> GFCIs &amp; Detectors</li>
                  </ul>
                </div>
                <footer class="card-foot">
                  <a href="service-details.php" class="btn-ghost">
                    View Electrical Services
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </footer>
              </article>
            </div><!-- End Service Card -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <article class="service-card emergency">
                <header class="card-head">
                  <div class="icon-wrap">
                    <i class="bi bi-shield-plus"></i>
                  </div>
                  <span class="badge">Security</span>
                  <span class="pin pin-live"><span class="dot"></span> Requirement Check</span>
                </header>
                <div class="card-content">
                  <h4 class="card-title">Security Response Unit</h4>
                  <p class="card-description">Video doorbells, security cameras, compatible panels, smart locks, and EV charger coordination when properly licensed or coordinated.</p>
                  <ul class="feature-list">
                    <li><i class="bi bi-check2"></i> Video Doorbells</li>
                    <li><i class="bi bi-check2"></i> Cameras &amp; Smart Locks</li>
                    <li><i class="bi bi-check2"></i> EV Charger Coordination</li>
                  </ul>
                </div>
                <footer class="card-foot">
                  <a href="tel:911" class="btn-danger">
                    <i class="bi bi-telephone-fill"></i>
                    Dial Security
                  </a>
                </footer>
              </article>
            </div><!-- End Service Card -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
              <article class="service-card">
                <header class="card-head">
                  <div class="icon-wrap">
                    <i class="bi bi-gender-female"></i>
                  </div>
                  <span class="badge">Carpentry</span>
                </header>
                <div class="card-content">
                  <h4 class="card-title">Women &amp; Carpentry Health</h4>
                  <p class="card-description">Door, lock, storm door, sliding door, cabinet hardware, trim, shelves, closets, vanities, and focused carpentry repairs.</p>
                  <ul class="feature-list">
                    <li><i class="bi bi-check2"></i> Doors &amp; Locks</li>
                    <li><i class="bi bi-check2"></i> Trim &amp; Shelves</li>
                    <li><i class="bi bi-check2"></i> Cabinet Hardware</li>
                  </ul>
                </div>
                <footer class="card-foot">
                  <a href="service-details.php" class="btn-ghost">
                    Learn More
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </footer>
              </article>
            </div><!-- End Service Card -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <article class="service-card">
                <header class="card-head">
                  <div class="icon-wrap">
                    <i class="bi bi-droplet-half"></i>
                  </div>
                  <span class="badge">Maintenance</span>
                </header>
                <div class="card-content">
                  <h4 class="card-title">Wall Repairs, Mounting &amp; Punch Lists</h4>
                  <p class="card-description">Drywall, texture, wallpaper preparation, repair-related touch-ups, grab bars, mirrors, blinds, TV mounting, inspection repairs, and sale punch lists.</p>
                  <ul class="feature-list">
                    <li><i class="bi bi-check2"></i> Drywall &amp; Texture</li>
                    <li><i class="bi bi-check2"></i> Mounting &amp; Grab Bars</li>
                    <li><i class="bi bi-check2"></i> Inspection Punch Lists</li>
                  </ul>
                </div>
                <footer class="card-foot">
                  <a href="service-details.php" class="btn-ghost">
                    Plan a Visit
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </footer>
              </article>
            </div><!-- End Service Card -->

          </div>
        </div><!-- End Services Grid -->

        <div class="services-stats" data-aos="fade-up" data-aos-delay="100">
          <div class="row g-0">
            <div class="col-lg-3 col-md-6">
              <div class="stat-cell">
                <span class="stat-key">Service Area</span>
                <div class="stat-value">
                  <span class="purecounter" data-purecounter-start="0" data-purecounter-end="28450" data-purecounter-duration="2"></span>
                  <span class="stat-suffix">+</span>
                </div>
                <span class="stat-meta">Sun City 78633</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stat-cell">
                <span class="stat-key">Secondary Area</span>
                <div class="stat-value">
                  <span class="purecounter" data-purecounter-start="0" data-purecounter-end="172" data-purecounter-duration="2"></span>
                </div>
                <span class="stat-meta">Berry Creek 78628</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stat-cell">
                <span class="stat-key">Project Types</span>
                <div class="stat-value">
                  <span class="purecounter" data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="2"></span>
                </div>
                <span class="stat-meta">Approved service scope</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stat-cell">
                <span class="stat-key">Scheduling</span>
                <div class="stat-value">
                  <span class="purecounter" data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="2"></span>
                  <span class="stat-suffix">/7</span>
                </div>
                <span class="stat-meta">By request</span>
              </div>
            </div>
          </div>
        </div><!-- End Stats -->

        <div class="appointment-banner" data-aos="fade-up" data-aos-delay="100">
          <div class="banner-grid">
            <div class="banner-meta">
              <span class="badge badge-outline"><i class="bi bi-calendar2-check"></i> Plan a Practical Visit</span>
              <h3>Have a Home Repair Project?</h3>
              <p>Tell Mark's Services what needs attention and where the home is located so the project can be reviewed and scheduled appropriately.</p>
            </div>
            <div class="banner-actions">
              <a href="appointment.php" class="btn-primary">Request a Visit</a>
              <a href="tel:+15551234567" class="btn-secondary">
                <i class="bi bi-telephone"></i>
                +1 (512) 549-0322
              </a>
            </div>
          </div>
        </div><!-- End Appointment Banner -->

      </div>

    </section><!-- /Services Section -->

  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>

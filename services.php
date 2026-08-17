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
        <p>See the plumbing, water system, electrical, lighting, security, carpentry, wall repair, maintenance, and punch-list work we provide.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="services-toolbar" data-aos="fade-up" data-aos-delay="100">
          <div class="toolbar-left">
            <span class="label">Home Services</span>
            <h3 class="toolbar-title">Home Repair &amp; Maintenance Services</h3>
          </div>
          <div class="toolbar-right">
            <span class="badge badge-success"><span class="dot"></span> Serving Sun City &amp; Berry Creek</span>
          </div>
        </div>

        <div class="services-grid">
          <div class="row g-3">

            <div id="plumbing-fixtures" class="col-lg-4 col-md-6 service-group-anchor" data-aos="fade-up" data-aos-delay="100">
              <article class="service-card">
                <header class="card-head">
                  <div class="icon-wrap">
                    <i class="bi bi-droplet"></i>
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
                  <a href="plumbing-fixture-repair.php" class="btn-ghost">
                    Request a Visit
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </footer>
              </article>
            </div><!-- End Service Card -->

            <div id="water-systems" class="col-lg-4 col-md-6 service-group-anchor" data-aos="fade-up" data-aos-delay="150">
              <article class="service-card featured">
                <header class="card-head">
                  <div class="icon-wrap">
                    <i class="bi bi-water"></i>
                  </div>
                  <span class="badge badge-accent">Water Systems</span>
                  <span class="pin">Common Request</span>
                </header>
                <div class="card-content">
                  <h4 class="card-title">Water Heaters &amp; Water Quality</h4>
                  <p class="card-description">Water heaters, small point-of-use heaters, water softeners, whole-house filters, reverse-osmosis systems, low-water-flow problems, and water-test help.</p>
                  <ul class="feature-list">
                    <li><i class="bi bi-check2"></i> Water Heaters</li>
                    <li><i class="bi bi-check2"></i> Filters &amp; Softeners</li>
                    <li><i class="bi bi-check2"></i> Low-Water-Flow Help</li>
                  </ul>
                </div>
                <footer class="card-foot">
                  <a href="plumbing-fixture-repair.php" class="btn-primary">
                    Discuss Your Project
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </footer>
              </article>
            </div><!-- End Service Card -->

            <div id="electrical-lighting" class="col-lg-4 col-md-6 service-group-anchor" data-aos="fade-up" data-aos-delay="200">
              <article class="service-card">
                <header class="card-head">
                  <div class="icon-wrap">
                    <i class="bi bi-lightning-charge"></i>
                  </div>
                  <span class="badge">Electrical</span>
                </header>
                <div class="card-content">
                  <h4 class="card-title">Electrical Fixtures &amp; Lighting</h4>
                  <p class="card-description">Lights, fans, switches, outlets, GFCIs, doorbells, smoke detectors, media outlets, garage lights, and practical upgrades.</p>
                  <ul class="feature-list">
                    <li><i class="bi bi-check2"></i> Lights &amp; Fans</li>
                    <li><i class="bi bi-check2"></i> Switches &amp; Outlets</li>
                    <li><i class="bi bi-check2"></i> GFCIs &amp; Detectors</li>
                  </ul>
                </div>
                <footer class="card-foot">
                  <a href="plumbing-fixture-repair.php" class="btn-ghost">
                    View Electrical Services
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </footer>
              </article>
            </div><!-- End Service Card -->

            <div id="security-smart-home" class="col-lg-4 col-md-6 service-group-anchor" data-aos="fade-up" data-aos-delay="100">
              <article class="service-card licensed-coordination">
                <header class="card-head">
                  <div class="icon-wrap">
                    <i class="bi bi-shield-plus"></i>
                  </div>
                  <span class="badge">Security</span>
                  <span class="pin pin-live"><span class="dot"></span> Rules May Apply</span>
                </header>
                <div class="card-content">
                  <h4 class="card-title">Security &amp; Smart Home</h4>
                  <p class="card-description">Video doorbells, security cameras, compatible panels, and smart locks. EV charger work is handled with the right licensed professional when required.</p>
                  <ul class="feature-list">
                    <li><i class="bi bi-check2"></i> Video Doorbells</li>
                    <li><i class="bi bi-check2"></i> Cameras &amp; Smart Locks</li>
                    <li><i class="bi bi-check2"></i> EV Charger Coordination</li>
                  </ul>
                </div>
                <footer class="card-foot">
                  <a href="request-a-visit.php" class="btn-danger">
                    <i class="bi bi-calendar-check"></i>
                    Discuss Your Project
                  </a>
                </footer>
              </article>
            </div><!-- End Service Card -->

            <div id="doors-carpentry" class="col-lg-4 col-md-6 service-group-anchor" data-aos="fade-up" data-aos-delay="150">
              <article class="service-card">
                <header class="card-head">
                  <div class="icon-wrap">
                    <i class="bi bi-hammer"></i>
                  </div>
                  <span class="badge">Carpentry</span>
                </header>
                <div class="card-content">
                  <h4 class="card-title">Doors, Trim &amp; Small Carpentry</h4>
                  <p class="card-description">Door, lock, storm door, sliding door, cabinet hardware, trim, shelves, closets, vanities, and focused carpentry repairs.</p>
                  <ul class="feature-list">
                    <li><i class="bi bi-check2"></i> Doors &amp; Locks</li>
                    <li><i class="bi bi-check2"></i> Trim &amp; Shelves</li>
                    <li><i class="bi bi-check2"></i> Cabinet Hardware</li>
                  </ul>
                </div>
                <footer class="card-foot">
                  <a href="plumbing-fixture-repair.php" class="btn-ghost">
                    Learn More
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </footer>
              </article>
            </div><!-- End Service Card -->

            <div id="wall-repairs-maintenance" class="col-lg-4 col-md-6 service-group-anchor" data-aos="fade-up" data-aos-delay="200">
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
                  <a href="plumbing-fixture-repair.php" class="btn-ghost">
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
                  <span>78633</span>
                </div>
                <span class="stat-meta">Sun City 78633</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stat-cell">
                <span class="stat-key">Secondary Area</span>
                <div class="stat-value">
                  <span>78628</span>
                </div>
                <span class="stat-meta">Berry Creek 78628</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stat-cell">
                <span class="stat-key">Main Services</span>
                <div class="stat-value">
                  <span>6</span>
                </div>
                <span class="stat-meta">Easy-to-scan groups</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stat-cell">
                <span class="stat-key">Visit Requests</span>
                <div class="stat-value">
                  <span>Call</span>
                </div>
                <span class="stat-meta">By request</span>
              </div>
            </div>
          </div>
        </div><!-- End Stats -->

        <div class="service-request-banner" data-aos="fade-up" data-aos-delay="100">
          <div class="banner-grid">
            <div class="banner-meta">
              <span class="badge badge-outline"><i class="bi bi-calendar2-check"></i> Plan a Visit</span>
              <h3>Not Sure Which Service You Need?</h3>
              <p>Call us or send a request. Tell us what's going on and where your home is located.</p>
            </div>
            <div class="banner-actions">
              <a href="request-a-visit.php" class="btn-primary">Request a Visit</a>
              <a href="tel:+15125490322" class="btn-secondary">
                <i class="bi bi-telephone"></i>
                +1 (512) 549-0322
              </a>
            </div>
          </div>
        </div><!-- End Service Request Banner -->

      </div>

    </section><!-- /Services Section -->

  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>

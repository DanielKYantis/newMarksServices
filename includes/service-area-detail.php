<?php
declare(strict_types=1);
$area = $page['service_area'];
?>
<main class="main">
  <div class="page-title light-background position-relative">
    <div class="title-wrapper">
      <h1><?= e($area['label']) ?> Home Repair</h1>
      <p><?= e($area['intro']) ?></p>
    </div>
  </div>

  <section id="service-area-details" class="service-area-details section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="service-area-card" data-aos="fade-up" data-aos-delay="150">
        <div class="service-area-card-header">
          <div class="header-meta">
            <span class="badge"><i class="bi bi-geo-alt"></i><span><?= e($area['label']) ?></span></span>
            <span class="status-pill"><span class="status-dot"></span><?= e($area['priority']) ?></span>
          </div>
          <h2 class="service-area-title">Home Repair &amp; Handyman Services in <?= e($area['label']) ?></h2>
          <p class="service-area-lead"><?= e($page['description']) ?> Work is performed at the client's home; Mark's Services does not operate a public walk-in office.</p>
          <div class="header-actions">
            <a href="request-a-visit.php" class="btn-primary"><i class="bi bi-calendar-plus"></i><span>Request a Visit</span></a>
            <a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>" class="btn-ghost"><i class="bi bi-telephone"></i><span>Call <?= e(BUSINESS_PHONE_DISPLAY) ?></span></a>
          </div>
        </div>
      </div>

      <div class="stats-strip" data-aos="fade-up" data-aos-delay="200">
        <div class="row g-0">
          <div class="col-6 col-md-3"><div class="stat-cell"><span class="stat-label">Service Area</span><span class="stat-value"><?= e($area['name']) ?></span></div></div>
          <div class="col-6 col-md-3"><div class="stat-cell"><span class="stat-label">ZIP Code</span><span class="stat-value"><?= e($area['postal_code']) ?></span></div></div>
          <div class="col-6 col-md-3"><div class="stat-cell"><span class="stat-label">Service Model</span><span class="stat-value">At Your Home</span></div></div>
          <div class="col-6 col-md-3"><div class="stat-cell"><span class="stat-label">Project Focus</span><span class="stat-value">Repairs &amp; Maintenance</span></div></div>
        </div>
      </div>

      <div class="content-grid" data-aos="fade-up" data-aos-delay="250">
        <div class="main-content">
          <h3>Practical services for local homeowners</h3>
          <p>Mark's Services helps with right-sized repairs, fixture and device work, small installations, safety updates, home maintenance, inspection repairs, and sale punch lists.</p>
          <div class="row g-3 mt-2">
            <div class="col-md-6"><div class="feature-item"><i class="bi bi-check-circle"></i><span>Plumbing fixtures and water systems</span></div></div>
            <div class="col-md-6"><div class="feature-item"><i class="bi bi-check-circle"></i><span>Electrical devices and lighting</span></div></div>
            <div class="col-md-6"><div class="feature-item"><i class="bi bi-check-circle"></i><span>Doors, trim, drywall, and mounting</span></div></div>
            <div class="col-md-6"><div class="feature-item"><i class="bi bi-check-circle"></i><span>Maintenance and punch-list work</span></div></div>
          </div>
          <p class="mt-4">Regulated electrical, plumbing, or EV charging work is performed only when properly licensed or coordinated. For exterior cameras, lighting, conduit, EV chargers, or other visible work, confirm HOA, permit, utility, and manufacturer requirements.</p>
          <div class="header-actions mt-4">
            <a href="services.php" class="btn-primary">View Our Services</a>
            <a href="service-areas.php" class="btn-ghost">All Service Areas</a>
          </div>
        </div>
        <aside class="sidebar">
          <div class="quick-info-card">
            <h4>Discuss a project</h4>
            <p>Share the repair, service area, photos if requested, and preferred timing for review.</p>
            <a href="request-a-visit.php" class="btn-primary">Request a Visit</a>
          </div>
        </aside>
      </div>
    </div>
  </section>
</main>

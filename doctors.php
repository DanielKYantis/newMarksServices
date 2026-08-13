<?php

declare(strict_types=1);

$pageKey = 'doctors.php';
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
        <h1>Home Service Planning</h1>
        <p>Choose a home repair category and learn how Mark's Services reviews practical projects.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Doctors Section -->
    <section id="doctors" class="doctors section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Featured Doctor Details (Top) -->
        <div class="featured-profile mb-5">
          <div class="featured-card">
            <div class="row g-0">
              <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                <div class="featured-media">
                  <img src="assets/img/health/staff-12.webp" class="img-fluid" alt="Mark's Services">
                  <span class="status-pill"><i class="bi bi-circle-fill"></i> Project Planning</span>
                </div>
              </div>
              <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                <div class="featured-body">
                  <div class="label-row">
                    <span class="label-text">Featured Service</span>
                    <span class="divider-dot"></span>
                    <span class="label-text muted">Home Repair</span>
                  </div>
                  <h3 class="featured-name">Mark's Services</h3>
                  <p class="featured-credentials">Sun City Home Repair &amp; Handyman Services</p>

                  <div class="badge-stack">
                    <span class="sh-badge primary">Client-Service Area</span>
                    <span class="sh-badge">Practical Scope</span>
                    <span class="sh-badge">Trade Coordination</span>
                  </div>

                  <p class="featured-bio">Mark's Remodeling and Facility Services helps Sun City and Berry Creek homeowners plan focused repairs, installations, and punch-list work.</p>

                  <ul class="featured-highlights">
                    <li><i class="bi bi-mortarboard"></i><span>Primary area: Sun City 78633</span></li>
                    <li><i class="bi bi-hospital"></i><span>Secondary area: Berry Creek 78628</span></li>
                    <li><i class="bi bi-award"></i><span>Client-location service only</span></li>
                  </ul>

                  <div class="action-row">
                    <a href="#" class="sh-btn primary"><i class="bi bi-calendar2-check"></i> Request a Visit</a>
                    <a href="#" class="sh-btn ghost"><i class="bi bi-file-earmark-text"></i> View Services</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Featured Doctor Details -->

        <!-- Filterable Doctor Directory -->
        <div class="doctor-directory" data-aos="fade-up" data-aos-delay="100">

          <div class="directory-header">
            <div>
              <h3 class="directory-title">Browse Home Service Groups</h3>
              <p class="directory-subtitle">Find the service category that best matches your home project.</p>
            </div>
          </div>

          <div class="directory-toolbar">
            <div class="row g-3 align-items-end">
              <div class="col-lg-4">
                <div class="sh-input-group">
                  <label for="doctor-search" class="sh-label">Project Search</label>
                  <div class="input-wrap">
                    <i class="bi bi-search"></i>
                    <input id="doctor-search" type="text" class="sh-input" placeholder="Find by name or specialty">
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="sh-input-group">
                  <label class="sh-label">Service</label>
                  <select class="sh-input">
                    <option value="*">All Services</option>
                    <option value=".filter-cardiology">Plumbing</option>
                    <option value=".filter-pediatrics">Electrical</option>
                    <option value=".filter-dermatology">Carpentry &amp; Walls</option>
                    <option value=".filter-orthopedics">Maintenance</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="sh-input-group">
                  <label class="sh-label">Service Area</label>
                  <select class="sh-input">
                    <option>All Areas</option>
                    <option>Sun City 78633</option>
                    <option>Berry Creek 78628</option>
                    <option>Georgetown ZIP Context</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-2 d-grid">
                <button class="sh-btn primary">Match Services</button>
              </div>
            </div>
          </div>

          <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="directory-filters isotope-filters" data-aos="fade-up" data-aos-delay="150">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-cardiology">Plumbing</li>
              <li data-filter=".filter-pediatrics">Electrical</li>
              <li data-filter=".filter-dermatology">Carpentry &amp; Walls</li>
              <li data-filter=".filter-orthopedics">Maintenance</li>
            </ul><!-- End Directory Filters -->

            <div class="row g-3 isotope-container" data-aos="fade-up" data-aos-delay="200">

              <div class="col-lg-4 col-md-6 doctor-item isotope-item filter-cardiology">
                <article class="sh-doctor-card">
                  <div class="card-top">
                    <img src="assets/img/health/staff-3.webp" class="avatar" alt="Plumbing Fixtures" loading="lazy">
                    <div class="card-headline">
                      <h4 class="name">Plumbing Fixtures</h4>
                      <p class="role">Faucets, toilets, drains, and minor leaks</p>
                    </div>
                    <span class="sh-badge primary small">Common Request</span>
                  </div>
                  <p class="card-desc">Repairs and replacements for common household plumbing fixtures and supply connections.</p>
                  <div class="card-meta">
                    <span class="meta-item"><i class="bi bi-mortarboard"></i> Fixtures</span>
                    <span class="meta-item"><i class="bi bi-geo-alt"></i> Sun City</span>
                  </div>
                  <div class="card-footer">
                    <span class="sh-badge">Plumbing</span>
                    <div class="footer-actions">
                      <a href="#" class="sh-btn ghost sm">Details</a>
                      <a href="#" class="sh-btn primary sm">Request</a>
                    </div>
                  </div>
                </article>
              </div><!-- End Directory Item -->

              <div class="col-lg-4 col-md-6 doctor-item isotope-item filter-pediatrics">
                <article class="sh-doctor-card">
                  <div class="card-top">
                    <img src="assets/img/health/staff-7.webp" class="avatar" alt="Water Systems" loading="lazy">
                    <div class="card-headline">
                      <h4 class="name">Water Systems</h4>
                      <p class="role">Water heaters, softeners, and filtration</p>
                    </div>
                  </div>
                  <p class="card-desc">Support for heaters, point-of-use units, filters, reverse osmosis, and flow concerns.</p>
                  <div class="card-meta">
                    <span class="meta-item"><i class="bi bi-mortarboard"></i> Water</span>
                    <span class="meta-item"><i class="bi bi-geo-alt"></i> Berry Creek</span>
                  </div>
                  <div class="card-footer">
                    <span class="sh-badge">Electrical</span>
                    <div class="footer-actions">
                      <a href="#" class="sh-btn ghost sm">Details</a>
                      <a href="#" class="sh-btn primary sm">Request</a>
                    </div>
                  </div>
                </article>
              </div><!-- End Directory Item -->

              <div class="col-lg-4 col-md-6 doctor-item isotope-item filter-dermatology">
                <article class="sh-doctor-card">
                  <div class="card-top">
                    <img src="assets/img/health/staff-12.webp" class="avatar" alt="Electrical &amp; Lighting" loading="lazy">
                    <div class="card-headline">
                      <h4 class="name">Electrical &amp; Lighting</h4>
                      <p class="role">Lights, fans, switches, outlets, and GFCIs</p>
                    </div>
                    <span class="sh-badge primary small">Service</span>
                  </div>
                  <p class="card-desc">Fixture and device work, including doorbells, detectors, media outlets, and garage lights.</p>
                  <div class="card-meta">
                    <span class="meta-item"><i class="bi bi-mortarboard"></i> Electrical</span>
                    <span class="meta-item"><i class="bi bi-geo-alt"></i> Service Area</span>
                  </div>
                  <div class="card-footer">
                    <span class="sh-badge">Carpentry &amp; Walls</span>
                    <div class="footer-actions">
                      <a href="#" class="sh-btn ghost sm">Details</a>
                      <a href="#" class="sh-btn primary sm">Request</a>
                    </div>
                  </div>
                </article>
              </div><!-- End Directory Item -->

              <div class="col-lg-4 col-md-6 doctor-item isotope-item filter-orthopedics">
                <article class="sh-doctor-card">
                  <div class="card-top">
                    <img src="assets/img/health/staff-5.webp" class="avatar" alt="Security &amp; Smart Home" loading="lazy">
                    <div class="card-headline">
                      <h4 class="name">Security &amp; Smart Home&nbsp;</h4>
                      <p class="role">Doorbells, cameras, panels, and smart locks</p>
                    </div>
                  </div>
                  <p class="card-desc">Exterior requirements are confirmed when cameras, lighting, conduit, or EV equipment may be visible.</p>
                  <div class="card-meta">
                    <span class="meta-item"><i class="bi bi-mortarboard"></i> Security</span>
                    <span class="meta-item"><i class="bi bi-geo-alt"></i> Sun City</span>
                  </div>
                  <div class="card-footer">
                    <span class="sh-badge">Maintenance</span>
                    <div class="footer-actions">
                      <a href="#" class="sh-btn ghost sm">Details</a>
                      <a href="#" class="sh-btn primary sm">Request</a>
                    </div>
                  </div>
                </article>
              </div><!-- End Directory Item -->

              <div class="col-lg-4 col-md-6 doctor-item isotope-item filter-cardiology">
                <article class="sh-doctor-card">
                  <div class="card-top">
                    <img src="assets/img/health/staff-10.webp" class="avatar" alt="Doors, Trim &amp; Carpentry" loading="lazy">
                    <div class="card-headline">
                      <h4 class="name">Doors, Trim &amp; Carpentry</h4>
                      <p class="role">Interventional Faucets, toilets, drains, and minor leaks</p>
                    </div>
                  </div>
                  <p class="card-desc">Right-sized carpentry and hardware work for mature homes.</p>
                  <div class="card-meta">
                    <span class="meta-item"><i class="bi bi-mortarboard"></i> Home Repair</span>
                    <span class="meta-item"><i class="bi bi-geo-alt"></i> Berry Creek</span>
                  </div>
                  <div class="card-footer">
                    <span class="sh-badge">Plumbing</span>
                    <div class="footer-actions">
                      <a href="#" class="sh-btn ghost sm">Details</a>
                      <a href="#" class="sh-btn primary sm">Request</a>
                    </div>
                  </div>
                </article>
              </div><!-- End Directory Item -->

              <div class="col-lg-4 col-md-6 doctor-item isotope-item filter-pediatrics">
                <article class="sh-doctor-card">
                  <div class="card-top">
                    <img src="assets/img/health/staff-2.webp" class="avatar" alt="Drywall, Mounting &amp; Punch Lists" loading="lazy">
                    <div class="card-headline">
                      <h4 class="name">Drywall, Mounting &amp; Punch Lists</h4>
                      <p class="role">Wall repairs, grab bars, mirrors, blinds, TVs, and grouped repair lists</p>
                    </div>
                  </div>
                  <p class="card-desc">Practical help with inspection repairs, sale punch lists, maintenance, and small installations.</p>
                  <div class="card-meta">
                    <span class="meta-item"><i class="bi bi-mortarboard"></i> Home Repair</span>
                    <span class="meta-item"><i class="bi bi-geo-alt"></i> Service Area</span>
                  </div>
                  <div class="card-footer">
                    <span class="sh-badge">Electrical</span>
                    <div class="footer-actions">
                      <a href="#" class="sh-btn ghost sm">Details</a>
                      <a href="#" class="sh-btn primary sm">Request</a>
                    </div>
                  </div>
                </article>
              </div><!-- End Directory Item -->

              <div class="col-lg-4 col-md-6 doctor-item isotope-item filter-dermatology">
                <article class="sh-doctor-card">
                  <div class="card-top">
                    <img src="assets/img/health/staff-9.webp" class="avatar" alt="Small Exterior Maintenance" loading="lazy">
                    <div class="card-headline">
                      <h4 class="name">Small Exterior Maintenance</h4>
                      <p class="role">Cosmetic Lights, fans, switches, outlets, and GFCIs</p>
                    </div>
                  </div>
                  <p class="card-desc">Focused exterior maintenance only, with requirements confirmed before visible modifications.</p>
                  <div class="card-meta">
                    <span class="meta-item"><i class="bi bi-mortarboard"></i> Home Repair</span>
                    <span class="meta-item"><i class="bi bi-geo-alt"></i> Sun City</span>
                  </div>
                  <div class="card-footer">
                    <span class="sh-badge">Carpentry &amp; Walls</span>
                    <div class="footer-actions">
                      <a href="#" class="sh-btn ghost sm">Details</a>
                      <a href="#" class="sh-btn primary sm">Request</a>
                    </div>
                  </div>
                </article>
              </div><!-- End Directory Item -->

              <div class="col-lg-4 col-md-6 doctor-item isotope-item filter-orthopedics">
                <article class="sh-doctor-card">
                  <div class="card-top">
                    <img src="assets/img/health/staff-6.webp" class="avatar" alt="Home Maintenance" loading="lazy">
                    <div class="card-headline">
                      <h4 class="name">Home Maintenance</h4>
                      <p class="role">Small repairs and installations</p>
                    </div>
                  </div>
                  <p class="card-desc">Combine related household tasks into a practical service visit.</p>
                  <div class="card-meta">
                    <span class="meta-item"><i class="bi bi-mortarboard"></i> Home Repair</span>
                    <span class="meta-item"><i class="bi bi-geo-alt"></i> Berry Creek</span>
                  </div>
                  <div class="card-footer">
                    <span class="sh-badge">Maintenance</span>
                    <div class="footer-actions">
                      <a href="#" class="sh-btn ghost sm">Details</a>
                      <a href="#" class="sh-btn primary sm">Request</a>
                    </div>
                  </div>
                </article>
              </div><!-- End Directory Item -->

            </div><!-- End Directory Items Container -->
          </div>
        </div><!-- End Filterable Doctor Directory -->

        <!-- Quick Reference Roster -->
        <div class="compact-roster mt-5" data-aos="fade-up" data-aos-delay="100">
          <div class="roster-header">
            <h3 class="roster-title">Popular Services</h3>
            <span class="roster-hint">Choose a service group to review details</span>
          </div>
          <div class="roster-grid">
            <a href="#" class="roster-item" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/health/staff-2.webp" alt="Drywall, Mounting &amp; Punch Lists" loading="lazy">
              <div class="roster-info">
                <span class="roster-name">Drywall, Mounting &amp; Punch Lists</span>
                <span class="roster-role">Electrical</span>
              </div>
            </a>
            <a href="#" class="roster-item" data-aos="fade-up" data-aos-delay="150">
              <img src="assets/img/health/staff-7.webp" alt="Water Systems" loading="lazy">
              <div class="roster-info">
                <span class="roster-name">Water Systems</span>
                <span class="roster-role">Electrical</span>
              </div>
            </a>
            <a href="#" class="roster-item" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/health/staff-6.webp" alt="Home Maintenance" loading="lazy">
              <div class="roster-info">
                <span class="roster-name">Home Maintenance</span>
                <span class="roster-role">Maintenance</span>
              </div>
            </a>
            <a href="#" class="roster-item" data-aos="fade-up" data-aos-delay="250">
              <img src="assets/img/health/staff-3.webp" alt="Plumbing Fixtures" loading="lazy">
              <div class="roster-info">
                <span class="roster-name">Plumbing Fixtures</span>
                <span class="roster-role">Plumbing</span>
              </div>
            </a>
            <a href="#" class="roster-item" data-aos="fade-up" data-aos-delay="300">
              <img src="assets/img/health/staff-9.webp" alt="Small Exterior Maintenance" loading="lazy">
              <div class="roster-info">
                <span class="roster-name">Small Exterior Maintenance</span>
                <span class="roster-role">Carpentry &amp; Walls</span>
              </div>
            </a>
            <a href="#" class="roster-item" data-aos="fade-up" data-aos-delay="350">
              <img src="assets/img/health/staff-11.webp" alt="Dr. Lucas Grant" loading="lazy">
              <div class="roster-info">
                <span class="roster-name">Dr. Lucas Grant</span>
                <span class="roster-role">Water Systems</span>
              </div>
            </a>
          </div>
        </div><!-- End Popular Services -->

        <!-- Doctor Details with Tabs -->
        <div class="profile-tabs mt-5">
          <div class="tabs-shell">
            <div class="row g-0">
              <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tabs-side">
                  <img src="assets/img/health/staff-4.webp" class="img-fluid" alt="Maintenance &amp; Punch Lists" loading="lazy">
                  <div class="tabs-side-body">
                    <span class="label-text muted">Service Details</span>
                    <h3 class="tabs-name">Maintenance &amp; Punch Lists</h3>
                    <p class="tabs-role">Maintenance &amp; Punch Lists</p>
                    <div class="badge-stack">
                      <span class="sh-badge">Trade Coordination</span>
                      <span class="sh-badge">Planned Work</span>
                    </div>
                    <div class="tabs-stats">
                      <div>
                        <strong>Service</strong>
                        <span>Category</span>
                      </div>
                      <div>
                        <strong>Sun City</strong>
                        <span>Primary Area</span>
                      </div>
                      <div>
                        <strong>Berry Creek</strong>
                        <span>Secondary Area</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                <div class="tabs-main">
                  <ul class="nav nav-pills sh-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#health-doctors-3-tab-1" type="button" role="tab" aria-controls="health-doctors-3-tab-1" aria-selected="true">Overview</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" data-bs-toggle="pill" data-bs-target="#health-doctors-3-tab-2" type="button" role="tab" aria-controls="health-doctors-3-tab-2" aria-selected="false">Request</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" data-bs-toggle="pill" data-bs-target="#health-doctors-3-tab-3" type="button" role="tab" aria-controls="health-doctors-3-tab-3" aria-selected="false">Scope</button>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="health-doctors-3-tab-1" role="tabpanel">
                      <p>Group the small repairs that accumulate around a home and discuss the most practical order for completing them.</p>
                      <ul class="check-list">
                        <li><i class="bi bi-check2-circle"></i> Home inspection repair lists</li>
                        <li><i class="bi bi-check2-circle"></i> Home sale punch lists</li>
                        <li><i class="bi bi-check2-circle"></i> Routine maintenance and small installations</li>
                      </ul>
                    </div>
                    <div class="tab-pane fade" id="health-doctors-3-tab-2" role="tabpanel">
                      <div class="schedule-grid">
                        <div class="slot">
                          <strong>Monday</strong>
                          <span>9:00 AM — 1:00 PM</span>
                        </div>
                        <div class="slot">
                          <strong>Tuesday</strong>
                          <span>12:00 PM — 6:00 PM</span>
                        </div>
                        <div class="slot">
                          <strong>Wednesday</strong>
                          <span>9:00 AM — 3:00 PM</span>
                        </div>
                        <div class="slot">
                          <strong>Thursday</strong>
                          <span>10:00 AM — 4:00 PM</span>
                        </div>
                        <div class="slot closed">
                          <strong>Friday</strong>
                          <span>Closed</span>
                        </div>
                      </div>
                      <div class="mt-3">
                        <a href="#" class="sh-btn primary"><i class="bi bi-calendar-event"></i> Reserve a Slot</a>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="health-doctors-3-tab-3" role="tabpanel">
                      <div class="review-card">
                        <div class="review-header">
                          <div class="stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                          </div>
                          <span class="review-meta">Service / 5 — based on 32 reviews</span>
                        </div>
                        <p>Id magna consequat minim in, lorem dolore fugiat. Officia irure ex anim, velit nulla cupidatat laboris enim.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Doctor Details with Tabs -->

      </div>

    </section><!-- /Doctors Section -->

  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>

<?php

declare(strict_types=1);

$pageKey = 'request-a-visit.php';
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
        <h1>Request a Home Repair Visit</h1>
        <p>Tell us what needs fixing, where your home is located, and when you would like us to visit.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Request a Visit Section -->
    <section id="request-a-visit" class="request-a-visit section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Process Stepper -->
        <div class="process-stepper mb-5" data-aos="fade-up" data-aos-delay="100">
          <div class="row g-0">

            <div class="col-lg-3 col-md-6">
              <div class="step-card">
                <div class="step-head">
                  <span class="step-badge">Step 01</span>
                  <span class="step-icon"><i class="bi bi-person"></i></span>
                </div>
                <h5>Tell Us What You Need</h5>
                <p>Share your contact details, service area, and the type of repair you need.</p>
              </div>
            </div><!-- End Step -->

            <div class="col-lg-3 col-md-6">
              <div class="step-card">
                <div class="step-head">
                  <span class="step-badge">Step 02</span>
                  <span class="step-icon"><i class="bi bi-calendar2-week"></i></span>
                </div>
                <h5>Share Timing</h5>
                <p>Choose the date you prefer. We'll let you know what is available.</p>
              </div>
            </div><!-- End Step -->

            <div class="col-lg-3 col-md-6">
              <div class="step-card">
                <div class="step-head">
                  <span class="step-badge">Step 03</span>
                  <span class="step-icon"><i class="bi bi-envelope-check"></i></span>
                </div>
                <h5>We Review the Request</h5>
                <p>We'll review the details and follow up to confirm the next step.</p>
              </div>
            </div><!-- End Step -->

            <div class="col-lg-3 col-md-6">
              <div class="step-card">
                <div class="step-head">
                  <span class="step-badge">Step 04</span>
                  <span class="step-icon"><i class="bi bi-activity"></i></span>
                </div>
                <h5>We Come to Your Home</h5>
                <p>Mark's Services provides in-home service and does not have a public walk-in office.</p>
              </div>
            </div><!-- End Step -->

          </div>
        </div><!-- End Process Stepper -->

        <div class="row gy-4">

          <!-- Service Request Form -->
          <div class="col-lg-7">
            <div class="form-card" data-aos="fade-up" data-aos-delay="150">

              <div class="form-card-header">
                <span class="badge-label">Service Request Form</span>
                <h3>Request a Home Repair Visit</h3>
                <p class="form-card-desc">Fill out the form below. Mark's Services will review it and follow up with you.</p>
              </div>

              <form action="forms/request-a-visit.php" method="post" class="service-request-form php-email-form">
                <div class="row gy-3">

                  <div class="col-md-6">
                    <div class="input-group">
                      <label for="app-name">Full Name</label>
                      <input type="text" name="name" id="app-name" class="form-control" placeholder="e.g. Jordan Reeves" required="">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group">
                      <label for="app-email">Email Address</label>
                      <input type="email" name="email" id="app-email" class="form-control" placeholder="name@example.com" required="">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group">
                      <label for="app-phone">Phone Number</label>
                      <input type="tel" name="phone" id="app-phone" class="form-control" placeholder="+1 (555) 000-0000" required="">
                      <span class="input-help">Used only to discuss this service request</span>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group">
                      <label for="app-date">Preferred Visit Date</label>
                      <input type="date" name="date" id="app-date" class="form-control" required="">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group">
                      <label for="app-service">Service Category</label>
                      <select name="service" id="app-service" class="form-select" required="">
                        <option value="">Choose a service</option>
                        <option value="plumbing-fixtures">Plumbing Fixtures</option>
                        <option value="water-systems">Water Systems</option>
                        <option value="electrical-lighting">Electrical &amp; Lighting</option>
                        <option value="security-smart-home">Security &amp; Smart Home</option>
                        <option value="doors-carpentry">Carpentry &amp; Wall Repairs</option>
                        <option value="wall-repairs-maintenance">Maintenance &amp; Punch Lists</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group">
                      <label for="app-area">Service Area</label>
                      <select name="service_area" id="app-area" class="form-select" required="">
                        <option value="">Choose an area</option>
                        <option value="sun-city-texas-78633">Sun City Texas 78633</option>
                        <option value="berry-creek-texas-78628">Berry Creek, Texas 78628</option>
                        <option value="georgetown-texas-78626">Georgetown, Texas 78626</option>
                        <option value="williamson-county-78627">Williamson County 78627</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="input-group">
                      <label for="app-message">What Needs Fixing? <span class="label-meta">Tell us what is happening</span></label>
                      <textarea class="form-control" name="message" id="app-message" rows="4" placeholder="Briefly describe the repair, installation, or maintenance you need..."></textarea>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your service request has been sent. Mark's Services will follow up after reviewing it.</div>

                    <div class="form-actions">
                      <button type="submit" class="btn btn-primary-action">
                        <i class="bi bi-calendar-plus"></i>
                        <span>Send Service Request</span>
                      </button>
                      <button type="reset" class="btn btn-ghost-action">Clear Form</button>
                    </div>
                  </div>

                </div>
              </form>
            </div>
          </div><!-- End Service Request Form -->

          <!-- Service Request Info -->
          <div class="col-lg-5">
            <aside class="info-stack">

              <div class="info-panel" data-aos="fade-up" data-aos-delay="200">
                <span class="badge-label">About Scheduling</span>
                <h4>A Simple Way to Request Service</h4>
                <p>Share a few details about the job and where your home is located.</p>
              </div>

              <ul class="feature-list" data-aos="fade-up" data-aos-delay="250">

                <li class="feature-row">
                  <span class="feature-icon"><i class="bi bi-calendar-check"></i></span>
                  <div class="feature-body">
                    <h6>Preferred Timing</h6>
                    <p>Suggest a date that works for you. We'll follow up to confirm availability.</p>
                  </div>
                </li><!-- End Feature -->

                <li class="feature-row">
                  <span class="feature-icon"><i class="bi bi-stopwatch"></i></span>
                  <div class="feature-body">
                    <h6>Clear Follow-Up</h6>
                    <p>Mark's Services will review your request and contact you about the next step.</p>
                  </div>
                </li><!-- End Feature -->

                <li class="feature-row">
                  <span class="feature-icon"><i class="bi bi-shield-check"></i></span>
                  <div class="feature-body">
                    <h6>The Right Help When Needed</h6>
                    <p>If the job requires a licensed plumber or electrician, we'll make sure the right professional is involved.</p>
                  </div>
                </li><!-- End Feature -->

              </ul>

              <div class="contact-panel" data-aos="fade-up" data-aos-delay="300">
                <div class="contact-head">
                  <span class="contact-icon"><i class="bi bi-telephone-fill"></i></span>
                  <span class="contact-tag">Call Mark's Services</span>
                </div>
                <h6>Prefer to Talk?</h6>
                <p>Call us and tell us what needs fixing. We do not advertise 24/7 emergency service.</p>
                <a href="tel:+15125490322" class="contact-phone">+1 (512) 549-0322</a>
              </div>

            </aside>
          </div><!-- End Service Request Info -->

        </div>

      </div>

    </section><!-- /Request a Visit Section -->

  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>

<?php

declare(strict_types=1);

$pageKey = 'appointment.php';
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
        <h1>Request a Service Visit</h1>
        <p>Describe the repair, service area, and preferred timing so Mark's Services can review the request.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Appointmnet Section -->
    <section id="appointmnet" class="appointmnet section">

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
                <h5>Describe the Project</h5>
                <p>Share contact details, the service area, and the home repair category that best fits.</p>
              </div>
            </div><!-- End Step -->

            <div class="col-lg-3 col-md-6">
              <div class="step-card">
                <div class="step-head">
                  <span class="step-badge">Step 02</span>
                  <span class="step-icon"><i class="bi bi-calendar2-week"></i></span>
                </div>
                <h5>Share Timing</h5>
                <p>Provide a preferred date so availability can be reviewed.</p>
              </div>
            </div><!-- End Step -->

            <div class="col-lg-3 col-md-6">
              <div class="step-card">
                <div class="step-head">
                  <span class="step-badge">Step 03</span>
                  <span class="step-icon"><i class="bi bi-envelope-check"></i></span>
                </div>
                <h5>Review Details</h5>
                <p>The request is reviewed before scheduling details are confirmed.</p>
              </div>
            </div><!-- End Step -->

            <div class="col-lg-3 col-md-6">
              <div class="step-card">
                <div class="step-head">
                  <span class="step-badge">Step 04</span>
                  <span class="step-icon"><i class="bi bi-activity"></i></span>
                </div>
                <h5>Home Service Visit</h5>
                <p>Mark's Services travels to the client's home; there is no public walk-in office.</p>
              </div>
            </div><!-- End Step -->

          </div>
        </div><!-- End Process Stepper -->

        <div class="row gy-4">

          <!-- Appointment Form -->
          <div class="col-lg-7">
            <div class="form-card" data-aos="fade-up" data-aos-delay="150">

              <div class="form-card-header">
                <span class="badge-label">Service Request Form</span>
                <h3>Request a Home Repair Visit</h3>
                <p class="form-card-desc">Provide the details below and Mark's Services will follow up after reviewing the project and service area.</p>
              </div>

              <form action="forms/appointment.php" method="post" class="appointment-form php-email-form">
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
                      <label for="app-department">Service Category</label>
                      <select name="department" id="app-department" class="form-select" required="">
                        <option value="">Choose a service</option>
                        <option value="cardiology">Plumbing Fixtures</option>
                        <option value="neurology">Water Systems</option>
                        <option value="orthopedics">Electrical &amp; Lighting</option>
                        <option value="pediatrics">Security &amp; Smart Home</option>
                        <option value="dermatology">Carpentry &amp; Wall Repairs</option>
                        <option value="general">Maintenance &amp; Punch Lists</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group">
                      <label for="app-doctor">Service Area</label>
                      <select name="doctor" id="app-doctor" class="form-select" required="">
                        <option value="">Choose an area</option>
                        <option value="dr-johnson">Sun City 78633</option>
                        <option value="dr-martinez">Berry Creek 78628</option>
                        <option value="dr-chen">Georgetown 78626</option>
                        <option value="dr-patel">Georgetown 78627</option>
                        <option value="dr-williams">Williamson County context</option>
                        <option value="dr-thompson">Not sure / discuss</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="input-group">
                      <label for="app-message">Project Details <span class="label-meta">Describe what needs attention</span></label>
                      <textarea class="form-control" name="message" id="app-message" rows="4" placeholder="Briefly describe your symptoms or concern..."></textarea>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your appointment request has been sent successfully. We will contact you shortly!</div>

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
          </div><!-- End Appointment Form -->

          <!-- Appointment Info -->
          <div class="col-lg-5">
            <aside class="info-stack">

              <div class="info-panel" data-aos="fade-up" data-aos-delay="200">
                <span class="badge-label">About Scheduling</span>
                <h4>Straightforward Service Requests</h4>
                <p>Share the project details in a few simple steps so the scope and service area can be reviewed.</p>
              </div>

              <ul class="feature-list" data-aos="fade-up" data-aos-delay="250">

                <li class="feature-row">
                  <span class="feature-icon"><i class="bi bi-calendar-check"></i></span>
                  <div class="feature-body">
                    <h6>Preferred Timing</h6>
                    <p>Suggest a date that works for you; final timing depends on availability and project scope.</p>
                  </div>
                </li><!-- End Feature -->

                <li class="feature-row">
                  <span class="feature-icon"><i class="bi bi-stopwatch"></i></span>
                  <div class="feature-body">
                    <h6>Clear Follow-Up</h6>
                    <p>Mark's Services follows up after reviewing the request; no instant or same-day confirmation is promised.</p>
                  </div>
                </li><!-- End Feature -->

                <li class="feature-row">
                  <span class="feature-icon"><i class="bi bi-shield-check"></i></span>
                  <div class="feature-body">
                    <h6>Trusted Service Areas</h6>
                    <p>Licensed-trade coordination is used when the project requires it.</p>
                  </div>
                </li><!-- End Feature -->

              </ul>

              <div class="emergency-panel" data-aos="fade-up" data-aos-delay="300">
                <div class="emergency-head">
                  <span class="emergency-icon"><i class="bi bi-telephone-fill"></i></span>
                  <span class="emergency-tag">Call Mark's Services</span>
                </div>
                <h6>Prefer to Discuss the Project?</h6>
                <p>Call during normal contact hours to describe the repair. This is not a 24/7 emergency service.</p>
                <a href="tel:+15125490322" class="emergency-phone">+1 (512) 549-0322</a>
              </div>

            </aside>
          </div><!-- End Appointment Info -->

        </div>

      </div>

    </section><!-- /Appointmnet Section -->

  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>

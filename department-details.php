<?php

declare(strict_types=1);

$pageKey = 'department-details.php';
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
        <h1>Department Details</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Department Details Section -->
    <section id="department-details" class="department-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="department-card" data-aos="fade-up" data-aos-delay="150">
          <div class="department-card-header">
            <div class="header-meta">
              <span class="badge">
                <i class="bi bi-heart-pulse"></i>
                <span>Cardiology</span>
              </span>
              <span class="status-pill">
                <span class="status-dot"></span>
                Now Accepting Patients
              </span>
            </div>
            <h1 class="department-title">Advanced Cardiovascular Institute</h1>
            <p class="department-lead">Donec sollicitudin molestie malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
            <div class="header-actions">
              <a href="appointment.php" class="btn-primary">
                <i class="bi bi-calendar-plus"></i>
                <span>Schedule a Visit</span>
              </a>
              <a href="tel:+15559876543" class="btn-ghost">
                <i class="bi bi-telephone"></i>
                <span>Emergency: +1 (555) 432-9870</span>
              </a>
            </div>
          </div>
        </div><!-- End Department Card -->

        <div class="stats-strip" data-aos="fade-up" data-aos-delay="200">
          <div class="row g-0">
            <div class="col-6 col-md-3">
              <div class="stat-cell">
                <span class="stat-label">Success Rate</span>
                <span class="stat-value">97%</span>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="stat-cell">
                <span class="stat-label">Patients Treated</span>
                <span class="stat-value">15K+</span>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="stat-cell">
                <span class="stat-label">Specialists</span>
                <span class="stat-value">42</span>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="stat-cell">
                <span class="stat-label">Years of Care</span>
                <span class="stat-value">28</span>
              </div>
            </div>
          </div>
        </div><!-- End Stats Strip -->

        <div class="row g-4 main-grid">

          <div class="col-lg-8">

            <div class="section-block" data-aos="fade-up" data-aos-delay="150">
              <div class="block-header">
                <span class="eyebrow">Specialized Services</span>
                <h2>Care built around the heart</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
              </div>

              <div class="row g-3 service-grid">
                <div class="col-md-6">
                  <article class="service-card">
                    <div class="service-icon">
                      <i class="bi bi-activity"></i>
                    </div>
                    <h3>Cardiac Surgery</h3>
                    <p>Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in.</p>
                    <a href="#" class="service-link">Learn more <i class="bi bi-arrow-right"></i></a>
                  </article>
                </div>
                <div class="col-md-6">
                  <article class="service-card">
                    <div class="service-icon">
                      <i class="bi bi-eye"></i>
                    </div>
                    <h3>Diagnostic Imaging</h3>
                    <p>Curabitur arcu erat accumsan id imperdiet et porttitor at sem mauris blandit aliquet.</p>
                    <a href="#" class="service-link">Learn more <i class="bi bi-arrow-right"></i></a>
                  </article>
                </div>
                <div class="col-md-6">
                  <article class="service-card">
                    <div class="service-icon">
                      <i class="bi bi-shield-plus"></i>
                    </div>
                    <h3>Preventive Wellness</h3>
                    <p>Nulla quis lorem ut libero malesuada feugiat ligula sed magna dictum porta vivamus.</p>
                    <a href="#" class="service-link">Learn more <i class="bi bi-arrow-right"></i></a>
                  </article>
                </div>
                <div class="col-md-6">
                  <article class="service-card">
                    <div class="service-icon">
                      <i class="bi bi-clipboard2-pulse"></i>
                    </div>
                    <h3>Rehabilitation</h3>
                    <p>Mauris blandit aliquet elit eget tincidunt nibh pulvinar a vivamus magna justo.</p>
                    <a href="#" class="service-link">Learn more <i class="bi bi-arrow-right"></i></a>
                  </article>
                </div>
              </div>
            </div><!-- End Services Block -->

            <div class="section-block" data-aos="fade-up" data-aos-delay="200">
              <div class="block-header">
                <span class="eyebrow">Why Choose Us</span>
                <h2>Expert care you can trust</h2>
                <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Mauris blandit aliquet elit eget tincidunt nibh.</p>
              </div>

              <ul class="feature-list">
                <li>
                  <i class="bi bi-check2"></i>
                  <div>
                    <strong>Catheterization Lab</strong>
                    <span>State-of-the-art cardiac catheterization facility staffed around the clock.</span>
                  </div>
                </li>
                <li>
                  <i class="bi bi-check2"></i>
                  <div>
                    <strong>Advanced Imaging</strong>
                    <span>Comprehensive diagnostic capabilities including 4D echocardiography.</span>
                  </div>
                </li>
                <li>
                  <i class="bi bi-check2"></i>
                  <div>
                    <strong>Minimally Invasive Procedures</strong>
                    <span>Robotic-assisted surgery options that reduce recovery time significantly.</span>
                  </div>
                </li>
                <li>
                  <i class="bi bi-check2"></i>
                  <div>
                    <strong>Rehabilitation Programs</strong>
                    <span>Personalized post-procedure recovery and long-term wellness planning.</span>
                  </div>
                </li>
              </ul>
            </div><!-- End Trust Block -->

          </div><!-- End Main Column -->

          <div class="col-lg-4">

            <aside class="sidebar-stack" data-aos="fade-up" data-aos-delay="250">

              <div class="side-card visual-card">
                <img src="assets/img/health/cardiology-3.webp" alt="Cardiology Department" class="img-fluid" loading="lazy">
                <div class="visual-meta">
                  <span class="badge">Department Tour</span>
                  <p>Take a virtual walk through our facility and meet the team behind every procedure.</p>
                </div>
              </div><!-- End Visual Card -->

              <div class="side-card">
                <div class="side-card-header">
                  <h3>Department Hours</h3>
                  <p>Walk-in evaluations available during business hours.</p>
                </div>
                <ul class="hours-list">
                  <li>
                    <span>Mon — Fri</span>
                    <span>7:00 AM – 8:00 PM</span>
                  </li>
                  <li>
                    <span>Saturday</span>
                    <span>8:00 AM – 5:00 PM</span>
                  </li>
                  <li>
                    <span>Sunday</span>
                    <span>Emergency Only</span>
                  </li>
                </ul>
              </div><!-- End Hours Card -->

              <div class="side-card">
                <div class="side-card-header">
                  <h3>Quick Links</h3>
                  <p>Useful resources for new and returning patients.</p>
                </div>
                <ul class="link-list">
                  <li>
                    <a href="services.php">
                      <span>All Cardiology Services</span>
                      <i class="bi bi-arrow-up-right"></i>
                    </a>
                  </li>
                  <li>
                    <a href="doctors.php">
                      <span>Meet Our Specialists</span>
                      <i class="bi bi-arrow-up-right"></i>
                    </a>
                  </li>
                  <li>
                    <a href="insurance.php">
                      <span>Insurance Information</span>
                      <i class="bi bi-arrow-up-right"></i>
                    </a>
                  </li>
                  <li>
                    <a href="patient-portal.php">
                      <span>Patient Portal</span>
                      <i class="bi bi-arrow-up-right"></i>
                    </a>
                  </li>
                </ul>
              </div><!-- End Links Card -->

            </aside>

          </div><!-- End Sidebar -->

        </div><!-- End Main Grid -->

      </div>

    </section><!-- /Department Details Section -->

  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>

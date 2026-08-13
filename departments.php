<?php

declare(strict_types=1);

$pageKey = 'departments.php';
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
        <h1>Departments</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Departments Section -->
    <section id="departments" class="departments section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-3">

          <!-- Department Card -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <article class="dept-card">
              <div class="dept-card-media">
                <img src="assets/img/health/cardiology-2.webp" alt="Cardiology Department" class="img-fluid" loading="lazy">
                <span class="dept-tag">Heart &amp; Vascular</span>
              </div>
              <div class="dept-card-body">
                <header class="dept-card-head">
                  <span class="dept-icon-box">
                    <i class="fas fa-heartbeat"></i>
                  </span>
                  <div>
                    <h3 class="dept-card-title">Cardiology</h3>
                    <p class="dept-card-meta">Department 01</p>
                  </div>
                </header>
                <p class="dept-card-desc">Pellentesque habitant morbi tristique senectus et netus malesuada fames egestas vestibulum tortor quam feugiat vitae.</p>
                <ul class="dept-feature-list">
                  <li><i class="fas fa-check"></i> 24/7 Emergency</li>
                  <li><i class="fas fa-check"></i> Advanced Diagnostics</li>
                </ul>
              </div>
              <footer class="dept-card-foot">
                <a href="#" class="dept-link-btn">
                  <span>Discover More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </footer>
            </article>
          </div><!-- End Department Card -->

          <!-- Department Card -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
            <article class="dept-card">
              <div class="dept-card-media">
                <img src="assets/img/health/neurology-3.webp" alt="Neurology Department" class="img-fluid" loading="lazy">
                <span class="dept-tag">Brain &amp; Nervous System</span>
              </div>
              <div class="dept-card-body">
                <header class="dept-card-head">
                  <span class="dept-icon-box">
                    <i class="fas fa-brain"></i>
                  </span>
                  <div>
                    <h3 class="dept-card-title">Neurology</h3>
                    <p class="dept-card-meta">Department 02</p>
                  </div>
                </header>
                <p class="dept-card-desc">Lorem ipsum dolor sit amet consectetur adipiscing elit sed eiusmod tempor incididunt labore dolore magna aliqua enim.</p>
                <ul class="dept-feature-list">
                  <li><i class="fas fa-check"></i> MRI Available</li>
                  <li><i class="fas fa-check"></i> Specialist Team</li>
                </ul>
              </div>
              <footer class="dept-card-foot">
                <a href="#" class="dept-link-btn">
                  <span>Discover More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </footer>
            </article>
          </div><!-- End Department Card -->

          <!-- Department Card -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <article class="dept-card">
              <div class="dept-card-media">
                <img src="assets/img/health/orthopedics-4.webp" alt="Orthopedics Department" class="img-fluid" loading="lazy">
                <span class="dept-tag">Bones &amp; Joints</span>
              </div>
              <div class="dept-card-body">
                <header class="dept-card-head">
                  <span class="dept-icon-box">
                    <i class="fas fa-bone"></i>
                  </span>
                  <div>
                    <h3 class="dept-card-title">Orthopedics</h3>
                    <p class="dept-card-meta">Department 03</p>
                  </div>
                </header>
                <p class="dept-card-desc">Ut enim ad minim veniam quis nostrud exercitation ullamco laboris aliquip commodo consequat duis aute irure.</p>
                <ul class="dept-feature-list">
                  <li><i class="fas fa-check"></i> Sports Medicine</li>
                  <li><i class="fas fa-check"></i> Joint Replacement</li>
                </ul>
              </div>
              <footer class="dept-card-foot">
                <a href="#" class="dept-link-btn">
                  <span>Discover More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </footer>
            </article>
          </div><!-- End Department Card -->

          <!-- Department Card -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <article class="dept-card">
              <div class="dept-card-media">
                <img src="assets/img/health/pediatrics-2.webp" alt="Pediatrics Department" class="img-fluid" loading="lazy">
                <span class="dept-tag">Children's Health</span>
              </div>
              <div class="dept-card-body">
                <header class="dept-card-head">
                  <span class="dept-icon-box">
                    <i class="fas fa-baby"></i>
                  </span>
                  <div>
                    <h3 class="dept-card-title">Pediatrics</h3>
                    <p class="dept-card-meta">Department 04</p>
                  </div>
                </header>
                <p class="dept-card-desc">Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim laborum vero.</p>
                <ul class="dept-feature-list">
                  <li><i class="fas fa-check"></i> Child-Friendly</li>
                  <li><i class="fas fa-check"></i> Vaccination Center</li>
                </ul>
              </div>
              <footer class="dept-card-foot">
                <a href="#" class="dept-link-btn">
                  <span>Discover More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </footer>
            </article>
          </div><!-- End Department Card -->

          <!-- Department Card -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article class="dept-card">
              <div class="dept-card-media">
                <img src="assets/img/health/laboratory-3.webp" alt="Laboratory Department" class="img-fluid" loading="lazy">
                <span class="dept-tag">Diagnostic Services</span>
              </div>
              <div class="dept-card-body">
                <header class="dept-card-head">
                  <span class="dept-icon-box">
                    <i class="fas fa-microscope"></i>
                  </span>
                  <div>
                    <h3 class="dept-card-title">Laboratory</h3>
                    <p class="dept-card-meta">Department 05</p>
                  </div>
                </header>
                <p class="dept-card-desc">Nulla facilisi morbi tempus iaculis urna volutpat lacus laoreet curabitur gravida arcu tortor dignissim sapien.</p>
                <ul class="dept-feature-list">
                  <li><i class="fas fa-check"></i> Quick Results</li>
                  <li><i class="fas fa-check"></i> Digital Reports</li>
                </ul>
              </div>
              <footer class="dept-card-foot">
                <a href="#" class="dept-link-btn">
                  <span>Discover More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </footer>
            </article>
          </div><!-- End Department Card -->

          <!-- Department Card -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
            <article class="dept-card">
              <div class="dept-card-media">
                <img src="assets/img/health/emergency-4.webp" alt="Emergency Department" class="img-fluid" loading="lazy">
                <span class="dept-tag">24/7 Critical Care</span>
              </div>
              <div class="dept-card-body">
                <header class="dept-card-head">
                  <span class="dept-icon-box">
                    <i class="fas fa-heartbeat"></i>
                  </span>
                  <div>
                    <h3 class="dept-card-title">Emergency</h3>
                    <p class="dept-card-meta">Department 06</p>
                  </div>
                </header>
                <p class="dept-card-desc">Convallis tellus interdum velit laoreet donec ultrices tincidunt arcu sodales neque etiam tristique senectus mauris.</p>
                <ul class="dept-feature-list">
                  <li><i class="fas fa-check"></i> Round-the-Clock</li>
                  <li><i class="fas fa-check"></i> Trauma Center</li>
                </ul>
              </div>
              <footer class="dept-card-foot">
                <a href="#" class="dept-link-btn">
                  <span>Discover More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </footer>
            </article>
          </div><!-- End Department Card -->

        </div>

      </div>

    </section><!-- /Departments Section -->

  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>

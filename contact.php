<?php

declare(strict_types=1);

$pageKey = 'contact.php';
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
        <h1>Contact Mark's Services</h1>
        <p>Request client-location service for a Sun City or Berry Creek home. No public storefront or walk-in office.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 contact-grid">
          <div class="col-lg-5">
            <div class="contact-panel" data-aos="fade-up" data-aos-delay="150">
              <div class="panel-header">
                <span class="badge-label">Contact Mark's Services</span>
                <h3 class="panel-title">Discuss a Home Repair Project</h3>
                <p class="panel-description">Share the repair, service area, and preferred timing. Mark's Services will follow up after reviewing the project details.</p>
              </div>

              <ul class="contact-list">
                <li class="contact-list-item">
                  <div class="item-icon"><i class="bi bi-geo-alt"></i></div>
                  <div class="item-content">
                    <span class="item-label">Service Area Business</span>
                    <p class="item-value">Client-location work only<br>No public storefront or walk-in office</p>
                  </div>
                </li>
                <li class="contact-list-item">
                  <div class="item-icon"><i class="bi bi-telephone"></i></div>
                  <div class="item-content">
                    <span class="item-label">Phone</span>
                    <p class="item-value">+1 (512) 549-0322<br>Sun City &amp; Berry Creek</p>
                  </div>
                </li>
                <li class="contact-list-item">
                  <div class="item-icon"><i class="bi bi-envelope"></i></div>
                  <div class="item-content">
                    <span class="item-label">Email</span>
                    <p class="item-value">office@MarksServices.com<br>Project details welcome</p>
                  </div>
                </li>
                <li class="contact-list-item">
                  <div class="item-icon"><i class="bi bi-clock"></i></div>
                  <div class="item-content">
                    <span class="item-label">Scheduling</span>
                    <p class="item-value">Visits are scheduled by request<br>Availability confirmed after review</p>
                  </div>
                </li>
              </ul>

              <div class="panel-footer">
                <span class="footer-label">Follow us</span>
                <div class="social-links">
                  <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                  <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                </div>
              </div>
            </div><!-- End Contact Panel -->
          </div>

          <div class="col-lg-7">
            <div class="form-card" data-aos="fade-up" data-aos-delay="200">
              <div class="card-header">
                <h3 class="card-title">Send a Service Request</h3>
                <p class="card-description">Use the form below to describe the home repair project and preferred timing.</p>
              </div>

              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="input-group">
                      <label for="contact-name">Full Name</label>
                      <input type="text" id="contact-name" name="name" class="form-control" placeholder="Jane Doe" required="" autocomplete="name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <label for="contact-email">Email</label>
                      <input type="email" id="contact-email" name="email" class="form-control" placeholder="jane@example.com" required="" autocomplete="email">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="input-group">
                      <label for="contact-subject">Service Category</label>
                      <input type="text" id="contact-subject" name="subject" class="form-control" placeholder="How can we help?" required="">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="input-group">
                      <label for="contact-message">Project Details</label>
                      <textarea id="contact-message" name="message" class="form-control" rows="6" placeholder="Type your message here..." required=""></textarea>
                      <span class="input-description">Include the item, symptoms, location, and any HOA or access considerations.</span>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                    <button type="submit" class="submit-btn">Send Request <i class="bi bi-arrow-right"></i></button>
                  </div>
                </div>
              </form>
            </div><!-- End Form Card -->

            <div class="map-card" data-aos="fade-up" data-aos-delay="250">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.4770376449556!2d-117.39905292424607!3d33.978802323820714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcb1f5d8fb6c75%3A0xd9d73340c90a71c6!2s4582%20Magnolia%20Ave%2C%20Riverside%2C%20CA%2092506!5e0!3m2!1sen!2sus!4v1692395638095!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Map Card -->
          </div>
        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>

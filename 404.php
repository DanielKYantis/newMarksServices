<?php

declare(strict_types=1);

$pageKey = '404.php';
require __DIR__ . '/includes/header.php';
?>

<main class="main">

    <!-- Error 404 Section -->
    <section id="error-404" class="error-404 section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="error-card" data-aos="fade-up" data-aos-delay="100">

              <div class="card-header-block">
                <span class="status-badge" data-aos="fade-up" data-aos-delay="150">
                  <span class="badge-dot"></span>
                  Error 404
                </span>
                <span class="meta-label">HTTP Status</span>
              </div>

              <div class="card-content-block">
                <div class="row align-items-center g-4">
                  <div class="col-md-4">
                    <div class="error-visual" data-aos="fade-up" data-aos-delay="200">
                      <div class="visual-frame">
                        <i class="bi bi-exclamation-circle"></i>
                      </div>
                      <div class="error-numeric">404</div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="error-info">
                      <h2 class="error-headline" data-aos="fade-up" data-aos-delay="200">This home service page could not be found</h2>
                      <p class="error-description" data-aos="fade-up" data-aos-delay="250">
                        The page may have moved or the link may be outdated. Use the search field or return to the Mark's Services home page.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-divider"></div>

              <div class="card-form-block" data-aos="fade-up" data-aos-delay="300">
                <label for="site-search" class="form-label-text">Search home services</label>
                <form action="forms/contact.php" class="php-email-form site-search-form">
                  <div class="search-row">
                    <div class="search-input-wrap">
                      <i class="bi bi-search input-icon"></i>
                      <input type="text" id="site-search" name="query" class="form-control" placeholder="Type a keyword or page name" aria-label="Search" autocomplete="off">
                    </div>
                    <button class="btn btn-search" type="submit">Search</button>
                  </div>
                  <p class="input-helper-text">Try terms like "plumbing", "lighting", "water heater", or "punch list"</p>
                </form>
              </div>

              <div class="card-divider"></div>

              <div class="card-footer-block" data-aos="fade-up" data-aos-delay="350">
                <span class="footer-label">Continue browsing</span>
                <div class="footer-actions">
                  <a href="#" class="btn btn-ghost">
                    <i class="bi bi-arrow-left"></i>
                    Go Back
                  </a>
                  <a href="/" class="btn btn-primary-shadcn">
                    <i class="bi bi-house"></i>
                    Return Home
                  </a>
                </div>
              </div>

            </div><!-- End Error Card -->

            <div class="helpful-links" data-aos="fade-up" data-aos-delay="400">
              <span class="helpful-label">Suggested destinations</span>
              <div class="links-grid">
                <a href="#" class="helpful-link">
                  <i class="bi bi-grid"></i>
                  <span>Home Services</span>
                  <i class="bi bi-arrow-up-right link-arrow"></i>
                </a>
                <a href="#" class="helpful-link">
                  <i class="bi bi-book"></i>
                  <span>Service Areas</span>
                  <i class="bi bi-arrow-up-right link-arrow"></i>
                </a>
                <a href="#" class="helpful-link">
                  <i class="bi bi-chat-dots"></i>
                  <span>Contact Mark's Services</span>
                  <i class="bi bi-arrow-up-right link-arrow"></i>
                </a>
                <a href="#" class="helpful-link">
                  <i class="bi bi-bookmark"></i>
                  <span>Common Questions</span>
                  <i class="bi bi-arrow-up-right link-arrow"></i>
                </a>
              </div>
            </div><!-- End Helpful Links -->

          </div>
        </div>

      </div>

    </section><!-- /Error 404 Section -->

  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>

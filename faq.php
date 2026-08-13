<?php

declare(strict_types=1);

$pageKey = 'faq.php';
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
        <h1>Frequently Asked Questions</h1>
        <p>Answers about service areas, project scope, scheduling, exterior requirements, and licensed-trade coordination.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

            <aside class="faq-sidebar">
              <span class="sidebar-badge">Home Repair FAQ</span>
              <h3 class="sidebar-title">Common Home Service Questions</h3>
              <p class="sidebar-desc">Review common questions about service areas, project scope, scheduling, requirements, and licensed-trade coordination.</p>

              <div class="sidebar-divider"></div>

              <ul class="sidebar-meta">
                <li><i class="bi bi-clock"></i><span>Requests reviewed before scheduling</span></li>
                <li><i class="bi bi-shield-check"></i><span>Scope confirmed for each project</span></li>
                <li><i class="bi bi-chat-dots"></i><span>Phone and contact form available</span></li>
              </ul>

              <a href="#contact" class="sidebar-cta">
                <span>Contact Mark's Services</span>
                <i class="bi bi-arrow-up-right"></i>
              </a>
            </aside>

          </div><!-- End Sidebar -->

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <div class="faq-container">

              <div class="faq-item faq-active">
                <div class="faq-meta">
                  <span class="faq-index">01</span>
                  <span class="faq-tag">Service Request</span>
                </div>
                <h3>How do I request a home repair visit?</h3>
                <div class="faq-content">
                  <p>Use the contact form or call Mark's Services. Describe the repair, your Sun City or Berry Creek location, and any timing or access details that may help with review.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-down"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <div class="faq-meta">
                  <span class="faq-index">02</span>
                  <span class="faq-tag">Project Scope</span>
                </div>
                <h3>What kinds of home repair projects do you handle?</h3>
                <div class="faq-content">
                  <p>Approved work includes plumbing fixtures, water systems, electrical devices, lighting, security equipment, doors, trim, drywall, mounting, maintenance, and punch-list items.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-down"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <div class="faq-meta">
                  <span class="faq-index">03</span>
                  <span class="faq-tag">Service Areas</span>
                </div>
                <h3>Where does Mark's Services work?</h3>
                <div class="faq-content">
                  <p>Visible service-area focus is Sun City 78633 and Berry Creek 78628. Georgetown ZIPs 78626 and 78627 provide nearby search context. Work is performed at the client's location.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-down"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <div class="faq-meta">
                  <span class="faq-index">04</span>
                  <span class="faq-tag">Requirements</span>
                </div>
                <h3>Do exterior projects require HOA or permit review?</h3>
                <div class="faq-content">
                  <p>Exterior cameras, video doorbells, lighting, conduit, EV chargers, and visible work may require review. Confirm HOA, permit, utility, and manufacturer requirements before work.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-down"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <div class="faq-meta">
                  <span class="faq-index">05</span>
                  <span class="faq-tag">Licensed Work</span>
                </div>
                <h3>When is a licensed trade or coordination required?</h3>
                <div class="faq-content">
                  <p>Projects involving regulated electrical, plumbing, EV charging, or other licensed scope are performed only when properly licensed or coordinated with the appropriate trade.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-down"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <div class="faq-meta">
                  <span class="faq-index">06</span>
                  <span class="faq-tag">Scheduling</span>
                </div>
                <h3>Do you offer same-day or 24/7 emergency service?</h3>
                <div class="faq-content">
                  <p>The site does not claim same-day or 24/7 emergency service. Send the project details and preferred timing; scheduling is confirmed after review.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-down"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section -->

  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>

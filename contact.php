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
        <p>Call or send a request for in-home service in Sun City or Berry Creek. We do not have a public walk-in office.</p>
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
                <h3 class="panel-title">Tell Us What Needs Fixing</h3>
                <p class="panel-description">Share the problem, your service area, and when you prefer a visit. Mark's Services will review the details and follow up.</p>
              </div>

              <ul class="contact-list">
                <li class="contact-list-item">
                  <div class="item-icon"><i class="bi bi-geo-alt"></i></div>
                  <div class="item-content">
                    <span class="item-label">In-Home Service</span>
                    <p class="item-value">We come to your home<br>No public storefront or walk-in office</p>
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
                    <p class="item-value">office@MarksServices.com<br>Tell us what needs fixing</p>
                  </div>
                </li>
                <li class="contact-list-item">
                  <div class="item-icon"><i class="bi bi-clock"></i></div>
                  <div class="item-content">
                    <span class="item-label">Scheduling</span>
                    <p class="item-value">Visits are scheduled by request<br>We'll confirm availability</p>
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
                <h3 class="card-title">Request a Home Repair Visit</h3>
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
                      <span class="input-description">Include the item, condition, location, and any HOA or access considerations.</span>
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
              <div class="map-card-header">
                <div>
                  <span class="badge-label">Service Area Map</span>
                  <h3>Home repair service around Georgetown</h3>
                </div>
                <p>Three primary areas are shown in separate colors.</p>
              </div>

              <div id="service-area-map" class="service-area-map" role="region" aria-label="Interactive map of approximate service areas for Sun City Texas, Berry Creek, and Georgetown"></div>

              <nav class="service-area-legend" aria-label="Service area map legend">
                <a class="legend-item legend-sun-city" href="sun-city-texas-home-repair.php">
                  <span class="legend-swatch" aria-hidden="true"></span>
                  <span><strong>Sun City Texas</strong><small>78633</small></span>
                </a>
                <a class="legend-item legend-berry-creek" href="berry-creek-texas-home-repair.php">
                  <span class="legend-swatch" aria-hidden="true"></span>
                  <span><strong>Berry Creek</strong><small>78628</small></span>
                </a>
                <a class="legend-item legend-georgetown" href="georgetown-texas-home-repair.php">
                  <span class="legend-swatch" aria-hidden="true"></span>
                  <span><strong>Georgetown</strong><small>78626 &amp; 78627</small></span>
                </a>
              </nav>
              <p class="map-note">Highlighted areas are approximate. Contact Mark's Services to confirm availability for your address.</p>
              <noscript><p class="map-note">Enable JavaScript to view the interactive map. The service-area links above remain available.</p></noscript>
            </div><!-- End Map Card -->
          </div>
        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const mapElement = document.getElementById('service-area-map');

    if (!mapElement || typeof L === 'undefined') {
      return;
    }

    const map = L.map(mapElement, {
      scrollWheelZoom: false,
      zoomControl: true
    }).setView([30.67500, -97.69000], 11);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    const serviceAreas = [
      {
        name: 'Sun City Texas',
        zip: '78633',
        center: [30.71513, -97.71642],
        radius: 2600,
        color: '#087fbe',
        tooltipDirection: 'left',
        route: 'sun-city-texas-home-repair.php'
      },
      {
        name: 'Berry Creek',
        zip: '78628',
        center: [30.71042, -97.66550],
        radius: 1750,
        color: '#7b2cbf',
        tooltipDirection: 'right',
        route: 'berry-creek-texas-home-repair.php'
      },
      {
        name: 'Georgetown',
        zip: '78626 & 78627',
        center: [30.63326, -97.67798],
        radius: 4200,
        color: '#c45d00',
        tooltipDirection: 'center',
        route: 'georgetown-texas-home-repair.php'
      }
    ];

    const bounds = L.latLngBounds();

    serviceAreas.forEach(function (area) {
      const circle = L.circle(area.center, {
        radius: area.radius,
        color: area.color,
        weight: 3,
        fillColor: area.color,
        fillOpacity: 0.24
      }).addTo(map);

      circle.bindTooltip(area.name, {
        permanent: true,
        direction: area.tooltipDirection,
        className: 'service-area-map-label'
      });

      circle.bindPopup(
        '<strong>' + area.name + '</strong><br>' + area.zip +
        '<br><a href="' + area.route + '">View service-area details</a>'
      );

      bounds.extend(circle.getBounds());
    });

    map.fitBounds(bounds, { padding: [24, 24] });
  });
</script>

<?php require __DIR__ . '/includes/footer.php'; ?>

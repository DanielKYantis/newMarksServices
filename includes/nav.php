<?php

declare(strict_types=1);
?>
<nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active <?= is_active($pageKey, 'index.php') ?>">Home</a></li>
          <li><a href="about.php" class="<?= is_active($pageKey, 'about.php') ?>">About</a></li>
          <!-- <li><a href="departments.php" class="<?= is_active($pageKey, 'departments.php') ?>">Locations</a></li> -->
          <li class="dropdown"><a href="#"><span>Locations</span>
              <!-- <i class="bi bi-chevron-down toggle-dropdown"></i> -->
            </a>
            <ul>
              <li><a href="#">Sun City Texas 78633</a></li>
              <li><a href="#">Berry Creek Texas 78628</a></li>
              <li><a href="#">Georgetown Texas 78626</a></li>
              <li><a href="#">Williamson County 78627</a></li>
            </ul>
          </li>
          <li><a href="services.php" class="<?= is_active($pageKey, 'services.php') ?>">Services</a></li>
          <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="dropdown-active">
              <!-- <li><a href="department-details.php" class="<?= is_active($pageKey, 'department-details.php') ?>">Service Area Details</a></li> -->
              <!-- <li><a href="service-details.php" class="<?= is_active($pageKey, 'service-details.php') ?>">Service Details</a></li> -->
              <li><a href="appointment.php" class="<?= is_active($pageKey, 'appointment.php') ?>">Appointments</a></li>
              <li><a href="testimonials.php" class="<?= is_active($pageKey, 'testimonials.php') ?>">Testimonials</a></li>
              <li><a href="faq.php" class="<?= is_active($pageKey, 'faq.php') ?>">FAQs (Questions)</a></li>
              <li><a href="doctors.php" class="<?= is_active($pageKey, 'doctors.php') ?>">Meat The Team</a></li>
              <li><a href="gallery.php" class="<?= is_active($pageKey, 'gallery.php') ?>">Photo Gallery</a></li>
              <li><a href="terms.php" class="<?= is_active($pageKey, 'terms.php') ?>">Terms of Service</a></li>
              <li><a href="privacy.php" class="<?= is_active($pageKey, 'privacy.php') ?>">Privacy Notice</a></li>
              <!-- <li><a href="404.php" class="<?= is_active($pageKey, '404.php') ?>">404</a></li> -->
            </ul>
          </li>
          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
      <ul>
        <li><a href="#">Dropdown 1</a></li>
        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#">Deep Dropdown 1</a></li>
            <li><a href="#">Deep Dropdown 2</a></li>
            <li><a href="#">Deep Dropdown 3</a></li>
            <li><a href="#">Deep Dropdown 4</a></li>
            <li><a href="#">Deep Dropdown 5</a></li>
          </ul>
        </li>
        <li><a href="#">Dropdown 2</a></li>
        <li><a href="#">Dropdown 3</a></li>
        <li><a href="#">Dropdown 4</a></li>
      </ul>
    </li> -->
          <!-- <li><a href="contact.php" class="<?= is_active($pageKey, 'contact.php') ?>">Contact</a></li> -->
          <!-- <a class="btn-getstarted <?= is_active($pageKey, 'appointment.php') ?>" href="appointment.php">Contact</a> -->
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

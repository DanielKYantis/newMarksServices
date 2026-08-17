<?php
declare(strict_types=1);
$pageKey = 'service-planning.php';
require __DIR__ . '/includes/header.php';
$planningGroups = [
    ['name' => 'Plumbing', 'image' => 'assets/img/services/plumbing.webp', 'href' => 'services.php#plumbing-fixtures', 'description' => 'Faucets, sinks, toilets, drains, disposals, appliance water lines, bidets, hose bibs, and minor leaks.'],
    ['name' => 'Water Systems', 'image' => 'assets/img/services/water.webp', 'href' => 'services.php#water-systems', 'description' => 'Water heaters, small point-of-use heaters, water softeners, whole-house filters, reverse osmosis, and low-water-flow problems.'],
    ['name' => 'Electrical & Lighting', 'image' => 'assets/img/services/lighting.webp', 'href' => 'services.php#electrical-lighting', 'description' => 'Lights, ceiling fans, switches, outlets, GFCIs, doorbells, smoke detectors, media outlets, and garage lights.'],
    ['name' => 'Home Security', 'image' => 'assets/img/services/security.webp', 'href' => 'services.php#security-smart-home', 'description' => 'Video doorbells, cameras, smart locks, and compatible security panels. Check HOA and other rules before visible outdoor work.'],
    ['name' => 'Doors & Small Carpentry', 'image' => 'assets/img/services/doors.webp', 'href' => 'services.php#doors-carpentry', 'description' => 'Doors, locks, storm and sliding doors, cabinet hardware, trim, shelving, closets, vanities, and small repairs.'],
    ['name' => 'Home Maintenance', 'image' => 'assets/img/services/drywall.webp', 'href' => 'services.php#wall-repairs-maintenance', 'description' => 'Drywall, texture, mounting, grab bars, inspection repairs, home-sale punch lists, and other small jobs.'],
];
?>
<main class="main">
  <div class="page-title light-background"><div class="title-wrapper"><h1>Plan a Home Repair Visit</h1><p>Tell us what needs fixing, where your home is located, and when you would like us to visit.</p></div></div>
  <section id="service-planning" class="service-planning section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="featured-card mb-5">
        <div class="row g-0 align-items-stretch">
          <div class="col-lg-5"><div class="featured-media"><img src="assets/img/services/visit.webp" class="img-fluid" alt="Home repair visit planning" loading="lazy"><span class="status-pill"><i class="bi bi-circle-fill"></i>In-home service</span></div></div>
          <div class="col-lg-7"><div class="featured-body"><div class="label-row"><span class="label-text">Plan the Visit</span><span class="divider-dot"></span><span class="label-text muted">Four service areas</span></div><h2 class="featured-name">A few details help us understand the job</h2><p class="featured-credentials">Sun City Texas 78633 · Berry Creek, Texas 78628 · Georgetown, Texas 78626 · Williamson County 78627</p><p class="featured-bio">Tell us what needs attention, where your home is located, and when you prefer a visit. Photos can also help if we ask for them. For outdoor work, tell us about any HOA, permit, utility, or manufacturer rules you know about.</p><ul class="featured-highlights"><li><i class="bi bi-check2-circle"></i><span>We review the job before scheduling</span></li><li><i class="bi bi-check2-circle"></i><span>Licensed professionals are involved when required</span></li><li><i class="bi bi-check2-circle"></i><span>We come to your home</span></li></ul><div class="d-flex gap-2 flex-wrap"><a href="request-a-visit.php" class="sh-btn primary"><i class="bi bi-calendar2-check"></i>Request a Visit</a><a href="services.php" class="sh-btn ghost"><i class="bi bi-list-check"></i>View Our Services</a></div></div></div>
        </div>
      </div>

      <div class="service-directory">
        <div class="directory-header"><div><span class="label-text">Main Services</span><h2>Choose the service that sounds closest</h2><p>Not sure which service you need? Call us and tell us what's going on.</p></div></div>
        <div class="row g-3 mt-2">
          <?php foreach ($planningGroups as $index => $group): ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= e((string) (100 + ($index % 3) * 50)) ?>">
              <article class="service-plan-card"><div class="card-top"><img src="<?= e($group['image']) ?>" class="avatar" alt="" loading="lazy"><div class="card-headline"><h3 class="name"><?= e($group['name']) ?></h3><p class="role">Home repair service</p></div></div><p class="card-desc"><?= e($group['description']) ?></p><div class="card-meta"><span class="meta-item"><i class="bi bi-house"></i>At your home</span><span class="meta-item"><i class="bi bi-clipboard-check"></i>Job reviewed</span></div><div class="card-footer"><a href="<?= e($group['href']) ?>" class="sh-btn ghost sm">Details</a><div class="footer-actions"><a href="request-a-visit.php" class="sh-btn primary sm">Request</a></div></div></article>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>

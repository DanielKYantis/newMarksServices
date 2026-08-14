<?php
declare(strict_types=1);
$pageKey = 'service-planning.php';
require __DIR__ . '/includes/header.php';
$planningGroups = [
    ['name' => 'Plumbing Fixture Repairs', 'image' => 'assets/img/services/plumbing.webp', 'href' => 'services.php#plumbing-fixtures', 'description' => 'Faucets, sinks, toilets, drains, disposals, appliance water lines, bidets, hose bibs, and minor leak troubleshooting.'],
    ['name' => 'Water Heaters & Filtration', 'image' => 'assets/img/services/water.webp', 'href' => 'services.php#water-systems', 'description' => 'Water heaters, point-of-use units, softeners, whole-house filters, reverse osmosis, and water-flow troubleshooting.'],
    ['name' => 'Electrical & Lighting', 'image' => 'assets/img/services/lighting.webp', 'href' => 'services.php#electrical-lighting', 'description' => 'Lights, fans, switches, outlets, GFCIs, doorbells, detectors, media outlets, garage lights, and licensed coordination.'],
    ['name' => 'Security & Smart Home', 'image' => 'assets/img/services/security.webp', 'href' => 'services.php#security-smart-home', 'description' => 'Video doorbells, cameras, smart locks, compatible panels, and requirement checks for visible exterior work.'],
    ['name' => 'Doors & Small Carpentry', 'image' => 'assets/img/services/doors.webp', 'href' => 'services.php#doors-carpentry', 'description' => 'Doors, locks, storm and sliding doors, cabinet hardware, trim, shelving, closets, vanities, and small repairs.'],
    ['name' => 'Wall Repairs & Punch Lists', 'image' => 'assets/img/services/drywall.webp', 'href' => 'services.php#wall-repairs-maintenance', 'description' => 'Drywall, texture, mounting, grab bars, inspection repairs, home sale punch lists, and practical maintenance tasks.'],
];
?>
<main class="main">
  <div class="page-title light-background"><div class="title-wrapper"><h1>Home Repair Service Planning</h1><p>Start with the project, service area, property requirements, and the right service category.</p></div></div>
  <section id="service-planning" class="service-planning section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="featured-card mb-5">
        <div class="row g-0 align-items-stretch">
          <div class="col-lg-5"><div class="featured-media"><img src="assets/img/services/visit.webp" class="img-fluid" alt="Home repair visit planning" loading="lazy"><span class="status-pill"><i class="bi bi-circle-fill"></i>Client-location service</span></div></div>
          <div class="col-lg-7"><div class="featured-body"><div class="label-row"><span class="label-text">Plan the Visit</span><span class="divider-dot"></span><span class="label-text muted">Four service areas</span></div><h2 class="featured-name">The right information makes a repair visit more useful</h2><p class="featured-credentials">Sun City Texas 78633 · Berry Creek, Texas 78628 · Georgetown, Texas 78626 · Williamson County 78627</p><p class="featured-bio">Share what needs attention, where the home is located, relevant photos if requested, preferred timing, and any known HOA, permit, utility, or manufacturer requirements.</p><ul class="featured-highlights"><li><i class="bi bi-check2-circle"></i><span>Scope reviewed before scheduling</span></li><li><i class="bi bi-check2-circle"></i><span>Licensed-trade coordination when required</span></li><li><i class="bi bi-check2-circle"></i><span>No public storefront or walk-in office</span></li></ul><div class="d-flex gap-2 flex-wrap"><a href="request-a-visit.php" class="sh-btn primary"><i class="bi bi-calendar2-check"></i>Request a Visit</a><a href="services.php" class="sh-btn ghost"><i class="bi bi-list-check"></i>View Our Services</a></div></div></div>
        </div>
      </div>

      <div class="service-directory">
        <div class="directory-header"><div><span class="label-text">Major Service Groups</span><h2>Choose the closest match for your project</h2><p>Specific scope and trade requirements are confirmed after the request is reviewed.</p></div></div>
        <div class="row g-3 mt-2">
          <?php foreach ($planningGroups as $index => $group): ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= e((string) (100 + ($index % 3) * 50)) ?>">
              <article class="service-plan-card"><div class="card-top"><img src="<?= e($group['image']) ?>" class="avatar" alt="" loading="lazy"><div class="card-headline"><h3 class="name"><?= e($group['name']) ?></h3><p class="role">Home repair service group</p></div></div><p class="card-desc"><?= e($group['description']) ?></p><div class="card-meta"><span class="meta-item"><i class="bi bi-house"></i>At your home</span><span class="meta-item"><i class="bi bi-clipboard-check"></i>Scope reviewed</span></div><div class="card-footer"><a href="<?= e($group['href']) ?>" class="sh-btn ghost sm">Details</a><div class="footer-actions"><a href="request-a-visit.php" class="sh-btn primary sm">Request</a></div></div></article>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>

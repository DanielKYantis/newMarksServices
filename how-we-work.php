<?php
declare(strict_types=1);
$pageKey = 'how-we-work.php';
require __DIR__ . '/includes/header.php';
$principles = [
    ['icon' => 'bi-chat-square-text', 'name' => 'Clear Communication', 'role' => 'What homeowners can expect', 'text' => 'Clear scope and straightforward communication help homeowners understand what is being repaired and what comes next.'],
    ['icon' => 'bi-tools', 'name' => 'Right-Sized Repairs', 'role' => 'Approved service scope', 'text' => 'Repairs stay focused on practical household needs instead of expanding into unnecessary large-project work.'],
    ['icon' => 'bi-list-check', 'name' => 'Coordinated Punch Lists', 'role' => 'Maintenance planning', 'text' => 'Related small tasks can be grouped into a maintenance or punch-list visit when that is the practical approach.'],
    ['icon' => 'bi-signpost-split', 'name' => 'Practical Options', 'role' => 'Homeowner-friendly guidance', 'text' => 'Homeowners receive plain-language options for fixture repairs, water systems, electrical devices, carpentry, walls, and maintenance.'],
    ['icon' => 'bi-shield-check', 'name' => 'Requirements First', 'role' => 'Exterior project guidance', 'text' => 'Exterior cameras, lighting, conduit, EV chargers, and visible modifications are planned with HOA, permit, utility, and manufacturer requirements in mind.'],
    ['icon' => 'bi-geo-alt', 'name' => 'Service-Area Focus', 'role' => 'Client-location work', 'text' => "Mark's Services works at the client's home across four defined service areas; there is no public storefront or walk-in office."],
];
?>
<main class="main">
  <div class="page-title light-background"><div class="title-wrapper"><h1>How We Work</h1><p>Service principles for clear communication, practical scope, project requirements, and client-location home repair.</p></div></div>
  <section id="service-principles" class="service-principles section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row g-3">
        <?php foreach ($principles as $index => $principle): ?>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= e((string) (100 + ($index % 3) * 50)) ?>">
            <article class="principle-card">
              <div class="principle-card-header"><span class="principle-badge">Service Principle</span><div class="principle-icon"><i class="bi <?= e($principle['icon']) ?>" aria-hidden="true"></i></div></div>
              <div class="principle-card-content"><p class="principle-text"><?= e($principle['text']) ?></p></div>
              <div class="principle-card-footer"><div class="principle-marker"><i class="bi bi-check2" aria-hidden="true"></i></div><div class="principle-summary"><h2 class="principle-name"><?= e($principle['name']) ?></h2><span class="principle-role"><?= e($principle['role']) ?></span></div></div>
            </article>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>

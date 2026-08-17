<?php
declare(strict_types=1);
$pageKey = 'how-we-work.php';
require __DIR__ . '/includes/header.php';
$principles = [
    ['icon' => 'bi-chat-square-text', 'name' => 'Clear Communication', 'role' => 'What to expect', 'text' => "We'll explain what we find, what the repair involves, and what happens next."],
    ['icon' => 'bi-tools', 'name' => 'Small Repairs Welcome', 'role' => 'Everyday home repair', 'text' => 'We focus on the repairs and small installations your home needs without turning them into a large remodeling project.'],
    ['icon' => 'bi-list-check', 'name' => 'One List, One Conversation', 'role' => 'Maintenance and punch lists', 'text' => 'Have several small jobs? Tell us about the whole list so we can discuss the best way to handle them.'],
    ['icon' => 'bi-signpost-split', 'name' => 'Options in Plain English', 'role' => 'Helpful guidance', 'text' => 'We explain your options for fixtures, water systems, electrical devices, carpentry, walls, and maintenance in everyday language.'],
    ['icon' => 'bi-shield-check', 'name' => 'Check the Rules First', 'role' => 'Outdoor work', 'text' => 'For outdoor cameras, lighting, conduit, EV chargers, and other visible work, confirm HOA, permit, utility, and manufacturer rules.'],
    ['icon' => 'bi-geo-alt', 'name' => 'We Come to Your Home', 'role' => 'Local in-home service', 'text' => "Mark's Services works at homes in four local service areas. We do not have a public storefront or walk-in office."],
];
?>
<main class="main">
  <div class="page-title light-background"><div class="title-wrapper"><h1>How We Work</h1><p>Tell us what needs fixing. We'll review the job, explain your options, and keep you informed about the next step.</p></div></div>
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

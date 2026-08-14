<?php
declare(strict_types=1);
$pageKey = 'home-repair-faq.php';
require __DIR__ . '/includes/header.php';
$faqItems = $page['faq_items'] ?? [];
?>
<main class="main">
  <div class="page-title light-background">
    <div class="title-wrapper"><h1>Home Repair Frequently Asked Questions</h1><p>Answers about service areas, project scope, scheduling, exterior requirements, and licensed-trade coordination.</p></div>
  </div>
  <section id="faq" class="faq section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row g-4">
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <aside class="faq-sidebar">
            <span class="sidebar-badge">Home Repair FAQ</span>
            <h2 class="sidebar-title">Common Home Service Questions</h2>
            <p class="sidebar-desc">Review common questions about service areas, project scope, scheduling, requirements, and licensed-trade coordination.</p>
            <div class="sidebar-divider"></div>
            <ul class="sidebar-meta">
              <li><i class="bi bi-clock"></i><span>Requests reviewed before scheduling</span></li>
              <li><i class="bi bi-shield-check"></i><span>Scope confirmed for each project</span></li>
              <li><i class="bi bi-chat-dots"></i><span>Phone and contact form available</span></li>
            </ul>
            <a href="contact.php" class="sidebar-cta"><span>Contact Mark's Services</span><i class="bi bi-arrow-up-right"></i></a>
          </aside>
        </div>
        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
          <div class="faq-container">
            <?php foreach ($faqItems as $index => $item): ?>
              <div class="faq-item<?= $index === 0 ? ' faq-active' : '' ?>">
                <div class="faq-meta"><span class="faq-index"><?= e(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)) ?></span><span class="faq-tag"><?= e($item['tag']) ?></span></div>
                <h3><?= e($item['question']) ?></h3>
                <div class="faq-content"><p><?= e($item['answer']) ?></p></div>
                <i class="faq-toggle bi bi-chevron-down" aria-hidden="true"></i>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>

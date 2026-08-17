<?php
declare(strict_types=1);

$faqItems = [
    ["tag" => "Request a Visit", "question" => "How do I request a home repair visit?", "answer" => "Use the request form or call Mark's Services. Tell us what needs fixing, where your home is located, and when you prefer a visit."],
    ["tag" => "Services", "question" => "What kinds of home repair projects do you handle?", "answer" => "We help with plumbing fixtures, water systems, electrical devices, lighting, home security equipment, doors, trim, drywall, mounting, maintenance, and punch-list work."],
    ["tag" => "Service Areas", "question" => "Where does Mark's Services work?", "answer" => "We come to homes in Sun City Texas 78633, Berry Creek 78628, Georgetown 78626, and Williamson County 78627. We do not have a public walk-in office."],
    ["tag" => "Outdoor Work", "question" => "Do outdoor projects require HOA or permit review?", "answer" => "They may. Before installing outdoor cameras, video doorbells, lighting, conduit, EV chargers, or other visible items, confirm HOA, permit, utility, and manufacturer rules."],
    ["tag" => "Licensed Work", "question" => "When is a licensed professional required?", "answer" => "Some electrical, plumbing, and EV charger work must be done by the right licensed professional. We make sure the job is handled or coordinated correctly when a license is required."],
    ["tag" => "Scheduling", "question" => "Do you offer same-day or 24/7 emergency service?", "answer" => "We do not advertise same-day or 24/7 emergency service. Send the details and your preferred timing, and we'll follow up about availability."],
];

$serviceAreas = [
    "sun-city-texas-home-repair.php" => [
        "name" => "Sun City Texas", "postal_code" => "78633", "locality" => "Georgetown",
        "title" => "Sun City Texas 78633 Home Repair | Mark's Services",
        "description" => "Handyman repairs, plumbing fixtures, electrical devices, lighting, maintenance, and punch-list service at homes in Sun City Texas 78633.",
        "label" => "Sun City Texas 78633", "priority" => "Primary service area",
        "intro" => "Friendly home repair and handyman service for homeowners in Sun City Texas 78633.",
    ],
    "berry-creek-texas-home-repair.php" => [
        "name" => "Berry Creek, Texas", "postal_code" => "78628", "locality" => "Georgetown",
        "title" => "Berry Creek, Texas 78628 Home Repair | Mark's Services",
        "description" => "In-home handyman repairs, fixtures, lighting, water systems, security, maintenance, and punch-list work in Berry Creek, Texas 78628.",
        "label" => "Berry Creek, Texas 78628", "priority" => "Service area",
        "intro" => "Everyday home repairs, fixture work, maintenance, and small installations in Berry Creek, Texas 78628.",
    ],
    "georgetown-texas-home-repair.php" => [
        "name" => "Georgetown, Texas", "postal_code" => "78626", "locality" => "Georgetown",
        "title" => "Georgetown, Texas 78626 Home Repair | Mark's Services",
        "description" => "In-home repair, handyman, fixture, lighting, maintenance, and punch-list service in Georgetown, Texas 78626.",
        "label" => "Georgetown, Texas 78626", "priority" => "Service area",
        "intro" => "Home repair and maintenance help for homeowners in Georgetown, Texas 78626.",
    ],
    "williamson-county-home-repair.php" => [
        "name" => "Williamson County", "postal_code" => "78627", "locality" => "Georgetown",
        "title" => "Williamson County 78627 Home Repair | Mark's Services",
        "description" => "In-home repair, fixtures, electrical devices, small carpentry, maintenance, and punch-list service in Williamson County 78627.",
        "label" => "Williamson County 78627", "priority" => "Service area",
        "intro" => "Home repair and small-project service for homeowners in Williamson County 78627.",
    ],
];

$pages = [
    "404.php" => ["title" => "Page Not Found | Mark's Services", "description" => "The requested Mark's Services page could not be found.", "body_class" => "page-404", "label" => "404", "robots" => "noindex,follow"],
    "index.php" => ["title" => "Sun City Texas Handyman & Home Repair | Mark's Services", "description" => "Handyman repairs, plumbing fixtures, electrical devices, home maintenance, and punch-list service for Sun City Texas 78633 and nearby service areas.", "body_class" => "index-page", "label" => "Home", "image" => "assets/img/uploads/hero-home.png"],
    "about.php" => ["title" => "About Mark's Services | Georgetown-Area Home Repair", "description" => "Learn how Mark's Services provides clear, careful in-home repairs for Sun City, Berry Creek, Georgetown, and Williamson County homeowners.", "body_class" => "about-page", "label" => "About", "image" => "assets/img/brand/sun-city-home-exterior.webp"],
    "services.php" => ["title" => "Home Repair & Handyman Services | Mark's Services", "description" => "Explore plumbing fixture, water-system, electrical, lighting, security, carpentry, wall repair, maintenance, and punch-list services.", "body_class" => "services-page", "label" => "Services", "schema_type" => "CollectionPage", "image" => "assets/img/services/toolkit.webp"],
    "plumbing-fixture-repair.php" => ["title" => "Plumbing Fixture Repair | Sun City Texas & Berry Creek", "description" => "Faucet, sink, toilet, drain, disposal, dishwasher line, ice maker line, bidet, hose bib, and minor leak help for local homeowners.", "body_class" => "plumbing-fixture-repair-page", "label" => "Plumbing Fixture Repair", "service_name" => "Plumbing Fixture Repair", "service_description" => "Repairs and replacements for residential plumbing fixtures and minor water connections, performed when properly licensed or coordinated.", "image" => "assets/img/services/plumbing.webp"],
    "service-areas.php" => ["title" => "Home Repair Service Areas | Mark's Services", "description" => "View Mark's Services in-home repair areas: Sun City Texas 78633, Berry Creek 78628, Georgetown 78626, and Williamson County 78627.", "body_class" => "service-areas-page", "label" => "Service Areas", "schema_type" => "CollectionPage", "image" => "assets/img/brand/sun-city-home-exterior.webp"],
    "service-planning.php" => ["title" => "Plan a Home Repair Visit | Mark's Services", "description" => "Tell Mark's Services what needs fixing, where your home is located, and when you prefer an in-home repair visit.", "body_class" => "service-planning-page", "label" => "Service Planning", "image" => "assets/img/services/visit.webp"],
    "request-a-visit.php" => ["title" => "Request a Home Repair Visit | Mark's Services", "description" => "Request an in-home repair visit in Sun City Texas 78633, Berry Creek 78628, Georgetown 78626, or Williamson County 78627.", "body_class" => "request-a-visit-page", "label" => "Request a Visit", "image" => "assets/img/services/visit.webp"],
    "how-we-work.php" => ["title" => "How We Work | Mark's Services Home Repair", "description" => "See how Mark's Services reviews each repair, explains the options clearly, and involves licensed professionals when required.", "body_class" => "how-we-work-page", "label" => "How We Work", "image" => "assets/img/services/toolkit.webp"],
    "service-gallery.php" => ["title" => "Home Repair Service Gallery | Mark's Services", "description" => "View home repair, fixture, lighting, security, mounting, wall repair, and maintenance examples for Georgetown-area homes.", "body_class" => "service-gallery-page", "label" => "Service Gallery", "image" => "assets/img/services/toolkit.webp"],
    "home-repair-faq.php" => ["title" => "Home Repair FAQ | Mark's Services", "description" => "Simple answers about home repair services, local service areas, scheduling, HOA and permit checks, and licensed work.", "body_class" => "home-repair-faq-page", "label" => "Home Repair FAQ", "faq_items" => $faqItems],
    "contact.php" => ["title" => "Contact Mark's Services | Home Repair Service Areas", "description" => "Call or contact Mark's Services about home repair and handyman work in Sun City Texas, Berry Creek, Georgetown, and Williamson County.", "body_class" => "contact-page", "label" => "Contact"],
    "terms.php" => ["title" => "Terms of Service | Mark's Services", "description" => "Review website use, service-request, project-information, and homeowner-responsibility terms for Mark's Services.", "body_class" => "terms-page", "label" => "Terms of Service", "robots" => "noindex,follow"],
    "privacy.php" => ["title" => "Privacy Policy | Mark's Services", "description" => "Learn how Mark's Services handles contact details and information submitted through the home-service request process.", "body_class" => "privacy-page", "label" => "Privacy Policy", "robots" => "noindex,follow"],
];

foreach ($serviceAreas as $route => $area) {
    $pages[$route] = [
        "title" => $area["title"], "description" => $area["description"], "body_class" => "service-area-details-page",
        "label" => $area["label"], "service_area" => $area, "service_name" => "Home Repair and Handyman Services in " . $area["label"],
        "service_description" => $area["description"], "image" => "assets/img/brand/sun-city-home-exterior.webp",
    ];
}

return $pages;

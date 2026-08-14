<?php
declare(strict_types=1);

$faqItems = [
    ["tag" => "Service Request", "question" => "How do I request a home repair visit?", "answer" => "Use the service-request form or call Mark's Services. Describe the repair, select one of the four service areas, and include timing or access details that may help with review."],
    ["tag" => "Project Scope", "question" => "What kinds of home repair projects do you handle?", "answer" => "Approved work includes plumbing fixtures, water systems, electrical devices, lighting, security equipment, doors, trim, drywall, mounting, maintenance, and punch-list items."],
    ["tag" => "Service Areas", "question" => "Where does Mark's Services work?", "answer" => "Mark's Services provides client-location service in Sun City Texas 78633, Berry Creek, Texas 78628, Georgetown, Texas 78626, and Williamson County 78627. There is no public walk-in office."],
    ["tag" => "Requirements", "question" => "Do exterior projects require HOA or permit review?", "answer" => "Exterior cameras, video doorbells, lighting, conduit, EV chargers, and visible work may require review. Confirm HOA, permit, utility, and manufacturer requirements before work."],
    ["tag" => "Licensed Work", "question" => "When is a licensed trade or coordination required?", "answer" => "Projects involving regulated electrical, plumbing, EV charging, or other licensed scope are performed only when properly licensed or coordinated with the appropriate trade."],
    ["tag" => "Scheduling", "question" => "Do you offer same-day or 24/7 emergency service?", "answer" => "The site does not claim same-day or 24/7 emergency service. Send the project details and preferred timing; scheduling is confirmed after review."],
];

$serviceAreas = [
    "sun-city-texas-home-repair.php" => [
        "name" => "Sun City Texas", "postal_code" => "78633", "locality" => "Georgetown",
        "title" => "Sun City Texas 78633 Home Repair | Mark's Services",
        "description" => "Handyman repairs, plumbing fixtures, electrical devices, lighting, maintenance, and punch-list service at homes in Sun City Texas 78633.",
        "label" => "Sun City Texas 78633", "priority" => "Primary service area",
        "intro" => "Practical home repair and handyman service for homeowners in Sun City Texas 78633.",
    ],
    "berry-creek-texas-home-repair.php" => [
        "name" => "Berry Creek, Texas", "postal_code" => "78628", "locality" => "Georgetown",
        "title" => "Berry Creek, Texas 78628 Home Repair | Mark's Services",
        "description" => "Client-location handyman repairs, fixtures, lighting, water systems, security, maintenance, and punch-list work in Berry Creek, Texas 78628.",
        "label" => "Berry Creek, Texas 78628", "priority" => "Service area",
        "intro" => "Right-sized home repairs, fixture work, maintenance, and small installations in Berry Creek, Texas 78628.",
    ],
    "georgetown-texas-home-repair.php" => [
        "name" => "Georgetown, Texas", "postal_code" => "78626", "locality" => "Georgetown",
        "title" => "Georgetown, Texas 78626 Home Repair | Mark's Services",
        "description" => "Home repair, handyman, fixture, lighting, maintenance, and punch-list service at client locations in Georgetown, Texas 78626.",
        "label" => "Georgetown, Texas 78626", "priority" => "Service area",
        "intro" => "Client-location repair and maintenance planning for homeowners in Georgetown, Texas 78626.",
    ],
    "williamson-county-home-repair.php" => [
        "name" => "Williamson County", "postal_code" => "78627", "locality" => "Georgetown",
        "title" => "Williamson County 78627 Home Repair | Mark's Services",
        "description" => "Home repair, fixtures, electrical devices, small carpentry, maintenance, and punch-list service at client locations in Williamson County 78627.",
        "label" => "Williamson County 78627", "priority" => "Service area",
        "intro" => "Practical home repair and small-project service for client locations in Williamson County 78627.",
    ],
];

$pages = [
    "404.php" => ["title" => "Page Not Found | Mark's Services", "description" => "The requested Mark's Services page could not be found.", "body_class" => "page-404", "label" => "404", "robots" => "noindex,follow"],
    "index.php" => ["title" => "Sun City Texas Handyman & Home Repair | Mark's Services", "description" => "Handyman repairs, plumbing fixtures, electrical devices, home maintenance, and punch-list service for Sun City Texas 78633 and nearby service areas.", "body_class" => "index-page", "label" => "Home", "image" => "assets/img/uploads/hero-home.png"],
    "about.php" => ["title" => "About Mark's Services | Georgetown-Area Home Repair", "description" => "Learn how Mark's Services plans practical client-location home repairs for Sun City Texas, Berry Creek, Georgetown, and Williamson County homeowners.", "body_class" => "about-page", "label" => "About", "image" => "assets/img/brand/sun-city-home-exterior.webp"],
    "services.php" => ["title" => "Home Repair & Handyman Services | Mark's Services", "description" => "Explore plumbing fixture, water-system, electrical, lighting, security, carpentry, wall repair, maintenance, and punch-list services.", "body_class" => "services-page", "label" => "Services", "schema_type" => "CollectionPage", "image" => "assets/img/services/toolkit.webp"],
    "plumbing-fixture-repair.php" => ["title" => "Plumbing Fixture Repair | Sun City Texas & Berry Creek", "description" => "Faucet, sink, toilet, drain, disposal, dishwasher line, ice maker line, bidet, hose bib, and minor leak help for local homeowners.", "body_class" => "plumbing-fixture-repair-page", "label" => "Plumbing Fixture Repair", "service_name" => "Plumbing Fixture Repair", "service_description" => "Repairs and replacements for residential plumbing fixtures and minor water connections, performed when properly licensed or coordinated.", "image" => "assets/img/services/plumbing.webp"],
    "service-areas.php" => ["title" => "Home Repair Service Areas | Mark's Services", "description" => "View four distinct client-location service areas: Sun City Texas 78633, Berry Creek, Texas 78628, Georgetown, Texas 78626, and Williamson County 78627.", "body_class" => "service-areas-page", "label" => "Service Areas", "schema_type" => "CollectionPage", "image" => "assets/img/brand/sun-city-home-exterior.webp"],
    "service-planning.php" => ["title" => "Home Repair Service Planning | Mark's Services", "description" => "Plan the right repair visit, project scope, service category, licensed-trade coordination, and homeowner requirements with Mark's Services.", "body_class" => "service-planning-page", "label" => "Service Planning", "image" => "assets/img/services/visit.webp"],
    "request-a-visit.php" => ["title" => "Request a Home Repair Visit | Mark's Services", "description" => "Request a client-location home repair visit in Sun City Texas 78633, Berry Creek, Texas 78628, Georgetown, Texas 78626, or Williamson County 78627.", "body_class" => "request-a-visit-page", "label" => "Request a Visit", "image" => "assets/img/services/visit.webp"],
    "how-we-work.php" => ["title" => "How We Work | Mark's Services Home Repair", "description" => "See how Mark's Services reviews scope, communicates clearly, plans client-location repairs, and coordinates licensed trades when required.", "body_class" => "how-we-work-page", "label" => "How We Work", "image" => "assets/img/services/toolkit.webp"],
    "service-gallery.php" => ["title" => "Home Repair Service Gallery | Mark's Services", "description" => "View practical home repair, fixture, lighting, security, mounting, wall repair, and maintenance examples for Georgetown-area homes.", "body_class" => "service-gallery-page", "label" => "Service Gallery", "image" => "assets/img/services/toolkit.webp"],
    "home-repair-faq.php" => ["title" => "Home Repair FAQ | Mark's Services", "description" => "Answers about service areas, repair scope, scheduling, HOA and permit checks, and licensed-trade coordination for local homeowners.", "body_class" => "home-repair-faq-page", "label" => "Home Repair FAQ", "faq_items" => $faqItems],
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

<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<x-seo-tags page="ticket" />
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800;900&amp;family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary": "#006a6a",
                        "inverse-primary": "#ffb59d",
                        "surface-variant": "#e2e2e2",
                        "primary-fixed": "#ffdbd0",
                        "on-tertiary-fixed-variant": "#004c69",
                        "surface-dim": "#dadada",
                        "on-primary-fixed": "#390c00",
                        "error": "#ba1a1a",
                        "surface-bright": "#f9f9f9",
                        "primary": "#ab3500",
                        "background": "#f9f9f9",
                        "on-error-container": "#93000a",
                        "on-secondary-fixed": "#002020",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#f3f3f4",
                        "on-tertiary": "#ffffff",
                        "tertiary-container": "#00a5dd",
                        "secondary-fixed-dim": "#76d6d5",
                        "tertiary": "#00668a",
                        "primary-fixed-dim": "#ffb59d",
                        "on-surface": "#1a1c1c",
                        "on-primary": "#ffffff",
                        "error-container": "#ffdad6",
                        "secondary-container": "#90efef",
                        "surface-container": "#eeeeee",
                        "on-surface-variant": "#594139",
                        "on-primary-container": "#5f1900",
                        "surface-container-highest": "#e2e2e2",
                        "surface-tint": "#ab3500",
                        "on-background": "#1a1c1c",
                        "on-secondary": "#ffffff",
                        "on-primary-fixed-variant": "#832600",
                        "tertiary-fixed-dim": "#7ad0ff",
                        "on-error": "#ffffff",
                        "inverse-on-surface": "#f0f1f1",
                        "on-tertiary-fixed": "#001e2c",
                        "tertiary-fixed": "#c3e8ff",
                        "on-tertiary-container": "#00364b",
                        "outline-variant": "#e1bfb5",
                        "on-secondary-fixed-variant": "#004f4f",
                        "on-secondary-container": "#006e6e",
                        "surface-container-high": "#e8e8e8",
                        "secondary-fixed": "#93f2f2",
                        "outline": "#8d7168",
                        "surface": "#f9f9f9",
                        "primary-container": "#ff6b35",
                        "inverse-surface": "#2f3131"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "section-gap-mobile": "64px",
                        "gutter": "24px",
                        "section-gap-desktop": "120px",
                        "container-max-width": "1280px",
                        "base": "8px",
                        "margin-mobile": "20px"
                    },
                    "fontFamily": {
                        "label-bold": ["Inter"],
                        "label-sm": ["Inter"],
                        "display-xl": ["Montserrat"],
                        "body-lg": ["Inter"],
                        "headline-md": ["Montserrat"],
                        "headline-lg-mobile": ["Montserrat"],
                        "body-md": ["Inter"],
                        "headline-lg": ["Montserrat"]
                    },
                    "fontSize": {
                        "label-bold": ["14px", { "lineHeight": "20px", "letterSpacing": "0.05em", "fontWeight": "700" }],
                        "label-sm": ["12px", { "lineHeight": "16px", "fontWeight": "500" }],
                        "display-xl": ["80px", { "lineHeight": "88px", "letterSpacing": "-0.02em", "fontWeight": "900" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "headline-md": ["32px", { "lineHeight": "40px", "fontWeight": "700" }],
                        "headline-lg-mobile": ["32px", { "lineHeight": "40px", "fontWeight": "800" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "headline-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.01em", "fontWeight": "800" }]
                    }
                }
            }
        }
    </script>
<style>
        .glass-panel {
            backdrop-filter: blur(12px);
            background: rgba(255, 255, 255, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .glow-effect {
            box-shadow: 0 4px 20px rgba(171, 53, 0, 0.3);
        }
        /* Neon Website Title */
        .neon-title {
            color: #00ffd1 !important;
            text-shadow: 0 0 8px rgba(0, 255, 209, 0.4), 0 0 15px rgba(0, 255, 209, 0.7);
            transition: all 0.3s ease;
        }
        .neon-title:hover {
            color: #ff571a !important;
            text-shadow: 0 0 8px rgba(255, 87, 26, 0.4), 0 0 15px rgba(255, 87, 26, 0.7);
        }
        /* Neon Nav Link Default state */
        .nav-link-back {
            color: rgba(255, 255, 255, 0.6) !important;
            transition: all 0.3s ease;
        }
        .nav-link-back:hover {
            color: #ff571a !important;
            text-shadow: 0 0 8px rgba(255, 87, 26, 0.4), 0 0 15px rgba(255, 87, 26, 0.7);
        }

    </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col">
<!-- TopNavBar (Transactional/Dead-end - Navigation suppressed per logic, Canvas priority, but prompt requested TopAppBar with specific text) -->
<!-- Assuming this is a ticketing flow, we suppress the navigation links per the semantic shell mandate for transactional screens, keeping only the brand and secondary action -->
<header class="fixed top-0 w-full z-50 flex justify-between items-center px-margin-mobile md:px-gutter h-16 bg-black/65 backdrop-blur-md border-b border-white/10 shadow-sm">
<a class="font-headline-md text-headline-md font-extrabold tracking-tighter neon-title" href="{{ url('/') }}">
            INTER-UNIVERSITY BEACH BLAST
        </a>
<a class="font-Montserrat text-label-bold nav-link-back transition-all duration-200 hidden md:block" href="{{ url('/') }}">
            Back to Main Site
        </a>
</header>
<!-- Main Content -->
<main class="flex-grow pt-24 pb-section-gap-mobile md:pb-section-gap-desktop px-margin-mobile md:px-gutter max-w-container-max-width mx-auto w-full">
<!-- Page Title Area -->
<section class="text-center mb-16 md:mb-24">
<h1 class="font-headline-lg-mobile text-headline-lg-mobile md:font-headline-lg md:text-headline-lg text-primary mb-4">Select Your Festival Experience</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto mb-6">
                25th – 26th September 2026 • Secure your spot at Lagos' biggest student beach festival.
            </p>
<div class="inline-flex items-center gap-2 bg-secondary-container text-on-secondary-container px-4 py-2 rounded-full font-label-sm text-label-sm">
<span class="material-symbols-outlined text-lg" data-icon="lock" data-weight="fill" style="font-variation-settings: 'FILL' 1;">lock</span>
<span>Fast, Secure, &amp; Instant Ticket Delivery via Email/WhatsApp</span>
</div>
</section>
<!-- Ticket Grid -->
<section class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 max-w-4xl mx-auto mb-16">
<!-- Standard Pass Card -->
<div class="bg-surface-container-lowest rounded-xl p-8 flex flex-col h-full border border-surface-variant shadow-sm hover:shadow-md transition-shadow relative">
<div class="mb-6">
<h2 class="font-headline-md text-headline-md text-on-surface mb-2">Standard Pass</h2>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">Direct Beach Access</p>
<p class="font-headline-lg-mobile text-headline-lg-mobile text-primary font-bold">₦5,000</p>
</div>
<ul class="flex-grow flex flex-col gap-4 mb-8">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary" data-icon="check_circle">check_circle</span>
<span class="font-body-md text-body-md text-on-surface">2-Day Festival Entry</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary" data-icon="music_note">music_note</span>
<span class="font-body-md text-body-md text-on-surface">Live Music</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary" data-icon="sports_volleyball">sports_volleyball</span>
<span class="font-body-md text-body-md text-on-surface">Beach Games</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary" data-icon="restaurant">restaurant</span>
<span class="font-body-md text-body-md text-on-surface">Food Village</span>
</li>
<li class="flex items-start gap-3 opacity-60 mt-2">
<span class="material-symbols-outlined text-error" data-icon="close">close</span>
<span class="font-body-md text-body-md text-on-surface">Transportation not included</span>
</li>
</ul>
<a href="https://icelandbeach.com/ticket" class="w-full py-4 px-6 rounded-[16px] border-2 border-secondary text-secondary font-label-bold text-label-bold hover:bg-secondary hover:text-on-secondary transition-colors uppercase tracking-wider block text-center">
                    Select Standard Pass
                </a>
</div>
<!-- All-Inclusive Pass Card -->
<div class="bg-surface-container-lowest rounded-xl p-8 flex flex-col h-full border-2 border-primary glow-effect relative transform md:-translate-y-4">
<div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-tertiary-container text-on-tertiary-container px-4 py-1 rounded-full font-label-bold text-label-bold flex items-center gap-1 shadow-sm">
<span class="material-symbols-outlined text-sm" data-icon="star" data-weight="fill" style="font-variation-settings: 'FILL' 1;">star</span>
                    BEST VALUE
                </div>
<div class="mb-6 mt-2">
<h2 class="font-headline-md text-headline-md text-on-surface mb-2">All-Inclusive Pass</h2>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">Festival Entry + Going &amp; Coming Transit</p>
<p class="font-headline-lg-mobile text-headline-lg-mobile text-primary font-bold">₦10,000</p>
</div>
<ul class="flex-grow flex flex-col gap-4 mb-8">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary" data-icon="check_circle">check_circle</span>
<span class="font-body-md text-body-md text-on-surface">Everything in Standard</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary" data-icon="directions_bus">directions_bus</span>
<span class="font-body-md text-body-md text-on-surface font-semibold">A/C Round-Trip Transportation</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary" data-icon="school">school</span>
<span class="font-body-md text-body-md text-on-surface font-semibold">Campus Pickup</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary" data-icon="fast_forward">fast_forward</span>
<span class="font-body-md text-body-md text-on-surface font-semibold">Boarding Fast-Track</span>
</li>
</ul>
<a href="https://icelandbeach.com/ticket" class="w-full py-4 px-6 rounded-[16px] bg-primary text-on-primary font-label-bold text-label-bold hover:bg-primary-container hover:text-on-primary-container transition-colors uppercase tracking-wider glow-effect block text-center">
                    Select All-Inclusive Pass
                </a>
</div>
</section>
<!-- Checkout Footer Info -->
<section class="max-w-3xl mx-auto text-center glass-panel rounded-xl p-8 mb-8">
<p class="font-body-md text-body-md text-on-surface-variant mb-6">
<span class="material-symbols-outlined align-middle mr-1 text-secondary" data-icon="info">info</span>
                Campus pickup locations and departure schedules will be sent directly to your registered email upon purchase.
            </p>
<div class="flex justify-center gap-6 mb-6 text-on-surface-variant opacity-70">
<div class="flex flex-col items-center gap-1">
<span class="material-symbols-outlined text-3xl" data-icon="credit_card">credit_card</span>
<span class="font-label-sm text-label-sm">Card</span>
</div>
<div class="flex flex-col items-center gap-1">
<span class="material-symbols-outlined text-3xl" data-icon="account_balance">account_balance</span>
<span class="font-label-sm text-label-sm">Bank Transfer</span>
</div>
<div class="flex flex-col items-center gap-1">
<span class="material-symbols-outlined text-3xl" data-icon="dialpad">dialpad</span>
<span class="font-label-sm text-label-sm">USSD</span>
</div>
</div>
<p class="font-body-md text-body-md text-on-surface">
                Need help with bulk campus bookings? <a class="text-primary font-semibold underline hover:text-primary-container" href="#">Contact Support Here</a>.
            </p>
</section>
<!-- Decorative Image Context (Using placeholders per instructions for a richer layout) -->
<div class="w-full h-64 rounded-xl overflow-hidden shadow-sm relative group mt-16 max-w-5xl mx-auto">
<div class="bg-cover bg-center w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-105" data-alt="A wide-angle, high-energy photo of a sunny beach festival in Lagos. Bright teal ocean waves meet pristine white sand. In the foreground, vibrant orange flags flutter in the wind. Groups of young adults are dancing and socializing. The mood is euphoric, youthful, and premium, captured in crisp, natural sunlight." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA3c7YVjTTiuBw7-SZvo8ZgASW-ozPuoF04-D2wYJLruFfFwG97Q1UzWFFuGAEh2aSqHzjLhCLrA8KFXg-5encytktW9U43i0Y8fRQL86BTgrtKStHeaP_75lYpI8T36KP3tydZqe-AOfdRwZxYlLpodW3LfLnCBo8BZbbHV2_0Q0bS2L5IZBdNDFIgBCsK8MyBI8gmJDtNvBznqVL1x7_k4aCsEeZbWd9BdhxDLzg4vKV6QzpFSCbWmlrk4O_oIT6TfGQZlBZ8')"></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
<div class="absolute bottom-6 left-6 right-6">
<p class="font-headline-md text-headline-md text-white">Feel the Heat.</p>
</div>
</div>
</main>

<!-- FAQ Section -->
<section class="relative flex flex-col items-center gap-12 py-20 px-margin-mobile md:px-gutter w-full max-w-4xl mx-auto">
    <!-- Section Title -->
    <div class="flex flex-col items-center gap-6 text-center z-10 w-full">
        <h2 class="font-headline-lg-mobile text-headline-lg-mobile md:font-headline-lg md:text-headline-lg text-on-surface font-bold leading-tight">
            Frequently Asked Questions
        </h2>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
            Have questions? We've got answers. If you can't find what you're looking for, feel free to contact us.
        </p>
    </div>

    <!-- Interactive FAQ Accordion -->
    <div class="w-full flex flex-col gap-4">
        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>Is transportation available for attendees?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Yes, but only for attendees who purchase the Access + Transportation Package.</p>
            </div>
        </details>

        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>How much does transportation cost?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Transportation is an additional ₦5,000, bringing the total Access + Transportation Package to ₦10,000.</p>
            </div>
        </details>

        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>Where are the pickup locations?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Pickup locations are: Eko Atlantic Entrance (Bar Beach), Ikeja, Akoka/Yaba, and Surulere.</p>
            </div>
        </details>

        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>What time should I arrive at the pickup point?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Please arrive by 12:00 PM on 25th September.</p>
            </div>
        </details>

        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>Will transportation be available after the event?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Yes. Return transportation departs at 6:00 AM on 26th September for attendees who purchased the Access + Transportation Package.</p>
            </div>
        </details>

        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>Can I come with my own car?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Yes. You're welcome to drive to the venue, and parking is available.</p>
            </div>
        </details>

        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>Are snacks included with my ticket?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Snacks are only included if you add the ₦3,000 Lunch Package to your ticket.</p>
            </div>
        </details>

        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>Can I buy food and snacks at the venue?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Yes. We offer a wide variety of food and snacks. You can view the menu at morithos.com/menu.</p>
            </div>
        </details>

        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>What is the Lunch Package?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>The Lunch Package is an optional meal package for attendees who would like to enjoy our specially prepared lunch.</p>
            </div>
        </details>
        
        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>Is the Lunch Package compulsory?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>No. It is completely optional.</p>
            </div>
        </details>

        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>What is Morithos?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Morithos is our partner luxury restaurant and snack bar where attendees with the Lunch Package will enjoy their meal.</p>
            </div>
        </details>

        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>Can I add the Lunch Package after purchasing my ticket?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Yes, you can add it before the event.</p>
            </div>
        </details>

        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>Is accommodation available?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Yes, but accommodation must be booked in advance. The event runs throughout the night.</p>
            </div>
        </details>

        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>Can I stay overnight?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Yes. However, if you purchased the transportation package, be sure not to miss your return bus, which departs at 6:00 AM on 26th September.</p>
            </div>
        </details>

        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>How do I book accommodation?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Visit icelandbeach.com to check room availability and make your reservation.</p>
            </div>
        </details>

        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>Are rooms guaranteed after purchasing a ticket?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>No. Purchasing an event ticket does not reserve accommodation. Rooms must be booked separately and are subject to availability.</p>
            </div>
        </details>
        
        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>What if all the rooms are fully booked?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Tent rentals are available upon request.</p>
            </div>
        </details>

        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>Is parking available?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Yes, parking is available for all attendees.</p>
            </div>
        </details>

        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>Can I become a vendor?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Yes. Simply submit a vendor application describing what you'd like to sell. All applications are subject to approval.</p>
            </div>
        </details>

        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>Is there a deadline for vendor applications?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Yes. Vendor applications close on 25th September, one day before the event.</p>
            </div>
        </details>
        
        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>Can companies sponsor the event?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Yes. We welcome sponsorships from companies, brands, and organizations.</p>
            </div>
        </details>

        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>How can I contact customer support?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>You can reach us through the WhatsApp button on your ticket confirmation page or on the Iceland Beach website.</p>
            </div>
        </details>
        
        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>Will there be security at the event?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Yes. Security personnel will be present throughout the event to ensure everyone's safety.</p>
            </div>
        </details>

        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>What items are prohibited?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Harmful objects, dangerous items, illegal substances, and anything that may pose a safety risk are strictly prohibited.</p>
            </div>
        </details>

        <!-- FAQ Item -->
        <details class="group bg-white rounded-lg shadow-sm border border-surface-variant overflow-hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-6 text-xl text-on-surface hover:bg-surface-container-lowest transition-colors">
                <span>Where can I get the latest event updates?</span>
                <span class="transition group-open:rotate-180">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
            </summary>
            <div class="text-on-surface-variant text-base px-6 pb-6">
                <p>Follow Iceland Beach on TikTok for the latest announcements and event updates.</p>
            </div>
        </details>

    </div>
</section>

<!-- Sponsors Section -->
<section class="w-full py-12 px-margin-mobile md:px-gutter flex flex-col items-center border-t border-surface-variant mt-12 mb-8">
    <h3 class="font-label-bold text-label-bold text-on-surface-variant uppercase tracking-widest mb-8">Our Sponsors</h3>
    <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
        <img src="{{ asset('images/icca logo 1.png') }}" class="h-16 md:h-24 object-contain" alt="ICCA">
        <img src="{{ asset('images/icelandbeach logo 1.png') }}" class="h-16 md:h-24 object-contain" alt="Iceland Beach">
    </div>
</section>

<!-- Footer Component -->
<footer class="w-full py-section-gap-mobile md:py-section-gap-desktop px-margin-mobile md:px-gutter max-w-container-max-width mx-auto flex flex-col items-center gap-8 text-center bg-surface-container-low dark:bg-surface-container-lowest text-secondary dark:text-secondary-fixed-dim font-Inter text-body-md opacity-80 hover:opacity-100 transition-opacity">
<div class="font-Montserrat text-headline-md font-bold text-primary">
            INTER-UNIVERSITY BEACH BLAST
        </div>
<nav class="flex flex-wrap justify-center gap-6">
<a class="text-on-surface-variant hover:text-secondary transition-colors" href="#">Support</a>
<a class="text-on-surface-variant hover:text-secondary transition-colors" href="#">Privacy</a>
<a class="text-on-surface-variant hover:text-secondary transition-colors" href="#">Secure Checkout</a>
<a class="text-on-surface-variant hover:text-secondary transition-colors" href="#">Terms</a>
</nav>
<p class="text-on-surface-variant">© 2024 Solstice Beach Festival. Student ID required at entry.</p>
</footer>
</body></html>

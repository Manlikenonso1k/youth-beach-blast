<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Ticket Selection - Inter-University Beach Blast 2026</title>
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
    </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col">
<!-- TopNavBar (Transactional/Dead-end - Navigation suppressed per logic, Canvas priority, but prompt requested TopAppBar with specific text) -->
<!-- Assuming this is a ticketing flow, we suppress the navigation links per the semantic shell mandate for transactional screens, keeping only the brand and secondary action -->
<header class="fixed top-0 w-full z-50 flex justify-between items-center px-margin-mobile md:px-gutter h-16 bg-surface/70 dark:bg-inverse-surface/70 backdrop-blur-md border-b border-white/20 shadow-sm">
<a class="font-headline-md text-headline-md font-extrabold tracking-tighter text-primary dark:text-primary-fixed-dim" href="{{ url('/') }}">
            INTER-UNIVERSITY BEACH BLAST
        </a>
<a class="font-Montserrat text-label-bold text-on-surface-variant dark:text-surface-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-colors scale-95 duration-200 transition-transform hidden md:block" href="{{ url('/') }}">
            Back to Main Site
        </a>
</header>
<!-- Main Content -->
<main class="flex-grow pt-24 pb-section-gap-mobile md:pb-section-gap-desktop px-margin-mobile md:px-gutter max-w-container-max-width mx-auto w-full">
<!-- Page Title Area -->
<section class="text-center mb-16 md:mb-24">
<h1 class="font-headline-lg-mobile text-headline-lg-mobile md:font-headline-lg md:text-headline-lg text-primary mb-4">Select Your Festival Experience</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto mb-6">
                18th â€“ 19th September 2026 â€¢ Secure your spot at Lagos' biggest student beach festival.
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
<p class="text-on-surface-variant">Â© 2024 Solstice Beach Festival. Student ID required at entry.</p>
</footer>
</body></html>

@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
<script>
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                colors: {
                    surface: '#111318',
                    'surface-dim': '#111318',
                    'surface-bright': '#37393e',
                    'surface-container-lowest': '#0c0e12',
                    'surface-container-low': '#1a1c20',
                    'surface-container': '#1e2024',
                    'surface-container-high': '#282a2e',
                    'surface-container-highest': '#333539',
                    'on-surface': '#e2e2e8',
                    'on-surface-variant': '#b9cbc3',
                    'inverse-surface': '#e2e2e8',
                    'inverse-on-surface': '#2f3035',
                    outline: '#83958d',
                    'outline-variant': '#3a4a44',
                    'surface-tint': '#00e0b7',
                    primary: '#fffffd',
                    'on-primary': '#00382c',
                    'primary-container': '#00ffd1',
                    'on-primary-container': '#00725c',
                    'inverse-primary': '#006b57',
                    secondary: '#ffb59e',
                    'on-secondary': '#5e1700',
                    'secondary-container': '#ff571a',
                    'on-secondary-container': '#521300',
                    tertiary: '#ffffff',
                    'on-tertiary': '#3c0090',
                    'tertiary-container': '#e9ddff',
                    'on-tertiary-container': '#7829ff',
                    error: '#ffb4ab',
                    'on-error': '#690005',
                    'error-container': '#93000a',
                    'on-error-container': '#ffdad6',
                    'primary-fixed': '#15ffd1',
                    'primary-fixed-dim': '#00e0b7',
                    'on-primary-fixed': '#002019',
                    'on-primary-fixed-variant': '#005141',
                    'secondary-fixed': '#ffdbd0',
                    'secondary-fixed-dim': '#ffb59e',
                    'on-secondary-fixed': '#3a0b00',
                    'on-secondary-fixed-variant': '#852400',
                    'tertiary-fixed': '#e9ddff',
                    'tertiary-fixed-dim': '#d1bcff',
                    'on-tertiary-fixed': '#23005b',
                    'on-tertiary-fixed-variant': '#5700c9',
                    background: '#111318',
                    'on-background': '#e2e2e8',
                    'surface-variant': '#333539',
                },
                fontFamily: {
                    'headline-xl': ['Space Grotesk'],
                    'headline-lg': ['Space Grotesk'],
                    'headline-md': ['Space Grotesk'],
                    'body-lg': ['Outfit'],
                    'body-md': ['Outfit'],
                    'body-sm': ['Outfit'],
                    'label-md': ['Space Grotesk'],
                    'label-sm': ['Space Grotesk'],
                    'display-lg': ['Space Grotesk'],
                },
                fontSize: {
                    'display-lg': ['64px', { lineHeight: '1.1', letterSpacing: '-0.02em', fontWeight: '700' }],
                    'headline-lg': ['40px', { lineHeight: '1.2', letterSpacing: '-0.01em', fontWeight: '600' }],
                    'headline-lg-mobile': ['32px', { lineHeight: '1.2', fontWeight: '600' }],
                    'headline-md': ['24px', { lineHeight: '1.3', fontWeight: '500' }],
                    'body-lg': ['18px', { lineHeight: '1.6', fontWeight: '400' }],
                    'body-md': ['16px', { lineHeight: '1.6', fontWeight: '400' }],
                    'body-sm': ['14px', { lineHeight: '1.5', fontWeight: '400' }],
                    'label-md': ['14px', { lineHeight: '1', letterSpacing: '0.05em', fontWeight: '600' }],
                    'label-sm': ['12px', { lineHeight: '1', letterSpacing: '0.05em', fontWeight: '600' }],
                },
                borderRadius: {
                    DEFAULT: '0.25rem',
                    lg: '0.5rem',
                    xl: '0.75rem',
                    full: '9999px',
                },
                spacing: {
                    base: '8px',
                    xs: '4px',
                    sm: '12px',
                    md: '24px',
                    lg: '48px',
                    xl: '80px',
                    gutter: '24px',
                    'margin-mobile': '16px',
                    'margin-desktop': '64px',
                },
            },
        },
    };
</script>
<style>
    .hero-panel {
        background: linear-gradient(180deg, rgba(10, 12, 16, 0.18), rgba(10, 12, 16, 0.78));
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.16);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
    }

    .glow-ring {
        box-shadow: 0 0 24px rgba(21, 255, 209, 0.32);
    }

    .section-divider {
        background: linear-gradient(90deg, transparent, rgba(21, 255, 209, 0.7), rgba(255, 181, 158, 0.7), transparent);
    }
</style>

<nav class="fixed top-0 w-full z-50 nav-bar border-b border-white/10">
    <div class="flex items-center justify-between px-margin-mobile md:px-xl py-md max-w-container-max mx-auto">
        <a class="font-display-lg text-headline-md tracking-tighter text-primary uppercase" href="{{ url('/') }}">
            BEACH BLAST 2026
        </a>
        <div class="hidden md:flex items-center gap-gutter font-label-lg text-label-lg uppercase">
            <a class="text-primary border-b-2 border-primary pb-1" href="#experience">Experience</a>
            <a class="text-on-surface-variant hover:text-primary transition-colors" href="#sponsors">Sponsors</a>
            <a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ url('/ticket') }}">Tickets</a>
            <a class="text-on-surface-variant hover:text-primary transition-colors" href="https://icelandbeach.com/ticket" target="_blank" rel="noopener noreferrer">Iceland Beach</a>
        </div>
        <div class="flex items-center gap-sm">
            <a href="{{ url('/ticket') }}" class="bg-primary-container text-white px-md py-sm rounded-full font-label-lg text-label-lg uppercase shadow-[0_4px_16px_rgba(255,95,31,0.3)] active:scale-95 inline-block">
                Register
            </a>
        </div>
    </div>
</nav>

<header class="relative h-screen w-full overflow-hidden flex items-center justify-center pt-20">
    <div class="absolute inset-0 z-0 overflow-hidden">
        <div class="hero-slider h-full">
            <div class="hero-slide relative h-full">
                <img alt="Beach Blast hero slide 1" class="w-full h-full object-cover" src="{{ asset('images/hero pic.jpg') }}" />
                <div class="absolute inset-0 hero-panel"></div>
            </div>
            <div class="hero-slide relative h-full">
                <img alt="Beach Blast hero slide 2" class="w-full h-full object-cover" src="{{ asset('images/hero pic1.jpg') }}" />
                <div class="absolute inset-0 hero-panel"></div>
            </div>
            <div class="hero-slide relative h-full">
                <img alt="Beach Blast hero slide 3" class="w-full h-full object-cover" src="{{ asset('images/hero pic3.jpg') }}" />
                <div class="absolute inset-0 hero-panel"></div>
            </div>
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-background/40 to-background"></div>
        <div class="absolute inset-0 bg-primary-fixed/10 mix-blend-screen"></div>
    </div>

    <div class="relative z-10 text-center px-margin-mobile md:px-xl max-w-5xl mx-auto">
        <div class="inline-flex items-center gap-2 glass-card rounded-full px-4 py-2 text-label-sm text-primary-fixed uppercase tracking-widest mb-6">
            <span class="w-2 h-2 rounded-full bg-primary-fixed glow-ring"></span>
            Neon Lagoon 2026
        </div>
        <h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-primary-fixed uppercase tracking-tighter leading-none mb-md drop-shadow-md">
            Inter-University Beach Blast 2026
        </h1>
        <p class="text-body-lg text-on-surface-variant max-w-2xl mx-auto mb-lg">
            A high-energy beachfront takeover with live music, games, battles, and late-night conversations under the neon sky.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ url('/ticket') }}" class="bg-primary-fixed text-[#000000] font-label-md px-8 py-4 rounded-full uppercase hover:shadow-[0_0_20px_rgba(21,255,209,0.8)] transition-all inline-flex items-center justify-center">
                Secure Tickets
            </a>
            <a href="https://icelandbeach.com/ticket" target="_blank" rel="noopener noreferrer" class="glass-card text-primary-fixed font-label-md px-8 py-4 rounded-full uppercase inline-flex items-center justify-center gap-2 hover:border-primary-fixed/60 transition-all">
                <span class="material-symbols-outlined">travel_explore</span>
                Iceland Beach
            </a>
        </div>
    </div>
</header>

<section id="experience" class="py-20 px-margin-mobile md:px-xl max-w-container-max mx-auto">
    <div class="flex items-end justify-between gap-6 mb-12 flex-wrap">
        <div>
            <p class="font-label-md text-label-md text-primary-fixed uppercase tracking-widest mb-2">What to expect</p>
            <h2 class="font-headline-lg text-headline-lg text-primary uppercase tracking-tighter">The Experience</h2>
        </div>
        <a href="#sponsors" class="text-on-surface-variant hover:text-primary-fixed transition-colors font-label-md uppercase tracking-widest">
            View sponsors
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
        <article class="glass-card rounded-xl p-5 flex flex-col gap-4 overflow-hidden min-h-[320px]">
            <div class="rounded-xl overflow-hidden h-44">
                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" src="{{ asset('images/abstral-official-PxT3KJTeXDk-unsplash.jpg') }}" alt="Music crowd and lights" />
            </div>
            <div>
                <h3 class="font-headline-md text-headline-md text-primary mb-2">Music</h3>
                <p class="text-body-sm text-on-surface-variant">3 stages, 40+ DJs, and a soundtrack that moves from sunset into the early hours.</p>
            </div>
        </article>
        <article class="glass-card rounded-xl p-5 flex flex-col gap-4 overflow-hidden min-h-[320px] lg:translate-y-4">
            <div class="rounded-xl overflow-hidden h-44">
                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" src="{{ asset('images/angelo-moleele-MnGGaUP4Mo4-unsplash.jpg') }}" alt="Beach games in motion" />
            </div>
            <div>
                <h3 class="font-headline-md text-headline-md text-primary mb-2">Games</h3>
                <p class="text-body-sm text-on-surface-variant">AR beach volleyball, neon night matches, and fast-paced campus challenges.</p>
            </div>
        </article>
        <article class="glass-card rounded-xl p-5 flex flex-col gap-4 overflow-hidden min-h-[320px]">
            <div class="rounded-xl overflow-hidden h-44">
                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" src="{{ asset('images/hansa-dasun-7XUbEDZxeEs-unsplash.jpg') }}" alt="Immersive digital art" />
            </div>
            <div>
                <h3 class="font-headline-md text-headline-md text-primary mb-2">Immersion</h3>
                <p class="text-body-sm text-on-surface-variant">Projected art, shoreline installations, and glowing walkthroughs across the cove.</p>
            </div>
        </article>
        <article class="glass-card rounded-xl p-5 flex flex-col gap-4 overflow-hidden min-h-[320px] lg:translate-y-4">
            <div class="rounded-xl overflow-hidden h-44">
                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" src="{{ asset('images/hero pic5.jpg') }}" alt="University battles on the sand" />
            </div>
            <div>
                <h3 class="font-headline-md text-headline-md text-primary mb-2">Battles</h3>
                <p class="text-body-sm text-on-surface-variant">University vs university competitions with a proper winner-takes-all finish.</p>
            </div>
        </article>
        <article class="glass-card rounded-xl p-5 flex flex-col gap-4 overflow-hidden min-h-[320px]">
            <div class="rounded-xl overflow-hidden h-44">
                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" src="{{ asset('images/random-institute-p0DsgMj8Smc-unsplash.jpg') }}" alt="Evening conversations" />
            </div>
            <div>
                <h3 class="font-headline-md text-headline-md text-primary mb-2">Conversations</h3>
                <p class="text-body-sm text-on-surface-variant">Fire-side talks with founders, creatives, and builders under the stars.</p>
            </div>
        </article>
    </div>
</section>

<section class="px-margin-mobile md:px-xl max-w-container-max mx-auto py-8">
    <div class="section-divider h-px w-full mb-8"></div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-stretch">
        <div class="glass-card rounded-2xl overflow-hidden min-h-[360px] relative">
            <img class="w-full h-full object-cover opacity-85" src="{{ asset('images/joshua-duneebon-oK7gVfps-JA-unsplash.jpg') }}" alt="Festival crowd at night" />
            <div class="absolute inset-0 bg-gradient-to-t from-background via-background/45 to-transparent"></div>
            <div class="absolute bottom-0 left-0 right-0 p-6">
                <p class="font-label-md text-label-md text-primary-fixed uppercase tracking-widest mb-2">Festival pulse</p>
                <h3 class="font-headline-md text-headline-md text-primary-fixed">Built for a full weekend takeover.</h3>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div class="glass-card rounded-2xl overflow-hidden min-h-[172px]">
                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" src="{{ asset('images/random-institute-PahSmC5XTNk-unsplash.jpg') }}" alt="Shoreline installation" />
            </div>
            <div class="glass-card rounded-2xl overflow-hidden min-h-[172px] flex items-center justify-center p-6 bg-primary-fixed/5">
                <div class="text-center">
                    <span class="font-headline-xl text-headline-xl text-primary-fixed block glow-ring">15k+</span>
                    <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-widest">Attendees</span>
                </div>
            </div>
            <div class="glass-card rounded-2xl overflow-hidden min-h-[172px]">
                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" src="{{ asset('images/hero pic3.jpg') }}" alt="Night beach skyline" />
            </div>
            <div class="glass-card rounded-2xl overflow-hidden min-h-[172px]">
                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" src="{{ asset('images/hero pic1.jpg') }}" alt="Festival lights at dusk" />
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-margin-mobile md:px-xl max-w-container-max mx-auto">
    <div class="flex flex-col lg:flex-row gap-8 lg:items-center justify-between glass-card rounded-2xl p-8 md:p-10 overflow-hidden relative">
        <div class="absolute -right-16 -top-16 w-64 h-64 rounded-full bg-secondary/20 blur-[90px]"></div>
        <div class="relative z-10 max-w-2xl">
            <p class="font-label-md text-label-md text-secondary uppercase tracking-widest mb-3">Champion's bounty</p>
            <h2 class="font-headline-lg text-headline-lg text-secondary mb-4 uppercase tracking-tighter">Win more than bragging rights.</h2>
            <p class="text-body-lg text-on-surface-variant">
                Compete in the University Battles for a chance to win the Cyber-Trophy and $50k in tech grants for your campus.
            </p>
        </div>
        <a href="{{ url('/ticket') }}" class="relative z-10 bg-secondary text-[#000000] font-label-md px-8 py-4 rounded-full uppercase hover:shadow-[0_0_25px_rgba(255,181,158,0.8)] transition-all inline-flex items-center justify-center shrink-0">
            View Leaderboards
        </a>
    </div>
</section>

<section id="sponsors" class="w-full px-margin-mobile md:px-xl py-14 border-t border-outline-variant/10">
    <div class="max-w-container-max mx-auto text-center">
        <p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-widest mb-8">Our Sponsors</p>
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
            <img src="{{ asset('images/icca logo 1.png') }}" class="h-16 md:h-24 object-contain" alt="ICCA sponsor logo">
            <a href="https://icelandbeach.com/ticket" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center">
                <img src="{{ asset('images/icelandbeach logo 1.png') }}" class="h-16 md:h-24 object-contain" alt="Iceland Beach sponsor logo">
            </a>
        </div>
    </div>
</section>

<footer class="w-full px-margin-mobile md:px-xl py-lg md:py-xl flex flex-col md:flex-row justify-between items-center gap-md bg-surface-container-low mt-xl border-t border-outline-variant/30">
    <div class="font-display-lg text-headline-md text-primary uppercase tracking-tighter">
        BEACH BLAST 2026
    </div>
    <div class="flex flex-wrap justify-center gap-md text-body-md uppercase">
        <a class="text-on-surface-variant hover:text-primary transition-colors opacity-100 hover:opacity-80" href="#experience">Experience</a>
        <a class="text-on-surface-variant hover:text-primary transition-colors opacity-100 hover:opacity-80" href="#sponsors">Sponsors</a>
        <a class="text-on-surface-variant hover:text-primary transition-colors opacity-100 hover:opacity-80" href="{{ url('/ticket') }}">Tickets</a>
        <a class="text-on-surface-variant hover:text-primary transition-colors opacity-100 hover:opacity-80" href="https://icelandbeach.com/ticket" target="_blank" rel="noopener noreferrer">Iceland Beach</a>
    </div>
    <div class="text-secondary text-label-md text-center md:text-right">
        © 2026 Inter-University Beach Blast. All rights reserved.
    </div>
</footer>
@endsection

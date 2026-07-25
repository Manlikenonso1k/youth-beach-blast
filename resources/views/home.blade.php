@extends('layouts.app')

@section('content')
<!-- 1. Nav Bar -->
<nav class="fixed top-0 w-full z-50 flex justify-between items-center px-margin-mobile md:px-xl py-base md:py-md nav-bar backdrop-blur-xl shadow-[0_8px_32px_rgba(255,95,31,0.15)] transition-all duration-300">
    <div class="font-display-lg text-headline-md tracking-tighter text-primary dark:text-primary-fixed uppercase">
        BEACH BLAST 2026
    </div>
    <div class="hidden md:flex items-center gap-gutter font-label-lg text-label-lg uppercase">
        <a class="text-primary border-b-2 border-primary pb-1 active:scale-95 transform transition-transform hover:opacity-80 duration-300" href="#">Events</a>
        <a class="text-on-surface-variant hover:text-primary transition-colors active:scale-95 transform transition-transform hover:opacity-80 duration-300" href="#">Schedule</a>
        <a class="text-on-surface-variant hover:text-primary transition-colors active:scale-95 transform transition-transform hover:opacity-80 duration-300" href="#">Venues</a>
        <a class="text-on-surface-variant hover:text-primary transition-colors active:scale-95 transform transition-transform hover:opacity-80 duration-300" href="{{ url('/ticket') }}">Tickets</a>
    </div>
    <div class="flex items-center gap-sm">
        <div class="hidden md:flex items-center gap-sm text-primary">
            <button class="hover:opacity-80 transition-all duration-300 active:scale-95">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">share</span>
            </button>
            <button class="hover:opacity-80 transition-all duration-300 active:scale-95">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">public</span>
            </button>
        </div>
        <a href="{{ url('/ticket') }}" class="bg-primary-container text-white px-md py-sm rounded-full font-label-lg text-label-lg uppercase hover:opacity-90 transition-all shadow-[0_4px_16px_rgba(255,95,31,0.3)] active:scale-95 inline-block">
            Register
        </a>
    </div>
</nav>

<!-- 2. Hero Section -->
<header class="relative h-screen w-full overflow-hidden flex items-center justify-center mt-16 md:mt-0 pt-20">
    <div class="absolute inset-0 z-0 overflow-hidden">
        <div class="hero-slider h-full">
            <div class="hero-slide relative h-full">
                <img alt="Hero 1" class="w-full h-full object-cover" src="{{ asset('images/hero pic.jpg') }}"/>
                <div class="absolute inset-0 bg-gradient-to-t from-background via-background/40 to-transparent"></div>
            </div>
            <div class="hero-slide relative h-full">
                <img alt="Hero 2" class="w-full h-full object-cover" src="{{ asset('images/hero pic1.jpg') }}"/>
                <div class="absolute inset-0 bg-gradient-to-t from-background via-background/40 to-transparent"></div>
            </div>
            <div class="hero-slide relative h-full">
                <img alt="Hero 3" class="w-full h-full object-cover" src="{{ asset('images/hero pic3.jpg') }}"/>
                <div class="absolute inset-0 bg-gradient-to-t from-background via-background/40 to-transparent"></div>
            </div>
        </div>
    </div>
    <div class="relative z-10 text-center px-margin-mobile flex flex-col items-center">
        <h1 class="font-display-lg md:text-display-lg text-display-lg-mobile text-primary drop-shadow-md uppercase tracking-tighter mb-md max-w-4xl mx-auto leading-none">
            INTER-UNIVERSITY BEACH BLAST 2026
        </h1>
        <p class="text-body-lg text-on-surface-variant max-w-2xl mb-lg">
            The ultimate fusion of sun, sand, and student spirit. Get ready for an unforgettable golden hour experience.
        </p>
        <a href="{{ url('/ticket') }}" class="bg-primary-container text-white px-lg py-md rounded-full font-label-lg text-label-lg uppercase hover:opacity-90 transition-all shadow-[0_8px_32px_rgba(255,95,31,0.4)] hover:scale-105 transform inline-block mt-4">
            Get Tickets Now
        </a>
    </div>
</header>

<!-- 3. Festival Pillars -->
<section class="py-xl px-margin-mobile md:px-xl max-w-container-max mx-auto">
    <div class="text-center mb-lg">
        <h2 class="text-headline-lg text-primary uppercase tracking-tighter">Festival Pillars</h2>
        <div class="w-24 h-1 bg-secondary mx-auto mt-sm"></div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-5 gap-sm md:gap-gutter">
        <!-- Pillar 1 -->
        <div class="flex flex-col items-center group cursor-pointer">
            <div class="pillar-img-wrap arched-card overflow-hidden mb-sm shadow-[0_8px_24px_rgba(255,95,31,0.1)]">
                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="{{ asset('images/abstral-official-PxT3KJTeXDk-unsplash.jpg') }}"/>
            </div>
            <h3 class="text-headline-md uppercase text-on-surface group-hover:text-primary transition-colors">Music</h3>
        </div>
        <!-- Pillar 2 -->
        <div class="flex flex-col items-center group cursor-pointer md:mt-md">
            <div class="pillar-img-wrap arched-card overflow-hidden mb-sm shadow-[0_8px_24px_rgba(255,95,31,0.1)]">
                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="{{ asset('images/angelo-moleele-MnGGaUP4Mo4-unsplash.jpg') }}"/>
            </div>
            <h3 class="text-headline-md uppercase text-on-surface group-hover:text-primary transition-colors">Games</h3>
        </div>
        <!-- Pillar 3 -->
        <div class="flex flex-col items-center group cursor-pointer col-span-2 md:col-span-1">
            <div class="pillar-img-wrap arched-card overflow-hidden mb-sm shadow-[0_8px_24px_rgba(255,95,31,0.1)] border-4 border-primary/20">
                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="{{ asset('images/hansa-dasun-7XUbEDZxeEs-unsplash.jpg') }}"/>
            </div>
            <h3 class="text-headline-md uppercase text-primary font-bold">Experience</h3>
        </div>
        <!-- Pillar 4 -->
        <div class="flex flex-col items-center group cursor-pointer md:mt-md">
            <div class="pillar-img-wrap arched-card overflow-hidden mb-sm shadow-[0_8px_24px_rgba(255,95,31,0.1)]">
                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="{{ asset('images/hero pic5.jpg') }}"/>
            </div>
            <h3 class="text-headline-md uppercase text-on-surface group-hover:text-primary transition-colors">Battles</h3>
        </div>
        <!-- Pillar 5 -->
        <div class="flex flex-col items-center group cursor-pointer">
            <div class="pillar-img-wrap arched-card overflow-hidden mb-sm shadow-[0_8px_24px_rgba(255,95,31,0.1)]">
                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="{{ asset('images/random-institute-p0DsgMj8Smc-unsplash.jpg') }}"/>
            </div>
            <h3 class="text-headline-md uppercase text-on-surface group-hover:text-primary transition-colors">Conversations</h3>
        </div>
    </div>
</section>

<!-- 4. Details & Collage -->
<section class="py-xl px-margin-mobile md:px-xl max-w-container-max mx-auto grid md:grid-cols-2 gap-lg items-center">
    <!-- Left: Masonry Collage -->
    <div class="grid grid-cols-2 gap-xs md:gap-sm h-[500px]">
        <div class="col-span-1 row-span-2 overflow-hidden rounded-xl shadow-[0_8px_32px_rgba(255,95,31,0.15)]">
            <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" src="{{ asset('images/joshua-duneebon-oK7gVfps-JA-unsplash.jpg') }}"/>
        </div>
        <div class="col-span-1 row-span-1 overflow-hidden rounded-xl shadow-[0_8px_32px_rgba(255,95,31,0.15)]">
            <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" src="{{ asset('images/random-institute-PahSmC5XTNk-unsplash.jpg') }}"/>
        </div>
        <div class="col-span-1 row-span-1 overflow-hidden rounded-xl shadow-[0_8px_32px_rgba(255,95,31,0.15)]">
            <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" src="{{ asset('images/hero pic3.jpg') }}"/>
        </div>
    </div>
    <!-- Right: Text Details -->
    <div class="flex flex-col gap-md">
        <h2 class="text-headline-lg text-primary uppercase tracking-tighter">Event Details</h2>
        <div class="bg-surface-container-low p-md rounded-2xl border border-outline-variant shadow-[0_4px_24px_rgba(255,95,31,0.05)] flex items-start gap-sm">
            <span class="material-symbols-outlined text-primary text-headline-md mt-1" style="font-variation-settings: 'FILL' 1;">calendar_month</span>
            <div>
                <h4 class="text-label-lg uppercase text-on-surface-variant">Dates</h4>
                <p class="text-headline-md text-on-surface">18th - 19th Sept</p>
            </div>
        </div>
        <div class="bg-surface-container-low p-md rounded-2xl border border-outline-variant shadow-[0_4px_24px_rgba(255,95,31,0.05)] flex items-start gap-sm">
            <span class="material-symbols-outlined text-primary text-headline-md mt-1" style="font-variation-settings: 'FILL' 1;">location_on</span>
            <div>
                <h4 class="text-label-lg uppercase text-on-surface-variant">Location</h4>
                <p class="text-headline-md text-on-surface">TBA (Secret Beach)</p>
            </div>
        </div>
        <div class="bg-surface-container-low p-md rounded-2xl border border-outline-variant shadow-[0_4px_24px_rgba(255,95,31,0.05)] flex items-start gap-sm">
            <span class="material-symbols-outlined text-primary text-headline-md mt-1" style="font-variation-settings: 'FILL' 1;">checkroom</span>
            <div>
                <h4 class="text-label-lg uppercase text-on-surface-variant">Dress Code</h4>
                <p class="text-headline-md text-on-surface">Beach Wear / High Energy</p>
            </div>
        </div>
    </div>
</section>

<!-- 5. Prize CTA Banner -->
<section class="relative w-full overflow-hidden bg-secondary-container py-xl my-xl">
    <div class="absolute inset-0 opacity-20 bg-radial-prize"></div>
    <div class="relative z-10 text-center px-margin-mobile flex flex-col items-center">
        <h2 class="font-display-lg md:text-display-lg text-display-lg-mobile text-on-secondary-container uppercase tracking-tighter mb-sm drop-shadow-md">
            WIN AMAZING PRIZES!
        </h2>
        <p class="text-body-lg text-on-secondary-container max-w-2xl mb-lg font-medium">
            Participate in beach battles and campus competitions to win exclusive VIP access and merch.
        </p>
        <button class="bg-primary text-white px-lg py-md rounded-full font-label-lg text-label-lg uppercase hover:opacity-90 transition-all shadow-[0_8px_32px_rgba(255,95,31,0.5)] hover:scale-105 transform border-2 border-white/20">
            View Competitions
        </button>
    </div>
</section>

<!-- Sponsors Section -->
<section class="w-full px-margin-mobile md:px-xl flex flex-col items-center" style="padding-top: 3rem; padding-bottom: 3rem; margin-top: 3rem; margin-bottom: 2rem; border-top: 1px solid #e2e2e2;">
    <h3 class="text-on-surface-variant uppercase tracking-widest" style="font-family: 'Inter', sans-serif; font-size: 14px; font-weight: 700; line-height: 20px; letter-spacing: 0.05em; margin-bottom: 2rem;">Our Sponsors</h3>
    <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
        <img src="{{ asset('images/icca logo 1.png') }}" class="h-16 md:h-24 object-contain" alt="ICCA">
        <img src="{{ asset('images/icelandbeach logo 1.png') }}" class="h-16 md:h-24 object-contain" alt="Iceland Beach">
    </div>
</section>

<!-- 6. Footer -->
<footer class="w-full px-margin-mobile md:px-xl py-lg md:py-xl flex flex-col md:flex-row justify-between items-center gap-md bg-surface-container-low dark:bg-surface-dim mt-xl border-t border-outline-variant/30">
    <div class="font-display-lg text-headline-md text-primary uppercase tracking-tighter">
        BEACH BLAST 2026
    </div>
    <div class="flex flex-wrap justify-center gap-md text-body-md uppercase">
        <a class="text-on-surface-variant hover:text-primary transition-colors opacity-100 hover:opacity-80" href="#">Privacy Policy</a>
        <a class="text-on-surface-variant hover:text-primary transition-colors opacity-100 hover:opacity-80" href="#">Terms of Service</a>
        <a class="text-on-surface-variant hover:text-primary transition-colors opacity-100 hover:opacity-80" href="#">Contact Us</a>
        <a class="text-on-surface-variant hover:text-primary transition-colors opacity-100 hover:opacity-80" href="#">Sponsorships</a>
    </div>
    <div class="text-secondary text-label-md text-center md:text-right">
        © 2026 Inter-University Beach Blast. All rights reserved.
    </div>
</footer>
@endsection

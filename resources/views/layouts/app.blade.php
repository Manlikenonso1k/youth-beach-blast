<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-seo-tags page="home" />
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        :root {
            /* Colors */
            --surface: #fdf8f4;
            --surface-dim: #ded9d5;
            --surface-bright: #fdf8f4;
            --surface-container-lowest: #ffffff;
            --surface-container-low: #f8f3ef;
            --surface-container: #f2ede9;
            --surface-container-high: #ece7e3;
            --surface-container-highest: #e6e2de;
            --on-surface: #1d1b19;
            --on-surface-variant: #5b4138;
            --inverse-surface: #32302e;
            --inverse-on-surface: #f5f0ec;
            --outline: #8f7066;
            --outline-variant: #e3bfb3;
            --surface-tint: #ab3600;
            --primary: #ab3600;
            --on-primary: #ffffff;
            --primary-container: #ff5f1f;
            --on-primary-container: #561700;
            --inverse-primary: #ffb59c;
            --secondary: #7c5800;
            --on-secondary: #ffffff;
            --secondary-container: #feb700;
            --on-secondary-container: #6b4b00;
            --tertiary: #725950;
            --on-tertiary: #ffffff;
            --tertiary-container: #ab8e84;
            --on-tertiary-container: #3c2821;
            --error: #ba1a1a;
            --on-error: #ffffff;
            --error-container: #ffdad6;
            --on-error-container: #93000a;
            --primary-fixed: #ffdbcf;
            --primary-fixed-dim: #ffb59c;
            --on-primary-fixed: #390c00;
            --on-primary-fixed-variant: #832700;
            --secondary-fixed: #ffdea8;
            --secondary-fixed-dim: #ffba20;
            --on-secondary-fixed: #271900;
            --on-secondary-fixed-variant: #5e4200;
            --tertiary-fixed: #fddbd0;
            --tertiary-fixed-dim: #e0c0b4;
            --on-tertiary-fixed: #291710;
            --on-tertiary-fixed-variant: #584239;
            --background: #fdf8f4;
            --on-background: #1d1b19;
            --surface-variant: #e6e2de;

            /* Spacing */
            --spacing-base: 8px;
            --spacing-xs: 4px;
            --spacing-sm: 12px;
            --spacing-md: 24px;
            --spacing-lg: 48px;
            --spacing-xl: 80px;
            --container-max: 1280px;
            --gutter: 24px;
            --margin-mobile: 16px;

            /* Rounded */
            --rounded-sm: 0.25rem;
            --rounded: 0.5rem;
            --rounded-md: 0.75rem;
            --rounded-lg: 1rem;
            --rounded-xl: 1.5rem;
            --rounded-full: 9999px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: var(--background);
            color: var(--on-background);
            font-family: 'DM Sans', sans-serif;
            font-size: 18px;
            line-height: 28px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            overflow-x: hidden;
            position: relative;
        }

        ::selection {
            background-color: var(--primary-container);
            color: #ffffff;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button {
            border: none;
            background: none;
            cursor: pointer;
            font-family: inherit;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* Typography */
        h1, h2, h3, h4, h5, h6, .font-display-lg, .font-headline-lg, .font-headline-md, .font-label-lg, .font-label-md {
            font-family: 'Anton', sans-serif;
            font-weight: 400;
        }

        .text-display-lg {
            font-size: 80px;
            line-height: 88px;
            letter-spacing: 0.02em;
        }
        
        .text-display-lg-mobile {
            font-size: 48px;
            line-height: 52px;
            letter-spacing: 0.02em;
        }

        @media (min-width: 768px) {
            .md\:text-display-lg {
                font-size: 80px;
                line-height: 88px;
            }
        }

        .text-headline-lg {
            font-size: 40px;
            line-height: 48px;
            letter-spacing: 0.03em;
        }

        .text-headline-md {
            font-size: 32px;
            line-height: 40px;
            letter-spacing: 0.03em;
        }
        
        .text-label-lg {
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            line-height: 20px;
            letter-spacing: 0.05em;
            font-weight: 700;
        }
        
        .text-label-md {
            font-family: 'DM Sans', sans-serif;
            font-size: 12px;
            line-height: 16px;
            font-weight: 500;
        }

        .text-body-lg {
            font-family: 'DM Sans', sans-serif;
            font-size: 18px;
            line-height: 28px;
        }

        .text-body-md {
            font-family: 'DM Sans', sans-serif;
            font-size: 16px;
            line-height: 24px;
        }
        
        .font-bold { font-weight: 700; }
        .font-medium { font-weight: 500; }

        .uppercase { text-transform: uppercase; }
        .text-center { text-align: center; }
        .text-right { text-align: right; }
        .tracking-tighter { letter-spacing: -0.05em; }
        .leading-none { line-height: 1; }
        
        /* Colors */
        .text-primary { color: var(--primary); }
        .text-white { color: #ffffff; }
        .text-on-surface { color: var(--on-surface); }
        .text-on-surface-variant { color: var(--on-surface-variant); }
        .text-secondary { color: var(--secondary); }
        .text-on-secondary-container { color: var(--on-secondary-container); }
        
        .dark\:text-primary-fixed { color: var(--primary-fixed); } /* Simulating dark mode class */

        .bg-primary { background-color: var(--primary); }
        .bg-primary-container { background-color: var(--primary-container); }
        .bg-surface-container-low { background-color: var(--surface-container-low); }
        .bg-secondary-container { background-color: var(--secondary-container); }
        
        .dark\:bg-surface-dim { background-color: var(--surface-dim); }

        /* Layout & Utilities */
        .max-w-container-max { max-width: var(--container-max); }
        
        .flex { display: flex; }
        .flex-col { flex-direction: column; }
        .flex-wrap { flex-wrap: wrap; }
        .items-center { align-items: center; }
        .items-start { align-items: flex-start; }
        .justify-between { justify-content: space-between; }
        .justify-center { justify-content: center; }
        
        .grid { display: grid; }
        .grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        
        @media (min-width: 768px) {
            .md\:grid-cols-5 { grid-template-columns: repeat(5, minmax(0, 1fr)); }
            .md\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .md\:col-span-1 { grid-column: span 1 / span 1; }
            .md\:flex-row { flex-direction: row; }
            .md\:hidden { display: none; }
            .md\:flex { display: flex; }
            .md\:text-right { text-align: right; }
        }

        .col-span-1 { grid-column: span 1 / span 1; }
        .col-span-2 { grid-column: span 2 / span 2; }
        .row-span-1 { grid-row: span 1 / span 1; }
        .row-span-2 { grid-row: span 2 / span 2; }

        .gap-xs { gap: var(--spacing-xs); }
        .gap-sm { gap: var(--spacing-sm); }
        .gap-md { gap: var(--spacing-md); }
        .gap-lg { gap: var(--spacing-lg); }
        .gap-gutter { gap: var(--gutter); }

        .mt-1 { margin-top: 0.25rem; }
        .mt-16 { margin-top: 4rem; }
        .pt-20 { padding-top: 5rem; }
        .pb-1 { padding-bottom: 0.25rem; }
        
        .mt-sm { margin-top: var(--spacing-sm); }
        .mt-md { margin-top: var(--spacing-md); }
        .mt-lg { margin-top: var(--spacing-lg); }
        .mt-xl { margin-top: var(--spacing-xl); }
        
        .mb-sm { margin-bottom: var(--spacing-sm); }
        .mb-md { margin-bottom: var(--spacing-md); }
        .mb-lg { margin-bottom: var(--spacing-lg); }
        
        .my-xl { margin-top: var(--spacing-xl); margin-bottom: var(--spacing-xl); }
        .mx-auto { margin-left: auto; margin-right: auto; }

        .py-base { padding-top: var(--spacing-base); padding-bottom: var(--spacing-base); }
        .py-sm { padding-top: var(--spacing-sm); padding-bottom: var(--spacing-sm); }
        .py-md { padding-top: var(--spacing-md); padding-bottom: var(--spacing-md); }
        .py-lg { padding-top: var(--spacing-lg); padding-bottom: var(--spacing-lg); }
        .py-xl { padding-top: var(--spacing-xl); padding-bottom: var(--spacing-xl); }
        
        .px-margin-mobile { padding-left: var(--margin-mobile); padding-right: var(--margin-mobile); }
        .px-lg { padding-left: var(--spacing-lg); padding-right: var(--spacing-lg); }
        
        @media (min-width: 768px) {
            .md\:mt-0 { margin-top: 0; }
            .md\:mt-md { margin-top: var(--spacing-md); }
            .md\:px-xl { padding-left: var(--spacing-xl); padding-right: var(--spacing-xl); }
            .md\:py-md { padding-top: var(--spacing-md); padding-bottom: var(--spacing-md); }
            .md\:py-xl { padding-top: var(--spacing-xl); padding-bottom: var(--spacing-xl); }
        }
        
        .p-md { padding: var(--spacing-md); }

        .w-24 { width: 6rem; }
        .w-full { width: 100%; }
        
        .h-1 { height: 0.25rem; }
        .h-\[500px\] { height: 500px; }
        .h-full { height: 100%; }
        .h-screen { height: 100vh; }
        
        .max-w-2xl { max-width: 42rem; }
        .max-w-4xl { max-width: 56rem; }
        
        .absolute { position: absolute; }
        .relative { position: relative; }
        .fixed { position: fixed; }
        
        .inset-0 { top: 0; right: 0; bottom: 0; left: 0; }
        .top-0 { top: 0; }
        
        .z-0 { z-index: 0; }
        .z-10 { z-index: 10; }
        .z-50 { z-index: 50; }

        .overflow-hidden { overflow: hidden; }
        .object-cover { object-fit: cover; }
        .aspect-\[2\/3\] { aspect-ratio: 2 / 3; }
        
        .rounded-xl { border-radius: var(--rounded-xl); }
        .rounded-2xl { border-radius: 1rem; }
        .rounded-full { border-radius: var(--rounded-full); }

        .border { border-width: 1px; border-style: solid; }
        .border-2 { border-width: 2px; border-style: solid; }
        .border-4 { border-width: 4px; border-style: solid; }
        .border-t { border-top-width: 1px; border-top-style: solid; }
        .border-b-2 { border-bottom-width: 2px; border-bottom-style: solid; }
        
        .border-primary { border-color: var(--primary); }
        .border-primary\/20 { border-color: rgba(171, 54, 0, 0.2); }
        .border-white\/20 { border-color: rgba(255, 255, 255, 0.2); }
        .border-outline-variant { border-color: var(--outline-variant); }
        .border-outline-variant\/30 { border-color: rgba(227, 191, 179, 0.3); }

        .shadow-\[0_4px_16px_rgba\(255\,95\,31\,0\.3\)\] { box-shadow: 0 4px 16px rgba(255,95,31,0.3); }
        .shadow-\[0_8px_32px_rgba\(255\,95\,31\,0\.4\)\] { box-shadow: 0 8px 32px rgba(255,95,31,0.4); }
        .shadow-\[0_8px_32px_rgba\(255\,95\,31\,0\.15\)\] { box-shadow: 0 8px 32px rgba(255,95,31,0.15); }
        .shadow-\[0_8px_32px_rgba\(255\,95\,31\,0\.5\)\] { box-shadow: 0 8px 32px rgba(255,95,31,0.5); }
        .shadow-\[0_8px_24px_rgba\(255\,95\,31\,0\.1\)\] { box-shadow: 0 8px 24px rgba(255,95,31,0.1); }
        .shadow-\[0_4px_24px_rgba\(255\,95\,31\,0\.05\)\] { box-shadow: 0 4px 24px rgba(255,95,31,0.05); }

        .drop-shadow-md { filter: drop-shadow(0 4px 3px rgba(0,0,0,0.07)) drop-shadow(0 2px 2px rgba(0,0,0,0.06)); }
        
        .opacity-20 { opacity: 0.2; }
        .opacity-80 { opacity: 0.8; }
        .opacity-90 { opacity: 0.9; }
        .opacity-100 { opacity: 1; }
        
        .transition-all { transition-property: all; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 300ms; }
        .transition-transform { transition-property: transform; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 300ms; }
        .transition-colors { transition-property: color, background-color, border-color; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 300ms; }
        
        .duration-300 { transition-duration: 300ms; }
        .duration-500 { transition-duration: 500ms; }
        .duration-700 { transition-duration: 700ms; }

        .transform { transform: translate(var(--tw-translate-x, 0), var(--tw-translate-y, 0)) rotate(var(--tw-rotate, 0)) skewX(var(--tw-skew-x, 0)) skewY(var(--tw-skew-y, 0)) scaleX(var(--tw-scale-x, 1)) scaleY(var(--tw-scale-y, 1)); }

        .hover\:scale-105:hover { --tw-scale-x: 1.05; --tw-scale-y: 1.05; transform: scale(1.05); }
        .hover\:scale-110:hover { --tw-scale-x: 1.1; --tw-scale-y: 1.1; transform: scale(1.1); }
        .hover\:opacity-80:hover { opacity: 0.8; }
        .hover\:opacity-90:hover { opacity: 0.9; }
        .hover\:text-primary:hover { color: var(--primary); }

        .active\:scale-95:active { --tw-scale-x: 0.95; --tw-scale-y: 0.95; transform: scale(0.95); }

        .group:hover .group-hover\:scale-110 { --tw-scale-x: 1.1; --tw-scale-y: 1.1; transform: scale(1.1); }
        .group:hover .group-hover\:text-primary { color: var(--primary); }
        .cursor-pointer { cursor: pointer; }

        /* Specific Component Styles */
        .texture-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 9999;
            opacity: 0.03;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        }
        
        .nav-bar {
            background-color: rgba(253, 248, 244, 0.8);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
        }
        .dark\:bg-background\/80 { background-color: rgba(253, 248, 244, 0.8); } /* Hardcoded due to no dark mode implementation in pure css */
        .bg-background\/80 { background-color: rgba(253, 248, 244, 0.8); }
        .backdrop-blur-xl { backdrop-filter: blur(24px); -webkit-backdrop-filter: blur(24px); }
        
        .hero-slider {
            display: flex;
            width: 300%;
            animation: slide 15s infinite;
        }

        .hero-slide {
            width: 33.333%;
            flex-shrink: 0;
        }
        
        @keyframes slide {
            0%, 25% { transform: translateX(0); }
            33%, 58% { transform: translateX(-33.333%); }
            66%, 91% { transform: translateX(-66.666%); }
            100% { transform: translateX(0); }
        }

        .arched-card {
            clip-path: ellipse(100% 100% at 50% 100%);
            transition: transform 0.3s ease;
        }

        .pillar-img-wrap {
            width: 160px;
            height: 240px;
            margin-left: auto;
            margin-right: auto;
        }
        @media (min-width: 768px) {
            .pillar-img-wrap {
                width: 220px;
                height: 330px;
            }
        }

        .arched-card:hover {
            transform: translateY(-10px);
        }

        .bg-gradient-to-t { background-image: linear-gradient(to top, var(--tw-gradient-stops)); }
        .from-background { --tw-gradient-from: var(--background); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(253, 248, 244, 0)); }
        .via-background\/40 { --tw-gradient-stops: var(--tw-gradient-from), rgba(253, 248, 244, 0.4), var(--tw-gradient-to, rgba(253, 248, 244, 0)); }
        .to-transparent { --tw-gradient-to: transparent; }

        /* Material Icons setup */
        .material-symbols-outlined {
            font-family: 'Material Symbols Outlined';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-lg antialiased relative selection:bg-primary-container selection:text-white">
    <div class="texture-overlay"></div>
    
    @yield('content')

</body>
</html>

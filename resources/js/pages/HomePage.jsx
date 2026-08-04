import React from 'react';
import { Link } from 'react-router-dom';
import { useSeo } from '../hooks/useSeo';

/**
 * HomePage — Full translation of home.blade.php into React.
 * Neon-and-black design with hero slider, experience cards,
 * gallery, champion CTA, sponsors, and map.
 */
export default function HomePage() {
    useSeo('home');

    return (
        <>
            {/* ==================== HERO ==================== */}
            <header className="relative h-screen w-full overflow-hidden flex items-center justify-center pt-20">
                {/* Background Slider */}
                <div className="absolute inset-0 z-0 overflow-hidden">
                    <div className="hero-slider h-full">
                        <div className="hero-slide relative h-full">
                            <img
                                alt="Beach Blast hero slide 1"
                                className="w-full h-full object-cover"
                                src="/images/hero pic.jpg"
                            />
                            <div className="absolute inset-0 hero-panel" />
                        </div>
                        <div className="hero-slide relative h-full">
                            <img
                                alt="Beach Blast hero slide 2"
                                className="w-full h-full object-cover"
                                src="/images/hero pic1.jpg"
                            />
                            <div className="absolute inset-0 hero-panel" />
                        </div>
                        <div className="hero-slide relative h-full">
                            <img
                                alt="Beach Blast hero slide 3"
                                className="w-full h-full object-cover"
                                src="/images/hero pic3.jpg"
                            />
                            <div className="absolute inset-0 hero-panel" />
                        </div>
                    </div>
                    {/* Gradient overlays */}
                    <div className="absolute inset-0 bg-gradient-to-b from-transparent via-background/40 to-background" />
                    <div className="absolute inset-0 bg-primary-fixed/10 mix-blend-screen" />
                </div>

                {/* Hero Content */}
                <div className="relative z-10 text-center px-4 md:px-20 max-w-5xl mx-auto">
                    <div className="inline-flex items-center gap-2 glass-card rounded-full px-4 py-2 text-label-sm text-primary-fixed uppercase tracking-widest mb-6">
                        <span className="w-2 h-2 rounded-full bg-primary-fixed glow-ring" />
                        Neon Lagoon 2026
                    </div>

                    <h1 className="font-display text-display-lg-mobile md:text-display-lg text-primary-fixed uppercase tracking-tighter leading-none mb-6 drop-shadow-md">
                        Inter-University Beach Blast 2026
                    </h1>

                    <p className="text-body-lg text-on-surface-variant max-w-2xl mx-auto mb-12">
                        A high-energy beachfront takeover with live music, games, battles,
                        and late-night conversations under the neon sky.
                    </p>

                    <div className="flex flex-col sm:flex-row gap-4 justify-center">
                        <Link to="/ticket" className="btn-neon-primary">
                            Secure Tickets
                        </Link>
                        <a
                            href="https://icelandbeach.com/ticket"
                            target="_blank"
                            rel="noopener noreferrer"
                            className="btn-glass"
                        >
                            <span className="material-symbols-outlined">travel_explore</span>
                            Iceland Beach
                        </a>
                    </div>
                </div>
            </header>

            {/* ==================== EXPERIENCE ==================== */}
            <section id="experience" className="py-20 px-4 md:px-20 max-w-[1280px] mx-auto">
                <div className="flex items-end justify-between gap-6 mb-12 flex-wrap">
                    <div>
                        <p className="text-label-md text-primary-fixed uppercase tracking-widest mb-2">
                            What to expect
                        </p>
                        <h2 className="font-display text-headline-lg text-primary uppercase tracking-tighter">
                            The Experience
                        </h2>
                    </div>
                    <a
                        href="#sponsors"
                        className="text-on-surface-variant hover:text-primary-fixed transition-colors text-label-md uppercase tracking-widest"
                    >
                        View sponsors
                    </a>
                </div>

                <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                    {experienceCards.map((card, i) => (
                        <article
                            key={card.title}
                            className={`glass-card rounded-xl p-5 flex flex-col gap-4 overflow-hidden min-h-[320px] ${
                                i % 2 === 1 ? 'lg:translate-y-4' : ''
                            }`}
                        >
                            <div className="rounded-xl overflow-hidden h-44">
                                <img
                                    className="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
                                    src={card.image}
                                    alt={card.alt}
                                />
                            </div>
                            <div>
                                <h3 className="font-display text-headline-md text-primary mb-2">
                                    {card.title}
                                </h3>
                                <p className="text-body-sm text-on-surface-variant">
                                    {card.description}
                                </p>
                            </div>
                        </article>
                    ))}
                </div>
            </section>

            {/* ==================== GALLERY ==================== */}
            <section className="px-4 md:px-20 max-w-[1280px] mx-auto py-8">
                <div className="section-divider h-px w-full mb-8" />
                <div className="grid grid-cols-1 lg:grid-cols-2 gap-6 items-stretch">
                    {/* Feature Image */}
                    <div className="glass-card rounded-2xl overflow-hidden min-h-[360px] relative">
                        <img
                            className="w-full h-full object-cover opacity-85"
                            src="/images/joshua-duneebon-oK7gVfps-JA-unsplash.jpg"
                            alt="Festival crowd at night"
                        />
                        <div className="absolute inset-0 bg-gradient-to-t from-background via-background/45 to-transparent" />
                        <div className="absolute bottom-0 left-0 right-0 p-6">
                            <p className="text-label-md text-primary-fixed uppercase tracking-widest mb-2">
                                Festival pulse
                            </p>
                            <h3 className="font-display text-headline-md text-primary-fixed">
                                Built for a full weekend takeover.
                            </h3>
                        </div>
                    </div>

                    {/* Grid */}
                    <div className="grid grid-cols-2 gap-4">
                        <div className="glass-card rounded-2xl overflow-hidden min-h-[172px]">
                            <img
                                className="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
                                src="/images/random-institute-PahSmC5XTNk-unsplash.jpg"
                                alt="Shoreline installation"
                            />
                        </div>
                        <div className="glass-card rounded-2xl overflow-hidden min-h-[172px] flex items-center justify-center p-6 bg-primary-fixed/5">
                            <div className="text-center">
                                <span className="font-display text-4xl text-primary-fixed block glow-ring">
                                    15k+
                                </span>
                                <span className="text-label-md text-on-surface-variant uppercase tracking-widest">
                                    Attendees
                                </span>
                            </div>
                        </div>
                        <div className="glass-card rounded-2xl overflow-hidden min-h-[172px]">
                            <img
                                className="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
                                src="/images/hero pic3.jpg"
                                alt="Night beach skyline"
                            />
                        </div>
                        <div className="glass-card rounded-2xl overflow-hidden min-h-[172px]">
                            <img
                                className="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
                                src="/images/hero pic1.jpg"
                                alt="Festival lights at dusk"
                            />
                        </div>
                    </div>
                </div>
            </section>

            {/* ==================== CHAMPION CTA ==================== */}
            <section className="py-20 px-4 md:px-20 max-w-[1280px] mx-auto">
                <div className="flex flex-col lg:flex-row gap-8 lg:items-center justify-between glass-card rounded-2xl p-8 md:p-10 overflow-hidden relative">
                    <div className="absolute -right-16 -top-16 w-64 h-64 rounded-full bg-secondary/20 blur-[90px]" />
                    <div className="relative z-10 max-w-2xl">
                        <p className="text-label-md text-secondary uppercase tracking-widest mb-3">
                            Champion's bounty
                        </p>
                        <h2 className="font-display text-headline-lg text-secondary mb-4 uppercase tracking-tighter">
                            Win more than bragging rights.
                        </h2>
                        <p className="text-body-lg text-on-surface-variant">
                            Compete in the University Battles for a chance to win the Cyber-Trophy
                            and $50k in tech grants for your campus.
                        </p>
                    </div>
                    <Link to="/ticket" className="btn-neon-secondary relative z-10 shrink-0">
                        View Leaderboards
                    </Link>
                </div>
            </section>

            {/* ==================== SPONSORS ==================== */}
            <section id="sponsors" className="w-full px-4 md:px-20 py-14 border-t border-outline-variant/10">
                <div className="max-w-[1280px] mx-auto text-center">
                    <p className="text-label-md text-on-surface-variant uppercase tracking-widest mb-8">
                        Our Sponsors
                    </p>
                    <div className="flex flex-wrap justify-center items-center gap-8 md:gap-16">
                        <img
                            src="/images/icca logo 1.png"
                            className="h-16 md:h-24 object-contain"
                            alt="ICCA sponsor logo"
                        />
                        <a
                            href="https://icelandbeach.com/ticket"
                            target="_blank"
                            rel="noopener noreferrer"
                            className="inline-flex items-center justify-center"
                        >
                            <img
                                src="/images/icelandbeach logo 1.png"
                                className="h-16 md:h-24 object-contain"
                                alt="Iceland Beach sponsor logo"
                            />
                        </a>
                    </div>
                </div>
            </section>

            {/* ==================== FIND US / MAP ==================== */}
            <section className="py-12 border-t border-outline-variant/10" id="find-us">
                <div className="w-full px-0">
                    <div className="flex flex-col items-center justify-center mb-12 pt-12 px-4 md:px-20">
                        <div className="max-w-2xl text-center">
                            <span className="text-label-md text-primary-fixed uppercase tracking-widest mb-2 block">
                                Location
                            </span>
                            <h2 className="font-display text-headline-lg text-primary uppercase tracking-tighter mb-4">
                                Find Us
                            </h2>
                            <p className="text-body-lg text-on-surface-variant">
                                34 Mopo Akinlade Road, Okun-Ajah, Ajah, Lagos, Nigeria
                            </p>
                        </div>
                    </div>
                    <div className="w-full">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.636!2d3.6070598!3d6.4266704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf799497e6475%3A0x1042d67e8aa0e790!2sNew%20Iceland%20Beach%20Resort!5e0!3m2!1sen!2sng!4v1700000000000!5m2!1sen!2sng"
                            width="100%"
                            height="450"
                            style={{ border: 0, display: 'block' }}
                            allowFullScreen
                            loading="lazy"
                            referrerPolicy="no-referrer-when-downgrade"
                            title="New Iceland Beach Resort Location"
                        />
                    </div>
                </div>
            </section>
        </>
    );
}

/* ============================================
   STATIC DATA
   ============================================ */

const experienceCards = [
    {
        title: 'Music',
        description: '3 stages, 40+ DJs, and a soundtrack that moves from sunset into the early hours.',
        image: '/images/abstral-official-PxT3KJTeXDk-unsplash.jpg',
        alt: 'Music crowd and lights',
    },
    {
        title: 'Games',
        description: 'AR beach volleyball, neon night matches, and fast-paced campus challenges.',
        image: '/images/angelo-moleele-MnGGaUP4Mo4-unsplash.jpg',
        alt: 'Beach games in motion',
    },
    {
        title: 'Immersion',
        description: 'Projected art, shoreline installations, and glowing walkthroughs across the cove.',
        image: '/images/hansa-dasun-7XUbEDZxeEs-unsplash.jpg',
        alt: 'Immersive digital art',
    },
    {
        title: 'Battles',
        description: 'University vs university competitions with a proper winner-takes-all finish.',
        image: '/images/hero pic5.jpg',
        alt: 'University battles on the sand',
    },
    {
        title: 'Conversations',
        description: 'Fire-side talks with founders, creatives, and builders under the stars.',
        image: '/images/random-institute-p0DsgMj8Smc-unsplash.jpg',
        alt: 'Evening conversations',
    },
];

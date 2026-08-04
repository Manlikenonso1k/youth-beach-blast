import React, { useEffect, useRef } from 'react';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import VendorBoothScene from '../components/VendorBoothScene';

gsap.registerPlugin(ScrollTrigger);

const VENDOR_BOOKING_URL = 'https://icelandbeach.com/vendor-spots';

/**
 * VendorPage — React translation of the vendor mockup.
 * Spacing uses the numeric Tailwind scale at the mockup's exact pixel
 * values (xs 4 / sm 12 / md 24 / lg 48 / xl 80 / gutter 24).
 */
export default function VendorPage() {
    const rootRef = useRef(null);

    useEffect(() => {
        // Scoped to this page and reverted on unmount, so StrictMode's
        // double-invoke can't leave `gsap.from` elements stuck at opacity 0.
        const ctx = gsap.context(() => {
            gsap.from('.gs-reveal', {
                y: 50,
                opacity: 0,
                duration: 1,
                stagger: 0.2,
                ease: 'power3.out',
                delay: 0.2,
            });

            gsap.utils.toArray('.gsap-fade-up').forEach((element) => {
                gsap.from(element, {
                    scrollTrigger: {
                        trigger: element,
                        start: 'top 85%',
                        toggleActions: 'play none none none',
                    },
                    y: 50,
                    opacity: 0,
                    duration: 1,
                    ease: 'power3.out',
                });
            });
        }, rootRef);

        return () => ctx.revert();
    }, []);

    return (
        // `isolate` creates a stacking context so the -z-10 background
        // layers paint above AppLayout's opaque bg-background.
        <div
            ref={rootRef}
            className="relative isolate w-full max-w-[1440px] mx-auto px-4 md:px-16 pt-28 md:pt-32 pb-20 flex flex-col gap-20 overflow-x-hidden"
        >
            <VendorBoothScene />

            {/* Ambient background wash */}
            <div className="fixed inset-0 -z-10 pointer-events-none opacity-40">
                <div className="absolute inset-0 bg-gradient-to-b from-surface/20 to-surface-container-highest/90" />
            </div>

            <div className="fixed inset-0 -z-20 pointer-events-none opacity-25">
                <div className="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(21,255,209,0.08),transparent_38%),radial-gradient(circle_at_bottom_right,rgba(255,87,26,0.08),transparent_32%)]" />
            </div>

            {/* ==================== HERO ==================== */}
            <section className="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center min-h-[600px] lg:min-h-[716px] relative z-10">
                {/* Copy */}
                <div className="lg:col-span-7 flex flex-col gap-12 gs-reveal">
                    <div className="relative inline-flex items-center gap-1 bg-primary-fixed/10 px-3 py-1 rounded-full w-fit border border-primary-fixed/30">
                        <span className="w-2 h-2 rounded-full bg-primary-fixed blur-[2px]" />
                        <span className="absolute left-3 w-2 h-2 rounded-full bg-primary-fixed animate-pulse" />
                        <span className="text-label-sm text-primary-fixed uppercase tracking-widest ml-2">
                            Vendor Registration Open
                        </span>
                    </div>

                    <h1 className="text-headline-xl text-primary neon-text-primary uppercase leading-[1.03]">
                        YOUTH BEACH BLAST <br />
                        <span className="text-transparent bg-clip-text bg-gradient-to-r from-primary-fixed to-secondary">
                            VENDOR SPOTS
                        </span>
                    </h1>

                    <p className="text-body-lg text-on-surface-variant max-w-2xl">
                        Secure your premium location at the most immersive electronic music and
                        lifestyle festival of the year. Connect with thousands of high-energy
                        attendees in a neon-drenched coastal environment.
                    </p>

                    <div className="glass-panel p-6 rounded-xl max-w-md flex items-center justify-between gap-4 mt-3">
                        <div>
                            <p className="text-label-sm text-on-surface-variant uppercase tracking-widest mb-1">
                                Standard Spot Reservation
                            </p>
                            <p className="text-headline-lg text-primary-fixed">
                              ₦50,000 
                            </p>
                        </div>
                        <span
                            className="material-symbols-outlined text-primary-fixed text-4xl"
                            style={{ fontVariationSettings: "'FILL' 1" }}
                        >
                            sell
                        </span>
                    </div>

                    <div className="pt-3">
                        <a
                            className="inline-block bg-primary-fixed text-on-primary-fixed text-label-md px-12 py-6 rounded-full neon-button tracking-wider uppercase"
                            href={VENDOR_BOOKING_URL}
                            target="_blank"
                            rel="noreferrer"
                        >
                            BOOK YOUR VENDOR SPOT
                        </a>
                    </div>
                </div>

                {/* Image composition */}
                <div className="lg:col-span-5 relative h-full min-h-[420px] mt-20 lg:mt-0 gs-reveal">
                    <div className="absolute top-0 right-0 w-3/4 aspect-[4/5] glass-panel rounded-2xl overflow-hidden rotate-3 hover:rotate-0 transition-transform duration-500 z-10">
                        <img
                            alt="Neon-lit festival night market stall with a crowd browsing"
                            className="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity mix-blend-screen"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCuiu1O3AUP-PWuftvPrkF6e6ekdkU-zv3f1G-VKGc_G89nukV0Oqmm82YRk-Sgd8-NQKfSoeMPquRJ0Y00ReFxdGChP53XQ_HLzyGwsFS3ECj-Rxep0GXLPksr8Wqf67YfI36sfmpf568ps5r-H2eI4Cxa-fYASFiILv0j6FK9TRR49ZqloCq0-qkc0f5J_gw6LoQhOgueQrG0LEr0FHlAbyWwMI-iuqtvl7eDZBu6hT7j3Nv1KOtvOg"
                        />
                        <div className="absolute inset-0 bg-gradient-to-t from-surface-container-lowest to-transparent pointer-events-none" />
                    </div>

                    <div className="absolute bottom-10 left-0 w-2/3 aspect-square glass-panel rounded-2xl overflow-hidden -rotate-6 hover:rotate-0 transition-transform duration-500 z-20 shadow-[0_20px_40px_rgba(0,0,0,0.8)]">
                        <img
                            alt="Premium food vendor setup glowing at a nighttime beach festival"
                            className="w-full h-full object-cover opacity-90 hover:opacity-100 transition-opacity mix-blend-screen"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5z3TPOmlttHVLGo5hhHitydu6kr483kv5KY8zWfuVhe_mM01JatcJH3BBm1LVjlZdBs6azcjBaXEooNPA1nj5qrEkawEqp79cTcI-KwuYi3TqT9tpgYhDxBEmYQnsNQLg2rArY2TykaYLwMND7IRqcJMK7qvJLyGbjm3RF4_eHRZHNMC_guefn1YnzzjpZyYwdSgeHmb9slg1kl8-PanR_0zGG0wV0zElXYLEYXVintNnPgQdTIQDDw"
                        />
                        <div className="absolute inset-0 border border-primary-fixed/20 rounded-2xl pointer-events-none" />
                    </div>

                    {/* Decorative blur orbs */}
                    <div className="absolute top-1/2 left-1/4 w-32 h-32 bg-primary-fixed rounded-full blur-[100px] opacity-20 -z-10 pointer-events-none" />
                    <div className="absolute bottom-0 right-1/4 w-40 h-40 bg-secondary rounded-full blur-[120px] opacity-10 -z-10 pointer-events-none" />
                </div>
            </section>

            {/* ==================== BEYOND CAMPUS ==================== */}
            <section className="gsap-fade-up relative z-10">
                <div className="glass-panel rounded-xl p-12 md:p-20 neon-glow-hover relative overflow-hidden">
                    <div className="absolute inset-0 bg-gradient-to-br from-primary-fixed/5 to-transparent z-0 pointer-events-none" />
                    <div className="relative z-10">
                        <h2 className="text-headline-lg-mobile text-primary-fixed mb-6 drop-shadow-[0_0_10px_rgba(21,255,209,0.3)] uppercase">
                            TAKE YOUR BUSINESS BEYOND CAMPUS
                        </h2>
                        <p className="text-body-lg text-on-surface mb-6">
                            Most student businesses grow within the walls of their campus. While that
                            support is valuable, it also limits your reach. Imagine taking your brand
                            beyond the same familiar faces and introducing it to thousands of students
                            from different universities, all gathered in one exciting location.
                        </p>
                        <p className="text-body-md text-on-surface-variant mb-6">
                            The Inter-University Beach Blast is your opportunity to showcase your
                            products in a premium beach resort environment. Whether you sell food,
                            drinks, fashion, accessories, skincare, art, or unique student services,
                            this is your chance to put your business in front of a larger audience,
                            attract new customers, increase sales, and build lasting brand awareness.
                            Many students already know and love certain campus brands. Seeing and
                            experiencing those same products in a vibrant beach festival setting
                            creates a fresh experience that makes your brand even more memorable.
                        </p>
                        <p className="text-body-md text-on-surface-variant">
                            To become a vendor, simply book a vendor space and complete the
                            application form. Tell us what you plan to sell, and our team will review
                            your submission before approval. This process helps us maintain a balanced
                            vendor lineup, prevents conflicts with products sold by the resort, and
                            avoids unnecessary duplication between vendors. Take your business beyond
                            campus. Let thousands discover what you&apos;ve built.
                        </p>
                    </div>
                </div>
            </section>

            {/* ==================== BEACH MAP ==================== */}
            <section className="gsap-fade-up flex flex-col gap-6 relative z-10" id="vendor-map">
                <h2 className="text-headline-md text-primary-fixed">Beach Map and Available Spots</h2>

                <div className="w-full rounded-xl overflow-hidden glass-panel h-[400px] md:h-[600px] relative flex items-center justify-center neon-glow-hover group">
                    <img
                        className="absolute inset-0 w-full h-full object-cover opacity-60 mix-blend-screen group-hover:opacity-80 transition-opacity duration-500"
                        src="/images/vendor-spots.webp"
                        alt="Map of the beach resort festival grounds showing available vendor spots"
                    />
                    <div className="relative z-10 bg-surface-container-lowest/80 backdrop-blur-md p-12 rounded-xl border border-primary-fixed/30 text-center max-w-sm mx-4">
                        <span
                            className="material-symbols-outlined text-primary-fixed text-6xl mb-3"
                            style={{ fontVariationSettings: "'FILL' 1" }}
                        >
                            map
                        </span>
                        <h3 className="text-headline-md text-tertiary mb-1">Find Your Perfect Spot</h3>
                        <p className="text-body-sm text-on-surface-variant mb-6">
                            Interactive map mapping available zones.
                        </p>
                        <a
                            className="inline-flex items-center gap-1 text-label-md bg-transparent border border-primary-fixed text-primary-fixed px-6 py-3 rounded-full hover:bg-primary-fixed hover:text-on-primary-fixed transition-all"
                            href={VENDOR_BOOKING_URL}
                            target="_blank"
                            rel="noreferrer"
                        >
                            VIEW LIVE MAP
                            <span className="material-symbols-outlined text-base">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    );
}

import React, { useState } from 'react';
import { useSeo } from '../hooks/useSeo';

/**
 * TicketPage — React translation of ticket.blade.php.
 * Displays ticket pricing cards and an interactive FAQ accordion.
 */
export default function TicketPage() {
    useSeo('ticket');

    return (
        <main className="flex-grow pt-32 pb-24 px-4 md:px-6 max-w-[1280px] mx-auto w-full">
            {/* Page Title Area */}
            <section className="text-center mb-16 md:mb-24">
                <h1 className="font-display text-display-lg-mobile md:text-headline-lg text-primary-fixed mb-4">
                    Select Your Festival Experience
                </h1>
                <p className="font-sans text-body-lg text-on-surface-variant max-w-2xl mx-auto mb-6">
                    25th – 26th September 2026 • Secure your spot at Lagos' biggest student beach festival.
                </p>
                <div className="inline-flex items-center gap-2 bg-secondary-container text-on-secondary-container px-4 py-2 rounded-full font-display text-label-sm">
                    <span className="material-symbols-outlined text-lg">lock</span>
                    <span>Fast, Secure, & Instant Ticket Delivery via Email/WhatsApp</span>
                </div>
            </section>

            {/* Ticket Grid */}
            <section className="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 max-w-4xl mx-auto mb-16">
                {/* Standard Pass Card */}
                <div className="ticket-card ticket-glass-panel">
                    <div className="mb-6">
                        <h2 className="font-display text-headline-md text-on-surface mb-2">Access</h2>
                        <p className="font-sans text-body-md text-on-surface-variant mb-4">Direct Beach Access</p>
                        <p className="font-display text-display-lg-mobile text-primary-fixed font-bold">₦5,000</p>
                    </div>
                    <ul className="flex-grow flex flex-col gap-4 mb-8">
                        <li className="flex items-start gap-3">
                            <span className="material-symbols-outlined text-neon-cyan">check_circle</span>
                            <span className="font-sans text-body-md text-on-surface">2-Day Festival Entry</span>
                        </li>
                        <li className="flex items-start gap-3">
                            <span className="material-symbols-outlined text-neon-cyan">music_note</span>
                            <span className="font-sans text-body-md text-on-surface">Live Music</span>
                        </li>
                        <li className="flex items-start gap-3">
                            <span className="material-symbols-outlined text-neon-cyan">sports_volleyball</span>
                            <span className="font-sans text-body-md text-on-surface">Beach Games</span>
                        </li>
                        <li className="flex items-start gap-3">
                            <span className="material-symbols-outlined text-neon-cyan">restaurant</span>
                            <span className="font-sans text-body-md text-on-surface">Food Village</span>
                        </li>
                        <li className="flex items-start gap-3 opacity-60 mt-2">
                            <span className="material-symbols-outlined text-error">close</span>
                            <span className="font-sans text-body-md text-on-surface">Transportation not included</span>
                        </li>
                    </ul>
                    <a
                        href="https://icelandbeach.com/ticket"
                        className="w-full py-4 px-6 rounded-2xl border-2 border-neon-cyan text-neon-cyan font-display text-label-md hover:bg-neon-cyan hover:text-black transition-colors uppercase tracking-wider block text-center"
                    >
                        Select Access Pass
                    </a>
                </div>

                {/* All-Inclusive Pass Card */}
                <div className="ticket-card ticket-card-featured relative transform md:-translate-y-4">
                    <div className="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-neon-cyan text-black px-4 py-1 rounded-full font-display text-label-sm flex items-center gap-1 shadow-sm">
                        <span className="material-symbols-outlined text-sm">star</span>
                        BEST VALUE
                    </div>
                    <div className="mb-6 mt-2">
                        <h2 className="font-display text-headline-md text-on-surface mb-2">Access + Transportation</h2>
                        <p className="font-sans text-body-md text-on-surface-variant mb-4">Festival Entry + To & Fro Transit</p>
                        <p className="font-display text-display-lg-mobile text-primary-fixed font-bold">₦10,000</p>
                    </div>
                    <ul className="flex-grow flex flex-col gap-4 mb-8">
                        <li className="flex items-start gap-3">
                            <span className="material-symbols-outlined text-neon-cyan">check_circle</span>
                            <span className="font-sans text-body-md text-on-surface">Everything in Standard</span>
                        </li>
                        <li className="flex items-start gap-3">
                            <span className="material-symbols-outlined text-neon-cyan">directions_bus</span>
                            <span className="font-sans text-body-md text-on-surface font-semibold">A/C Round-Trip Transportation</span>
                        </li>
                        <li className="flex items-start gap-3">
                            <span className="material-symbols-outlined text-neon-cyan">school</span>
                            <span className="font-sans text-body-md text-on-surface font-semibold">Campus Pickup</span>
                        </li>
                        <li className="flex items-start gap-3">
                            <span className="material-symbols-outlined text-neon-cyan">fast_forward</span>
                            <span className="font-sans text-body-md text-on-surface font-semibold">Boarding Fast-Track</span>
                        </li>
                    </ul>
                    <a
                        href="https://icelandbeach.com/ticket"
                        className="w-full py-4 px-6 rounded-2xl bg-neon-cyan text-black font-display text-label-md hover:bg-[#15ffd1] transition-colors uppercase tracking-wider glow-effect block text-center"
                    >
                        Select All-Inclusive Pass
                    </a>
                </div>
            </section>

            {/* Checkout Footer Info */}
            <section className="max-w-3xl mx-auto text-center ticket-glass-panel rounded-xl p-8 mb-8">
                <p className="font-sans text-body-md text-on-surface-variant mb-6">
                    <span className="material-symbols-outlined align-middle mr-1 text-neon-cyan">info</span>
                    Campus pickup locations and departure schedules will be sent directly to your registered email upon purchase.
                </p>
                <div className="flex justify-center gap-6 mb-6 text-on-surface-variant opacity-70">
                    <div className="flex flex-col items-center gap-1">
                        <span className="material-symbols-outlined text-3xl">credit_card</span>
                        <span className="font-display text-label-sm">Card</span>
                    </div>
                    <div className="flex flex-col items-center gap-1">
                        <span className="material-symbols-outlined text-3xl">account_balance</span>
                        <span className="font-display text-label-sm">Bank Transfer</span>
                    </div>
                    <div className="flex flex-col items-center gap-1">
                        <span className="material-symbols-outlined text-3xl">dialpad</span>
                        <span className="font-display text-label-sm">USSD</span>
                    </div>
                </div>
                <p className="font-sans text-body-md text-on-surface">
                    Need help with bulk campus bookings? <a className="text-primary-fixed font-semibold underline hover:text-neon-cyan" href="#">Contact Support Here</a>.
                </p>
            </section>

            {/* Decorative Image Context */}
            <div className="w-full h-64 rounded-xl overflow-hidden shadow-sm relative group mt-16 max-w-5xl mx-auto">
                <div
                    className="bg-cover bg-center w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-105"
                    style={{
                        backgroundImage: "url('/images/hero pic5.jpg')"
                    }}
                />
                <div className="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent" />
                <div className="absolute bottom-6 left-6 right-6">
                    <p className="font-display text-headline-md text-white">Feel the Heat.</p>
                </div>
            </div>

            {/* FAQ Section */}
            <section className="relative flex flex-col items-center gap-12 py-20 w-full max-w-4xl mx-auto">
                <div className="flex flex-col items-center gap-6 text-center z-10 w-full">
                    <h2 className="font-display text-display-lg-mobile md:text-headline-lg text-on-surface font-bold leading-tight">
                        Frequently Asked Questions
                    </h2>
                    <p className="font-sans text-body-lg text-on-surface-variant max-w-2xl">
                        Have questions? We've got answers. If you can't find what you're looking for, feel free to contact us.
                    </p>
                </div>

                <div className="w-full flex flex-col gap-4">
                    {faqItems.map((item, i) => (
                        <details key={i} className="faq-item group">
                            <summary>
                                <span>{item.q}</span>
                                <span className="faq-chevron">
                                    <svg fill="none" height="24" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <div className="faq-answer">
                                <p>{item.a}</p>
                            </div>
                        </details>
                    ))}
                </div>
            </section>
        </main>
    );
}

const faqItems = [
    { q: 'Is transportation available for attendees?', a: 'Yes, but only for attendees who purchase the Access + Transportation Package.' },
    { q: 'How much does transportation cost?', a: 'Transportation is an additional ₦5,000, bringing the total Access + Transportation Package to ₦10,000.' },
    { q: 'Where are the pickup locations?', a: 'Pickup locations are: Eko Atlantic Entrance (Bar Beach), Ikeja, Akoka/Yaba, and Surulere.' },
    { q: 'What time should I arrive at the pickup point?', a: 'Please arrive by 12:00 PM on 25th September.' },
    { q: 'Will transportation be available after the event?', a: 'Yes. Return transportation departs at 6:00 AM on 26th September for attendees who purchased the Access + Transportation Package.' },
    { q: 'Can I come with my own car?', a: "Yes. You're welcome to drive to the venue, and parking is available." },
    { q: 'Are snacks included with my ticket?', a: 'Snacks are only included if you add the ₦3,000 Lunch Package to your ticket.' },
    { q: 'Can I buy food and snacks at the venue?', a: 'Yes. We offer a wide variety of food and snacks. You can view the menu at morithos.com/menu.' },
    { q: 'What is the Lunch Package?', a: 'The Lunch Package is an optional meal package for attendees who would like to enjoy our specially prepared lunch.' },
    { q: 'Is the Lunch Package compulsory?', a: 'No. It is completely optional.' },
    { q: 'What is Morithos?', a: 'Morithos is our partner luxury restaurant and snack bar where attendees with the Lunch Package will enjoy their meal.' },
    { q: 'Can I add the Lunch Package after purchasing my ticket?', a: 'Yes, you can add it before the event.' },
    { q: 'Is accommodation available?', a: 'Yes, but accommodation must be booked in advance. The event runs throughout the night.' },
    { q: 'Can I stay overnight?', a: 'Yes. However, if you purchased the transportation package, be sure not to miss your return bus, which departs at 6:00 AM on 26th September.' },
    { q: 'How do I book accommodation?', a: 'Visit icelandbeach.com to check room availability and make your reservation.' },
    { q: 'Are rooms guaranteed after purchasing a ticket?', a: 'No. Purchasing an event ticket does not reserve accommodation. Rooms must be booked separately and are subject to availability.' },
    { q: 'What if all the rooms are fully booked?', a: 'Tent rentals are available upon request.' },
    { q: 'Is parking available?', a: 'Yes, parking is available for all attendees.' },
    { q: 'Can I become a vendor?', a: "Yes. Simply submit a vendor application describing what you'd like to sell. All applications are subject to approval." },
    { q: 'Is there a deadline for vendor applications?', a: 'Yes. Vendor applications close on 25th September, one day before the event.' },
    { q: 'Can companies sponsor the event?', a: 'Yes. We welcome sponsorships from companies, brands, and organizations.' },
    { q: 'How can I contact customer support?', a: 'You can reach us through the WhatsApp button on your ticket confirmation page or on the Iceland Beach website.' },
    { q: 'Will there be security at the event?', a: "Yes. Security personnel will be present throughout the event to ensure everyone's safety." },
    { q: 'What items are prohibited?', a: 'Harmful objects, dangerous items, illegal substances, and anything that may pose a safety risk are strictly prohibited.' },
    { q: 'Where can I get the latest event updates?', a: 'Follow Iceland Beach on TikTok for the latest announcements and event updates.' }
];

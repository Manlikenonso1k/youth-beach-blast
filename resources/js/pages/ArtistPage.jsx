import React, { useEffect, useRef, useState } from 'react';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import api from '../lib/api';
import { Skiper48 } from '../components/Skiper48';

gsap.registerPlugin(ScrollTrigger);

export default function ArtistPage() {
    const rootRef = useRef(null);
    const [artistMode, setArtistMode] = useState(true);
    const [submitState, setSubmitState] = useState({ status: 'idle', message: '' });
    const [formData, setFormData] = useState({
        name: '',
        performance_name: '',
        number: '',
        email: '',
        instagram: '',
        tiktok: '',
        institution: '',
        best_song: '',
    });

    useEffect(() => {
        const ctx = gsap.context(() => {
            gsap.fromTo('.gs-reveal',
                { y: 45, opacity: 0 },
                {
                    y: 0,
                    opacity: 1,
                    duration: 0.9,
                    stagger: 0.12,
                    ease: 'power3.out',
                    delay: 0.15,
                }
            );

            gsap.utils.toArray('.gsap-fade-up').forEach((element) => {
                gsap.fromTo(element,
                    { y: 40, opacity: 0 },
                    {
                        y: 0,
                        opacity: 1,
                        scrollTrigger: {
                            trigger: element,
                            start: 'top 85%',
                            toggleActions: 'play none none none',
                        },
                        duration: 0.9,
                        ease: 'power3.out',
                    }
                );
            });
        }, rootRef);

        return () => ctx.revert();
    }, []);

    const updateField = (field) => (event) => {
        setFormData((current) => ({
            ...current,
            [field]: event.target.value,
        }));
    };

    const handleSubmit = async (event) => {
        event.preventDefault();
        setSubmitState({ status: 'loading', message: '' });

        try {
            await api.post('/artist-submissions', {
                mode: artistMode ? 'artist' : 'dj',
                ...formData,
            });

            setSubmitState({
                status: 'success',
                message: 'Registration submitted successfully.',
            });
            setFormData({
                name: '',
                performance_name: '',
                number: '',
                email: '',
                instagram: '',
                tiktok: '',
                institution: '',
                best_song: '',
            });
        } catch (error) {
            setSubmitState({
                status: 'error',
                message: error.response?.data?.message || 'Submission failed. Please check the form and try again.',
            });
        }
    };

    return (
        <div ref={rootRef} className="relative isolate w-full max-w-[1440px] mx-auto px-4 md:px-16 pt-28 md:pt-32 pb-20 flex flex-col gap-16 overflow-x-hidden">
            <div className="fixed inset-0 -z-10 pointer-events-none opacity-30">
                <div className="absolute inset-0 bg-gradient-to-b from-surface/20 to-surface-container-highest/90" />
            </div>

            <div className="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start relative z-10">
                <div className="lg:col-span-5 flex flex-col gap-6 gs-reveal order-2 lg:order-1">
                    <div className="inline-flex items-center gap-2 bg-primary-fixed/10 px-3 py-1 rounded-full w-fit border border-primary-fixed/30 relative">
                        <span className="w-2 h-2 rounded-full bg-primary-fixed blur-[2px]" />
                        <span className="w-2 h-2 rounded-full bg-primary-fixed absolute animate-pulse" />
                        <span className="font-label-sm text-label-sm text-primary-fixed uppercase tracking-widest ml-2">Live Submissions</span>
                    </div>

                    <h1 className="font-display text-[56px] leading-none md:text-[64px] text-gold drop-shadow-[0_0_15px_rgba(255,215,0,0.5)]">
                        Performer Registration
                    </h1>

                    <p className="text-body-lg text-inverse-surface max-w-2xl">
                        Inter-university performances taking place on the 25th to 26th. Join the immersive digital stage.
                    </p>

                    <div className="hidden lg:block glass-panel h-full min-h-[600px] relative overflow-hidden rounded-xl p-4 pb-8 flex flex-col justify-end group border border-white/20 order-3 lg:order-1">
                        <div className="absolute inset-0 z-0 opacity-50 bg-gradient-to-t from-black via-transparent to-transparent pointer-events-none" />
                        <div className="absolute inset-0 z-0 flex items-center justify-center p-4 pb-8">
                            <div className="w-full max-w-md">
                                <Skiper48 />
                            </div>
                        </div>
                        <div className="relative z-10 mt-auto pt-8 pb-8">
                            <div className="flex items-center gap-2 mb-2">
                                <div className="w-2 h-2 rounded-full bg-primary-fixed shadow-[0_0_8px_#15ffd1] animate-pulse" />
                                <span className="font-label-sm text-label-sm text-primary-fixed tracking-widest uppercase">Live Submissions</span>
                            </div>
                            <h3 className="font-display text-headline-lg text-white">Join the Lineup</h3>
                            <p className="font-body-sm text-body-sm text-on-surface-variant mt-2">Submit your details to perform on the main stage.</p>
                        </div>
                    </div>
                </div>

                <div className="lg:col-span-7 glass-panel p-4 md:p-6 gs-reveal order-1 lg:order-2">
                    <div className="flex p-1 bg-surface-container-highest rounded-full mb-8 w-fit border border-white/10">
                        <button
                            type="button"
                            onClick={() => setArtistMode(true)}
                            className={`px-6 py-2 rounded-full font-label-md text-label-md w-32 transition-all ${artistMode ? 'text-black bg-[#ffd700] font-bold' : 'text-white hover:text-gold'}`}
                        >
                            ARTISTS
                        </button>
                        <button
                            type="button"
                            onClick={() => setArtistMode(false)}
                            className={`px-6 py-2 rounded-full font-label-md text-label-md w-32 transition-all ${!artistMode ? 'text-black bg-[#ffd700] font-bold' : 'text-white hover:text-gold'}`}
                        >
                            DJs
                        </button>
                    </div>

                    <form className="flex flex-col gap-4" onSubmit={handleSubmit}>
                        <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div className="flex flex-col gap-2">
                                <label className="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Name</label>
                                <input className="input-ghost px-3 py-3 w-full font-body-md text-white focus-gold bg-white/10 border border-white/20 rounded" onChange={updateField('name')} placeholder="Full Name" required value={formData.name} type="text" />
                            </div>
                            <div className="flex flex-col gap-2">
                                <label className="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Performance Name</label>
                                <input className="input-ghost px-3 py-3 w-full font-body-md text-white focus-gold bg-white/10 border border-white/20 rounded" onChange={updateField('performance_name')} placeholder="Stage Name" required value={formData.performance_name} type="text" />
                            </div>
                        </div>

                        <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div className="flex flex-col gap-2">
                                <label className="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Number</label>
                                <input className="input-ghost px-3 py-3 w-full font-body-md text-white focus-gold bg-white/10 border border-white/20 rounded" onChange={updateField('number')} placeholder="whatsapp number" required value={formData.number} type="tel" />
                            </div>
                        </div>

                        <div className="flex flex-col gap-2">
                            <label className="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Email</label>
                            <input className="input-ghost px-3 py-3 w-full font-body-md text-white focus-gold bg-white/10 border border-white/20 rounded" onChange={updateField('email')} placeholder="contact@example.com" required value={formData.email} type="email" />
                        </div>

                        <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div className="flex flex-col gap-2">
                                <label className="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Instagram Handle</label>
                                <div className="relative">
                                    <span className="absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">@</span>
                                    <input className="input-ghost pl-8 pr-3 py-3 w-full font-body-md text-white focus-gold bg-white/10 border border-white/20 rounded" onChange={updateField('instagram')} placeholder="username" value={formData.instagram} type="text" />
                                </div>
                            </div>
                            <div className="flex flex-col gap-2">
                                <label className="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">TikTok Handle</label>
                                <div className="relative">
                                    <span className="absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">@</span>
                                    <input className="input-ghost pl-8 pr-3 py-3 w-full font-body-md text-white focus-gold bg-white/10 border border-white/20 rounded" onChange={updateField('tiktok')} placeholder="username" value={formData.tiktok} type="text" />
                                </div>
                            </div>
                        </div>

                        <div className="flex flex-col gap-2">
                            <label className="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Institution</label>
                            <input className="input-ghost px-3 py-3 w-full font-body-md text-white focus-gold bg-white/10 border border-white/20 rounded" onChange={updateField('institution')} placeholder="University / College" required value={formData.institution} type="text" />
                        </div>

                        <div className="flex flex-col gap-2 transition-opacity duration-300" aria-hidden={!artistMode}>
                            <label className="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Name of Best Song</label>
                            <input className="input-ghost px-3 py-3 w-full font-body-md text-white focus-gold bg-white/10 border border-white/20 rounded" onChange={updateField('best_song')} placeholder="Track Title" value={formData.best_song} type="text" />
                        </div>

                        <div className={`${artistMode ? 'hidden' : 'flex'} flex-col gap-2 p-4 bg-surface-container-highest border border-gold/30 rounded-lg`}>
                            <div className="flex items-start gap-3">
                                <span className="material-symbols-outlined text-gold mt-1">info</span>
                                <p className="font-body-sm text-body-sm text-inverse-surface">
                                    <strong className="text-gold">Notice:</strong> DJs will perform 10 minutes max per set due to scheduling constraints.
                                </p>
                            </div>
                        </div>

                        <button className="mt-4 bg-transparent border-2 border-[#ffd700] text-[#ffd700] hover:bg-[#ffd700] hover:text-black py-4 rounded-lg font-label-md text-label-md uppercase tracking-widest font-bold transition-all duration-300 shadow-[0_0_15px_rgba(255,215,0,0.2)] hover:shadow-[0_0_25px_rgba(255,215,0,0.5)] focus-gold disabled:opacity-60 disabled:cursor-not-allowed" disabled={submitState.status === 'loading'} type="submit">
                            {submitState.status === 'loading' ? 'Submitting...' : 'Submit Registration'}
                        </button>

                        {submitState.message ? (
                            <p className={`font-body-sm text-body-sm ${submitState.status === 'success' ? 'text-primary-fixed' : 'text-secondary'}`}>
                                {submitState.message}
                            </p>
                        ) : null}
                    </form>
                </div>
            </div>

            <section className="lg:hidden gsap-fade-up relative z-10">
                <div className="glass-panel rounded-xl p-4 border border-white/20">
                    <div className="flex items-center gap-2 mb-3">
                        <div className="w-2 h-2 rounded-full bg-primary-fixed shadow-[0_0_8px_#15ffd1] animate-pulse" />
                        <span className="font-label-sm text-label-sm text-primary-fixed tracking-widest uppercase">Live Submissions</span>
                    </div>
                    <h3 className="font-display text-headline-lg text-white mb-2">Join the Lineup</h3>
                    <p className="font-body-sm text-body-sm text-on-surface-variant mb-8">Submit your details to perform on the main stage.</p>
                    <div className="flex justify-center">
                        <Skiper48 />
                    </div>
                </div>
            </section>
        </div>
    );
}
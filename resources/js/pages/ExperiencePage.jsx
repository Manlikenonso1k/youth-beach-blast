import React, { useEffect, useRef } from 'react';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export default function ExperiencePage() {
    const rootRef = useRef(null);

    useEffect(() => {
        const ctx = gsap.context(() => {
            gsap.from('.gsap-fade-up', {
                y: 50,
                opacity: 0,
                duration: 1,
                stagger: 0.1,
                ease: 'power3.out',
                delay: 0.2,
            });
        }, rootRef);

        return () => ctx.revert();
    }, []);

    return (
        <div ref={rootRef} className="relative isolate w-full max-w-[1440px] mx-auto px-4 md:px-16 pt-28 md:pt-32 pb-20 flex flex-col overflow-x-hidden">
            
            {/* Background Glows */}
            <div className="absolute w-[500px] h-[500px] bg-primary-fixed rounded-full blur-[80px] opacity-15 top-[10%] left-[-10%] pointer-events-none -z-10" />
            <div className="absolute w-[400px] h-[400px] bg-secondary rounded-full blur-[80px] opacity-15 top-[40%] right-[-5%] pointer-events-none -z-10" />
            <div className="absolute w-[600px] h-[600px] bg-primary-fixed rounded-full blur-[80px] opacity-15 bottom-[-10%] left-[20%] pointer-events-none -z-10" />
            
            {/* Section 3: What To Expect */}
            <section className="mb-20 relative z-10 gsap-fade-up">
                <div className="text-center mb-12">
                    <h2 className="text-headline-lg-mobile md:text-headline-xl text-primary neon-text-primary mb-3">What To Expect</h2>
                    <p className="text-body-lg text-on-surface-variant max-w-2xl mx-auto">
                        Dive into an immersive 3D experience featuring the best in entertainment, sports, and youth culture.
                    </p>
                </div>
                
                <div className="grid grid-cols-[repeat(auto-fit,minmax(280px,1fr))] gap-6">
                    {/* Bento Items */}
                    <div className="glass-panel rounded-xl p-6 flex flex-col justify-center items-center text-center group col-span-1 md:col-span-2 min-h-[250px]">
                        <span className="material-symbols-outlined text-4xl text-primary-fixed mb-3 group-hover:scale-110 transition-transform" style={{ fontVariationSettings: "'FILL' 1" }}>music_note</span>
                        <h3 className="text-headline-md text-primary mb-1">Live Music Performances</h3>
                        <p className="text-body-sm text-on-surface-variant">Electrifying sets from top artists and rising stars.</p>
                    </div>
                    
                    <div className="glass-panel rounded-xl p-6 flex flex-col justify-center items-center text-center group">
                        <span className="material-symbols-outlined text-4xl text-secondary mb-3 group-hover:scale-110 transition-transform" style={{ fontVariationSettings: "'FILL' 1" }}>star</span>
                        <h3 className="text-headline-md text-primary mb-1">Headline Artistes</h3>
                    </div>
                    
                    <div className="glass-panel rounded-xl p-6 flex flex-col justify-center items-center text-center group">
                        <span className="material-symbols-outlined text-4xl text-secondary mb-3 group-hover:scale-110 transition-transform" style={{ fontVariationSettings: "'FILL' 1" }}>school</span>
                        <h3 className="text-headline-md text-primary mb-1">Campus Artistes</h3>
                    </div>
                    
                    <div className="glass-panel rounded-xl p-6 flex flex-col justify-center items-center text-center group col-span-1 md:col-span-2 min-h-[200px]">
                        <span className="material-symbols-outlined text-4xl text-primary-fixed mb-3 group-hover:scale-110 transition-transform" style={{ fontVariationSettings: "'FILL' 1" }}>sports_esports</span>
                        <h3 className="text-headline-md text-primary mb-1">Games Zone</h3>
                        <p className="text-body-sm text-on-surface-variant">Interactive gaming, VR experiences, and competitive play.</p>
                    </div>
                    
                    <div className="glass-panel rounded-xl p-6 flex flex-col justify-center items-center text-center group">
                        <span className="material-symbols-outlined text-4xl text-primary-fixed mb-3 group-hover:scale-110 transition-transform" style={{ fontVariationSettings: "'FILL' 1" }}>mic</span>
                        <h3 className="text-headline-md text-primary mb-1">Celebrity Host</h3>
                    </div>
                    
                    <div className="glass-panel rounded-xl p-6 flex flex-col justify-center items-center text-center group">
                        <span className="material-symbols-outlined text-4xl text-primary-fixed mb-3 group-hover:scale-110 transition-transform" style={{ fontVariationSettings: "'FILL' 1" }}>album</span>
                        <h3 className="text-headline-md text-primary mb-1">Live DJs</h3>
                    </div>
                    
                    <div className="glass-panel rounded-xl p-6 flex flex-col justify-center items-center text-center group">
                        <span className="material-symbols-outlined text-4xl text-secondary mb-3 group-hover:scale-110 transition-transform" style={{ fontVariationSettings: "'FILL' 1" }}>directions_run</span>
                        <h3 className="text-headline-md text-primary mb-1">Dance Battles</h3>
                    </div>
                    
                    <div className="glass-panel rounded-xl p-6 flex flex-col justify-center items-center text-center group">
                        <span className="material-symbols-outlined text-4xl text-secondary mb-3 group-hover:scale-110 transition-transform" style={{ fontVariationSettings: "'FILL' 1" }}>sports_soccer</span>
                        <h3 className="text-headline-md text-primary mb-1">Beach Football</h3>
                    </div>
                    
                    <div className="glass-panel rounded-xl p-6 flex flex-col justify-center items-center text-center group">
                        <span className="material-symbols-outlined text-4xl text-primary-fixed mb-3 group-hover:scale-110 transition-transform" style={{ fontVariationSettings: "'FILL' 1" }}>sports_volleyball</span>
                        <h3 className="text-headline-md text-primary mb-1">Volleyball</h3>
                    </div>
                    
                    <div className="glass-panel rounded-xl p-6 flex flex-col justify-center items-center text-center group">
                        <span className="material-symbols-outlined text-4xl text-primary-fixed mb-3 group-hover:scale-110 transition-transform" style={{ fontVariationSettings: "'FILL' 1" }}>pool</span>
                        <h3 className="text-headline-md text-primary mb-1">Swimming Games</h3>
                    </div>
                    
                    <div className="glass-panel rounded-xl p-6 flex flex-col justify-center items-center text-center group col-span-1 md:col-span-2 min-h-[250px]">
                        <span className="material-symbols-outlined text-4xl text-secondary mb-3 group-hover:scale-110 transition-transform" style={{ fontVariationSettings: "'FILL' 1" }}>storefront</span>
                        <h3 className="text-headline-md text-primary mb-1">Vendor Market</h3>
                        <p className="text-body-sm text-on-surface-variant">Explore local brands, exclusive merch, and delicious food.</p>
                    </div>
                    
                    <div className="glass-panel rounded-xl p-6 flex flex-col justify-center items-center text-center group">
                        <span className="material-symbols-outlined text-4xl text-secondary mb-3 group-hover:scale-110 transition-transform" style={{ fontVariationSettings: "'FILL' 1" }}>weekend</span>
                        <h3 className="text-headline-md text-primary mb-1">Chill Zone</h3>
                    </div>
                    
                    <div className="glass-panel rounded-xl p-6 flex flex-col justify-center items-center text-center group">
                        <span className="material-symbols-outlined text-4xl text-secondary mb-3 group-hover:scale-110 transition-transform" style={{ fontVariationSettings: "'FILL' 1" }}>camera_alt</span>
                        <h3 className="text-headline-md text-primary mb-1">Photo Booth</h3>
                    </div>
                </div>
            </section>
            
            {/* Section 4: Our Vision & Section 5: Our Mission (Asymmetric Layout) */}
            <section className="grid grid-cols-1 md:grid-cols-2 gap-12 relative z-10 gsap-fade-up">
                {/* Vision */}
                <div className="glass-panel rounded-xl p-12 flex flex-col justify-center relative overflow-hidden">
                    <div className="absolute -right-10 -top-10 w-32 h-32 bg-primary-fixed rounded-full blur-[60px] opacity-20" />
                    <h2 className="text-headline-lg-mobile md:text-headline-lg text-primary neon-text-primary mb-6 flex items-center gap-3">
                        <span className="material-symbols-outlined text-primary-fixed" style={{ fontVariationSettings: "'FILL' 1" }}>visibility</span>
                        Our Vision
                    </h2>
                    <p className="text-body-lg text-on-surface-variant leading-relaxed">
                        Our vision is to establish Inter-University Beach Blast as Africa's leading student and youth beach festival—an annual celebration that inspires collaboration, creativity, innovation, and meaningful connections...
                    </p>
                </div>
                
                {/* Mission */}
                <div className="glass-panel rounded-xl p-12 flex flex-col justify-center relative overflow-hidden">
                    <div className="absolute -left-10 -bottom-10 w-32 h-32 bg-secondary rounded-full blur-[60px] opacity-20" />
                    <h2 className="text-headline-lg-mobile md:text-headline-lg text-primary neon-text-primary mb-6 flex items-center gap-3">
                        <span className="material-symbols-outlined text-secondary" style={{ fontVariationSettings: "'FILL' 1" }}>rocket_launch</span>
                        Our Mission
                    </h2>
                    <p className="text-body-lg text-on-surface-variant leading-relaxed">
                        Our mission is to create a safe, inclusive, and energetic environment where young people can build friendships, discover opportunities, celebrate talent, promote their brands, and experience the power of collaboration through entertainment, sports, and youth culture...
                    </p>
                </div>
            </section>
        </div>
    );
}

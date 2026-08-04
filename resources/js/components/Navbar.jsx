import React, { useState, useEffect } from 'react';
import { Link, useLocation } from 'react-router-dom';

/**
 * Navbar — Fixed top navigation with neon-and-black styling.
 * Active link tracking via React Router useLocation.
 */
export default function Navbar() {
    const location = useLocation();
    const [scrolled, setScrolled] = useState(false);
    const [mobileMenuOpen, setMobileMenuOpen] = useState(false);

    useEffect(() => {
        const handleScroll = () => {
            setScrolled(window.scrollY > 50);
        };
        window.addEventListener('scroll', handleScroll);
        return () => window.removeEventListener('scroll', handleScroll);
    }, []);

    // Close mobile menu on route change
    useEffect(() => {
        setMobileMenuOpen(false);
    }, [location.pathname]);

    const isHome = location.pathname === '/';

    const navLinks = [
        { label: 'Experience', href: isHome ? '#experience' : '/#experience' },
        { label: 'Vendors', href: '/vendors' },
        { label: 'Artists', href: '/artists' },
        { label: 'Sponsors', href: isHome ? '#sponsors' : '/#sponsors' },
        { label: 'Find Us', href: isHome ? '#find-us' : '/#find-us' },
        { label: 'Tickets', href: '/ticket' },
    ];

    const handleNavClick = (e, href) => {
        if (href.startsWith('#') && isHome) {
            e.preventDefault();
            const el = document.querySelector(href);
            if (el) {
                el.scrollIntoView({ behavior: 'smooth' });
            }
        }
    };

    return (
        <nav
            className={`fixed top-0 w-full z-50 bg-surface/10 backdrop-blur-xl border-b border-outline-variant/20 shadow-none transition-all duration-300 ${
                scrolled ? 'shadow-lg' : ''
            }`}
        >
            <div className="hidden md:flex items-center justify-between px-16 py-4 max-w-screen-2xl mx-auto">
                {/* Brand */}
                <Link
                    to="/"
                    className="font-display text-headline-md font-bold text-primary-fixed drop-shadow-[0_0_10px_rgba(0,255,209,0.4)] uppercase"
                >
                    BEACH BLAST 2026
                </Link>

                {/* Desktop Nav Links */}
                <div className="hidden md:flex items-center gap-6 text-label-lg uppercase">
                    {navLinks.map((link) => (
                        link.href.startsWith('/') ? (
                            <Link
                                key={link.label}
                                to={link.href}
                                className={`nav-link-item ${
                                    location.pathname === link.href ? 'active' : ''
                                }`}
                            >
                                {link.label}
                            </Link>
                        ) : (
                            <a
                                key={link.label}
                                href={link.href}
                                className="nav-link-item"
                                onClick={(e) => handleNavClick(e, link.href)}
                            >
                                {link.label}
                            </a>
                        )
                    ))}
                </div>

                {/* CTA + Mobile Toggle */}
                <div className="flex items-center gap-3">
                    <Link
                        to="/ticket"
                        className="bg-primary-fixed text-black font-display text-label-md px-6 py-3 rounded-full uppercase
                            hover:shadow-[0_0_20px_rgba(21,255,209,0.6)] transition-all active:scale-95 inline-block"
                    >
                        Register Now
                    </Link>

                    {/* Mobile hamburger */}
                    <button
                        className="md:hidden text-on-surface p-2"
                        onClick={() => setMobileMenuOpen(!mobileMenuOpen)}
                        aria-label="Toggle menu"
                    >
                        <span className="material-symbols-outlined text-2xl">
                            {mobileMenuOpen ? 'close' : 'menu'}
                        </span>
                    </button>
                </div>
            </div>

            {/* Mobile Menu */}
            {mobileMenuOpen && (
                <div className="md:hidden bg-surface-container-lowest/95 backdrop-blur-xl border-t border-white/10 px-4 py-6 space-y-4 animate-in">
                    {navLinks.map((link) => (
                        link.href.startsWith('/') ? (
                            <Link
                                key={link.label}
                                to={link.href}
                                className="block text-label-lg uppercase text-on-surface-variant hover:text-primary-fixed transition-colors py-2"
                            >
                                {link.label}
                            </Link>
                        ) : (
                            <a
                                key={link.label}
                                href={link.href}
                                className="block text-label-lg uppercase text-on-surface-variant hover:text-primary-fixed transition-colors py-2"
                                onClick={(e) => handleNavClick(e, link.href)}
                            >
                                {link.label}
                            </a>
                        )
                    ))}
                </div>
            )}
        </nav>
    );
}

import React from 'react';
import { Link } from 'react-router-dom';

/**
 * Footer — Neon-styled site footer.
 * Matches the home.blade.php footer design.
 */
export default function Footer() {
    return (
        <footer className="w-full px-4 md:px-20 py-12 md:py-20 flex flex-col md:flex-row justify-between items-center gap-6 bg-surface-container-low mt-20 border-t border-outline-variant/30">
            {/* Brand */}
            <div className="font-display text-headline-md text-primary uppercase tracking-tighter">
                BEACH BLAST 2026
            </div>

            {/* Links */}
            <div className="flex flex-wrap justify-center gap-6 text-body-md uppercase">
                <a
                    href="#experience"
                    className="text-on-surface-variant hover:text-primary transition-colors hover:opacity-80"
                >
                    Experience
                </a>
                <a
                    href="#sponsors"
                    className="text-on-surface-variant hover:text-primary transition-colors hover:opacity-80"
                >
                    Sponsors
                </a>
                <a
                    href="#find-us"
                    className="text-on-surface-variant hover:text-primary transition-colors hover:opacity-80"
                >
                    Find Us
                </a>
                <Link
                    to="/ticket"
                    className="text-on-surface-variant hover:text-primary transition-colors hover:opacity-80"
                >
                    Tickets
                </Link>
                <a
                    href="https://icelandbeach.com/ticket"
                    target="_blank"
                    rel="noopener noreferrer"
                    className="text-on-surface-variant hover:text-primary transition-colors hover:opacity-80"
                >
                    Iceland Beach
                </a>
            </div>

            {/* Copyright */}
            <div className="text-secondary text-label-md text-center md:text-right">
                © 2026 Inter-University Beach Blast. All rights reserved.
            </div>
        </footer>
    );
}

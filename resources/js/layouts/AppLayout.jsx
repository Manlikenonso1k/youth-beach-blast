import React from 'react';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';

/**
 * AppLayout — Neon & Black base layout.
 * Wraps all pages with shared Navbar, Footer, and texture overlay.
 */
export default function AppLayout({ children }) {
    return (
        <div className="min-h-screen bg-background text-on-background relative">
            {/* Film grain texture overlay */}
            <div className="texture-overlay" />

            {/* Navigation */}
            <Navbar />

            {/* Page Content */}
            <main>
                {children}
            </main>

            {/* Footer */}
            <Footer />
        </div>
    );
}

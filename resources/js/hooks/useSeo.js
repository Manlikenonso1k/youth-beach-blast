import { useEffect } from 'react';
import api from '../lib/api';

/**
 * Custom hook to fetch SEO metadata from the API and apply it
 * to the document head (title, meta tags).
 *
 * @param {string} page - The page identifier (e.g., 'home', 'ticket')
 */
export function useSeo(page) {
    useEffect(() => {
        let cancelled = false;

        async function fetchSeo() {
            try {
                const { data } = await api.get(`/seo/${page}`);
                if (cancelled) return;

                // Set document title
                if (data.title) {
                    document.title = data.title;
                }

                // Set or update meta tags
                setMetaTag('name', 'description', data.description);
                setMetaTag('name', 'keywords', data.keywords);
                setMetaTag('name', 'robots', data.robots);
                setMetaTag('property', 'og:title', data.title);
                setMetaTag('property', 'og:description', data.description);
                setMetaTag('property', 'og:image', data.og_image);
                setMetaTag('name', 'twitter:card', data.twitter_card);
                setMetaTag('name', 'twitter:title', data.title);
                setMetaTag('name', 'twitter:description', data.description);
                setMetaTag('name', 'twitter:image', data.og_image);

                // Set canonical link
                setCanonicalLink(data.canonical_url);
            } catch (err) {
                // SEO fetch failure is non-critical — fall back to defaults
                console.warn(`[useSeo] Failed to fetch SEO for "${page}":`, err);
            }
        }

        fetchSeo();

        return () => {
            cancelled = true;
        };
    }, [page]);
}

/**
 * Set or create a meta tag in the document head.
 */
function setMetaTag(attribute, key, value) {
    if (!value) return;

    let element = document.querySelector(`meta[${attribute}="${key}"]`);
    if (!element) {
        element = document.createElement('meta');
        element.setAttribute(attribute, key);
        document.head.appendChild(element);
    }
    element.setAttribute('content', value);
}

/**
 * Set or create the canonical link element.
 */
function setCanonicalLink(url) {
    if (!url) return;

    let link = document.querySelector('link[rel="canonical"]');
    if (!link) {
        link = document.createElement('link');
        link.setAttribute('rel', 'canonical');
        document.head.appendChild(link);
    }
    link.setAttribute('href', url);
}

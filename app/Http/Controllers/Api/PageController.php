<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class PageController extends Controller
{
    /**
     * Return structured JSON for the home page.
     */
    public function home(): JsonResponse
    {
        return response()->json([
            'hero' => [
                'badge' => 'Neon Lagoon 2026',
                'title' => 'Inter-University Beach Blast 2026',
                'subtitle' => 'A high-energy beachfront takeover with live music, games, battles, and late-night conversations under the neon sky.',
                'slides' => [
                    ['image' => asset('images/hero pic.jpg'), 'alt' => 'Beach Blast hero slide 1'],
                    ['image' => asset('images/hero pic1.jpg'), 'alt' => 'Beach Blast hero slide 2'],
                    ['image' => asset('images/hero pic3.jpg'), 'alt' => 'Beach Blast hero slide 3'],
                ],
                'cta_primary' => ['text' => 'Secure Tickets', 'url' => '/ticket'],
                'cta_secondary' => ['text' => 'Iceland Beach', 'url' => 'https://icelandbeach.com/ticket'],
            ],
            'experience' => [
                'label' => 'What to expect',
                'title' => 'The Experience',
                'cards' => [
                    [
                        'title' => 'Music',
                        'description' => '3 stages, 40+ DJs, and a soundtrack that moves from sunset into the early hours.',
                        'image' => asset('images/abstral-official-PxT3KJTeXDk-unsplash.jpg'),
                        'alt' => 'Music crowd and lights',
                    ],
                    [
                        'title' => 'Games',
                        'description' => 'AR beach volleyball, neon night matches, and fast-paced campus challenges.',
                        'image' => asset('images/angelo-moleele-MnGGaUP4Mo4-unsplash.jpg'),
                        'alt' => 'Beach games in motion',
                    ],
                    [
                        'title' => 'Immersion',
                        'description' => 'Projected art, shoreline installations, and glowing walkthroughs across the cove.',
                        'image' => asset('images/hansa-dasun-7XUbEDZxeEs-unsplash.jpg'),
                        'alt' => 'Immersive digital art',
                    ],
                    [
                        'title' => 'Battles',
                        'description' => 'University vs university competitions with a proper winner-takes-all finish.',
                        'image' => asset('images/hero pic5.jpg'),
                        'alt' => 'University battles on the sand',
                    ],
                    [
                        'title' => 'Conversations',
                        'description' => 'Fire-side talks with founders, creatives, and builders under the stars.',
                        'image' => asset('images/random-institute-p0DsgMj8Smc-unsplash.jpg'),
                        'alt' => 'Evening conversations',
                    ],
                ],
            ],
            'gallery' => [
                'feature' => [
                    'image' => asset('images/joshua-duneebon-oK7gVfps-JA-unsplash.jpg'),
                    'alt' => 'Festival crowd at night',
                    'label' => 'Festival pulse',
                    'title' => 'Built for a full weekend takeover.',
                ],
                'grid' => [
                    ['image' => asset('images/random-institute-PahSmC5XTNk-unsplash.jpg'), 'alt' => 'Shoreline installation'],
                    ['stat' => '15k+', 'label' => 'Attendees'],
                    ['image' => asset('images/hero pic3.jpg'), 'alt' => 'Night beach skyline'],
                    ['image' => asset('images/hero pic1.jpg'), 'alt' => 'Festival lights at dusk'],
                ],
            ],
            'champion' => [
                'label' => "Champion's bounty",
                'title' => 'Win more than bragging rights.',
                'description' => 'Compete in the University Battles for a chance to win the Cyber-Trophy and $50k in tech grants for your campus.',
                'cta' => ['text' => 'View Leaderboards', 'url' => '/ticket'],
            ],
            'sponsors' => [
                ['image' => asset('images/icca logo 1.png'), 'alt' => 'ICCA sponsor logo'],
                ['image' => asset('images/icelandbeach logo 1.png'), 'alt' => 'Iceland Beach sponsor logo', 'url' => 'https://icelandbeach.com/ticket'],
            ],
            'location' => [
                'label' => 'Location',
                'title' => 'Find Us',
                'address' => '34 Mopo Akinlade Road, Okun-Ajah, Ajah, Lagos, Nigeria',
                'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.636!2d3.6070598!3d6.4266704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf799497e6475%3A0x1042d67e8aa0e790!2sNew%20Iceland%20Beach%20Resort!5e0!3m2!1sen!2sng!4v1700000000000!5m2!1sen!2sng',
            ],
        ]);
    }

    /**
     * Return structured JSON for the ticket page.
     */
    public function ticket(): JsonResponse
    {
        return response()->json([
            'header' => [
                'title' => 'Select Your Festival Experience',
                'subtitle' => "25th – 26th September 2026 • Secure your spot at Lagos' biggest student beach festival.",
                'badge' => 'Fast, Secure, & Instant Ticket Delivery via Email/WhatsApp',
            ],
            'tickets' => [
                [
                    'name' => 'Standard Pass',
                    'tagline' => 'Direct Beach Access',
                    'price' => '₦5,000',
                    'featured' => false,
                    'features' => [
                        ['icon' => 'check_circle', 'text' => '2-Day Festival Entry', 'included' => true],
                        ['icon' => 'music_note', 'text' => 'Live Music', 'included' => true],
                        ['icon' => 'sports_volleyball', 'text' => 'Beach Games', 'included' => true],
                        ['icon' => 'restaurant', 'text' => 'Food Village', 'included' => true],
                        ['icon' => 'close', 'text' => 'Transportation not included', 'included' => false],
                    ],
                    'cta' => ['text' => 'Select Standard Pass', 'url' => 'https://icelandbeach.com/ticket'],
                ],
                [
                    'name' => 'All-Inclusive Pass',
                    'tagline' => 'Festival Entry + To & Fro Transit',
                    'price' => '₦10,000',
                    'featured' => true,
                    'badge' => 'BEST VALUE',
                    'features' => [
                        ['icon' => 'check_circle', 'text' => 'Everything in Standard', 'included' => true],
                        ['icon' => 'directions_bus', 'text' => 'A/C Round-Trip Transportation', 'included' => true],
                        ['icon' => 'school', 'text' => 'Campus Pickup', 'included' => true],
                        ['icon' => 'fast_forward', 'text' => 'Boarding Fast-Track', 'included' => true],
                    ],
                    'cta' => ['text' => 'Select All-Inclusive Pass', 'url' => 'https://icelandbeach.com/ticket'],
                ],
            ],
            'checkout_info' => [
                'notice' => 'Campus pickup locations and departure schedules will be sent directly to your registered email upon purchase.',
                'payment_methods' => [
                    ['icon' => 'credit_card', 'label' => 'Card'],
                    ['icon' => 'account_balance', 'label' => 'Bank Transfer'],
                    ['icon' => 'dialpad', 'label' => 'USSD'],
                ],
                'support_text' => 'Need help with bulk campus bookings?',
                'support_url' => '#',
            ],
            'faq' => [
                ['q' => 'Is transportation available for attendees?', 'a' => 'Yes, but only for attendees who purchase the Access + Transportation Package.'],
                ['q' => 'How much does transportation cost?', 'a' => 'Transportation is an additional ₦5,000, bringing the total Access + Transportation Package to ₦10,000.'],
                ['q' => 'Where are the pickup locations?', 'a' => 'Pickup locations are: Eko Atlantic Entrance (Bar Beach), Ikeja, Akoka/Yaba, and Surulere.'],
                ['q' => 'What time should I arrive at the pickup point?', 'a' => 'Please arrive by 12:00 PM on 25th September.'],
                ['q' => 'Will transportation be available after the event?', 'a' => 'Yes. Return transportation departs at 6:00 AM on 26th September for attendees who purchased the Access + Transportation Package.'],
                ['q' => 'Can I come with my own car?', 'a' => "Yes. You're welcome to drive to the venue, and parking is available."],
                ['q' => 'Are snacks included with my ticket?', 'a' => 'Snacks are only included if you add the ₦3,000 Lunch Package to your ticket.'],
                ['q' => 'Can I buy food and snacks at the venue?', 'a' => 'Yes. We offer a wide variety of food and snacks. You can view the menu at morithos.com/menu.'],
                ['q' => 'What is the Lunch Package?', 'a' => 'The Lunch Package is an optional meal package for attendees who would like to enjoy our specially prepared lunch.'],
                ['q' => 'Is the Lunch Package compulsory?', 'a' => 'No. It is completely optional.'],
                ['q' => 'What is Morithos?', 'a' => 'Morithos is our partner luxury restaurant and snack bar where attendees with the Lunch Package will enjoy their meal.'],
                ['q' => 'Can I add the Lunch Package after purchasing my ticket?', 'a' => 'Yes, you can add it before the event.'],
                ['q' => 'Is accommodation available?', 'a' => 'Yes, but accommodation must be booked in advance. The event runs throughout the night.'],
                ['q' => 'Can I stay overnight?', 'a' => 'Yes. However, if you purchased the transportation package, be sure not to miss your return bus, which departs at 6:00 AM on 26th September.'],
                ['q' => 'How do I book accommodation?', 'a' => 'Visit icelandbeach.com to check room availability and make your reservation.'],
                ['q' => 'Are rooms guaranteed after purchasing a ticket?', 'a' => 'No. Purchasing an event ticket does not reserve accommodation. Rooms must be booked separately and are subject to availability.'],
                ['q' => 'What if all the rooms are fully booked?', 'a' => 'Tent rentals are available upon request.'],
                ['q' => 'Is parking available?', 'a' => 'Yes, parking is available for all attendees.'],
                ['q' => 'Can I become a vendor?', 'a' => "Yes. Simply submit a vendor application describing what you'd like to sell. All applications are subject to approval."],
                ['q' => 'Is there a deadline for vendor applications?', 'a' => 'Yes. Vendor applications close on 25th September, one day before the event.'],
                ['q' => 'Can companies sponsor the event?', 'a' => 'Yes. We welcome sponsorships from companies, brands, and organizations.'],
                ['q' => 'How can I contact customer support?', 'a' => 'You can reach us through the WhatsApp button on your ticket confirmation page or on the Iceland Beach website.'],
                ['q' => 'Will there be security at the event?', 'a' => "Yes. Security personnel will be present throughout the event to ensure everyone's safety."],
                ['q' => 'What items are prohibited?', 'a' => 'Harmful objects, dangerous items, illegal substances, and anything that may pose a safety risk are strictly prohibited.'],
                ['q' => 'Where can I get the latest event updates?', 'a' => 'Follow Iceland Beach on TikTok for the latest announcements and event updates.'],
            ],
            'sponsors' => [
                ['image' => asset('images/icca logo 1.png'), 'alt' => 'ICCA'],
                ['image' => asset('images/icelandbeach logo 1.png'), 'alt' => 'Iceland Beach'],
            ],
        ]);
    }
}

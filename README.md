<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Production Deployment & Setup

This repository includes configuration for shared hosting environments (e.g. Hostinger):

### Changes & Configuration
- **Root `.htaccess`**: Rewrites all requests to the `public/` directory to resolve 403 Forbidden issues on shared hosting.
- **PHP Platform Constraint**: `composer.json` is set to target `PHP 8.3.30` platform compatibility to prevent dependency conflicts with newer PHP 8.4 syntax.
- **SQLite Database Support**: Configured for lightweight SQLite file-based storage.

### Deployment Commands

When deploying to production for the first time:

```bash
# 1. Pull latest code
git pull origin main

# 2. Update dependencies for PHP 8.3 platform
composer update --no-dev --optimize-autoloader

# 3. Setup environment & application key
cp .env.example .env
php artisan key:generate

# 4. Create SQLite database & run migrations
touch database/database.sqlite
php artisan migrate --force

# 5. Clear caches
php artisan optimize:clear
```

## React SPA Migration Notes

The public site in this repository is a React SPA served through Laravel, while Filament remains on `/admin`. If you convert more Blade pages to React later, use the same pattern:

- Keep a single SPA Blade entry point, such as `resources/views/spa.blade.php`.
- Point `routes/web.php` to a catch-all route that returns the SPA view and excludes `/admin`, `/api`, and other backend paths.
- Load the frontend through `@vite(['resources/css/app.css', 'resources/js/app.jsx'])` in the SPA Blade file.
- Keep Laravel-only admin pages separate so Filament does not conflict with the frontend router.

### If the page looks unstyled or the layout is out of proportion

This project previously hit a Tailwind/Vite issue where the app loaded, but utilities like `flex`, `grid`, `px-6`, `w-full`, and responsive `md:` classes were not being applied correctly. If that happens again, check the following in order:

1. Make sure `resources/css/app.css` imports Tailwind and explicitly scans the React and Blade sources with `@source`.
2. Make sure `vite.config.js` serves Vite on a browser-reachable host such as `127.0.0.1`.
3. Rebuild the frontend assets with `npm run build`.
4. Clear Laravel caches with `php artisan view:clear` and `php artisan route:clear`.
5. Hard refresh the browser so it loads the new CSS bundle from `public/build`.

### Quick recovery commands

```bash
npm run build
php artisan view:clear
php artisan route:clear
```

If the layout still looks wrong after that, the fastest checks are:

- Confirm the browser is loading the CSS file generated in `public/build/assets`.
- Confirm the React components still use Tailwind class names in `resources/js/**/*.jsx`.
- Confirm the navbar CTA and hero spacing were not overridden by a global CSS reset.

### Spacing / glass-panel / neon-* classes not rendering

**Error:** Components render but spacing collapses, glass panels disappear, neon effects missing, icons don't scale. Named tokens like `px-margin-mobile`, `gap-xl`, `glass-panel`, `neon-button` generate no CSS.

**Root causes:**

1. **Mismatch between Tailwind v3 CDN config and Tailwind v4 theme.** If a component is pasted from an HTML mockup that loads Tailwind from CDN with its own `tailwind.config` block, those named tokens don't exist in this project. Solution: replace all named tokens with numeric Tailwind scale (`p-md` → `p-6`, `gap-xl` → `gap-20`, `px-margin-desktop` → `px-16`, etc.). See `resources/js/pages/HomePage.jsx` for the pattern.

2. **Unlayered base CSS beats utilities.** Rules like `a { color: inherit }` or `img { height: auto }` outside `@layer base` override utilities in the cascade. Check `resources/css/app.css`: ensure all base resets are wrapped in `@layer base { ... }` and component styles in `@layer components { ... }`. Test: grep the compiled bundle in `public/build/assets/app-*.css` for `@layer base` and verify rules like `color:inherit` appear *inside* that block.

3. **Opacity or z-index stacking context hides elements.** If background layers or decorative elements disappear, check the root container: a parent with `bg-background` (opaque) and `relative` will paint on top of child elements with `-z-10`. Add `isolate` to the page root or use `<div>` instead of `<main>` to create a new stacking context.

**Solution checklist:**

- Replace all custom token classes with numeric equivalents: `gap-xl` → `gap-20`, `p-lg md:p-xl` → `p-12 md:p-20`.
- Confirm `app.css`: `a { ... }` and `img { ... }` are inside `@layer base`, not at root level.
- Confirm `.glass-panel`, `.neon-button`, `.neon-glow-hover`, `.neon-text-primary` are defined in `app.css` (not just in the Tailwind theme).
- Confirm custom type sizes like `.text-headline-xl` are defined with their responsive breakpoints (`@media (min-width: 768px)`).
- Run `npm run build && php artisan view:clear && php artisan route:clear` and hard-refresh.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

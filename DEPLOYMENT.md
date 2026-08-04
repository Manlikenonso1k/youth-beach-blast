# Hostinger SSH Deployment Guide

This guide provides the exact terminal commands required to deploy the decoupled Laravel + React SPA architecture to your Hostinger shared server via SSH.

## Prerequisites
- SSH access enabled in your Hostinger hPanel.
- Node.js & Composer installed on the Hostinger server.
- Database credentials ready (Database Name, Username, Password).

## Deployment Steps

### 1. SSH into your Hostinger Server
Use your terminal to log into your server. Replace `u123456789` and `your-server-ip` with the actual details from Hostinger hPanel.

```bash
ssh u123456789@your-server-ip -p 65002
```

### 2. Navigate to your Application Directory
Go to the root of your primary domain.

```bash
cd ~/domains/youthbeachblast.com/public_html
```

### 3. Fetch the Latest Code
If this is the first time, clone the repository. If you are updating, just pull.

```bash
# First time only (ensure directory is empty):
git clone git@github.com:your-username/youth-beach-blast.git .

# OR for subsequent deployments:
git pull origin main
```

### 4. Install Backend Dependencies
Install PHP dependencies without dev packages and optimize the autoloader.

```bash
composer install --optimize-autoloader --no-dev
```

### 5. Install Frontend Dependencies & Build the SPA
Compile the React assets using Vite.

```bash
npm install
npm run build
```

> [!TIP]
> **Memory Limits:** If `npm run build` fails because the Hostinger server runs out of memory, you can build the assets locally on your own computer, commit the `public/build` directory to your repository, and skip this step on the server.

### 6. Environment Setup
Configure your production `.env` file. (Skip if already configured).

```bash
# Create .env from example
cp .env.example .env

# Generate application key
php artisan key:generate
```

Open the `.env` file with `nano .env` and ensure the following are correctly set:
- `APP_ENV=production`
- `APP_DEBUG=false`
- `APP_URL=https://youthbeachblast.com`
- `DB_CONNECTION=mysql`
- `DB_HOST=127.0.0.1`
- `DB_DATABASE=your_hostinger_db_name`
- `DB_USERNAME=your_hostinger_db_user`
- `DB_PASSWORD=your_hostinger_db_password`
- `SANCTUM_STATEFUL_DOMAINS=youthbeachblast.com`
- `SESSION_DOMAIN=.youthbeachblast.com`

### 7. Run Database Migrations
Create tables for users, cache, jobs, and SEO settings.

```bash
php artisan migrate --force
```

### 8. Optimize and Cache
Clear and recreate caches to ensure the fastest performance.

```bash
php artisan optimize:clear
php artisan optimize
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 9. Fix File Permissions
Ensure the web server has correct permissions to write to storage and cache directories.

```bash
chmod -R 755 storage bootstrap/cache
```

## Maintenance & Updates

For future updates, you only need to run:
```bash
git pull origin main
composer install --optimize-autoloader --no-dev
npm install && npm run build
php artisan migrate --force
php artisan optimize
```

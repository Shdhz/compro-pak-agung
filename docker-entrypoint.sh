#!/bin/sh
set -e

# Pastikan permission benar (Railway aman)
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Cache untuk production
php artisan key:generate --force || true
php artisan migrate --force || true
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Jalankan PHP-FPM di background
php-fpm -D

# Jalankan Nginx (foreground)
nginx -g "daemon off;"

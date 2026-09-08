#!/usr/bin/env bash
set -e

# Configure Apache to listen on Railway's dynamic $PORT
PORT="${PORT:-80}"
sed -i "s/Listen 80/Listen ${PORT}/g" /etc/apache2/ports.conf
sed -i "s/:80/:${PORT}/g" /etc/apache2/sites-available/000-default.conf

echo "==> Configuring Laravel environment on port ${PORT}..."

# Ensure writable directories exist with correct permissions
mkdir -p /var/www/html/storage/framework/{sessions,views,cache} /var/www/html/storage/logs
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Clear cached configs/routes
php artisan config:clear || true
php artisan cache:clear || true
php artisan view:clear || true

# Run database migrations if DB is reachable
if [ -n "$DB_HOST" ] && [ "$DB_HOST" != "127.0.0.1" ] && [ "$DB_HOST" != "localhost" ]; then
    echo "==> Running database migrations..."
    php artisan migrate --force || echo "Warning: Migration check completed."
fi

# Create storage symlink if needed
php artisan storage:link || true

echo "==> Starting Apache web server..."
exec apache2-foreground

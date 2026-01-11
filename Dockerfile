FROM php:8.2-fpm

# Install system deps + Node.js
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    nodejs \
    npm

# PHP Extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
COPY . .

# PHP deps
RUN composer install --no-dev --optimize-autoloader

# Frontend build 
RUN npm install && npm run build

# Permission
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 storage bootstrap/cache

# Nginx
COPY nginx.conf /etc/nginx/nginx.conf

# Entrypoint
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

EXPOSE 80
ENTRYPOINT ["docker-entrypoint.sh"]

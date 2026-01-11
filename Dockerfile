FROM php:8.2-apache

# Install dependencies sistem & driver PostgreSQL (libpq-dev)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    libpq-dev \
    git \
    curl

# Install ekstensi PHP: pdo_pgsql (Wajib buat Postgres)
RUN docker-php-ext-install pdo pdo_pgsql gd

# Aktifkan mod_rewrite Apache
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy file composer
COPY composer.json composer.lock ./

# Install library (Tanpa dev dependencies biar ringan)
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Copy seluruh source code
COPY . .

# Atur permission storage (Penting!)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Ubah DocumentRoot ke public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

EXPOSE 80
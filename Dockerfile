FROM php:8.2-apache

# 1. Install dependencies sistem, driver PostgreSQL, dan dos2unix
# dos2unix penting buat user Windows biar script .sh bisa jalan
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    libpq-dev \
    git \
    curl \
    dos2unix

# 2. Install ekstensi PHP: pdo_pgsql & gd
RUN docker-php-ext-install pdo pdo_pgsql gd

# 3. Aktifkan mod_rewrite Apache
RUN a2enmod rewrite

# 4. Set working directory
WORKDIR /var/www/html

# 5. Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# 6. Copy file composer dulu (biar cache layer docker optimal)
COPY composer.json composer.lock ./

# 7. Install library
RUN composer install --no-dev --optimize-autoloader --no-scripts

# 8. Copy seluruh source code project
COPY . .

# 9. Copy file script startup yang baru dibuat tadi
COPY start-container.sh /usr/local/bin/start-container.sh

# 10. Konversi line-ending script ke format Unix (PENTING buat user Windows)
RUN dos2unix /usr/local/bin/start-container.sh

# 11. Bikin script bisa dieksekusi (executable)
RUN chmod +x /usr/local/bin/start-container.sh

# 12. Atur permission storage
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 13. Generate Storage Link
RUN php artisan storage:link

# 14. Ubah DocumentRoot Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 15. Jalankan script startup saat container nyala
ENTRYPOINT ["start-container.sh"]

# 16. Expose port
EXPOSE 80
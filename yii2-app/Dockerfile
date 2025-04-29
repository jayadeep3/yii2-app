FROM php:7.4-apache

# Install required tools
RUN apt-get update && apt-get install -y \
    unzip git curl zip libzip-dev \
    && docker-php-ext-install zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy app code
COPY . /var/www/html

# Install PHP dependencies
RUN composer install --prefer-dist --no-interaction --optimize-autoloader

EXPOSE 80

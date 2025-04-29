FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
    zip unzip git libzip-dev libicu-dev \
    && docker-php-ext-install zip intl pdo pdo_mysql mbstring

# Use Composer directly from composer image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy Yii2 project
WORKDIR /var/www/html
COPY . .

# Set up asset-packagist and install dependencies
RUN composer clear-cache && \
    composer install --prefer-dist --no-interaction --optimize-autoloader

EXPOSE 80

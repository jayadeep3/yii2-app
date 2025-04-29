FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
    zip unzip git libzip-dev libicu-dev \
    && docker-php-ext-install zip intl pdo pdo_mysql mbstring

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

RUN COMPOSER_MEMORY_LIMIT=-1 composer install

EXPOSE 80

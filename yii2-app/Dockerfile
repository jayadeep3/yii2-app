FROM php:7.4-apache

# Install required system packages
RUN apt-get update && apt-get install -y \
    git unzip zip curl libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project files
WORKDIR /var/www/html
COPY . .

# Install dependencies using Composer
RUN composer clear-cache && \
    composer install --prefer-dist --no-interaction --optimize-autoloader

# Expose port 80
EXPOSE 80

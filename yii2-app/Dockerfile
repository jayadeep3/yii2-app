# FROM php:7.4-apache

# # Install required tools and PHP extensions
# RUN apt-get update && apt-get install -y \
#     unzip git curl zip libzip-dev \
#     && docker-php-ext-install zip

# # Enable Apache mod_rewrite for Yii2 pretty URLs
# RUN a2enmod rewrite

# # Set Apache DocumentRoot to Yii2 web directory
# ENV APACHE_DOCUMENT_ROOT /var/www/html/web

# # Update Apache config to use new DocumentRoot
# RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf \
#     && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# # Copy Composer from official Composer image
# COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# # Copy application code to container
# COPY . /var/www/html

# # Set working directory
# WORKDIR /var/www/html

# # Install PHP dependencies
# RUN composer install --prefer-dist --no-interaction --optimize-autoloader

# EXPOSE 80

FROM php:7.4-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev zip \
    && docker-php-ext-install pdo pdo_mysql zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy Yii2 app
COPY . /var/www/html

# Install Yii2 dependencies
RUN composer install --prefer-dist --no-interaction

# Permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
CMD ["php-fpm"]

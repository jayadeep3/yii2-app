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

# Allow Yii2 plugin
RUN composer config --no-plugins allow-plugins.yiisoft/yii2-composer true

# Install Yii2 dependencies
RUN composer install --prefer-dist --no-interaction

# Permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
CMD ["php-fpm"]

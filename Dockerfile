FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    zip unzip git libzip-dev libonig-dev libxml2-dev \
 && docker-php-ext-install pdo_mysql mbstring zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ВАЖНО: верная рабочая директория
WORKDIR /var/www/html
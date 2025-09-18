# лучше cli, а не fpm
FROM php:8.3-cli

# зависимости и расширения PHP
RUN apt-get update && apt-get install -y \
    zip unzip git libzip-dev libonig-dev libxml2-dev \
 && docker-php-ext-install pdo_mysql mbstring zip

# composer внутрь
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# рабочая папка — корень проекта
WORKDIR /var/www/html

# код копировать не обязательно (мы монтируем томом),
# но можно оставить при желании:
# COPY . ./
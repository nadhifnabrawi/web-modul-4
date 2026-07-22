FROM php:8.1-fpm-bookworm

# Install system dependencies & PHP extensions required for Laravel and PostgreSQL
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libpq-dev \
    libzip-dev \
    libicu-dev \
    && docker-php-ext-install pdo_pgsql zip intl

# Install Composer 2
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
        libpq-dev \
        nodejs \
        git \
        zip \
        unzip \
        vim \
        jq \
    && docker-php-ext-install pdo_mysql pdo_pgsql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY php.ini /usr/local/etc/php/

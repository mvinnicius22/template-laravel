FROM php:8.4-fpm

RUN apt-get update && apt-get install -y \
    curl \
    git \
    zip \
    unzip \
    libpq-dev \
    && docker-php-ext-install \
    pdo \
    pdo_pgsql

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=2.8.5

# Node.js LTS e npm
RUN curl -fsSL https://deb.nodesource.com/setup_23.x | bash - \
    && apt-get install -y nodejs

WORKDIR /var/www
COPY . .
RUN composer install --no-dev --optimize-autoloader

EXPOSE 9000
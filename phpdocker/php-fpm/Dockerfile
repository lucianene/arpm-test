# FROM node:latest as node_base
FROM php:8.3-fpm

# COPY --from=node_base . . 

# Set working directory
WORKDIR "/application"

# Install dependencies for the operating system software
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    zip \
    vim \
    git \
    curl

# Install extensions for php
RUN docker-php-ext-install pdo pdo_mysql

# Install composer (php package manager)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Assign permissions of the working directory to the www-data user
# RUN chown -R www-data:www-data \
#     /var/www/html/storage \
#     /var/www/html/bootstrap/cache

# RUN chmod -R 777 storage

# Expose port 9000 and start php-fpm server (for FastCGI Process Manager)
CMD ["php-fpm"]
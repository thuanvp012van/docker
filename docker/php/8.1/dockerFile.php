FROM php:8.1-apache

RUN apt update

# Enable mod rewrite for apache2
RUN a2enmod rewrite

# Install extensions php
RUN docker-php-ext-install pdo pdo_mysql bcmath ctype fileinfo mysqli curl

# Install composer
RUN curl https://getcomposer.org/download/2.1.6/composer.phar -k --output /usr/local/bin/composer && chmod +x /usr/local/bin/composer

WORKDIR /var/www/html
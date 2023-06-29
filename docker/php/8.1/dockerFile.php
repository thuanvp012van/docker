FROM php:8.1-apache

ENV COMPOSER_VERSION=$COMPOSER_VERSION

RUN apt update && apt install -y

# Enable mod rewrite for apache2
RUN a2enmod rewrite

# Install extensions php
RUN docker-php-ext-install pdo pdo_mysql bcmath mbstring ctype fileinfo mysqli

# Install composer
RUN curl https://getcomposer.org/download/$COMPOSER_VERSION/composer.phar --output /usr/local/bin/composer

WORKDIR /var/www/html
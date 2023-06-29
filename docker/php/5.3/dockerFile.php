FROM nibrev/php-5.3-apache

# Install apache and dependencies
RUN apt-get install -y curl

# Enable mod rewrite for apache2
RUN a2enmod rewrite

# Installs extension
RUN docker-php-ext-install pdo pdo_mysql ctype fileinfo mysqli

# Install composer
RUN curl https://getcomposer.org/download/1.10.22/composer.phar -k --output /usr/local/bin/composer && chmod +x /usr/local/bin/composer

WORKDIR /var/www/html
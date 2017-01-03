FROM library/php:7.1-apache

RUN docker-php-source extract \
    && apt-get update \
    && apt-get install -y libxml2-dev \
    && a2enmod rewrite \
    && docker-php-source delete


FROM php:7.4-apache
MAINTAINER pasit.dev

RUN apt-get update \
    && apt-get install vim -y \
    && apt-get install wget -y

RUN docker-php-ext-install \
    mysqli \
    pdo \
    pdo_mysql 
RUN a2enmod rewrite \
    && a2enmod headers
RUN cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini
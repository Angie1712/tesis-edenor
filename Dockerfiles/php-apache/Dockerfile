# Puedo elegir la version de php que voy a instalar
FROM php:7.4-apache
# Puedo elegir la las librerias
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && \
	apt-get upgrade -y && \
	apt-get install -y git

RUN echo "date.timezone = America/Argentina/Buenos_Aires" > /usr/local/etc/php/php.ini


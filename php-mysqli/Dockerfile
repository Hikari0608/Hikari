FROM php:7.2-fpm

COPY sources.list /etc/apt/sources.list
RUN        apt-get update \
	&& apt-get install -y iputils-ping \
	&& apt-get install -y apt-utils \
	&& docker-php-ext-install  mysqli && docker-php-ext-enable mysqli

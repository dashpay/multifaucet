FROM php:5.6-apache-stretch

RUN sed -i '/deb http:\/\/deb.debian.org\/debian stretch-updates main/d' /etc/apt/sources.list \
  && apt-get -o Acquire::Check-Valid-Until=false update \
  && apt-get install -y libpng16-16 libjpeg62-turbo libpng-dev libjpeg-dev libfreetype6 libfreetype6-dev \
  && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
  && docker-php-ext-install mysqli gd \
  && apt-get remove -y libpng-dev libjpeg-dev libfreetype6-dev \
  && rm -fr /var/cache/apt/*

COPY . /var/www/html

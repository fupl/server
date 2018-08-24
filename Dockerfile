FROM php:7.1.3

ADD . /app

WORKDIR /app

RUN curl -s --insecure https://getcomposer.org/composer.phar \
    -o /usr/bin/composer && chmod +x /usr/bin/composer

RUN apt-get update -qq
RUN apt-get install -qq git
RUN apt-get install -qq zlib1g-dev
RUN rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install zip pcntl
RUN docker-php-ext-install pdo pdo_mysql

RUN composer install -v

RUN composer require server

EXPOSE 8000

CMD php bin/console server:run 0.0.0.0:8000

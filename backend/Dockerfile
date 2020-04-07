FROM php:7.4-alpine

WORKDIR /var/www/html

RUN apk add --no-cache git \
    && docker-php-ext-install pdo pdo_mysql

CMD php artisan serve --host=0.0.0.0 --port=9000

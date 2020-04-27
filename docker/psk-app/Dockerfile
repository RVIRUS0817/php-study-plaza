FROM php:7-fpm

RUN pecl install xdebug && \
    docker-php-ext-enable xdebug && \
    docker-php-ext-install pdo_mysql

ENV DATABASE_HOST: "psk-mysql"
ENV DATABASE_NAME=${DATABASE}
ENV DATABASE_USER=${USER_NAME}
ENV DATABASE_PASSWORD=${USER_PASSWORD}

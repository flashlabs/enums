ARG PHP_VERSION=8.2.1
ARG ALPINE_VERSION=3.17
ARG COMPOSER_VERSION=2

FROM composer:${COMPOSER_VERSION} AS composer_img
FROM php:${PHP_VERSION}-fpm-alpine${ALPINE_VERSION} as php

COPY --from=composer_img /usr/bin/composer /usr/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER=1
ENV PATH="${PATH}:/root/.composer/vendor/bin"

WORKDIR /app

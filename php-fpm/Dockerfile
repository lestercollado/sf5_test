FROM bitnami/php-fpm

ENV COMPOSER_ALLOW_SUPERUSER 1

RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

WORKDIR /var/www/html/app

RUN chmod -R 777 /var/www/html/app
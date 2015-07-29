FROM stesie/v8js:latest

MAINTAINER Quentin Pautrat <quentin.pautrat@gmail.com>

ADD . /var/www/reactjs-php-bundle

RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

ENTRYPOINT  cd /var/www/reactjs-php-bundle && \
            composer install && \
            php -S 0.0.0.0:9000 -t /var/www/reactjs-php-bundle/tests/app
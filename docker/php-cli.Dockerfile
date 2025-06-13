FROM phpdockerio/php:8.4-cli

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
        git \
        php8.4-bcmath \
        php8.4-mcrypt \
        php8.4-sqlite3 \
        php8.4-xdebug \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/* \

COPY php/php-cli.ini /etc/php/8.4/cli/conf.d/99-overrides.ini

WORKDIR /app

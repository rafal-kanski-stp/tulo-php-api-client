FROM php:7.2.24-cli

RUN mkdir -p /var/www/tulo-api-client && \
    cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini && \
    touch /var/log/php_errors.log && \
    echo "error_log=/var/log/php_errors.log" >> /usr/local/etc/php/php.ini && \
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    php -r "unlink('composer-setup.php');" && \
    apt-get update && \
    apt-get install git zip unzip -y

COPY . /var/www/tulo-api-client/

WORKDIR /var/www/tulo-api-client

CMD ["tail", "-f", "/var/log/php_errors.log"]

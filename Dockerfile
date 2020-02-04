FROM php:7.4.2-apache-buster

COPY src/ /var/www/html/
RUN chmod 777 /var/www/html/ts3ssv.php.cache
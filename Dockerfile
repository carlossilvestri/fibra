FROM php:7.0-apache
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html
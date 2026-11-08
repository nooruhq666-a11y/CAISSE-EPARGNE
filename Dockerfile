FROM php:8.2-apache
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html
RUN chmod 666 /var/www/html/data.json
EXPOSE 80
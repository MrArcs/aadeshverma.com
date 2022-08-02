FROM php:7.4-apache

# Copy application source
COPY src /var/www/html/
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
FROM php:8.1-apache

# Enable Apache rewrite (optional but recommended)
RUN a2enmod rewrite

# Copy website files to Apache root
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

# Use an official PHP image with Apache
FROM php:7.4-apache

# Copy source code to the Apache document root
COPY . /var/www/html/

# Enable mod_rewrite for Apache
RUN a2enmod rewrite

# Set permissions for the document root
RUN chown -R www-data:www-data /var/www/html

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Expose port 80
EXPOSE 8000

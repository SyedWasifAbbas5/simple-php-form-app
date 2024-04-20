# Use the official PHP image with Apache
FROM php:apache

# Set working directory
WORKDIR /var/www/html

# Copy PHP files into the container
COPY index.php /var/www/html/

# Expose port 80 to the outside world
EXPOSE 80

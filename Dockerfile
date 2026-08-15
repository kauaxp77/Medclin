FROM php:7.4-apache
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite

# Copy local code to the container image.
COPY ./medclin_projeto/ /var/www/html/
RUN chown -R www-data:www-data /var/www/html/

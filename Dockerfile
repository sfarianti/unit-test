FROM php:8.2-cli

# Install Node.js langsung dari image resmi
COPY --from=node:18-slim /usr/local/bin/node /usr/local/bin/node
COPY --from=node:18-slim /usr/local/bin/npm /usr/local/bin/npm

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install ekstensi PHP yang dibutuhkan Laravel
RUN docker-php-ext-install pdo pdo_mysql mbstring bcmath

WORKDIR /var/www
COPY . .

EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
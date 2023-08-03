FROM php:7.4-fpm

# Instalando as extensões do PHP e outras dependências
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    unzip && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql

# Copiando os arquivos da aplicação
COPY . /var/www/

# Instalando o Composer globalmente
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalando as dependências do Composer
WORKDIR /var/www
RUN composer install

# Permissões
RUN chown -R www-data:www-data /var/www

CMD php artisan serve --host=0.0.0.0 --port=8000

EXPOSE 8000
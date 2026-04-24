FROM php:8.4-fpm-alpine

# Diretório de trabalho
WORKDIR /var/www/html

# Instala dependências de sistema e ferramentas de build
RUN apk add --no-cache \
    libpq-dev \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    icu-dev \
    $PHPIZE_DEPS

# Instala extensões PHP necessárias para Laravel e Filament
RUN docker-php-ext-install \
    pdo_pgsql \
    bcmath \
    zip \
    intl \
    gd

# Instala e habilita Redis (essencial para as filas)
RUN pecl install redis && docker-php-ext-enable redis

# Limpeza de ferramentas de build para reduzir tamanho da imagem
RUN apk del $PHPIZE_DEPS

# Instala Composer atualizado
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Permissões para o usuário www-data
RUN chown -R www-data:www-data /var/www/html

EXPOSE 9000
CMD ["php-fpm"]
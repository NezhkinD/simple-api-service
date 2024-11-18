### Получаем образ php ###
FROM php:8.2.3-fpm-buster

### Устанавливаем рабочую директорию ###
WORKDIR /

### Устанавливаем необходимые для Symfony завиcимости ###
RUN apt-get update && apt-get install -y \
    zip \
    vim \
    unzip \
    git \
    nano \
    wget \
    curl

### Устанавливаем пакетный менеджер composer ###
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

### Устанавливаем рабочую директорию ###
WORKDIR /home/app

### Открываем docker, какой порт нужно слушать. Этот порт укажем в конфигах nginx для параметра fastcgi_pass, для того что бы nginx проксировал запросы к приложению php ###
EXPOSE 9000

### Запускаем процесс php-fpm ###
CMD ["php-fpm"]
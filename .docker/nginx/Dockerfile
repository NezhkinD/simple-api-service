### Получаем образ nginx ###
FROM nginx

### Добавляем конфиг (из нашей локальной директории) nginx в образ  ###
ADD ./nginx.conf /etc/nginx/conf.d/default.conf

# Устанавливаем рабочую директорию
WORKDIR /home/app

COPY ./app/. .
RUN chown -R www-data:www-data /var/cache
RUN chmod -R 775 /var/cache

RUN chown -R root:root /var/cache
RUN chmod -R 775 /var/cache

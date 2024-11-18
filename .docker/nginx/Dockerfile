### Получаем образ nginx ###
FROM nginx

### Добавляем конфиг (из нашей локальной директории) nginx в образ  ###
ADD ./nginx.conf /etc/nginx/conf.d/default.conf

# Устанавливаем рабочую директорию
WORKDIR /home/app
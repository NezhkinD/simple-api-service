# Запуск контейнеров
up:
	docker-compose up -d

# Перезапуск контейнеров
restart:
	docker-compose restart

# Остановить контейнеры
stop:
	docker-compose stop

# Остановить и удалить контейнеры
down:
	docker-compose down

# Сборка образов с кешем
build:
	docker-compose build

# Сборка образов без кеша
build_no_cache:
	docker-compose build --no-cache

# Разблокировать файлы проекта
unlock:
	sudo chown -R ${USER}:${USER} ./app
	chmod 775 ./app

# Обновить пакеты внутри php контейнера
composer_update:
	docker exec -it sas_php composer update

test:
	docker exec -it sas_php php bin/phpunit

pull:
	git pull

# Запуск приложения
run: build_no_cache up composer_update

# Рестарт приложения, с получением актуальных данных из репозитория
rerun: down pull build up composer_update
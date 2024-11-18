up:
	docker-compose up -d

restart:
	docker-compose restart

stop:
	docker-compose stop

down:
	docker-compose down

build:
	docker-compose build

build_no_cache:
	docker-compose build --no-cache

unlock:
	sudo chown -R ${USER}:${USER} ./app
	chmod 775 ./app

prune:
	 docker network prune

composer_update:
	docker exec -it sas_php composer update

run: build_no_cache up composer_update
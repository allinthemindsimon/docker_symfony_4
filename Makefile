hello:
	@echo 'Hello World, first command in Makefile'

up:
	docker-compose up

upd:
	docker-compose up -d

down:
	docker-compose down

pbc:
	-n php bin/console
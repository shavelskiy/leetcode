#!/usr/bin/make

start:
	docker-compose up -d

stop:
	docker-compose down

install:
	composer install

check-autoload:
	composer dump-autoload --strict-psr

code-style:
	composer php-cs-fixer fix -- --allow-risky=yes

test:
	composer phpunit

pre-commit: check-autoload code-style test

db:
	docker-compose exec db mysql -uroot -psecret

#!/usr/bin/make

start:
	docker-compose up -d

stop:
	docker-compose down

install:
	composer install

check-autoload:
	composer dump-autoload --strict-psr

php-fixer:
	composer php-cs-fixer fix -- --allow-risky=yes

phpunit:
	composer phpunit

tests: check-autoload php-fixer phpunit

db:
	docker-compose exec db mysql -uroot -psecret

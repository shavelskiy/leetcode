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

psalm:
	composer psalm

phpunit:
	composer phpunit

tests: check-autoload php-fixer phpunit
check: check-autoload php-fixer psalm phpunit

db:
	docker-compose exec db mysql -uroot -psecret

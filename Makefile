#!/usr/bin/make

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

tests: check-autoload php-fixer psalm  phpunit

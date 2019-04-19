DC=docker-compose
binConsole=php bin/console
.DEFAULT_GOAL := help

.PHONY: help
help:
		@grep '##' Makefile \
		| grep -v 'grep\|sed' \
		| sed 's/^\.PHONY: \(.*\) ##[\s|\S]*\(.*\)/\1:\t\2/' \
		| sed 's/\(^##\)//' \
		| sed 's/\(##\)/\t/' \
		| expand -t14

.PHONY: fstart
fstart: docker-compose.override.yml
	$(DC) pull || true
	$(DC) build
	$(DC) up -d
	$(DC) exec -u 1000:1000 app composer install
	$(DC) exec -u 1000:1000 app $(binConsole) doctrine:database:create

.PHONY: start
start: docker-compose.override.yml
	$(DC) up -d
	$(DC) exec -u 1000:1000 app composer install

.PHONY: dup
dup:
	$(DC) stop
	$(DC) up -d

.PHONY: stop
stop:
	$(DC) down

.PHONY: exe
exe:
	$(DC) exec -u 1000:1000 app /bin/bash

.PHONY: tests
tests:
	vendor/bin/phpcs src
	vendor/bin/phpstan analyse --level 6 src

.PHONY: tests-fix
tests-fix:
	vendor/bin/phpcbf src


docker-compose.override.yml: docker-compose.override.yml.dist
	$(RUN) cp docker-compose.override.yml.dist docker-compose.override.yml
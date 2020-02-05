test:
	./vendor/bin/phpunit
.PHONY: test

update:
	composer update
	composer validate
.PHONY: update

phpstan:
	./vendor/bin/phpstan analyse src --level=max
.PHONY: phpstan

psalm:
	./vendor/bin/psalm
.PHONY: psalm

psalm_init:
	./vendor/bin/psalm --init
.PHONY: psalm_init

psalter:
	./vendor/bin/psalter --issues=all
.PHONY: psalter

phan:
	./vendor/bin/phan
.PHONY: phan
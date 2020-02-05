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
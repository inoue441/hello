test:
	./vendor/bin/phpunit
.PHONY: test

update:
	composer update
	composer validate
.PHONY: update
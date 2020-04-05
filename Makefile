# Makefile

all: tests

tests: tests_algo tests_ds

tests_algo:
	php vendor/bin/phpunit --bootstrap autoload.php test/Algorithms --debug

tests_ds:
	php vendor/bin/phpunit --bootstrap autoload.php test/Ds --debug

.PHONY: test
# Makefile

all: test

test:
	php vendor/bin/phpunit --bootstrap autoload.php test/SortsTest.php -vvv

.PHONY: test
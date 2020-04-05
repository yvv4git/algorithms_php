# Makefile

all: tests

tests: 
	php vendor/bin/phpunit --bootstrap autoload.php test --debug

tests_math:
	php vendor/bin/phpunit --bootstrap autoload.php test/MathTest.php --debug

tests_sorts:
	php vendor/bin/phpunit --bootstrap autoload.php test/SortsTest.php --debug

tests_practical:
	php vendor/bin/phpunit --bootstrap autoload.php test/PracticalTest.php --debug

tests_search:
	php vendor/bin/phpunit --bootstrap autoload.php test/SearchTest.php --debug

.PHONY: test
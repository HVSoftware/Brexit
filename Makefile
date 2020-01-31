install:
	composer install

verify:
	./vendor/bin/phpcs --standard=PSR2 ./src ./tests/Brexit
	./vendor/bin/phpunit

phpcbf:
	./vendor/bin/phpcbf --standard=PSR2 ./src  ./tests/Brexit

phpcbf-fix:
	./vendor/bin/phpcbf --standard=PSR2 ./src  ./tests/Brexit -w

phpunit:
	./vendor/bin/phpunit

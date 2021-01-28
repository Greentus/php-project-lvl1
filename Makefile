install:
	composer install

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

validate:
	composer validate

lint:
	composer run-script phpcs -- --standard=PSR12 src bin

test:
	composer exec --verbose phpunit tests

test-coverage:
	composer exec --verbose phpunit tests -- --coverage-clover build/logs/clover.xml

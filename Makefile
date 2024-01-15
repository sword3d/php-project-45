# Makefile
install:
	composer install

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

fix:
	composer exec --verbose phpcbf -- --standard=PSR12 src bin

brain-games:
	./bin/brain-games



# make brain-games
# make brain-even
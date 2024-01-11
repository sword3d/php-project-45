# Makefile
install:
	composer install

validate:
	composer validate

brain-games:
	./bin/brain-games

# make brain-calc
# make brain-even
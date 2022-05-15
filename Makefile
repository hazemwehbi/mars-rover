.PHONY: install update test clean-coverage

test: clean-coverage
	./vendor/bin/phpunit --testdox

clean-coverage:
	rm -rf ./test/_rep
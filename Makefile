test:
	docker run -it --rm -v "${PWD}":/app -w /app php:8.1-cli /app/vendor/bin/phpunit

composer-install:
	docker run -it --rm -v "${PWD}":/app -w /app composer --ignore-platform-reqs --no-scripts install

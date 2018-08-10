@echo off

docker-compose exec php wp --path=/var/www/html --allow-root "$@"

@echo off

start docker-compose exec php wp --path=/var/www/html --allow-root "$@"

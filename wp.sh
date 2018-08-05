#!/bin/bash

docker-compose exec -u `id -u` php wp --path=/var/www/html --allow-root "$@"

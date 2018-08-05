#!/bin/bash

source include/create-env-file.sh

docker-compose exec php wp --path=/var/www/html --allow-root "$@"

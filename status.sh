#!/bin/bash

set -e

source include/create-env-file.sh

echo ">>> Defined services"
docker-compose ps --services

echo ">>> Running services"
docker-compose ps

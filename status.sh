#!/bin/bash

set -e

source include/create-env-file.sh

echo ">>> Running services"
docker-compose ps

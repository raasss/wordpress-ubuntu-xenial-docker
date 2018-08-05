#!/bin/bash

set -e

source include/create-env-file.sh

docker-compose down --volumes --remove-orphans

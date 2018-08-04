#!/bin/sh

set -xe

docker-compose start
docker-compose logs -f

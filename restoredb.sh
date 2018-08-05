#!/bin/bash

set -e

cat db-backup/wordpress.sql | docker-compose exec -T -u root db mysql wordpress

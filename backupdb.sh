#!/bin/bash

set -e

if [ ! -d db-backup ]; then
  mkdir -v db-backup
fi

docker-compose exec -u root db mysqldump --add-drop-database --add-drop-table --single-transaction --verbose wordpress > db-backup/wordpress.sql

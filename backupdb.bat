@echo off

if not exist "db-backup" mkdir db-backup

docker-compose exec -u root db mysqldump --add-drop-database --add-drop-table --single-transaction --verbose wordpress > db-backup/wordpress.sql

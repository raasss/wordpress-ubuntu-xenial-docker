@echo off

type db-backup/wordpress.sql | docker-compose exec -T -u root db mysql wordpress

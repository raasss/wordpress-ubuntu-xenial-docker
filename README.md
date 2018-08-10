# About #

This is project template for WordPress development using Docker. Used services are: Apache, PHP-FPM and Mariadb. All docker images are based on standard ubuntu-xenial image. Developed code with this environment should work on any hardware or virtual server running standard ubuntu xenial version.

## Requirements ##

```docker``` and ```docker-compose``` have to be installed.

## Quickstart ##

1. Clone this git repo locally
```
git clone https://github.com/raasss/wordpress-ubuntu-xenial-docker.git <your_project_name>
```
2. Change current directory to <your_project_name>
```
cd <your_project_name>
```
3. Start docker-compose services
```
./up.sh
```
4. Start tailing logs
```
./logs.sh
```

5. Open [http://localhost:10080](http://localhost:10080) in your favorite Internet browser

## Helper scripts ##

```*.sh``` scripts are for Linux and Mac, ```*.bat``` scripts are for Windows.

### ```./up.sh``` ###
Downloads required docker images if not cached already and starts 3 services (www, php, mariadb)

### ```./logs.sh``` ###
Start trailing logs of all services. Stop trailing with ```ctlr + c```.

### ```./stop.sh``` ###
Stop all services preserving data on disk. This can be used to save system resources while working on some other project.

### ```./start.sh``` ###
Start all services if they were stopped with ```./stop.sh```.

### ```./backupdb.sh``` ###
Backup your database locally to ```db-backup``` directory. After that you should decide if you will git version it or git ignore it.

### ```./restoredb.sh``` ###
Restore database from ```db-backup``` directory.

### ```./status.sh``` ###
Print status of all services.

### ```./down.sh``` ###
Stop all services and destroy relevant dockers. Because dockers are destroyed data in your database **will be DESTROYED** too. It's recommended to run ```./backupdb.sh``` before this command.

### ```./wp.sh``` ###
Execute wp cli inside ```php``` service.

### ```./pull-new-images.sh``` ###
Check and pull for new docker images

## FAQ ##

### Where shoud I put my WordPress code? ###
In ```src``` directory.

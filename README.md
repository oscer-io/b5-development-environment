# Laravel cms b5 environment
This repository contains a dev environment which is built with b5 and docker-compose.
If you don't know what b5 is, you can read [in this articles](https://christlieb.eu/blog/local-development-environment-with-b5-docker-and-traefik) more about it.

## Installation
* clone this repo
* cd into it and create a packages folder (this folder will be ignored with .gitignore)
* clone [laravel-cms](https://github.com/bambamboole/laravel-cms) into the packages folder.

## Tasks
* `b5 artisan` will be executed in the web folder
* `b5 composer` will be executed in the web folder
* `b5 composer-cms` will be executed in the packages/laravel-cms folder
* `b5 npm` will be executed in the web folder
* `b5 npm-cms` will be executed in the packages/laravel-cms folder
* `b5 phpunit` will be executed in the web folder
* `b5 phpunit-cms` will be executed in the packages/laravel-cms folder

## Development
I normally open in PHPStorm only the packages/laravel-cms folder.  
To execute the scripts i have to `cd ..` and can execute any b5 task.

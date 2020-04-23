# Oscer b5 development environment
This repository contains a dev environment which is built with b5 and docker-compose.
If you don't know what b5 is, you can read [in this articles](https://christlieb.eu/blog/local-development-environment-with-b5-docker-and-traefik) more about it.

## Installation
Execute `b5 install` to set up everything for development
It automates the following steps:
1. copy `/web/.env.example` to `/web/.env`. You can alter the file if needed
2. create the folder `/packages` and clone [oscer](https://github.com/oscer-io/oscer) into it.
3. Create a `/build/config.local.yml` with option to enable traefik
4. Execute `composer install` in the `/web` directory
5. Execute `npm install` in `/packages/oscer` folder
6. Execute `npm run dev` in `/packages/oscer` folder
7. symlinks the `/packages/laravel-cms/dist` folder to `/web/public/vendor/cms`.
8. Execute `php artisan migrate:fresh` in the `/web` folder
8. Execute `php artisan cms:dev:seed` in the `/web` folder
4. Execute `composer install` in the `/packages/oscer` directory
4. Execute `./vendor/bin/phpunit` in the `/packages/oscer` folder

## Tasks
* `b5 artisan` will be executed in the web folder
* `b5 composer` will be executed in the web folder
* `b5 composer-cms` will be executed in the packages/oscer folder
* `b5 npm` will be executed in the web folder
* `b5 npm-cms` will be executed in the packages/oscer folder
* `b5 phpunit` will be executed in the web folder
* `b5 phpunit-cms` will be executed in the packages/oscer folder

## Development
We suggest to open only the packages/oscer folder in PHPStorm/your preferred IDE.  
To execute a b5 task from the `/packages/oscer` folder, you have to go one folder up 
into the `/packages` with `cd ..`. Now you are in the GIT repo of the b5 environment 
which gives you access to all b5 tasks.

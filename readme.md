Laravel 5 / Angular / JWT auth 範例...
============================
This is a basic Laravel 5 app that shows how to use the most basic JWT authentication.

## Note
This app is not meant to be used in Production environment.  
It's a very basic example, that lacks any kind of input validation, handling of expired tokens, local storage fallback to cookies or any other storage.

## Installation
- Clone the repository
- Use [Laravel Homestead](http://laravel.com/docs/5.0/homestead)
- SSH in to your Homestead Vagrant box
- Run `composer install` to install the dependencies ([get composer here](http://getcomposer.org/download/))
- Run `php artisan migrate` to setup the database ( .env or config/database.php 要先設定 )
- Follow [Jwt-auth](https://github.com/tymondesigns/jwt-auth) and [Laravel-cors](https://github.com/barryvdh/laravel-cors) in order to config your dependencies
- Run `php artisan config:publish` to publish JWT and CORS packages config files

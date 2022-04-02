# Laravel Env Manager

[![Issues](https://img.shields.io/github/issues/talktogauravsingh/laravel-env-app?style=flat-square)](https://github.com/talktogauravsingh/laravel-env-app/issues)
[![Stars](https://img.shields.io/github/stars/talktogauravsingh/laravel-env-app?style=flat-square)](https://github.com/talktogauravsingh/laravel-env-app/stargazers)


## What ?
Laravel Env is env manager which help developer to share development and production env credential with their team.

## Install (Laravel)
Install via composer
```bash
composer require gauravsingh/laravel-env
```

(only for less than Laravel 7 version)
Add Service Provider to `config/app.php` in `providers` section
```php
Gaurav\LaravelEnv\LaravelEnvServiceProvider::class,
```

Add a route in your web routes file:
```php 
Route::get('/laravelApp-env', [Gaurav\LaravelEnv\controllers\LaravelEnvController::class, 'index']);
```

Go to `http://myapp/laravelApp-env` or some other route

### Note
Always use custom route to make your app secure

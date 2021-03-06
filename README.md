# CUMSA Members Directory

A Laravel application.

[![Build Status](https://travis-ci.org/CUMSA/members.svg)](https://travis-ci.org/CUMSA/members)

# Pre-Installation
* Install Composer [https://getcomposer.org/download/](https://getcomposer.org/download/)
* Install Laravel 5.2 framework [https://laravel.com/docs/5.2](https://laravel.com/docs/5.2)
* Install LAMP stack

# Installation
* Run `php composer.phar install`.
* Run `cp .env.example .env` and edit `.env` accordingly.
* Run `php artisan key:generate`.
* Check that the generated key is present in `.env`.
* Create the database `DB_DATABASE` (as specified in `.env`) in MySQL.
* Run `php artisan migrate`. If you get an access denied error, run `sudo php artisan migrate`.

# Run

* Run `php artisan serve &`.
* Go to [http://localhost:8000/](http://localhost:8000/).
* Add role_viewer and role_editor rights in users table.

# On server

* Add cron job entry `* * * * * php /path/to/artisan schedule:run >> /dev/null 2>&1` to call Laravel scheduler every minute

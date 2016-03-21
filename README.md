# CUMSA Members Directory

A Laravel application.

[![Build Status](https://travis-ci.org/CUMSA/members.svg)](https://travis-ci.org/CUMSA/members)

# Installation

* Run `php composer.phar install`.
* Run `cp .env.example .env` and edit `.env` accordingly.
* Run `php artisan key:generate`.
* Check that the generated key is present in `.env`.
* Create the database `DB_DATABASE` (as specified in `.env`) in MySQL.
* Run `php artisan migrate`. If you get an access denied error, run `sudo php artisan migrate`.

# Run

* Run `php artisan serve &`.
* Go to `http://localhost:8000/`.

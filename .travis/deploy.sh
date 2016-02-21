#!/bin/sh
# Deployment script to be run remotely on the server after a successful push.
git reset --hard
php composer.phar install
php artisan migrate

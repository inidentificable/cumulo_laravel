#!/bin/bash
#Script para poner en produccion los cambios realizados en el GIT
#Claudio Reyes 04-12-2016
#INACAP - Renca


composer sel-update
git pull
php artisan migrate:reset
composer dump-autoload
php artisan migrate
php artisan db:seed
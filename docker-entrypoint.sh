#!/bin/bash

# if [ ! -f "vendor/autoload.php" ]; then
#   composer install
# fi

# if [ ! -f ".env" ]; then
#    cp .env.example .env
# fi

php artisan migrate
php artisan db:seed
# php artisan cache:clear
# php artisan config:clear
# php artisan route:clear

php artisan serve --host=0.0.0.0 --port=8000
# php artisan serve --port=8000 --host=0.0.0.0 --env=.env

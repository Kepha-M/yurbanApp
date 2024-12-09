#!/usr/bin/env bash
composer global require hirak/prestissimo --ignore-platform-reqs

echo "Running composer"
composer update
#composer global require hirak/prestissimo


echo "running Laravel"
composer global require Laravel/laravel

echo "generating application key..."
php artisan key:generate --show

echo "Caching routes..."
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear
php artisan route:cache
php artisan config:cache
php artisan view:cache

echo " Building assets for production "
npm install 
npm run build
composer run dev

echo "Running migrations..."
php artisan migrate --force
echo "seeding database "
php artisan db:seed
echo "List of routes"
php artisan route:list

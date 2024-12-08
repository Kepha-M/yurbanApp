#!/usr/bin/env bash
composer global require hirak/prestissimo --ignore-platform-reqs

echo "Running composer"
composer update
#composer global require hirak/prestissimo


echo "running Laravel"
composer global require Laravel/laravel

echo "generating application key..."
php artisan key:generate --show

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo " Building assets for production "
npm install 
npm run build
composer run dev

echo "Running migrations..."
php artisan migrate --force
echo "seeding database "
php artisan db:seed

#!/usr/bin/env bash
echo "Running composer"
composer update

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

echo "Running migrations..."
php artisan migrate --force

This is the deploy script for your Laravel

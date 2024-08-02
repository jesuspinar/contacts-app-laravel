# Contacts app

## Requirements
Xampp
Node.js
Composer

## Used commands
composer create-project laravel/laravel=9.1.10 contacts-app-laravel
composer require laravel/ui=^3.4
php artisan ui react
npm install
npm run dev
php artisan serve
php artisan route:list
npm run watch
php artisan make:Controller -p Contact ContactController
php artisan migrate

php artisan make:migration create_contacts_table
php artisan make:model Contact

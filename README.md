# Getting started

## Installation
Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/10.x/installation)

- PHP 8.2.1
- Composer
- MySQL
- Laravel CLI

Clone the repository

    git clone https://github.com/rvi11lumino/food-app

Switch to the repo folder

    cd food-app

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations and seeder (**Set the database connection in .env before migrating**)

    php artisan migrate:fresh --seed

Copy new env key from .env.example and Update key/value. Start the local development server

    php artisan serve

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
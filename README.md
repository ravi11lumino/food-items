# Platable Food App

Platable is a web application designed to manage information about food items, donors, and recipients. This README provides an overview of the project, its features, and instructions on setting up and running the application locally.

## Overview

Platable aims to streamline the process of food donation and distribution by providing a simple and intuitive interface for users to:

- Add new food items with details such as name, description, expiry date, and quantity.
- Track donations made by donors, including multiple food items per donation.
- Record recipients and the food items they receive.

## Features

- **Food Items Management:**
  - Create, read, update, and delete food items.
  - Track expiry dates and quantities to manage inventory effectively.

- **Donor Management:**
  - Add donors with their contact information.
  - View a list of food items donated by a specific donor.

- **Recipient Management:**
  - Add recipients with their contact information.
  - View a list of food items received by a specific recipient.


**API Endpoints:**

    POST /api/food-items  :->  Create a new food item.
    GET /api/food-items/{id} :-> Retrieve details of a specific food item.
    PUT /api/food-items/{id} :->  Update the details of a food item.
    DELETE /api/food-items/{id} :-> Delete a food item.
    GET /api/donors/{donorId}/food-items :-> List all food items donated by a specific donor.
    GET /api/recipients/{recipientId}/food-items :-> List all food items received by a specific recipient.



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
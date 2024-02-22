## Laravel Dashboard with City Population Chart

This project is a Laravel-based dashboard that provides insights into city populations, country counts, and language statistics. It features a dynamic chart powered by ApexCharts to visually represent the population of various cities.

## Features

-   Total City Count: Displays the total number of cities present in the database.
-   Total Country Count: Shows the number of countries.
-   Total Language Count: Indicates the number of unique languages spoken across all countries.
-   City Population Chart: A bar chart visualizing the population of cities, facilitating easy comparison and insights into demographic data.

## Requirements

-   PHP >= 7.3
-   Laravel 8.x
-   MySQL (or compatible SQL database)
-   Composer for dependency management
-   Node.js and NPM for managing JavaScript packages

## Setup Instructions

-   Clone the Repository
    `git clone https://yourrepository.git`
    `cd yourprojectdirectory`

-   Install PHP Dependencies
    `composer install`

##Create and Configure .env File

-   Copy the .env.example file to .env and configure your database settings:
-   `DB_CONNECTION=mysql`
-   `DB_HOST=127.0.0.1`
-   `DB_PORT=3306`
-   `DB_DATABASE=yourdatabase`
-   `DB_USERNAME=yourusername`
-   `DB_PASSWORD=yourpassword`

## Generate Application Key

-   `php artisan key:generate`

## Run the Application

-   `php artisan serve`

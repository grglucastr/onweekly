# OnWeekly API

This is a simple to do app. It was developed according to my team's current workflow. So it may not be 100% useful for others needs. It is also an open source project, feel free to fork this repo and do whatever you want to it.

## Instalation requirements

This API was developed using the PHP language along with [Lumen Microframework](https://lumen.laravel.com/docs). Make sure you have installed the following components before you get your hands on:

* PHP 7
* * OpenSSL PHP Extension
* * PDO PHP Extension
* * Mbstring PHP Extension
* Composer

## Instalation

After download this repo, open your terminal inside its directory and download Lumen and all required libraries by running the following command:
```
composer install
```

## Database configuration

[Lumen Microframework](https://lumen.laravel.com/docs) allows you to work with these four databases: MySQL, Postgres, SQLite, and SQL Server.

For this project, we're using MySQL. But you can pick any one of those four listed above. But make sure to configure the ```.env``` file. 

Edit the ```.env.example``` to your database configuration and then rename it by removing the ".example" from the name.
There you can set your **database host**, **database port**, **database user**, **database password**, and so on.

Lumen does not create the database automatically, so you must create the database on your database manager first. Run the following commnad in order to create the database:

```
CREATE DATABASE onweekly
```

## Running the project
Okay, so everything it's done to run the project. First, migrate all the project's database tables by running the following command inside your terminal:
 
```
php artisan migrate
```

Then run the project:

```
php -S localhost:8000 -t public/
```

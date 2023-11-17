<h1 align="center">Book Review Website</h1>

## About

This web application resonates with a basic book review web applicaiton built using Laravel and PHP. This web application denotes my proof-of-work for the purpose of the Coursework 03 in the CSCM48 module of MSc degree.

## Tech Stack

- <b>Frontend Stack</b> : Livewire (Component Mgmt System), Bulma CSS (styling), Laravel Blade Template
- <b>Backend</b>: Laravel 10.1.5 & PHP
- <b>Database</b>: MySQL
- <b>Containerization</b>: Docker

## Instructions To Setup

- Once you have openend the project (preferrably in VS Code), then open your Terminal.

- Make sure you have `php` and `composer` installed on your machine.

- Once above is installed, please run `composer install`. This will generate `vendor` folder.

- Open the terminal, type `alias sail='./vendor/bin/sail'`.

- This will ease the process of using sail everytime you want to perform anything further.

- Copy the contents of `.env.example` file into a new `.env` file.

- Next, just type `sail up -d`.

- Run `php artisan migrate`. This should populate your database and make tables.

- This will start all the containers that are provided with laravel project in the background.

- In the browser, please navigate to `localhost:8500`. The website should be up and running.

## References Used

- HTML: https://developer.mozilla.org/en-US/docs/Web/HTML
- Bulma CSS: https://bulma.io/documentation/
- Livewire: https://laravel-livewire.com/docs/2.x/quickstart
- Laravel: https://laravel.com/docs/10.x/readme

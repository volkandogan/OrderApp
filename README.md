
## System Requirement
- PHP Version 7.4 or Above
- Composer
- Git


## Installation

Use the package manager (composer and npm) for installing

1. Do the following commands for installing
```bash
git clone https://github.com/volkandogan/OrderApp.git
cd OrderApp
composer install
copy .env.example .env
```
2. Create a database
3. Setting database name, username, and password in your .env file
4. Do the following instructions if you're done setting database in .env
```bash
php artisan migrate
php artisan key:generate
```
## To run the application
```bash
php artisan serve
```

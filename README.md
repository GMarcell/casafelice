# Laravel GuestHouse WebSystem

This is a simple web system using Laravel 8, and and this websystem has several modules, including Landing Page, Booking System, Occupancy List, Inventory Management Module, Bookkeeping Module

## Installation

1. Clone the repository:
```bash
git clone https://github.com/GMarcell/casafelice.git
cd casafelice
```

2. Copy `.env` file:
```
cp .env.example .env
```

3. Connect to database:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=casafelice
DB_USERNAME=root
DB_PASSWORD=secret
```

4. Install all the dependencies:
```bash
composer update
```

5. Run:
```bash
php artisan key:generate
```

6. migrate and seed the database:
```bash
php artisan migrate --seed
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

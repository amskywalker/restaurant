## About
This is an internship test project
<hr>

## Getting started
### Artisan - Serve
1. Clone this repository using `git clone https://github.com/amskywalker/restaurant.git`
2. Run `cd restaurant`
3. Run `composer install`
4. Run `cp .env.example .env`
5. Setup database config in .env file
6. Run `php artisan key:generate`
7. Run `php artisan migrate`
8. Run `php artisan serve`
9. Open `http://127.0.0.1:8000`

### Docker - Sail
1. Clone this repository using `git clone https://github.com/amskywalker/restaurant.git`
2. Run `cd restaurant`
3. Run `composer install`
4. Run `cp .env.example .env`
5. Run `php artisan sail:install`
6. Run `sail build`
7. Run `sail up`
8. Run `sail artisan migrate`
9. Open `http://0.0.0.0`

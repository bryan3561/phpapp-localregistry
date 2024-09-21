# phpapp-localregistry

# Install
```bash
composer install
npm install

cp .env.example .env
php artisan key:generate

php artisan migrate
php artisan db:seed
```


```bash
php artisan migrate:fresh
php artisan db:seed
```
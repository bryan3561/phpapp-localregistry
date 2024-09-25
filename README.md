# phpapp-localregistry

# Install
```bash
cd src
composer install
npm install

cp .env.example .env
php artisan key:generate

php artisan migrate
php artisan db:seed
```


```mysql
create database gym;
```


```bash
cd src
php artisan migrate:fresh
php artisan db:seed
```

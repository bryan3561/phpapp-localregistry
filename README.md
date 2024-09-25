# phpapp-localregistry

# Install
```bash
cd src
sudo update-alternatives --set php /usr/bin/php8.4
rm -rf vendor
composer install
npm install

cp .env.example .env
php artisan key:generate
```




```mysql
create database gym;
```

```bash
php artisan migrate
php artisan db:seed
```

```bash
cd src
php artisan migrate:fresh
php artisan db:seed
```

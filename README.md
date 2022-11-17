
When we create test data, insert DB records in bulk instead of inserting each row in a separate query.

This will make your tests faster.

## Install

```bash
git clone https://github.com/curder/laravel-tips -b optimize-factory-database-batch-insert && cd laravel-tips

cp .env.example .env

touch database/database.sqlite
composer install
php artisan key:generate
```

## Config

Open the `.env` file and modify the database configuration information in it.

- **Before:**
    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=homestead
    DB_USERNAME=homestead
    DB_PASSWORD=secret
    ```

- **After:**
    ```dotenv
    DB_CONNECTION=sqlite
    ```

Install the required data tables using the database migration file.

```bash
php artisan migrate
```

## Run command

```bash
php artisan db:seed --class=PostSeeder
```

Open the [ray](https://spatie.be/docs/ray/introduction) software to view the output of the two code time-consuming.

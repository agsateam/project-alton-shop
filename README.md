# Alton Online Shop

Website toko online untuk penjualan Alton

## Tech Requirement

-   PHP 8.2
-   MySQL 8
-   Laravel 11
-   Livewire 3
-   Composer 2.7

## Development

1 - Clone the project

```bash
git clone https://github.com/agsateam/project-alton-shop.git
```

2 - Go to the project directory

```bash
cd project-alton-shop
```

3 - Install dependencies (PNPM recommended)

```bash
composer install
pnpm install
```

4 - Copy .env file

```bash
cp .env.example .env
```

5 - Generate Artisan Key

```bash
php artisan key:generate
```

6 - Create Database & Run Migration, buat database dengan nama "alton" kemudian run :

```bash
php artisan migrate:fresh --seed
```

7 - Run Server

```bash
php artisan serve
pnpm dev
```

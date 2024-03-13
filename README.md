# Alton Online Shop

Website toko online untuk penjualan Alton

## Tech Requirement

-   Laravel 11
-   Livewire 3
-   MySql 8
-   Composer 2.7

## Development

1 - Clone the project

```bash
  git clone https://github.com/agsateam/project-alton-shop.git
```

2 - Go to the project directory

```bash
  cd project-alton
```

3 - Install dependencies, saranku pakai "pnpm" :)

```bash
  composer install
  npm install  /  pnpm install
```

4 - Generate Artisan Key

```bash
  php artisan key:generate
```

5 - Create Database & Run Migration

```bash
  buat database dengan nama "alton" kemudian run:

  php artisan migrate
```

6 - Run Server

```bash
  php artisan serve
  pnpm dev  /  npm run dev
```

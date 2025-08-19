# 📇 Laravel Contacts CRUD

A simple Laravel application with authentication and CRUD functionality for managing contacts.

## Installation

1️⃣ Clone the repository

```bash
git clone https://github.com/AlejandroP1028/people_dynamics_mock_assesment.git
cd people_dynamics_mock_assesment

```

2️⃣ Install dependencies

```bash
composer install
npm install && npm run dev
```

3️⃣ Setup environment

Copy .env.example into .env and update your DB connection:

```bash
cp .env.example .env
php artisan key:generate
```

Example .env snippet:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=people_dynamics
DB_USERNAME=root
DB_PASSWORD=
```

4️⃣ Run migrations & seed database

```
php artisan migrate --seed
```

5️⃣ Start local server

```
php artisan serve
```

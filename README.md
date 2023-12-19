## Warehouse
<strong>Warehouse Management System</strong> Dengan bangga kami mempersembahkan Warehouse Management System (WMS) kami, sebuah produk inovatif yang dirancang dengan prinsip Minimum Variable Product (MVC). MVC menjadi landasan utama dalam menciptakan solusi yang efisien dan terfokus. Website ini juga merupakan sebuah projek akhir dari Program Kampus Merdeka MSIB-5.

## Our Team
- Nata Nara Narendra as FrontEnd Developer, Github : [NataNaraNPS](https://github.com/NataNaraNPS)
- Qonita Azizah as FrontEnd Developer, Github : [Qonitaaa832](https://github.com/Qonitaaa832)
- Mahez Arya Panangsang as BackEnd Developer, Github : [iPotacy](https://github.com/iPotacy)

## Software and Tools
### Bahasa Pemrograman
- PHP
- Javascript

### Database
- MySQL

### Framework and Library
- Laravel
- Bootstrap
- DataTables
- Realrashid (Sweet Alert)
- Dompdf
- Maatwebsite/Excel

## MVC (Minimum Variable Product)
### Warehouse Management System
- Landing Page
- Single Page Berita
- Login
- Register
- Responsif Desktop & Mobile
- Dashboard User:
	- Main Dashboard
	- Form Record
    - Form Stock
    - Form Items
- Dashboard Admin:
	- Main Dashboard
	- Management Transaction (CREATE all Transaction)
	- Management User (CRUD all user)
	- Management Items (CRUD all Items)
- User login redirect to dashboard User
- User login can access dashboard Admin
- Admin login redirect to dashboard Admin

### Extra Feature:
- Export Record to Excel.
- Export Filtering Data Record by Date to Excel.
- Filtering Data Record by Date.
- Real Time Data Stock.
- Filtering Data Stock by Month.
- Filtering Data Stock by Month to Excel.

### Package Manager
- Composer

## How to Install the package?

### If you Local
- Have a composer
- Run command composer update or composer install to get the package from composer
- cp .env.example .env
- php artisan key:generate
- php artisan migrate
- php artisan db:seed --class=DummyUserSeeder
- php artisan db:seed --class=DummyMasterBarangSeeder
- php artisan db:seed --class=DummyMasterStatusSeeder
- php artisan db:seed --class=DummyMasterTransactionSeeder
- php artisan serve
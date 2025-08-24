#  Service Booking System (Laravel 11 and Sanctum)

A simple **API-based Service Booking System** built with **Laravel 11** and **Sanctum**.  
This project was developed as a recruitment task by Oli Ahammed Sarker.

---

##  Features
- User authentication (register, login, logout)
- Role-based access (`customer`, `admin`)
- Service management (CRUD, only admin)
- Booking system (customer bookings, admin sees all)
- Database seeders (default admin + services)

---

##  Tech Stack
- Laravel 11
- Sanctum (API tokens)
- MySQL
- PHP 8.2+

---

##  Installation Guide

### Clone & Install
```bash
git clone https://github.com/anik4997/service-booking-system.git
cd service-booking-system
composer install
```

### Environment setup
```bash
cp .env.example .env
php artisan key:generate
```

### Update .env database section:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=service_booking
DB_USERNAME=root
DB_PASSWORD=
```

### Migrate and Seed:
```bash
php artisan migrate --seed
```

### Run Server:
```bash
php artisan serve
```
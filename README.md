# Reservation & Restaurant Management System

A web-based Restaurant & Reservation Management System built on PHP (CodeIgniter Framework) and MySQL.

## Features
- **Online Table Reservation**: Customers can reserve tables online.
- **Order & POS System**: Comprehensive order intake and Point of Sale module.
- **Role-based Access Control**: Roles for Admin, Kitchen Staff, Counter/Cashier, and Waiters.
- **Customer Web Portal**: Online food ordering and customer account dashboard.

## Quick Start

### 1. Requirements
- PHP 8.x+ with MySQLi extension
- MySQL Database Server (running on `127.0.0.1:3306`)

### 2. Database Setup
Ensure local MySQL is running with `root` / `root` credentials:
```bash
mysql -u root -proot -e "CREATE DATABASE IF NOT EXISTS elitede1_rest; USE elitede1_rest; SOURCE database/elitede1_rest.sql;"
```

### 3. Launch Server
Run the startup script:
```bash
./start.sh
```
Or start manually via PHP Built-in Server:
```bash
php -S 127.0.0.1:8000
```

Access the application in your browser at: [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Demo Credentials
Demo user accounts for all roles are generated in `creds.txt`:
- **Admin**: `demo.admin@example.com` / `demo123`
- **Kitchen**: `demo.kitchen@example.com` / `demo123`
- **Counter**: `demo.counter@example.com` / `demo123`
- **Waiter**: `demo.waiter@example.com` / `demo123`
- **Customer**: `demo.customer@example.com` / `demo123`

## License
[MIT License](LICENSE)


# SportsPro Technical Support

This is a web-based application developed in PHP and MySQL to manage technical support incidents for a hypothetical software company called *SportsPro*. The system is designed to help administrators, technicians, and customers interact with the company's technical support services.

## 🔧 Features

- **Admin Area**
  - Manage products
  - Manage customers
  - Manage technicians

- **Technician Area**
  - View and update assigned incidents

- **Customer Area**
  - Register purchased products
  - View past support requests

## 🗂 Database

The application uses a MySQL database called `tech_support`, which contains the following tables:

- `customers`
- `products`
- `technicians`
- `incidents`
- `registrations`
- `countries`
- `administrators`

You can restore the database using the provided `tech_support.sql` file via phpMyAdmin.

## 🖥 Technologies Used

- PHP (Core backend logic)
- MySQL (Database)
- HTML/CSS (Frontend, styled with `main.css`)
- XAMPP (Local server environment)

## 📁 Project Structure

Each module (Admin, Technician, Customer) is organized into separate directories for maintainability.

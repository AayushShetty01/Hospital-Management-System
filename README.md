# Hospital Management System

A PHP and MySQL web application for managing patients, doctors, appointments, prescriptions, and billing.

## Features
- Patient registration and authentication
- Doctor and specialization management
- Appointment booking and cancellation
- Appointment history and prescriptions
- Bill generation with TCPDF
- Admin-facing management pages

## Technology
- PHP
- MySQL
- HTML/CSS/JavaScript
- Bootstrap
- TCPDF

## Local setup
1. Install PHP, MySQL, and a local server such as XAMPP.
2. Create a MySQL database named `hospitalms`.
3. Import the database schema/data supplied with your local setup.
4. Configure the database connection for your local environment.
5. Place the project under the server's web root.
6. Open the application through the local PHP server.

## Security notes
This is an educational project containing legacy PHP patterns. It should not be deployed to production without further security hardening, including prepared statements, modern password hashing, CSRF protection, authorization checks, and environment-based configuration.

Do not commit real passwords, database credentials, API keys, or production data.

## Project status
Educational project demonstrating PHP/MySQL CRUD and appointment-management concepts.

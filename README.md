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


## Configuration

The application reads database settings from environment variables:

- `HMS_DB_HOST` (default: `127.0.0.1`)
- `HMS_DB_USER` (default: `root`)
- `HMS_DB_PASSWORD`
- `HMS_DB_NAME` (default: `hospitalms`)

For local development, configure these variables in your web server environment rather than committing credentials to the repository.

## Security improvements

The legacy authentication flow now uses prepared statements and `password_hash()` / `password_verify()`. Existing legacy password records are upgraded to secure hashes after a successful login.

A PHP lint workflow is included under `.github/workflows/php-lint.yml`.

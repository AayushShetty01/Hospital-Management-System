# Hospital Management System

A PHP/MySQL web application for managing patient, doctor, appointment, prescription, and billing workflows.

> Project context: educational application revisited as a software-engineering and security-maintenance exercise.

## What it demonstrates

- Patient registration and authentication
- Doctor and specialization management
- Appointment booking and cancellation
- Appointment history and prescriptions
- Billing and PDF generation with TCPDF
- Administrative workflows
- MySQL-backed CRUD operations
- Session-based authentication

## Technology

| Layer | Technology |
|---|---|
| Backend | PHP |
| Database | MySQL |
| Frontend | HTML, CSS, JavaScript |
| UI | Bootstrap |
| PDF generation | TCPDF |
| CI | GitHub Actions |

## Architecture

Browser -> PHP application -> Authentication / workflow handlers -> Centralised database connection -> MySQL

## Security and maintainability work

The original application contained legacy patterns. The repository has been revisited to demonstrate safer engineering practices, including:

- Prepared statements for updated authentication and database workflows
- Centralised database connection configuration
- Environment-based database credentials
- password_hash() / password_verify() for application passwords
- Session ID regeneration after authentication
- Improved authorization scoping for selected patient/doctor workflows
- Removal of committed sample administrator credentials
- PHP syntax validation through GitHub Actions

Legacy password records are upgraded to secure hashes after a successful legacy login where applicable.

## Configuration

Database settings are read from environment variables:

- HMS_DB_HOST - defaults to 127.0.0.1
- HMS_DB_USER - defaults to root
- HMS_DB_PASSWORD
- HMS_DB_NAME - defaults to hospitalms

Do not commit real credentials, API keys, or production data.

## Local setup

1. Install PHP and MySQL. XAMPP is suitable for local development.
2. Create a MySQL database named hospitalms.
3. Import the supplied SQL schema/data.
4. Configure the environment variables listed above.
5. Place the repository under the local PHP server's document root.
6. Open the application through the local server.

## Validation

PHP syntax is checked automatically using .github/workflows/php-lint.yml.

## Project status

Educational / portfolio application, not a production healthcare system. Additional work would be required for production deployment, including comprehensive authorization review, CSRF protection, validation, secure headers, error handling, observability, and deployment hardening.

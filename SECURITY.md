# Security Policy

This repository contains an educational PHP/MySQL project.

## Reporting

Please report security issues privately to the repository owner rather than publishing exploit details in a public issue.

## Development guidance

- Never commit passwords or production database credentials.
- Use prepared statements for SQL queries.
- Store passwords with `password_hash()` and verify them with `password_verify()`.
- Validate and authorize state-changing requests.
- Keep local configuration outside version control.

<?php
declare(strict_types=1);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function db(): mysqli
{
    static $connection = null;

    if ($connection instanceof mysqli) {
        return $connection;
    }

    $connection = new mysqli(
        getenv('HMS_DB_HOST') ?: '127.0.0.1',
        getenv('HMS_DB_USER') ?: 'root',
        getenv('HMS_DB_PASSWORD') ?: '',
        getenv('HMS_DB_NAME') ?: 'hospitalms'
    );
    $connection->set_charset('utf8mb4');

    return $connection;
}

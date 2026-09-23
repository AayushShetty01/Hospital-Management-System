<?php
session_start();
require_once __DIR__ . '/db.php';
$con = db();

if (isset($_POST['adsub'])) {
    $username = trim($_POST['username1'] ?? '');
    $password = (string)($_POST['password2'] ?? '');

    $stmt = $con->prepare('SELECT username, password FROM admintb WHERE username = ? LIMIT 1');
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $row = $stmt->get_result()->fetch_assoc();

    $valid = $row && (password_verify($password, $row['password']) || hash_equals((string)$row['password'], $password));

    if ($valid) {
        if (!password_verify($password, $row['password'])) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $upgrade = $con->prepare('UPDATE admintb SET password = ? WHERE username = ?');
            $upgrade->bind_param('ss', $hash, $username);
            $upgrade->execute();
        }

        session_regenerate_id(true);
        $_SESSION['username'] = $row['username'];
        header('Location: admin-panel1.php');
        exit;
    }

    echo("<script>alert('Invalid Username or Password. Try Again!'); window.location.href = 'index.php';</script>");
}


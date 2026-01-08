<?php
$dsn = "mysql:host=mysql;dbname=app_db;charset=utf8mb4";
$user = "app_user";
$pass = "app_pass";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$pdo = new PDO($dsn, $user, $pass, $options);

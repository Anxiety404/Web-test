<?php
$dsn = "mysql:host=localhost;dbname=your_db;charset=utf8mb4";
$user = "db_user";
$pass = "db_pass";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$pdo = new PDO($dsn, $user, $pass, $options);

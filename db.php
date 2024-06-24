<?php

$dsn = "mysql:host=localhost;dbname=kopihainan";
$dbusername = "root";
$dbpassword = "";
$dbname = "kopihainan";

// Create connection
$connection = new mysqli("localhost", $dbusername, $dbpassword, $dbname);

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
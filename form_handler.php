<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        require_once "db.php";

        $query = "INSERT INTO account (name, email, password) VALUES (?, ?, ?);";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$name, $email, $password]);

        $pdo = null;
        $stmt = null;

        header("Location: login.php");
        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: register.php");
}
<?php
$servername = "192.168.40.35";
$username = "root";
$password = "root";
$port = 3308;

try {
    $conn = new PDO("mysql:host=$servername;port=$port", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->query("SELECT VERSION()");
    $version = $stmt->fetchColumn();

    echo "Database version: " . $version;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
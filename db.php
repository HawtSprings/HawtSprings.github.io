<?php
// Database credentials
$host = 'localhost';
$dbname = '21st';
$username = 'spring';
$password = 'spring';

try {
    // Establish the database connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>

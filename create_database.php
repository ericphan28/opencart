<?php
// Create OpenCart Database First

$host = 'localhost';
$username = 'root';
$password = '';

try {
    // Connect to MySQL without database
    $pdo = new PDO("mysql:host=$host;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected to MySQL server!\n";
    
    // Create database if not exists
    $pdo->exec("CREATE DATABASE IF NOT EXISTS opencart CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    echo "Database 'opencart' created or already exists!\n";
    
    // Use the database
    $pdo->exec("USE opencart");
    echo "Switched to 'opencart' database\n";
    
    echo "\nDatabase is ready for OpenCart installation!\n";
    echo "You can now:\n";
    echo "1. Install OpenCart through web interface at http://localhost/opencart/\n";
    echo "2. Or run our An Nhiên Farm setup script\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    exit(1);
}
?>

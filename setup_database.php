<?php
// An Nhien Farm Database Setup Script

// Database configuration from OpenCart config
$host = 'localhost';
$username = 'root';
$password = 'Tnt@9961266';
$database = 'opencart';
$port = '3310';

try {
    // Connect to database
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$database;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Database connection successful!\n";
    
    // Read SQL file
    $sqlFile = __DIR__ . '/database/an_nhien_farm_setup.sql';
    if (!file_exists($sqlFile)) {
        throw new Exception("SQL file not found: $sqlFile");
    }
    
    $sql = file_get_contents($sqlFile);
    if ($sql === false) {
        throw new Exception("Cannot read SQL file");
    }
    
    // Split SQL into individual statements
    $statements = array_filter(
        array_map('trim', explode(';', $sql)),
        function($stmt) {
            return !empty($stmt) && !preg_match('/^\s*--/', $stmt);
        }
    );
    
    echo "Found " . count($statements) . " SQL statements to execute\n";
    
    // Execute each statement
    $executed = 0;
    foreach ($statements as $statement) {
        if (trim($statement)) {
            try {
                $pdo->exec($statement);
                $executed++;
                echo ".";
            } catch (PDOException $e) {
                echo "\nError executing statement: " . substr($statement, 0, 100) . "...\n";
                echo "Error: " . $e->getMessage() . "\n";
            }
        }
    }
    
    echo "\n\nSetup completed! Executed $executed statements successfully.\n";
    echo "An Nhiên Farm database is now configured with:\n";
    echo "- Store information updated\n";
    echo "- 8 main categories created (100-107)\n";
    echo "- 11 subcategories created\n";
    echo "- Vietnamese category descriptions added\n";
    echo "- All categories mapped to store\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    exit(1);
}
?>

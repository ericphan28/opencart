<?php
// Check MySQL processes and locks

$pdo = new PDO('mysql:host=localhost;port=3310;dbname=opencart;charset=utf8mb4', 'root', 'Tnt@9961266');

echo "=== MySQL Process List ===\n";
$stmt = $pdo->query('SHOW PROCESSLIST');
while ($row = $stmt->fetch()) {
    if ($row['Command'] != 'Sleep') {
        echo "ID: {$row['Id']}, User: {$row['User']}, Command: {$row['Command']}, Time: {$row['Time']}, Info: {$row['Info']}\n";
    }
}

echo "\n=== Checking Tables ===\n";
try {
    $stmt = $pdo->query('SELECT COUNT(*) FROM oc_setting');
    echo "oc_setting has " . $stmt->fetchColumn() . " records\n";
    
    $stmt = $pdo->query('SELECT COUNT(*) FROM oc_category');
    echo "oc_category has " . $stmt->fetchColumn() . " records\n";
    
    // Try simple read
    $stmt = $pdo->query('SELECT value FROM oc_setting WHERE `key` = "config_name" LIMIT 1');
    echo "Current store name: " . $stmt->fetchColumn() . "\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

echo "\n=== Kill Long Running Processes ===\n";
try {
    $pdo->exec('KILL QUERY 0'); // This won't work but let's try
} catch (Exception $e) {
    // Expected to fail
}

echo "Try restarting XAMPP MySQL service if locks persist\n";
?>

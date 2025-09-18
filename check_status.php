<?php
// Check current database status
$pdo = new PDO('mysql:host=localhost;port=3310;dbname=opencart;charset=utf8mb4', 'root', 'Tnt@9961266');

echo "=== AN NHIÊN FARM STATUS CHECK ===\n\n";

// Check store name
$stmt = $pdo->query('SELECT value FROM oc_setting WHERE `key` = "config_name" AND store_id = 0');
echo "Store Name: " . $stmt->fetchColumn() . "\n";

// Check categories
$stmt = $pdo->query('SELECT COUNT(*) FROM oc_category WHERE category_id >= 100');
echo "New Categories Created: " . $stmt->fetchColumn() . "\n";

// Check category names
echo "\nCategory List:\n";
$stmt = $pdo->query('SELECT category_id, name FROM oc_category_description WHERE category_id >= 100 AND language_id = 2 ORDER BY category_id');
while ($row = $stmt->fetch()) {
    echo "- {$row['category_id']}: {$row['name']}\n";
}

// Check if website shows the changes
echo "\nTo see changes on website, you need to:\n";
echo "1. Clear OpenCart cache\n";
echo "2. Update the menu to show new categories\n";
echo "3. Add products to the new categories\n";
?>

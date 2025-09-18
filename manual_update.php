<?php
// Direct manual update to avoid encoding issues

$pdo = new PDO('mysql:host=localhost;port=3310;dbname=opencart;charset=utf8mb4', 'root', 'Tnt@9961266');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "=== MANUAL UPDATES FOR AN NHIÊN FARM ===\n\n";

try {
    // Use prepared statements to avoid encoding issues
    echo "1. Updating store name...\n";
    $stmt = $pdo->prepare("UPDATE oc_setting SET value = ? WHERE `key` = 'config_name' AND store_id = 0");
    $stmt->execute(['An Nhien Farm']);
    echo "✓ Store name updated\n";
    
    echo "2. Creating category 100...\n";
    // First delete if exists
    $pdo->exec("DELETE FROM oc_category WHERE category_id = 100");
    $pdo->exec("DELETE FROM oc_category_description WHERE category_id = 100");
    $pdo->exec("DELETE FROM oc_category_to_store WHERE category_id = 100");
    
    // Then insert
    $pdo->exec("INSERT INTO oc_category (category_id, image, parent_id, sort_order, status) VALUES (100, '', 0, 1, 1)");
    
    $stmt = $pdo->prepare("INSERT INTO oc_category_description (category_id, language_id, name, description, meta_title, meta_description, meta_keyword) VALUES (100, 2, ?, ?, ?, ?, ?)");
    $stmt->execute([
        'Rau Xanh Tuoi',
        '<p>Rau xanh tuoi ngon tu An Nhien Farm</p>',
        'Rau Xanh Tuoi - An Nhien Farm',
        'Rau xanh tuoi huu co chat luong cao',
        'rau xanh, rau tuoi, an nhien farm'
    ]);
    
    $pdo->exec("INSERT INTO oc_category_to_store (category_id, store_id) VALUES (100, 0)");
    echo "✓ Category 100 created\n";
    
    // Verify
    echo "\n3. Verification...\n";
    $stmt = $pdo->query("SELECT value FROM oc_setting WHERE `key` = 'config_name' AND store_id = 0");
    echo "Store name: " . $stmt->fetchColumn() . "\n";
    
    $stmt = $pdo->query("SELECT name FROM oc_category_description WHERE category_id = 100 AND language_id = 2");
    echo "Category 100: " . $stmt->fetchColumn() . "\n";
    
    echo "\n✅ Basic setup completed!\n";
    echo "Now you can see changes at: http://localhost:7777/opencart/upload/\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "Line: " . $e->getLine() . "\n";
}
?>

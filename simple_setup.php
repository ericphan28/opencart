<?php
// Simple step-by-step setup for An Nhien Farm

$pdo = new PDO('mysql:host=localhost;port=3310;dbname=opencart;charset=utf8mb4', 'root', 'Tnt@9961266');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "=== STEP BY STEP AN NHIÊN FARM SETUP ===\n\n";

try {
    // Step 1: Update store name
    echo "Step 1: Updating store name...\n";
    $pdo->exec("UPDATE oc_setting SET value = 'An Nhiên Farm' WHERE `key` = 'config_name' AND store_id = 0");
    echo "✓ Store name updated\n\n";
    
    // Step 2: Create categories (only if not exist)
    echo "Step 2: Creating categories...\n";
    
    // Check if categories already exist
    $stmt = $pdo->query("SELECT COUNT(*) FROM oc_category WHERE category_id = 100");
    if ($stmt->fetchColumn() == 0) {
        $categories = [
            100 => 'Rau Xanh Tươi',
            101 => 'Củ Quả Tươi', 
            102 => 'Trái Cây Tươi',
            103 => 'Thảo Mộc & Gia Vị',
            104 => 'Sản Phẩm Chế Biến',
            105 => 'Thịt Bò Nhập Khẩu',
            106 => 'Hải Sản Đông Lạnh',
            107 => 'Nước Sốt Tiện Lợi'
        ];
        
        foreach ($categories as $id => $name) {
            $pdo->exec("INSERT INTO oc_category (category_id, image, parent_id, sort_order, status) VALUES ($id, '', 0, $id, 1)");
            $pdo->exec("INSERT INTO oc_category_description (category_id, language_id, name, description, meta_title, meta_description, meta_keyword) VALUES ($id, 2, '$name', '<p>$name từ An Nhiên Farm</p>', '$name - An Nhiên Farm', '$name chất lượng cao', '$name, an nhien farm')");
            $pdo->exec("INSERT INTO oc_category_to_store (category_id, store_id) VALUES ($id, 0)");
            echo "✓ Created category $id: $name\n";
        }
    } else {
        echo "Categories already exist\n";
    }
    
    echo "\n=== SETUP COMPLETED ===\n";
    echo "Visit: http://localhost:7777/opencart/upload/adminoc/ to manage\n";
    echo "Visit: http://localhost:7777/opencart/upload/ to see website\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>

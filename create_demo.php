<?php
// Create demo products for An Nhien Farm without touching core settings

$pdo = new PDO('mysql:host=localhost;port=3310;dbname=opencart;charset=utf8mb4', 'root', 'Tnt@9961266');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "=== CREATING AN NHIEN FARM DEMO PRODUCTS ===\n\n";

try {
    // Create categories if they don't exist in high ID range to avoid conflicts
    $categories = [
        1000 => 'Rau Xanh An Nhien Farm',
        1001 => 'Thit Bo Nhap Khau Premium', 
        1002 => 'Hai San Dong Lanh Cao Cap',
        1003 => 'Nuoc Sot Tien Loi'
    ];
    
    foreach ($categories as $id => $name) {
        // Check if category exists
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM oc_category WHERE category_id = ?");
        $stmt->execute([$id]);
        
        if ($stmt->fetchColumn() == 0) {
            echo "Creating category $id: $name\n";
            
            $pdo->exec("INSERT INTO oc_category (category_id, image, parent_id, sort_order, status) VALUES ($id, '', 0, $id, 1)");
            
            $stmt = $pdo->prepare("INSERT INTO oc_category_description (category_id, language_id, name, description, meta_title, meta_description, meta_keyword) VALUES (?, 2, ?, ?, ?, ?, ?)");
            $stmt->execute([
                $id,
                $name,
                "<p>$name - Chat luong cao tu An Nhien Farm</p>",
                "$name - An Nhien Farm",
                "$name chat luong cao",
                str_replace(' ', ', ', strtolower($name))
            ]);
            
            $pdo->exec("INSERT INTO oc_category_to_store (category_id, store_id) VALUES ($id, 0)");
            echo "✓ Category $id created successfully\n";
        }
    }
    
    // Now create sample products
    echo "\nCreating sample products...\n";
    
    $products = [
        [
            'name' => 'Rau Cai Xanh Huu Co',
            'description' => 'Rau cai xanh tuoi ngon, trong sach khong hoa chat tu An Nhien Farm',
            'price' => 25000,
            'category_id' => 1000
        ],
        [
            'name' => 'Thit Bo Uc Prime Cut',
            'description' => 'Thit bo Uc cao cap, nhap khau truc tiep, chat luong USDA Prime',
            'price' => 450000,
            'category_id' => 1001
        ],
        [
            'name' => 'Ca Hoi Na Uy Fillet',
            'description' => 'Ca hoi Na Uy tuoi ngon, giau Omega-3, dong lanh ngay tai bien',
            'price' => 180000,
            'category_id' => 1002
        ],
        [
            'name' => 'Nuoc Sot Lau Thai Chua Cay',
            'description' => 'Nuoc sot lau Thai dac biet, vi chua cay dam da, de su dung',
            'price' => 35000,
            'category_id' => 1003
        ]
    ];
    
    foreach ($products as $index => $product) {
        $product_id = 1000 + $index;
        
        // Check if product exists
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM oc_product WHERE product_id = ?");
        $stmt->execute([$product_id]);
        
        if ($stmt->fetchColumn() == 0) {
            echo "Creating product: {$product['name']}\n";
            
            // Insert product
            $stmt = $pdo->prepare("INSERT INTO oc_product (product_id, model, quantity, price, status, date_added, date_modified) VALUES (?, ?, 100, ?, 1, NOW(), NOW())");
            $stmt->execute([$product_id, "ANF-" . $product_id, $product['price']]);
            
            // Insert product description
            $stmt = $pdo->prepare("INSERT INTO oc_product_description (product_id, language_id, name, description, meta_title) VALUES (?, 2, ?, ?, ?)");
            $stmt->execute([$product_id, $product['name'], $product['description'], $product['name'] . ' - An Nhien Farm']);
            
            // Link to category
            $stmt = $pdo->prepare("INSERT INTO oc_product_to_category (product_id, category_id) VALUES (?, ?)");
            $stmt->execute([$product_id, $product['category_id']]);
            
            // Link to store
            $pdo->exec("INSERT INTO oc_product_to_store (product_id, store_id) VALUES ($product_id, 0)");
            
            echo "✓ Product created successfully\n";
        }
    }
    
    echo "\n✅ AN NHIEN FARM DEMO CREATED!\n";
    echo "Visit http://localhost:7777/opencart/upload/ to see the new products\n";
    echo "Visit http://localhost:7777/opencart/upload/adminoc/ to manage\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>

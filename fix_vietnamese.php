<?php
// Fix Vietnamese with proper accents for An Nhien Farm

$pdo = new PDO('mysql:host=localhost;port=3310;dbname=opencart;charset=utf8mb4', 'root', 'Tnt@9961266');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "=== SỬA LẠI TIẾNG VIỆT CÓ DẤU CHO AN NHIÊN FARM ===\n\n";

try {
    // Update category names with proper Vietnamese
    $categories = [
        1000 => [
            'name' => 'Rau Xanh An Nhiên Farm',
            'description' => '<p>Rau xanh tươi ngon được trồng theo phương pháp hữu cơ tại An Nhiên Farm. Không sử dụng hóa chất, đảm bảo an toàn cho sức khỏe.</p>',
            'meta_title' => 'Rau Xanh Hữu Cơ - An Nhiên Farm',
            'meta_description' => 'Rau xanh hữu cơ tươi ngon, không hóa chất từ An Nhiên Farm',
            'meta_keyword' => 'rau xanh, rau hữu cơ, rau sạch, an nhiên farm'
        ],
        1001 => [
            'name' => 'Thịt Bò Nhập Khẩu Cao Cấp',
            'description' => '<p>Thịt bò nhập khẩu cao cấp từ Úc, Mỹ với chứng nhận chất lượng quốc tế. Thịt tươi ngon, marbling đẹp, đảm bảo an toàn thực phẩm.</p>',
            'meta_title' => 'Thịt Bò Nhập Khẩu Cao Cấp - An Nhiên Farm', 
            'meta_description' => 'Thịt bò nhập khẩu Úc, Mỹ cao cấp chất lượng đảm bảo',
            'meta_keyword' => 'thịt bò, beef, nhập khẩu, úc, mỹ, wagyu, cao cấp'
        ],
        1002 => [
            'name' => 'Hải Sản Đông Lạnh Cao Cấp', 
            'description' => '<p>Hải sản đông lạnh tươi ngon nhập khẩu từ Na Uy, Canada. Cá hồi, tôm, cua tươi ngon được đông lạnh ngay tại biển.</p>',
            'meta_title' => 'Hải Sản Đông Lạnh Cao Cấp - An Nhiên Farm',
            'meta_description' => 'Hải sản đông lạnh nhập khẩu từ Na Uy, Canada chất lượng cao',
            'meta_keyword' => 'hải sản, cá hồi, tôm, cua, na uy, canada, đông lạnh'
        ],
        1003 => [
            'name' => 'Nước Sốt Tiện Lợi',
            'description' => '<p>Các loại nước sốt tiện lợi chất lượng cao: sốt lẩu, nướng, kho cá, chấm. Giúp món ăn thêm đậm đà hương vị Việt Nam.</p>',
            'meta_title' => 'Nước Sốt Tiện Lợi - An Nhiên Farm',
            'meta_description' => 'Nước sốt lẩu, nướng, kho cá, chấm tiện lợi chất lượng cao',
            'meta_keyword' => 'nước sốt, sốt lẩu, sốt nướng, sốt kho cá, gia vị'
        ]
    ];
    
    foreach ($categories as $cat_id => $data) {
        echo "Cập nhật danh mục {$cat_id}: {$data['name']}\n";
        
        $stmt = $pdo->prepare("UPDATE oc_category_description SET name = ?, description = ?, meta_title = ?, meta_description = ?, meta_keyword = ? WHERE category_id = ? AND language_id = 2");
        $stmt->execute([
            $data['name'],
            $data['description'], 
            $data['meta_title'],
            $data['meta_description'],
            $data['meta_keyword'],
            $cat_id
        ]);
        echo "✓ Đã cập nhật danh mục {$cat_id}\n";
    }
    
    // Update product names with proper Vietnamese
    $products = [
        1000 => [
            'name' => 'Rau Cải Xanh Hữu Cơ',
            'description' => '<p>Rau cải xanh tươi ngon, trồng sạch không hóa chất từ nông trại An Nhiên Farm. Giàu vitamin và chất xơ, tốt cho sức khỏe.</p>',
            'meta_title' => 'Rau Cải Xanh Hữu Cơ - An Nhiên Farm'
        ],
        1001 => [
            'name' => 'Thịt Bò Úc Prime Cut',
            'description' => '<p>Thịt bò Úc cao cấp, nhập khẩu trực tiếp với chứng nhận chất lượng USDA Prime. Thịt mềm, vị ngọt tự nhiên, marbling đẹp.</p>',
            'meta_title' => 'Thịt Bò Úc Prime Cut - An Nhiên Farm'
        ],
        1002 => [
            'name' => 'Cá Hồi Na Uy Fillet',
            'description' => '<p>Cá hồi Na Uy tươi ngon, giàu Omega-3, được đông lạnh ngay tại biển để giữ nguyên độ tươi ngon và chất lượng dinh dưỡng.</p>',
            'meta_title' => 'Cá Hồi Na Uy Fillet - An Nhiên Farm'
        ],
        1003 => [
            'name' => 'Nước Sốt Lẩu Thái Chua Cay',
            'description' => '<p>Nước sốt lẩu Thái đặc biệt, vị chua cay đậm đà, dễ sử dụng. Chỉ cần pha với nước là có ngay nồi lẩu Thái thơm ngon.</p>',
            'meta_title' => 'Nước Sốt Lẩu Thái Chua Cay - An Nhiên Farm'
        ]
    ];
    
    foreach ($products as $prod_id => $data) {
        echo "Cập nhật sản phẩm {$prod_id}: {$data['name']}\n";
        
        $stmt = $pdo->prepare("UPDATE oc_product_description SET name = ?, description = ?, meta_title = ? WHERE product_id = ? AND language_id = 2");
        $stmt->execute([
            $data['name'],
            $data['description'],
            $data['meta_title'],
            $prod_id
        ]);
        echo "✓ Đã cập nhật sản phẩm {$prod_id}\n";
    }
    
    echo "\n✅ HOÀN THÀNH! Tất cả đã được cập nhật với tiếng Việt có dấu chuẩn\n";
    echo "🌐 Kiểm tra tại: http://localhost:7777/opencart/upload/\n";
    echo "🛠️ Admin: http://localhost:7777/opencart/upload/adminoc/\n";
    
} catch (Exception $e) {
    echo "Lỗi: " . $e->getMessage() . "\n";
}
?>

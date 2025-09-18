<?php
/**
 * Script tạo menu description tiếng Việt
 */

$mysqli = new mysqli('localhost', 'root', 'Tnt@9961266', 'opencart', 3310);
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

echo "🔄 TẠO MENU DESCRIPTION TIẾNG VIỆT\n";
echo "===================================\n\n";

// Từ điển dịch menu
$menuTranslations = [
    'Categories' => 'Danh mục',
    'Products' => 'Sản phẩm',
    'Subscription Plan' => 'Gói Đăng ký',
    'Filters' => 'Bộ lọc',
    'Filter Groups' => 'Nhóm Bộ lọc',
    'Attributes' => 'Thuộc tính',
    'Attribute Group' => 'Nhóm Thuộc tính',
    'Options' => 'Tùy chọn',
    'Manufacturers' => 'Nhà sản xuất',
    'Downloads' => 'Tải xuống',
    'Reviews' => 'Đánh giá',
    'Informations' => 'Thông tin',
    'Topics' => 'Chủ đề',
    'Article' => 'Bài viết',
    'Comments' => 'Bình luận',
    'Anti-Spam' => 'Chống Spam',
    'Marketplace' => 'Thị trường',
    'Installer' => 'Cài đặt',
    'Extensions' => 'Phần mở rộng',
    'Static Site Rendering' => 'Tạo Site Tĩnh',
    'Tasks' => 'Nhiệm vụ',
    'Startup' => 'Khởi động',
    'Events' => 'Sự kiện',
    'CRON Jobs' => 'Tác vụ CRON',
    'Layouts' => 'Bố cục',
    'Theme Editor' => 'Chỉnh sửa Giao diện',
    'Translation' => 'Dịch thuật',
    'Banner' => 'Banner',
    'SEO URL' => 'SEO URL',
    'Orders' => 'Đơn hàng',
    'Subscription' => 'Đăng ký',
    'Returns' => 'Trả hàng',
    'Customers' => 'Khách hàng',
    'Customer Groups' => 'Nhóm Khách hàng',
    'Customer Approvals' => 'Duyệt Khách hàng',
    'GDPR' => 'GDPR',
    'Custom Field' => 'Trường Tùy chỉnh',
    'Affiliate' => 'Liên kết',
    'Marketing' => 'Tiếp thị',
    'Coupons' => 'Phiếu giảm giá',
    'Mail' => 'Thư điện tử',
    'Settings' => 'Cài đặt',
    'Users' => 'Người dùng',
    'User Groups' => 'Nhóm Người dùng',
    'API' => 'API',
    'Localisation' => 'Địa phương hóa',
    'Store Locations' => 'Địa điểm Cửa hàng',
    'Language' => 'Ngôn ngữ',
    'Currencies' => 'Tiền tệ',
    'Identifier' => 'Định danh',
    'Stock Status' => 'Trạng thái Kho',
    'Order Status' => 'Trạng thái Đơn hàng',
    'Subscription Status' => 'Trạng thái Đăng ký',
    'Return Statuses' => 'Trạng thái Trả hàng',
    'Return Actions' => 'Hành động Trả hàng',
    'Return Reasons' => 'Lý do Trả hàng',
    'Countries' => 'Quốc gia',
    'Zones' => 'Vùng',
    'Geo Zones' => 'Vùng Địa lý',
    'Taxes' => 'Thuế',
    'Tax Classes' => 'Loại Thuế',
    'Tax Rates' => 'Tỷ lệ Thuế',
    'Length Classes' => 'Đơn vị Độ dài',
    'Weight Classes' => 'Đơn vị Cân nặng',
    'Address Format' => 'Định dạng Địa chỉ',
    'Maintenance' => 'Bảo trì',
    'Admin Menu' => 'Menu Quản trị',
    'Upgrade' => 'Nâng cấp',
    'Backup &amp; Restore' => 'Sao lưu &amp; Khôi phục',
    'Uploads' => 'Tải lên',
    'Error Log' => 'Log Lỗi',
    'Reports' => 'Báo cáo',
    'Who\'s Online' => 'Ai Đang Online',
    'Statistics' => 'Thống kê'
];

// Lấy tất cả menu description tiếng Anh
$result = $mysqli->query("SELECT menu_id, name FROM oc_menu_description WHERE language_id = 1");

$count = 0;
while ($row = $result->fetch_assoc()) {
    $menu_id = $row['menu_id'];
    $english_name = $row['name'];
    
    // Tìm bản dịch tiếng Việt
    if (isset($menuTranslations[$english_name])) {
        $vietnamese_name = $menuTranslations[$english_name];
        
        // Thêm menu description tiếng Việt (language_id = 2)
        $stmt = $mysqli->prepare("INSERT INTO oc_menu_description (menu_id, language_id, name) VALUES (?, 2, ?)");
        $stmt->bind_param("is", $menu_id, $vietnamese_name);
        
        if ($stmt->execute()) {
            echo "✅ Menu ID $menu_id: $english_name -> $vietnamese_name\n";
            $count++;
        } else {
            echo "❌ Lỗi Menu ID $menu_id: " . $stmt->error . "\n";
        }
        
        $stmt->close();
    } else {
        echo "⚠️ Menu ID $menu_id: Chưa có bản dịch cho '$english_name'\n";
    }
}

echo "\n📊 KẾT QUẢ:\n";
echo "✅ Đã tạo $count menu description tiếng Việt\n";

// Xóa cache
$cacheDir = 'D:\\xampp\\htdocs\\opencart\\storage\\cache\\';
$files = glob($cacheDir . '*');
foreach ($files as $file) {
    if (is_file($file)) {
        unlink($file);
    } elseif (is_dir($file)) {
        array_map('unlink', glob("$file/*"));
        rmdir($file);
    }
}

echo "✅ Đã xóa cache\n";
echo "\n🎯 HƯỚNG DẪN:\n";
echo "1. Đóng browser hoàn toàn\n";
echo "2. Mở lại và đăng nhập admin\n";
echo "3. Tất cả submenu sẽ hiển thị tiếng Việt\n";

$mysqli->close();
?>

<?php
/**
 * Script để tự động Việt hóa các extension admin OpenCart
 */

// Thiết lập encoding
ini_set('default_charset', 'UTF-8');
mb_internal_encoding('UTF-8');

// Đường dẫn gốc
$basePath = 'D:\\xampp\\htdocs\\opencart\\upload\\extension\\opencart\\admin\\language\\';
$sourcePath = $basePath . 'en-gb\\';
$targetPath = $basePath . 'vi-vn\\';

// Từ điển dịch cơ bản
$translations = [
    // Headers
    'heading_title' => [
        'Featured' => 'Sản phẩm Nổi bật',
        'Latest' => 'Sản phẩm Mới nhất',
        'Special' => 'Sản phẩm Khuyến mãi',
        'Bestseller' => 'Sản phẩm Bán chạy',
        'Category' => 'Danh mục',
        'Account' => 'Tài khoản',
        'Information' => 'Thông tin',
        'Banner' => 'Banner',
        'Store' => 'Cửa hàng',
        'HTML Content' => 'Nội dung HTML',
        'Filter' => 'Bộ lọc',
        'Default Store Theme' => 'Giao diện Cửa hàng Mặc định',
        'Free Shipping' => 'Miễn phí Vận chuyển',
        'Flat Rate' => 'Giá cố định',
        'Weight Based Shipping' => 'Vận chuyển theo Cân nặng',
        'Per Item Shipping' => 'Vận chuyển theo Mặt hàng',
        'Store Pickup' => 'Nhận tại Cửa hàng',
        'Cash On Delivery' => 'Thanh toán khi Nhận hàng',
        'Cheque / Money Order' => 'Séc / Lệnh Chuyển tiền',
        'Bank Transfer' => 'Chuyển khoản Ngân hàng',
        'Free Checkout' => 'Thanh toán Miễn phí'
    ],
    
    // Common text
    'common_text' => [
        'Extensions' => 'Tiện ích Mở rộng',
        'Edit' => 'Chỉnh sửa', 
        'Success' => 'Thành công',
        'Horizontal' => 'Ngang',
        'Vertical' => 'Dọc',
        'Slide' => 'Trượt',
        'Fade' => 'Mờ dần',
    ],
    
    // Entry fields
    'entry_fields' => [
        'Status' => 'Trạng thái',
        'Module Name' => 'Tên Module',
        'Limit' => 'Giới hạn',
        'Axis' => 'Trục',
        'Products' => 'Sản phẩm',
        'Banner' => 'Banner',
        'Effect' => 'Hiệu ứng',
        'Items per Slide' => 'Số mục mỗi Slide',
        'Controls' => 'Điều khiển',
        'Indicators' => 'Chỉ báo',
        'Interval' => 'Khoảng thời gian',
        'Width' => 'Chiều rộng',
        'Height' => 'Chiều cao',
        'Sort Order' => 'Thứ tự Sắp xếp',
        'Geo Zone' => 'Vùng Địa lý',
        'Order Status' => 'Trạng thái Đơn hàng',
        'Cost' => 'Chi phí',
        'Tax Class' => 'Loại Thuế',
        'Sub-Total' => 'Tổng phụ',
        'Bank Transfer Instructions' => 'Hướng dẫn Chuyển khoản Ngân hàng',
    ],
    
    // Error messages
    'error_messages' => [
        'Warning: You do not have permission' => 'Cảnh báo: Bạn không có quyền',
        'Module Name must be between 3 and 64 characters!' => 'Tên Module phải từ 3 đến 64 ký tự!',
    ],
    
    // Help text
    'help_text' => [
        '(Autocomplete)' => '(Tự động hoàn thành)',
    ]
];

// Hàm dịch nội dung
function translateContent($content, $translations) {
    // Dịch các heading_title đặc biệt
    foreach ($translations['heading_title'] as $en => $vi) {
        $content = str_replace("'$en'", "'$vi'", $content);
        $content = str_replace("\"$en\"", "\"$vi\"", $content);
    }
    
    // Dịch các text chung
    unset($translations['heading_title']);
    foreach ($translations as $key => $trans) {
        if (is_array($trans)) {
            foreach ($trans as $en => $vi) {
                $content = str_replace($en, $vi, $content);
            }
        } else {
            $content = str_replace($key, $trans, $content);
        }
    }
    
    return $content;
}

// Tạo thư mục target nếu chưa có
if (!is_dir($targetPath)) {
    mkdir($targetPath, 0777, true);
}

// Duyệt qua tất cả file trong thư mục source
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($sourcePath)
);

foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $relativePath = str_replace($sourcePath, '', $file->getPathname());
        $targetFilePath = $targetPath . $relativePath;
        
        // Tạo thư mục target nếu chưa có
        $targetDir = dirname($targetFilePath);
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        
        // Đọc nội dung file source
        $content = file_get_contents($file->getPathname());
        
        // Dịch nội dung
        $translatedContent = translateContent($content, $translations);
        
        // Ghi file đã dịch
        file_put_contents($targetFilePath, $translatedContent);
        
        echo "✅ Translated: $relativePath\n";
    }
}

echo "\n🎉 Hoàn thành việc Việt hóa extensions admin!\n";
echo "📁 Đã tạo các file trong: $targetPath\n";
?>

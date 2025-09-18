<?php
/**
 * Script hoàn thiện bản dịch admin extensions
 */

$targetPath = 'D:\\xampp\\htdocs\\opencart\\upload\\extension\\opencart\\admin\\language\\vi-vn\\';

// Từ điển dịch bổ sung
$finalTranslations = [
    'You have modified module sản phẩm nổi bật!' => 'Bạn đã thay đổi module sản phẩm nổi bật!',
    'You have modified module sản phẩm mới nhất!' => 'Bạn đã thay đổi module sản phẩm mới nhất!',
    'You have modified module danh mục!' => 'Bạn đã thay đổi module danh mục!',
    'You have modified module tài khoản!' => 'Bạn đã thay đổi module tài khoản!',
    'You have modified module banner!' => 'Bạn đã thay đổi module banner!',
    'Chỉnh sửa Sản phẩm Nổi bật Module' => 'Chỉnh sửa Module Sản phẩm Nổi bật',
    'Chỉnh sửa Sản phẩm Mới nhất Module' => 'Chỉnh sửa Module Sản phẩm Mới nhất',
    'Chỉnh sửa Danh mục Module' => 'Chỉnh sửa Module Danh mục',
    'Chỉnh sửa Tài khoản Module' => 'Chỉnh sửa Module Tài khoản',
    'Chỉnh sửa Banner Module' => 'Chỉnh sửa Module Banner',
    'Chỉnh sửa Miễn phí Vận chuyển' => 'Chỉnh sửa Miễn phí Vận chuyển',
    'Chỉnh sửa Giá cố định Shipping' => 'Chỉnh sửa Vận chuyển Giá cố định',
    'Chỉnh sửa Chuyển khoản Ngân hàng' => 'Chỉnh sửa Chuyển khoản Ngân hàng',
    'Chỉnh sửa Thanh toán khi Nhận hàng' => 'Chỉnh sửa Thanh toán khi Nhận hàng',
    'You have modified giao diện cửa hàng mặc định!' => 'Bạn đã thay đổi giao diện cửa hàng mặc định!',
    'You have modified miễn phí vận chuyển!' => 'Bạn đã thay đổi miễn phí vận chuyển!',
    'You have modified vận chuyển giá cố định!' => 'Bạn đã thay đổi vận chuyển giá cố định!',
    'You have modified thanh toán chuyển khoản ngân hàng!' => 'Bạn đã thay đổi thanh toán chuyển khoản ngân hàng!',
    'You have modified thanh toán khi nhận hàng!' => 'Bạn đã thay đổi thanh toán khi nhận hàng!',
];

// Duyệt và sửa tất cả file
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($targetPath)
);

$count = 0;
foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $content = file_get_contents($file->getPathname());
        $originalContent = $content;
        
        foreach ($finalTranslations as $en => $vi) {
            $content = str_replace($en, $vi, $content);
        }
        
        if ($content !== $originalContent) {
            file_put_contents($file->getPathname(), $content);
            $count++;
            echo "✅ Polished: " . str_replace($targetPath, '', $file->getPathname()) . "\n";
        }
    }
}

echo "\n🎨 Đã hoàn thiện $count file!\n";

// Kiểm tra một số file quan trọng
$checkFiles = [
    'theme\\basic.php',
    'module\\featured.php',
    'module\\banner.php',
    'payment\\bank_transfer.php'
];

echo "\n📋 Kiểm tra một số file quan trọng:\n";
foreach ($checkFiles as $file) {
    $filepath = $targetPath . $file;
    if (file_exists($filepath)) {
        echo "\n📄 $file:\n";
        $content = file_get_contents($filepath);
        $lines = explode("\n", $content);
        foreach ($lines as $i => $line) {
            if ($i < 10 && trim($line)) { // Chỉ hiển thị 10 dòng đầu
                echo "  $line\n";
            }
        }
    }
}

echo "\n🌟 Việt hóa admin extensions hoàn tất!\n";
echo "🔄 Bây giờ bạn có thể refresh trang admin để thấy kết quả!\n";
?>

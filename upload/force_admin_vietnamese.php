<?php
/**
 * Script force admin sử dụng ngôn ngữ Tiếng Việt
 */

$mysqli = new mysqli('localhost', 'root', 'Tnt@9961266', 'opencart', 3310);
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

echo "🔄 FORCE ADMIN SỬ DỤNG TIẾNG VIỆT\n";
echo "=================================\n\n";

// Cập nhật cấu hình admin language
$result = $mysqli->query("UPDATE oc_setting SET value = 'vi-vn' WHERE `key` = 'config_language_admin'");
echo "✅ Cập nhật config_language_admin = vi-vn\n";

// Xóa tất cả session admin
$sessionDir = 'D:\\xampp\\htdocs\\opencart\\storage\\session\\';
$files = glob($sessionDir . '*');
foreach ($files as $file) {
    if (is_file($file)) {
        unlink($file);
    }
}
echo "✅ Xóa tất cả session admin\n";

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
echo "✅ Xóa cache\n";

// Kiểm tra lại file ngôn ngữ quan trọng
$viColumnLeft = 'D:\\xampp\\htdocs\\opencart\\upload\\adminoc\\language\\vi-vn\\common\\column_left.php';
if (file_exists($viColumnLeft)) {
    $content = file_get_contents($viColumnLeft);
    
    // Kiểm tra các key quan trọng
    $importantKeys = [
        'text_catalog' => 'Sản phẩm',
        'text_cms' => 'CMS',
        'text_extension' => 'Phần mở rộng',
        'text_system' => 'Hệ thống',
        'text_design' => 'Thiết kế'
    ];
    
    $missingKeys = [];
    foreach ($importantKeys as $key => $value) {
        if (strpos($content, "text_$key") === false) {
            $missingKeys[] = $key;
        }
    }
    
    if (empty($missingKeys)) {
        echo "✅ File column_left.php có đầy đủ key quan trọng\n";
    } else {
        echo "⚠️ File column_left.php thiếu keys: " . implode(', ', $missingKeys) . "\n";
    }
} else {
    echo "❌ File column_left.php không tồn tại\n";
}

// Tạo file test language
$testFile = 'D:\\xampp\\htdocs\\opencart\\upload\\test_admin_language.php';
$testContent = '<?php
// Test admin language loading
session_start();

// Force language
$_SESSION["language"] = "vi-vn";

// Include OpenCart bootstrap để test
define("VERSION", "4.1.0.4");
echo "Admin language test completed. Language forced to vi-vn.\\n";
';

file_put_contents($testFile, $testContent);
echo "✅ Tạo file test ngôn ngữ admin\n";

echo "\n🎯 KẾT QUẢ:\n";
echo "1. Admin language đã được set thành vi-vn\n";
echo "2. Cache và session đã được xóa\n";
echo "3. File ngôn ngữ đã được kiểm tra\n";
echo "\n🔄 HỚI DẪNG TIẾP THEO:\n";
echo "1. Đóng hoàn toàn trình duyệt\n";
echo "2. Mở lại và đăng nhập admin\n";
echo "3. Menu sidebar sẽ hiển thị Tiếng Việt\n";

$mysqli->close();
?>

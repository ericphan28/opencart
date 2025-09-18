<?php
/**
 * Script hoàn thiện Việt hóa admin toàn bộ
 */

// Đường dẫn extensions admin
$extensionPath = 'D:\\xampp\\htdocs\\opencart\\upload\\extension\\opencart\\admin\\language\\vi-vn\\';

// Từ điển dịch hoàn thiện
$finalTranslations = [
    // Dashboard
    'Recent Activity' => 'Hoạt động Gần đây',
    'Recent Orders' => 'Đơn hàng Gần đây',
    'You have modified dashboard activity!' => 'Bạn đã thay đổi dashboard hoạt động!',
    'You have modified dashboard recent orders!' => 'Bạn đã thay đổi dashboard đơn hàng gần đây!',
    'Dashboard Recent Activity' => 'Dashboard Hoạt động Gần đây',
    'Dashboard Recent Orders' => 'Dashboard Đơn hàng Gần đây',
    
    // Columns/Fields
    'Order ID' => 'Mã Đơn hàng',
    'Customer' => 'Khách hàng',
    'Total' => 'Tổng cộng',
    'Date Added' => 'Ngày Tạo',
    'Action' => 'Thao tác',
    'Actions' => 'Thao tác',
    
    // Common success messages
    'You have modified' => 'Bạn đã thay đổi',
    'bank transfer details!' => 'chi tiết chuyển khoản ngân hàng!',
    'cash on delivery payment module!' => 'module thanh toán khi nhận hàng!',
    'cheque payment module!' => 'module thanh toán bằng séc!',
    'free checkout payment module!' => 'module thanh toán miễn phí!',
    
    // Edit titles  
    'Edit Cash On Delivery' => 'Chỉnh sửa Thanh toán khi Nhận hàng',
    'Edit Cheque / Money Order' => 'Chỉnh sửa Séc / Lệnh Chuyển tiền',
    'Edit Free Checkout' => 'Chỉnh sửa Thanh toán Miễn phí',
    'Edit Bank Transfer' => 'Chỉnh sửa Chuyển khoản Ngân hàng',
    'Edit Free Shipping' => 'Chỉnh sửa Miễn phí Vận chuyển',
    'Edit Flat Rate Shipping' => 'Chỉnh sửa Vận chuyển Giá cố định',
    'Edit Weight Based Shipping' => 'Chỉnh sửa Vận chuyển theo Cân nặng',
    'Edit Per Item Shipping' => 'Chỉnh sửa Vận chuyển theo Mặt hàng',
    'Edit Store Pickup' => 'Chỉnh sửa Nhận tại Cửa hàng',
    
    // Error messages
    'You do not have permission to modify' => 'Bạn không có quyền thay đổi',
    'payment bank transfer!' => 'thanh toán chuyển khoản ngân hàng!',
    'payment cash on delivery!' => 'thanh toán khi nhận hàng!',
    'payment cheque!' => 'thanh toán bằng séc!',
    'payment free checkout!' => 'thanh toán miễn phí!',
    'shipping flat rate!' => 'vận chuyển giá cố định!',
    'shipping free!' => 'vận chuyển miễn phí!',
    'shipping weight!' => 'vận chuyển theo cân nặng!',
    'shipping item!' => 'vận chuyển theo mặt hàng!',
    'shipping pickup!' => 'vận chuyển nhận tại cửa hàng!',
    'dashboard activity!' => 'dashboard hoạt động!',
    'dashboard recent orders!' => 'dashboard đơn hàng gần đây!',
    
    // Remaining English phrases
    'registered a new account.' => 'đã đăng ký tài khoản mới.',
    'updated their account details.' => 'đã cập nhật thông tin tài khoản.',
    'updated their account password.' => 'đã cập nhật mật khẩu tài khoản.',
    'reset their account password.' => 'đã reset mật khẩu tài khoản.',
    'logged in.' => 'đã đăng nhập.',
    'has requested a reset password.' => 'đã yêu cầu reset mật khẩu.',
    'added a new address.' => 'đã thêm địa chỉ mới.',
    'updated their address.' => 'đã cập nhật địa chỉ.',
    'deleted one of their addresses.' => 'đã xóa một địa chỉ.',
    'submitted a product' => 'đã gửi yêu cầu trả',
    'return.' => 'sản phẩm.',
    'added a' => 'đã thêm',
    'new order' => 'đơn hàng mới',
    'created a' => 'đã tạo',
    'registered for a affiliate account.' => 'đã đăng ký tài khoản affiliate.',
    'updated their affiliate details.' => 'đã cập nhật thông tin affiliate.',
    'received commission from an new' => 'đã nhận hoa hồng từ',
    'order' => 'đơn hàng',
];

// Hàm dịch
function translateContent($content, $translations) {
    foreach ($translations as $en => $vi) {
        $content = str_replace($en, $vi, $content);
    }
    return $content;
}

// Duyệt qua tất cả file extension
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($extensionPath)
);

$count = 0;
foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $content = file_get_contents($file->getPathname());
        $originalContent = $content;
        
        $translatedContent = translateContent($content, $finalTranslations);
        
        if ($content !== $translatedContent) {
            file_put_contents($file->getPathname(), $translatedContent);
            $count++;
            echo "✅ Polished: " . str_replace($extensionPath, '', $file->getPathname()) . "\n";
        }
    }
}

echo "\n🎨 Đã hoàn thiện $count file extension!\n";

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

echo "💾 Cache đã được xóa!\n";
echo "🌟 Admin OpenCart hiện đã được Việt hóa hoàn toàn!\n";
echo "🔄 Hãy refresh trang admin để thấy kết quả!\n";
?>

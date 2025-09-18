<?php
// File import sản phẩm cho OpenCart - Phiên bản đơn giản tiếng Việt
header('Content-Type: text/html; charset=UTF-8');

// Kết nối database
$host = 'localhost';
$port = 3310;
$username = 'root';
$password = 'Tnt@9961266';
$database = 'opencart';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$database;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Lỗi kết nối database: " . $e->getMessage());
}

// Hàm tạo SEO URL
function createSeoUrl($text) {
    // Chuyển đổi ký tự có dấu thành không dấu
    $unicode = array(
        'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
        'd'=>'đ',
        'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
        'i'=>'í|ì|ỉ|ĩ|ị',
        'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
        'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
        'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
        'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
        'D'=>'Đ',
        'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
        'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
        'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
        'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
        'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
    );
    
    foreach($unicode as $nonUnicode => $uni) {
        $text = preg_replace("/($uni)/i", $nonUnicode, $text);
    }
    
    $text = strtolower($text);
    $text = preg_replace('/[^a-z0-9\s-]/', '', $text);
    $text = preg_replace('/[\s-]+/', '-', $text);
    $text = trim($text, '-');
    
    return $text;
}

// Hàm lấy category_id từ tên danh mục
function getCategoryId($pdo, $categoryName) {
    $sql = "SELECT cd.category_id FROM oc_category_description cd 
            WHERE cd.name = :name AND cd.language_id = 2";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $categoryName]);
    $result = $stmt->fetch();
    return $result ? $result['category_id'] : 59; // Default category nếu không tìm thấy
}

// Hàm lấy manufacturer_id từ tên thương hiệu
function getManufacturerId($pdo, $manufacturerName) {
    $sql = "SELECT manufacturer_id FROM oc_manufacturer WHERE name = :name";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $manufacturerName]);
    $result = $stmt->fetch();
    return $result ? $result['manufacturer_id'] : 0; // 0 nếu không có thương hiệu
}

$message = '';
$successCount = 0;
$errorCount = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['csv_file'])) {
    $uploadedFile = $_FILES['csv_file']['tmp_name'];
    
    if (($handle = fopen($uploadedFile, "r")) !== FALSE) {
        $header = fgetcsv($handle, 1000, ","); // Đọc header
        
        // Kiểm tra header có đúng format không
        $expectedHeaders = ['Mã sản phẩm', 'Tên sản phẩm', 'Mô tả', 'Giá bán (VND)', 'Số lượng', 'Danh mục', 'Thương hiệu'];
        if ($header !== $expectedHeaders) {
            $message = '<div class="alert alert-danger">Lỗi: Header file CSV không đúng format!</div>';
        } else {
            $pdo->beginTransaction();
            
            try {
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    if (count($data) < 7) continue; // Bỏ qua dòng không đủ dữ liệu
                    
                    list($model, $name, $description, $price, $quantity, $category, $manufacturer) = $data;
                    
                    // Tạo SEO URL
                    $seoUrl = createSeoUrl($name);
                    
                    // Lấy category_id và manufacturer_id
                    $categoryId = getCategoryId($pdo, $category);
                    $manufacturerId = getManufacturerId($pdo, $manufacturer);
                    
                    // Kiểm tra model đã tồn tại chưa
                    $checkSql = "SELECT product_id FROM oc_product WHERE model = :model";
                    $checkStmt = $pdo->prepare($checkSql);
                    $checkStmt->execute(['model' => $model]);
                    
                    if ($checkStmt->fetch()) {
                        $errorCount++;
                        continue; // Bỏ qua nếu model đã tồn tại
                    }
                    
                    // Insert vào oc_product
                    $productSql = "INSERT INTO oc_product (
                        model, quantity, stock_status_id, image, manufacturer_id, 
                        shipping, price, points, tax_class_id, date_available, 
                        weight, weight_class_id, length, width, height, 
                        length_class_id, subtract, minimum, sort_order, 
                        status, viewed, date_added, date_modified
                    ) VALUES (
                        :model, :quantity, 5, '', :manufacturer_id, 
                        1, :price, 0, 0, NOW(), 
                        0.3, 1, 0, 0, 0, 
                        1, 1, 1, 0, 
                        1, 0, NOW(), NOW()
                    )";
                    
                    $productStmt = $pdo->prepare($productSql);
                    $productStmt->execute([
                        'model' => $model,
                        'quantity' => (int)$quantity,
                        'manufacturer_id' => $manufacturerId,
                        'price' => (float)$price
                    ]);
                    
                    $productId = $pdo->lastInsertId();
                    
                    // Insert vào oc_product_description (tiếng Việt - language_id = 2)
                    $descSql = "INSERT INTO oc_product_description (
                        product_id, language_id, name, description, 
                        tag, meta_title, meta_description, meta_keyword
                    ) VALUES (
                        :product_id, 2, :name, :description, 
                        '', :meta_title, :meta_description, ''
                    )";
                    
                    $descStmt = $pdo->prepare($descSql);
                    $descStmt->execute([
                        'product_id' => $productId,
                        'name' => $name,
                        'description' => '<p>' . $description . '</p>',
                        'meta_title' => $name,
                        'meta_description' => substr($description, 0, 160)
                    ]);
                    
                    // Insert vào oc_product_description (tiếng Anh - language_id = 1)
                    $descStmt->execute([
                        'product_id' => $productId,
                        'name' => $name,
                        'description' => '<p>' . $description . '</p>',
                        'meta_title' => $name,
                        'meta_description' => substr($description, 0, 160)
                    ]);
                    
                    // Insert vào oc_product_to_category
                    $catSql = "INSERT INTO oc_product_to_category (product_id, category_id) VALUES (:product_id, :category_id)";
                    $catStmt = $pdo->prepare($catSql);
                    $catStmt->execute([
                        'product_id' => $productId,
                        'category_id' => $categoryId
                    ]);
                    
                    // Insert vào oc_product_to_store
                    $storeSql = "INSERT INTO oc_product_to_store (product_id, store_id) VALUES (:product_id, 0)";
                    $storeStmt = $pdo->prepare($storeSql);
                    $storeStmt->execute(['product_id' => $productId]);
                    
                    // Insert vào oc_seo_url (tiếng Việt)
                    $seoSql = "INSERT INTO oc_seo_url (store_id, language_id, query, keyword) VALUES (0, 2, :query, :keyword)";
                    $seoStmt = $pdo->prepare($seoSql);
                    $seoStmt->execute([
                        'query' => 'product_id=' . $productId,
                        'keyword' => $seoUrl
                    ]);
                    
                    // Insert vào oc_seo_url (tiếng Anh)
                    $seoStmt->execute([
                        'query' => 'product_id=' . $productId,
                        'keyword' => $seoUrl . '-en'
                    ]);
                    
                    $successCount++;
                }
                
                $pdo->commit();
                $message = "<div class='alert alert-success'>Thành công: Import $successCount sản phẩm. Lỗi: $errorCount sản phẩm.</div>";
                
            } catch (Exception $e) {
                $pdo->rollback();
                $message = '<div class="alert alert-danger">Lỗi: ' . $e->getMessage() . '</div>';
            }
        }
        
        fclose($handle);
    } else {
        $message = '<div class="alert alert-danger">Lỗi: Không thể đọc file CSV!</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Sản Phẩm OpenCart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container { max-width: 800px; margin-top: 30px; }
        .example-table { font-size: 12px; }
        .file-info { background-color: #f8f9fa; padding: 15px; border-radius: 5px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">🛍️ Import Sản Phẩm Thời Trang</h1>
        
        <?php echo $message; ?>
        
        <div class="file-info">
            <h5>📋 Format File CSV Chuẩn:</h5>
            <table class="table table-sm example-table">
                <thead class="table-dark">
                    <tr>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Mô tả</th>
                        <th>Giá bán (VND)</th>
                        <th>Số lượng</th>
                        <th>Danh mục</th>
                        <th>Thương hiệu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>AO-POLO-01</td>
                        <td>Áo Polo Nam Classic</td>
                        <td>Áo polo nam chất liệu cotton...</td>
                        <td>299000</td>
                        <td>150</td>
                        <td>Quần Áo Nam</td>
                        <td>ZARA</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h4>📤 Upload File CSV</h4>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="csv_file" class="form-label">Chọn file CSV:</label>
                        <input type="file" class="form-control" id="csv_file" name="csv_file" accept=".csv" required>
                        <div class="form-text">
                            File CSV phải có encoding UTF-8 và đúng format như bảng mẫu ở trên.
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100">
                        🚀 Bắt Đầu Import
                    </button>
                </form>
            </div>
        </div>
        
        <div class="mt-4">
            <h5>📁 File Mẫu:</h5>
            <ul>
                <li><a href="FASHION_VIETNAM_SIMPLE.csv" download class="btn btn-outline-success btn-sm">📥 Tải File Demo Thời Trang</a></li>
                <li><a href="CATEGORIES_REFERENCE.csv" download class="btn btn-outline-info btn-sm">📋 Danh Sách Danh Mục</a></li>
                <li><a href="MANUFACTURERS_REFERENCE.csv" download class="btn btn-outline-warning btn-sm">🏭 Danh Sách Thương Hiệu</a></li>
            </ul>
        </div>
        
        <div class="alert alert-info mt-4">
            <h6>💡 Lưu ý quan trọng:</h6>
            <ul class="mb-0">
                <li>Giá nhập bằng số VND không có dấu phẩy (ví dụ: 299000)</li>
                <li>Danh mục và thương hiệu phải khớp chính xác với hệ thống</li>
                <li>Mã sản phẩm không được trùng lặp</li>
                <li>File CSV phải lưu với encoding UTF-8</li>
            </ul>
        </div>
    </div>
</body>
</html>

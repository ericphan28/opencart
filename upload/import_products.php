<?php
/**
 * OPENCART PRODUCT IMPORT SCRIPT
 * Script import sản phẩm hàng loạt từ file CSV
 * 
 * Cách sử dụng:
 * 1. Upload file CSV với cấu trúc đúng vào thư mục import/
 * 2. Truy cập: http://localhost:7777/opencart/upload/import_products.php
 * 3. Chọn file và import
 */

// Cấu hình kết nối database
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Tnt@9961266');
define('DB_DATABASE', 'opencart');
define('DB_PORT', '3310');

// Kết nối database
try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOSTNAME . ";port=" . DB_PORT . ";dbname=" . DB_DATABASE . ";charset=utf8mb4",
        DB_USERNAME,
        DB_PASSWORD,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
    echo "✅ Kết nối database thành công!<br>";
} catch (PDOException $e) {
    die("❌ Lỗi kết nối database: " . $e->getMessage());
}

/**
 * Hàm tạo SEO URL
 */
function createSeoUrl($name) {
    $url = strtolower($name);
    // Chuyển đổi ký tự tiếng Việt
    $url = str_replace(['á', 'à', 'ả', 'ã', 'ạ', 'ă', 'ắ', 'ằ', 'ẳ', 'ẵ', 'ặ', 'â', 'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ'], 'a', $url);
    $url = str_replace(['é', 'è', 'ẻ', 'ẽ', 'ẹ', 'ê', 'ế', 'ề', 'ể', 'ễ', 'ệ'], 'e', $url);
    $url = str_replace(['í', 'ì', 'ỉ', 'ĩ', 'ị'], 'i', $url);
    $url = str_replace(['ó', 'ò', 'ỏ', 'õ', 'ọ', 'ô', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ', 'ơ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ'], 'o', $url);
    $url = str_replace(['ú', 'ù', 'ủ', 'ũ', 'ụ', 'ư', 'ứ', 'ừ', 'ử', 'ữ', 'ự'], 'u', $url);
    $url = str_replace(['ý', 'ỳ', 'ỷ', 'ỹ', 'ỵ'], 'y', $url);
    $url = str_replace('đ', 'd', $url);
    
    // Xóa ký tự đặc biệt
    $url = preg_replace('/[^a-z0-9\s-]/', '', $url);
    $url = preg_replace('/[\s-]+/', '-', $url);
    $url = trim($url, '-');
    
    return $url;
}

/**
 * Hàm import sản phẩm
 */
function importProduct($data) {
    global $pdo;
    
    try {
        $pdo->beginTransaction();
        
        // 1. Kiểm tra sản phẩm đã tồn tại chưa
        $stmt = $pdo->prepare("SELECT product_id FROM oc_product WHERE model = ?");
        $stmt->execute([$data['model']]);
        $existing = $stmt->fetch();
        
        if ($existing) {
            echo "⚠️ Sản phẩm {$data['model']} đã tồn tại, bỏ qua...<br>";
            $pdo->rollBack();
            return false;
        }
        
        // 2. Insert vào oc_product
        $sql = "INSERT INTO oc_product (
            model, quantity, price, tax_class_id, weight, length, width, height,
            manufacturer_id, stock_status_id, status, minimum, subtract, shipping, 
            sort_order, date_available, date_added, date_modified
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW(), NOW())";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $data['model'],
            $data['quantity'] ?? 0,
            $data['price'] ?? 0,
            $data['tax_class_id'] ?? 0,
            $data['weight'] ?? 0,
            $data['length'] ?? 0,
            $data['width'] ?? 0,
            $data['height'] ?? 0,
            $data['manufacturer_id'] ?? 0,
            $data['stock_status_id'] ?? 5,
            $data['status'] ?? 1,
            $data['minimum'] ?? 1,
            $data['subtract'] ?? 1,
            $data['shipping'] ?? 1,
            $data['sort_order'] ?? 0
        ]);
        
        $product_id = $pdo->lastInsertId();
        
        // 3. Insert mô tả tiếng Việt (language_id = 2)
        $sql = "INSERT INTO oc_product_description (
            product_id, language_id, name, description, meta_title, meta_description, meta_keyword, tag
        ) VALUES (?, 2, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $product_id,
            $data['name_vi'],
            $data['description_vi'] ?? '',
            $data['meta_title_vi'] ?? $data['name_vi'],
            $data['meta_description_vi'] ?? '',
            $data['meta_keyword_vi'] ?? '',
            $data['meta_keyword_vi'] ?? ''
        ]);
        
        // 4. Insert mô tả tiếng Anh (language_id = 1)
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $product_id,
            1, // English
            $data['name_en'],
            $data['description_en'] ?? '',
            $data['meta_title_en'] ?? $data['name_en'],
            $data['meta_description_en'] ?? '',
            $data['meta_keyword_en'] ?? '',
            $data['meta_keyword_en'] ?? ''
        ]);
        
        // 5. Insert danh mục
        if (!empty($data['category_ids'])) {
            $categories = explode(',', $data['category_ids']);
            foreach ($categories as $category_id) {
                $category_id = trim($category_id);
                if (is_numeric($category_id)) {
                    $sql = "INSERT IGNORE INTO oc_product_to_category (product_id, category_id) VALUES (?, ?)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([$product_id, $category_id]);
                }
            }
        }
        
        // 6. Tạo SEO URL cho cả 2 ngôn ngữ
        $seo_url_vi = createSeoUrl($data['name_vi']);
        $seo_url_en = createSeoUrl($data['name_en']);
        
        // Insert SEO URL tiếng Việt
        $sql = "INSERT IGNORE INTO oc_seo_url (store_id, language_id, `query`, keyword) VALUES (0, 2, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["product_id=$product_id", $seo_url_vi]);
        
        // Insert SEO URL tiếng Anh
        $sql = "INSERT IGNORE INTO oc_seo_url (store_id, language_id, `query`, keyword) VALUES (0, 1, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["product_id=$product_id", $seo_url_en]);
        
        $pdo->commit();
        echo "✅ Import thành công sản phẩm: {$data['model']} - {$data['name_vi']}<br>";
        return true;
        
    } catch (Exception $e) {
        $pdo->rollBack();
        echo "❌ Lỗi import sản phẩm {$data['model']}: " . $e->getMessage() . "<br>";
        return false;
    }
}

// Xử lý form upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['csv_file'])) {
    $uploaded_file = $_FILES['csv_file'];
    
    if ($uploaded_file['error'] === UPLOAD_ERR_OK) {
        $file_path = $uploaded_file['tmp_name'];
        
        // Đọc file CSV
        if (($handle = fopen($file_path, 'r')) !== false) {
            $header = fgetcsv($handle); // Đọc header
            $success_count = 0;
            $error_count = 0;
            
            echo "<h3>📊 Kết quả Import:</h3>";
            
            while (($row = fgetcsv($handle)) !== false) {
                if (count($row) >= count($header)) {
                    $data = array_combine($header, $row);
                    
                    // Validate dữ liệu bắt buộc
                    if (empty($data['model']) || empty($data['name_vi']) || empty($data['name_en'])) {
                        echo "⚠️ Thiếu dữ liệu bắt buộc ở dòng: " . implode(', ', $row) . "<br>";
                        $error_count++;
                        continue;
                    }
                    
                    if (importProduct($data)) {
                        $success_count++;
                    } else {
                        $error_count++;
                    }
                }
            }
            
            fclose($handle);
            
            echo "<hr>";
            echo "<h4>📈 Tổng kết:</h4>";
            echo "✅ Thành công: $success_count sản phẩm<br>";
            echo "❌ Lỗi: $error_count sản phẩm<br>";
            echo "<br><a href='?' class='btn btn-primary'>Import tiếp</a>";
        }
    } else {
        echo "❌ Lỗi upload file!";
    }
} else {
    // Hiển thị form upload
    ?>
    <!DOCTYPE html>
    <html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OpenCart - Import Sản Phẩm</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3>🚀 OpenCart - Import Sản Phẩm Hàng Loạt</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="csv_file" class="form-label">Chọn file CSV:</label>
                                    <input type="file" class="form-control" id="csv_file" name="csv_file" accept=".csv" required>
                                    <div class="form-text">
                                        Định dạng: CSV UTF-8. 
                                        <a href="PRODUCT_IMPORT_TEMPLATE.csv" target="_blank">Tải file mẫu</a> |
                                        <a href="PRODUCT_IMPORT_STRUCTURE.md" target="_blank">Xem hướng dẫn</a>
                                    </div>
                                </div>
                                
                                <div class="alert alert-info">
                                    <h6>📋 Cấu trúc file CSV cần có các cột:</h6>
                                    <ul class="mb-0">
                                        <li><strong>Bắt buộc:</strong> model, name_vi, name_en, meta_title_vi, meta_title_en</li>
                                        <li><strong>Tùy chọn:</strong> description_vi, description_en, price, quantity, category_ids, v.v.</li>
                                    </ul>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-upload"></i> Import Sản Phẩm
                                </button>
                                
                                <a href="CATEGORIES_REFERENCE.csv" class="btn btn-outline-secondary" target="_blank">
                                    Xem ID Danh Mục
                                </a>
                                
                                <a href="MANUFACTURERS_REFERENCE.csv" class="btn btn-outline-secondary" target="_blank">
                                    Xem ID Nhà Sản Xuất
                                </a>
                            </form>
                        </div>
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-header">
                            <h5>📚 Tài Liệu Tham Khảo</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>🏷️ ID Danh Mục Phổ Biến:</h6>
                                    <ul class="small">
                                        <li>18 - Laptop & Máy tính xách tay</li>
                                        <li>20 - Máy tính để bàn</li>
                                        <li>24 - Điện thoại & PDA</li>
                                        <li>33 - Máy ảnh</li>
                                        <li>34 - Máy nghe nhạc MP3</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h6>🏭 ID Nhà Sản Xuất:</h6>
                                    <ul class="small">
                                        <li>1 - Apple</li>
                                        <li>2 - Canon</li>
                                        <li>3 - Dell</li>
                                        <li>4 - Samsung</li>
                                        <li>5 - HP</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php
}
?>

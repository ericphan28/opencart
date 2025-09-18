# An Nhiên Farm - Website Thương Mại Điện Tử

## Giới Thiệu Dự Án

**An Nhiên Farm** là website thương mại điện tử chuyên cung cấp đa dạng thực phẩm chất lượng cao, được xây dựng trên nền tảng OpenCart 4.1.0.4 với tích hợp hệ thống POS Sapo.

### Mô Hình Kinh Doanh

🌱 **Nông Sản Hữu Cơ**: Rau củ quả tươi ngon trực tiếp từ nông trại
🥩 **Thịt Bò Nhập Khẩu**: Thịt bò cao cấp từ các nước có uy tín
🦐 **Hải Sản Đông Lạnh**: Tôm cua cá tươi ngon, đông lạnh nhanh
🍯 **Nước Sốt Tiện Lợi**: Sốt lẩu, nướng, kho cá, chấm đa dạng

## Tính Năng Chính

### 1. Hệ Thống Quản Lý Sản Phẩm
- **Phân loại sản phẩm**: 4 danh mục chính với 11 danh mục con
- **Quản lý kho**: Tích hợp với Sapo POS để đồng bộ tồn kho
- **Hình ảnh sản phẩm**: Hỗ trợ đa hình ảnh và zoom chi tiết

### 2. Tích Hợp Sapo POS
- **Đồng bộ sản phẩm**: Tự động cập nhật từ Sapo sang website
- **Quản lý đơn hàng**: Đồng bộ đơn hàng giữa 2 hệ thống
- **Khách hàng**: Quản lý thông tin khách hàng tập trung

### 3. Giao Diện Người Dùng
- **Responsive Design**: Tối ưu cho mobile và desktop
- **Tiếng Việt**: Giao diện hoàn toàn bằng tiếng Việt
- **SEO Friendly**: Tối ưu cho công cụ tìm kiếm

## Cấu Trúc Danh Mục Sản Phẩm

### Nông Sản Sạch (ID: 100)
- Rau lá xanh (101)
- Củ quả tươi (102)
- Trái cây theo mùa (103)
- Thảo mộc gia vị (104)

### Thịt Bò Nhập Khẩu (ID: 105)
- Thịt bò Úc (110)
- Thịt bò Mỹ (111)
- Thịt bò Nhật (112)

### Hải Sản Đông Lạnh (ID: 106)
- Tôm các loại (120)
- Cua ghẹ (121)
- Cá cao cấp (122)
- Mực bạch tuộc (123)

### Nước Sốt Tiện Lợi (ID: 107)
- Sốt lẩu (130)
- Sốt nướng (131)
- Sốt kho cá (132)
- Sốt chấm (133)

## Hướng Dẫn Cài Đặt

### Yêu Cầu Hệ Thống
- PHP 8.0+
- MySQL 5.7+
- Apache/Nginx
- OpenSSL extension

### Các Bước Cài Đặt

1. **Upload Files**
   ```bash
   # Upload toàn bộ thư mục upload lên web server
   cp -r upload/* /path/to/your/webroot/
   ```

2. **Cấu Hình Database**
   ```sql
   # Tạo database và import schema
   mysql -u username -p database_name < database/an_nhien_farm_setup.sql
   ```

3. **Cấu Hình Sapo API**
   ```php
   // Trong admin/config.php
   define('SAPO_API_URL', 'https://your-shop.mysapo.vn');
   define('SAPO_API_TOKEN', 'your_api_token');
   define('SAPO_SHOP_ID', 'your_shop_id');
   ```

4. **Set Permissions**
   ```bash
   chmod 755 -R /path/to/opencart
   chmod 777 -R storage/
   chmod 777 -R image/
   ```

## API Sapo Integration

### Cấu Hình Kết Nối
File: `upload/system/library/sapo/sapo_api.php`

```php
class SapoAPI {
    private $apiUrl = 'https://your-shop.mysapo.vn';
    private $apiToken = 'your_token_here';
    private $shopId = 'your_shop_id';
}
```

### Các API Endpoints Được Sử Dụng

1. **Products API**
   - GET `/admin/products.json` - Lấy danh sách sản phẩm
   - POST `/admin/products.json` - Tạo sản phẩm mới
   - PUT `/admin/products/{id}.json` - Cập nhật sản phẩm

2. **Orders API**
   - GET `/admin/orders.json` - Lấy danh sách đơn hàng
   - POST `/admin/orders.json` - Tạo đơn hàng mới

3. **Customers API**
   - GET `/admin/customers.json` - Lấy danh sách khách hàng
   - POST `/admin/customers.json` - Tạo khách hàng mới

## Quản Trị Hệ Thống

### Truy Cập Admin Panel
URL: `http://yourdomain.com/adminoc/`

### Đồng Bộ Dữ Liệu Sapo
1. Đăng nhập admin panel
2. Vào Extensions → Sapo → Sync
3. Thực hiện đồng bộ:
   - Test Connection
   - Sync Products
   - Sync Orders
   - Sync Customers

### Quản Lý Danh Mục
- Catalog → Categories
- Tự động phân loại sản phẩm từ Sapo theo tags và tên

## Tính Năng Nổi Bật

### 1. Auto Product Categorization
Hệ thống tự động phân loại sản phẩm từ Sapo dựa trên:
- Tên sản phẩm (keyword matching)
- Tags của sản phẩm
- Vendor/supplier information

### 2. Real-time Inventory Sync
- Đồng bộ tồn kho real-time
- Cập nhật giá tự động
- Thông báo hết hàng

### 3. Order Management
- Đồng bộ đơn hàng 2 chiều
- Tracking số tự động
- Email notifications

## Bảo Mật

### API Security
- Token-based authentication
- HTTPS required for production
- Rate limiting implementation

### Data Protection
- SQL injection prevention
- XSS protection
- CSRF tokens

## Hiệu Năng

### Caching
- Product data caching
- Category structure caching
- API response caching (5 minutes TTL)

### Database Optimization
- Indexed foreign keys
- Optimized queries
- Regular database maintenance

## Hỗ Trợ & Maintenance

### Log Files
- `storage/logs/sapo_sync.log` - Sapo sync activities
- `storage/logs/error.log` - System errors
- `storage/logs/modification.log` - File modifications

### Regular Tasks
- Daily inventory sync
- Weekly customer data sync
- Monthly performance optimization

## Development Team

- **Developer**: Eric Phan
- **Email**: contact@annienfarm.com
- **GitHub**: https://github.com/ericphan28/opencart

## Version History

- **v1.0.0** (Current) - Initial release with Sapo integration
- Basic farm store functionality
- Product categorization system
- Admin sync interface

## License

This project is licensed under the GPL v3 License - see the LICENSE.md file for details.

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

---

**An Nhiên Farm** - Mang đến những sản phẩm tươi ngon và chất lượng cao nhất cho gia đình Việt.

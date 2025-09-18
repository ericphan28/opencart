# 🗄️ Database Documentation

## Overview
This directory contains the complete database backup for OpenCart Vietnamese 4.1.0.4

## Files

### 📦 Database Backup
- **File**: `opencart_vietnamese_2025-09-18_14-54-30.sql`
- **Size**: 0.57 MB
- **Tables**: 166 tables
- **Charset**: UTF8MB4
- **Generated**: 2025-09-18 14:54:30

### 🛠️ Export Script
- **File**: `export_database.php`
- **Purpose**: PHP script to export database with proper UTF8MB4 encoding
- **Features**: Complete structure and data export

## 📋 Database Schema

### Core Tables (Customized for Vietnamese)
- `oc_language` - Language settings with Vietnamese (vi-vn) support
- `oc_country` - Countries with Vietnamese translations
- `oc_zone` - Vietnamese provinces and districts
- `oc_currency` - Vietnamese Dong (VND) currency support
- `oc_setting` - System settings configured for Vietnamese locale

### Localization Features
- ✅ **Vietnamese Language Pack**: Complete vi-vn translations
- ✅ **VND Currency**: Proper Vietnamese Dong formatting
- ✅ **Vietnamese Regions**: All 63 provinces/cities
- ✅ **UTF8MB4 Charset**: Full Unicode support for Vietnamese characters
- ✅ **Admin Interface**: Vietnamese admin translations

## 🚀 Installation

### 1. Import Database
```sql
mysql -u username -p database_name < opencart_vietnamese_2025-09-18_14-54-30.sql
```

### 2. Update Configuration
```php
// config.php
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'your_username');
define('DB_PASSWORD', 'your_password');
define('DB_DATABASE', 'your_database');
define('DB_PREFIX', 'oc_');
```

### 3. Set Permissions
```bash
chmod 755 upload/
chmod -R 777 upload/system/storage/
chmod -R 777 storage/
```

## 🔧 Configuration Details

### Default Settings
- **Default Language**: Vietnamese (vi-vn)
- **Default Currency**: Vietnamese Dong (VND)
- **Admin Language**: Vietnamese
- **Timezone**: Asia/Ho_Chi_Minh
- **Date Format**: DD/MM/YYYY (Vietnamese standard)

### Sample Data
- Sample products with Vietnamese descriptions
- Vietnamese categories and subcategories
- Test customers and orders
- Vietnamese payment and shipping methods

## 📊 Table Statistics

| Category | Tables | Description |
|----------|---------|-------------|
| Core System | 30+ | User management, settings, configuration |
| Catalog | 40+ | Products, categories, attributes, options |
| Customer | 20+ | Customer data, orders, transactions |
| Localization | 15+ | Languages, currencies, zones, countries |
| Marketing | 10+ | Coupons, marketing campaigns, affiliates |
| Extensions | 50+ | Modules, themes, payment/shipping methods |

## 🔒 Security Notes

### Sensitive Data
- Admin user passwords are hashed
- API keys and tokens are included
- Customer data is test data only
- Database credentials should be updated

### Production Setup
1. Change all default passwords
2. Update admin user credentials  
3. Configure proper database credentials
4. Set up SSL certificates
5. Configure firewall rules

## 🔄 Backup Schedule

### Recommended Backup Strategy
- **Daily**: Automated incremental backups
- **Weekly**: Full database export
- **Monthly**: Complete system backup including files
- **Before Updates**: Always backup before OpenCart updates

### Export Command
```bash
php database/export_database.php
```

## 🌐 Multi-language Support

### Current Languages
- **Vietnamese (vi-vn)**: Complete translation ✅
- **English (en-gb)**: OpenCart default ✅  
- **French (fr-fr)**: Partial translation ⚠️

### Adding New Languages
1. Create language directory: `/upload/admin/language/xx-xx/`
2. Copy language files from existing language
3. Translate all PHP language files
4. Add language to `oc_language` table
5. Configure language settings in admin

---

**Last Updated**: September 18, 2025  
**OpenCart Version**: 4.1.0.4  
**Vietnamese Localization**: Complete

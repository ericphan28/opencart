<?php
// APPLICATION
define('APPLICATION', 'Admin');

// HTTP
define('HTTP_SERVER', 'http://localhost:7777/opencart/upload/adminoc/');
define('HTTP_CATALOG', 'http://localhost:7777/opencart/upload/');

// DIR
define('DIR_OPENCART', 'D:/xampp/htdocs/opencart/upload/');
define('DIR_APPLICATION', DIR_OPENCART . 'adminoc/');
define('DIR_EXTENSION', DIR_OPENCART . 'extension/');
define('DIR_IMAGE', DIR_OPENCART . 'image/');
define('DIR_SYSTEM', DIR_OPENCART . 'system/');
define('DIR_CATALOG', DIR_OPENCART . 'catalog/');
define('DIR_STORAGE', 'D:/xampp/htdocs/opencart/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Tnt@9961266');
define('DB_DATABASE', 'opencart');
define('DB_PORT', '3310');
define('DB_PREFIX', 'oc_');
define('DB_SSL_KEY', '');
define('DB_SSL_CERT', '');
define('DB_SSL_CA', '');

// DB Charset - Force UTF8MB4 for Vietnamese support
define('DB_CHARSET', 'utf8mb4');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');

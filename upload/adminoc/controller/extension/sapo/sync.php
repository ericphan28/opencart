<?php
/**
 * Sapo Sync Controller for An Nhiên Farm
 * Admin controller to sync data between OpenCart and Sapo POS
 */

class ControllerExtensionSapoSync extends Controller {
    private $error = array();
    
    public function index() {
        $this->load->language('extension/sapo/sync');
        
        $this->document->setTitle($this->language->get('heading_title'));
        
        $data['heading_title'] = $this->language->get('heading_title');
        
        $data['breadcrumbs'] = array();
        
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );
        
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/sapo/sync', 'user_token=' . $this->session->data['user_token'], true)
        );
        
        // Load Sapo configuration
        $this->load->model('setting/setting');
        $sapo_settings = $this->model_setting_setting->getSetting('sapo_config');
        
        $data['sapo_configured'] = !empty($sapo_settings['sapo_config_access_token']);
        $data['sync_products'] = $this->url->link('extension/sapo/sync/syncProducts', 'user_token=' . $this->session->data['user_token'], true);
        $data['sync_orders'] = $this->url->link('extension/sapo/sync/syncOrders', 'user_token=' . $this->session->data['user_token'], true);
        $data['sync_customers'] = $this->url->link('extension/sapo/sync/syncCustomers', 'user_token=' . $this->session->data['user_token'], true);
        $data['test_connection'] = $this->url->link('extension/sapo/sync/testConnection', 'user_token=' . $this->session->data['user_token'], true);
        
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        
        $this->response->setOutput($this->load->view('extension/sapo/sync', $data));
    }
    
    /**
     * Test Sapo API connection
     */
    public function testConnection() {
        $json = array();
        
        try {
            $sapo = $this->getSapoInstance();
            
            // Test by getting products count
            $response = $sapo->getProducts(1, 1);
            
            if ($response) {
                $json['success'] = 'Kết nối Sapo thành công!';
                $json['data'] = $response;
            } else {
                $json['error'] = 'Không thể kết nối đến Sapo API';
            }
            
        } catch (Exception $e) {
            $json['error'] = 'Lỗi kết nối: ' . $e->getMessage();
        }
        
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
    
    /**
     * Sync products from Sapo to OpenCart
     */
    public function syncProducts() {
        $json = array();
        
        try {
            $this->load->model('catalog/product');
            $this->load->model('catalog/category');
            $this->load->model('localisation/language');
            
            $sapo = $this->getSapoInstance();
            
            $page = 1;
            $synced_count = 0;
            $errors = array();
            
            do {
                $response = $sapo->getProducts($page, 50);
                
                if (!$response || !isset($response['products'])) {
                    break;
                }
                
                foreach ($response['products'] as $sapo_product) {
                    try {
                        $opencart_product = $sapo->convertSapoProductToOpenCart($sapo_product);
                        
                        // Set category based on product type
                        $opencart_product['product_category'] = $this->getCategoryByProductType($sapo_product);
                        
                        // Check if product exists by SKU
                        $existing_product = $this->model_catalog_product->getProductBySku($opencart_product['sku']);
                        
                        if ($existing_product) {
                            // Update existing product
                            $this->model_catalog_product->editProduct($existing_product['product_id'], $opencart_product);
                        } else {
                            // Add new product
                            $this->model_catalog_product->addProduct($opencart_product);
                        }
                        
                        $synced_count++;
                        
                    } catch (Exception $e) {
                        $errors[] = "Sản phẩm {$sapo_product['title']}: " . $e->getMessage();
                    }
                }
                
                $page++;
                
            } while (count($response['products']) == 50); // Continue if full page
            
            $json['success'] = "Đã đồng bộ {$synced_count} sản phẩm từ Sapo";
            
            if (!empty($errors)) {
                $json['warnings'] = $errors;
            }
            
        } catch (Exception $e) {
            $json['error'] = 'Lỗi đồng bộ sản phẩm: ' . $e->getMessage();
        }
        
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
    
    /**
     * Sync orders from OpenCart to Sapo
     */
    public function syncOrders() {
        $json = array();
        
        try {
            $this->load->model('sale/order');
            
            $sapo = $this->getSapoInstance();
            
            // Get unsynced orders (orders without sapo_order_id)
            $filter_data = array(
                'filter_sapo_synced' => 0,
                'start' => 0,
                'limit' => 100
            );
            
            $orders = $this->model_sale_order->getOrders($filter_data);
            $synced_count = 0;
            $errors = array();
            
            foreach ($orders as $order) {
                try {
                    $sapo_order = $sapo->convertOpenCartOrderToSapo($order);
                    $response = $sapo->createOrder($sapo_order);
                    
                    if ($response && isset($response['order']['id'])) {
                        // Mark order as synced
                        $this->model_sale_order->addOrderHistory($order['order_id'], 1, 'Đã đồng bộ với Sapo - ID: ' . $response['order']['id'], false, true);
                        $synced_count++;
                    }
                    
                } catch (Exception $e) {
                    $errors[] = "Đơn hàng #{$order['order_id']}: " . $e->getMessage();
                }
            }
            
            $json['success'] = "Đã đồng bộ {$synced_count} đơn hàng lên Sapo";
            
            if (!empty($errors)) {
                $json['warnings'] = $errors;
            }
            
        } catch (Exception $e) {
            $json['error'] = 'Lỗi đồng bộ đơn hàng: ' . $e->getMessage();
        }
        
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
    
    /**
     * Sync customers from OpenCart to Sapo
     */
    public function syncCustomers() {
        $json = array();
        
        try {
            $this->load->model('customer/customer');
            
            $sapo = $this->getSapoInstance();
            
            $filter_data = array(
                'start' => 0,
                'limit' => 100
            );
            
            $customers = $this->model_customer_customer->getCustomers($filter_data);
            $synced_count = 0;
            $errors = array();
            
            foreach ($customers as $customer) {
                try {
                    $sapo_customer = array(
                        'first_name' => $customer['firstname'],
                        'last_name' => $customer['lastname'],
                        'email' => $customer['email'],
                        'phone' => $customer['telephone'],
                        'accepts_marketing' => true,
                        'tags' => 'An Nhiên Farm Customer'
                    );
                    
                    $response = $sapo->createCustomer($sapo_customer);
                    
                    if ($response && isset($response['customer']['id'])) {
                        $synced_count++;
                    }
                    
                } catch (Exception $e) {
                    $errors[] = "Khách hàng {$customer['email']}: " . $e->getMessage();
                }
            }
            
            $json['success'] = "Đã đồng bộ {$synced_count} khách hàng lên Sapo";
            
            if (!empty($errors)) {
                $json['warnings'] = $errors;
            }
            
        } catch (Exception $e) {
            $json['error'] = 'Lỗi đồng bộ khách hàng: ' . $e->getMessage();
        }
        
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
    
    /**
     * Get Sapo API instance
     */
    private function getSapoInstance() {
        $this->load->model('setting/setting');
        $sapo_settings = $this->model_setting_setting->getSetting('sapo_config');
        
        if (empty($sapo_settings['sapo_config_access_token'])) {
            throw new Exception('Sapo chưa được cấu hình. Vui lòng cấu hình API token.');
        }
        
        require_once(DIR_SYSTEM . 'library/sapo/sapo_api.php');
        
        $config = array(
            'api_url' => $sapo_settings['sapo_config_api_url'] ?? 'https://openapi.sapo.vn',
            'access_token' => $sapo_settings['sapo_config_access_token'],
            'tenant' => $sapo_settings['sapo_config_tenant'] ?? ''
        );
        
        return new SapoAPI($config);
    }
    
    /**
     * Get category ID based on product type for An Nhiên Farm expanded catalog
     */
    private function getCategoryByProductType($sapo_product) {
        $product_type = strtolower($sapo_product['product_type'] ?? '');
        $title = strtolower($sapo_product['title'] ?? '');
        $tags = strtolower($sapo_product['tags'] ?? '');
        
        // Map product types to categories for An Nhiên Farm
        
        // Thịt bò nhập khẩu
        if (strpos($product_type, 'thịt bò') !== false || strpos($title, 'thịt bò') !== false || strpos($tags, 'beef') !== false) {
            if (strpos($title, 'wagyu') !== false || strpos($tags, 'wagyu') !== false) {
                return [112]; // Thịt Bò Wagyu
            } elseif (strpos($title, 'úc') !== false || strpos($tags, 'australian') !== false) {
                return [110]; // Thịt Bò Úc
            } elseif (strpos($title, 'mỹ') !== false || strpos($tags, 'usda') !== false) {
                return [111]; // Thịt Bò Mỹ
            } else {
                return [105]; // Thịt Bò Nhập Khẩu (general)
            }
        }
        
        // Hải sản đông lạnh
        if (strpos($product_type, 'hải sản') !== false || strpos($title, 'hải sản') !== false || 
            strpos($title, 'cá') !== false || strpos($title, 'tôm') !== false || 
            strpos($title, 'cua') !== false || strpos($title, 'sò') !== false) {
            
            if (strpos($title, 'cá hồi') !== false || strpos($tags, 'salmon') !== false) {
                return [120]; // Cá Hồi Na Uy
            } elseif (strpos($title, 'tôm') !== false || strpos($tags, 'shrimp') !== false) {
                return [121]; // Tôm Canada
            } elseif (strpos($title, 'cua') !== false || strpos($tags, 'crab') !== false) {
                return [122]; // Cua Alaska
            } elseif (strpos($title, 'sò') !== false || strpos($tags, 'scallop') !== false) {
                return [123]; // Sò Điệp
            } else {
                return [106]; // Hải Sản Đông Lạnh (general)
            }
        }
        
        // Nước sốt tiện lợi
        if (strpos($product_type, 'nước sốt') !== false || strpos($title, 'sốt') !== false || 
            strpos($title, 'sauce') !== false || strpos($tags, 'sauce') !== false) {
            
            if (strpos($title, 'lẩu') !== false || strpos($tags, 'hotpot') !== false) {
                return [130]; // Nước Sốt Lẩu
            } elseif (strpos($title, 'nướng') !== false || strpos($tags, 'bbq') !== false || strpos($tags, 'grill') !== false) {
                return [131]; // Nước Sốt Nướng
            } elseif (strpos($title, 'kho cá') !== false || strpos($tags, 'fish') !== false) {
                return [132]; // Nước Sốt Kho Cá
            } elseif (strpos($title, 'chấm') !== false || strpos($title, 'mắm') !== false || strpos($title, 'tương') !== false) {
                return [133]; // Nước Sốt Chấm
            } else {
                return [107]; // Nước Sốt Tiện Lợi (general)
            }
        }
        
        // Nông sản traditional categories
        if (strpos($product_type, 'rau') !== false || strpos($title, 'rau') !== false) {
            return [100]; // Rau Xanh Tươi
        } elseif (strpos($product_type, 'củ') !== false || strpos($title, 'củ') !== false || strpos($title, 'khoai') !== false) {
            return [101]; // Củ Quả Tươi
        } elseif (strpos($product_type, 'trái') !== false || strpos($title, 'quả') !== false) {
            return [102]; // Trái Cây Tươi
        } elseif (strpos($product_type, 'thảo') !== false || strpos($title, 'gia vị') !== false) {
            return [103]; // Thảo Mộc & Gia Vị
        } else {
            return [104]; // Sản Phẩm Chế Biến
        }
    }
}
?>

<?php
/**
 * Sapo API Integration for An Nhiên Farm
 * Sync products, inventory, and orders with Sapo POS system
 */

class SapoAPI {
    private $api_url;
    private $client_id;
    private $client_secret;
    private $access_token;
    private $tenant;
    
    public function __construct($config = []) {
        $this->api_url = $config['api_url'] ?? 'https://openapi.sapo.vn';
        $this->client_id = $config['client_id'] ?? '';
        $this->client_secret = $config['client_secret'] ?? '';
        $this->access_token = $config['access_token'] ?? '';
        $this->tenant = $config['tenant'] ?? '';
    }
    
    /**
     * Get access token from Sapo
     */
    public function authenticate($username, $password) {
        $endpoint = '/oauth/token';
        $data = [
            'grant_type' => 'password',
            'client_id' => $this->client_id,
            'client_secret' => $this->client_secret,
            'username' => $username,
            'password' => $password,
            'scope' => 'read_products write_products read_orders write_orders'
        ];
        
        $response = $this->makeRequest('POST', $endpoint, $data);
        
        if (isset($response['access_token'])) {
            $this->access_token = $response['access_token'];
            return $response;
        }
        
        return false;
    }
    
    /**
     * Get all products from Sapo
     */
    public function getProducts($page = 1, $limit = 50) {
        $endpoint = "/admin/products.json";
        $params = [
            'page' => $page,
            'limit' => $limit,
            'status' => 'active'
        ];
        
        return $this->makeRequest('GET', $endpoint, $params);
    }
    
    /**
     * Get single product by ID
     */
    public function getProduct($product_id) {
        $endpoint = "/admin/products/{$product_id}.json";
        return $this->makeRequest('GET', $endpoint);
    }
    
    /**
     * Get product variants
     */
    public function getProductVariants($product_id) {
        $endpoint = "/admin/products/{$product_id}/variants.json";
        return $this->makeRequest('GET', $endpoint);
    }
    
    /**
     * Get inventory levels
     */
    public function getInventoryLevels($location_id = null) {
        $endpoint = "/admin/inventory_levels.json";
        $params = [];
        if ($location_id) {
            $params['location_id'] = $location_id;
        }
        
        return $this->makeRequest('GET', $endpoint, $params);
    }
    
    /**
     * Get orders from Sapo
     */
    public function getOrders($status = 'any', $page = 1, $limit = 50) {
        $endpoint = "/admin/orders.json";
        $params = [
            'status' => $status,
            'page' => $page,
            'limit' => $limit
        ];
        
        return $this->makeRequest('GET', $endpoint, $params);
    }
    
    /**
     * Create order in Sapo
     */
    public function createOrder($order_data) {
        $endpoint = "/admin/orders.json";
        $data = ['order' => $order_data];
        
        return $this->makeRequest('POST', $endpoint, $data);
    }
    
    /**
     * Update order status in Sapo
     */
    public function updateOrderStatus($order_id, $status) {
        $endpoint = "/admin/orders/{$order_id}.json";
        $data = [
            'order' => [
                'id' => $order_id,
                'status' => $status
            ]
        ];
        
        return $this->makeRequest('PUT', $endpoint, $data);
    }
    
    /**
     * Get customer data
     */
    public function getCustomers($page = 1, $limit = 50) {
        $endpoint = "/admin/customers.json";
        $params = [
            'page' => $page,
            'limit' => $limit
        ];
        
        return $this->makeRequest('GET', $endpoint, $params);
    }
    
    /**
     * Create customer in Sapo
     */
    public function createCustomer($customer_data) {
        $endpoint = "/admin/customers.json";
        $data = ['customer' => $customer_data];
        
        return $this->makeRequest('POST', $endpoint, $data);
    }
    
    /**
     * Make HTTP request to Sapo API
     */
    private function makeRequest($method, $endpoint, $data = []) {
        $url = $this->api_url . $endpoint;
        
        $headers = [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $this->access_token,
            'X-Sapo-Tenant: ' . $this->tenant
        ];
        
        $curl = curl_init();
        
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_SSL_VERIFYPEER => false
        ]);
        
        if ($method === 'GET' && !empty($data)) {
            $url .= '?' . http_build_query($data);
            curl_setopt($curl, CURLOPT_URL, $url);
        } elseif (in_array($method, ['POST', 'PUT', 'PATCH']) && !empty($data)) {
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        }
        
        $response = curl_exec($curl);
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $error = curl_error($curl);
        
        curl_close($curl);
        
        if ($error) {
            throw new Exception('CURL Error: ' . $error);
        }
        
        if ($http_code >= 400) {
            throw new Exception('HTTP Error ' . $http_code . ': ' . $response);
        }
        
        return json_decode($response, true);
    }
    
    /**
     * Convert Sapo product to OpenCart format
     */
    public function convertSapoProductToOpenCart($sapo_product) {
        $opencart_product = [
            'name' => $sapo_product['title'] ?? '',
            'description' => $sapo_product['body_html'] ?? '',
            'model' => $sapo_product['vendor'] ?? 'AN-FARM',
            'sku' => $sapo_product['variants'][0]['sku'] ?? '',
            'price' => $sapo_product['variants'][0]['price'] ?? 0,
            'quantity' => $sapo_product['variants'][0]['inventory_quantity'] ?? 0,
            'status' => ($sapo_product['status'] === 'active') ? 1 : 0,
            'weight' => $sapo_product['variants'][0]['weight'] ?? 0,
            'length' => 0,
            'width' => 0,
            'height' => 0,
            'image' => $sapo_product['image']['src'] ?? '',
            'manufacturer_id' => 0, // An Nhiên Farm manufacturer
            'shipping' => 1,
            'keyword' => $this->generateSeoKeyword($sapo_product['title'] ?? ''),
            'meta_title' => $sapo_product['title'] ?? '',
            'meta_description' => strip_tags($sapo_product['body_html'] ?? ''),
            'meta_keyword' => $sapo_product['tags'] ?? '',
            'tag' => $sapo_product['tags'] ?? '',
            'sort_order' => 0,
            'subtract' => 1,
            'minimum' => 1
        ];
        
        return $opencart_product;
    }
    
    /**
     * Generate SEO-friendly keyword from product name
     */
    private function generateSeoKeyword($name) {
        $keyword = strtolower($name);
        $keyword = str_replace(' ', '-', $keyword);
        $keyword = preg_replace('/[^a-z0-9\-]/', '', $keyword);
        return $keyword;
    }
    
    /**
     * Convert OpenCart order to Sapo format
     */
    public function convertOpenCartOrderToSapo($opencart_order) {
        $sapo_order = [
            'email' => $opencart_order['email'],
            'financial_status' => 'pending',
            'fulfillment_status' => 'unfulfilled',
            'line_items' => [],
            'billing_address' => [
                'first_name' => $opencart_order['payment_firstname'],
                'last_name' => $opencart_order['payment_lastname'],
                'address1' => $opencart_order['payment_address_1'],
                'city' => $opencart_order['payment_city'],
                'phone' => $opencart_order['telephone'],
                'country' => $opencart_order['payment_country'],
                'province' => $opencart_order['payment_zone']
            ],
            'shipping_address' => [
                'first_name' => $opencart_order['shipping_firstname'],
                'last_name' => $opencart_order['shipping_lastname'],
                'address1' => $opencart_order['shipping_address_1'],
                'city' => $opencart_order['shipping_city'],
                'phone' => $opencart_order['telephone'],
                'country' => $opencart_order['shipping_country'],
                'province' => $opencart_order['shipping_zone']
            ]
        ];
        
        return $sapo_order;
    }
}
?>

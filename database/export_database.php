<?php
/**
 * Database Export Script for OpenCart Vietnamese
 * Export complete database structure and data
 */

$host = 'localhost';
$port = '3310';
$username = 'root';
$password = 'Tnt@9961266';
$database = 'opencart';

try {
    // Connect to database
    $mysqli = new mysqli($host, $username, $password, $database, $port);
    
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    
    echo "🔗 Connected to database successfully\n";
    
    // Set charset
    $mysqli->set_charset("utf8mb4");
    
    // Get all tables
    $tables = array();
    $result = $mysqli->query("SHOW TABLES");
    while ($row = $result->fetch_row()) {
        $tables[] = $row[0];
    }
    
    echo "📋 Found " . count($tables) . " tables\n";
    
    // Start export
    $export = "-- OpenCart Vietnamese Database Export\n";
    $export .= "-- Generated on: " . date('Y-m-d H:i:s') . "\n";
    $export .= "-- Database: " . $database . "\n";
    $export .= "-- Version: OpenCart 4.1.0.4 Vietnamese\n\n";
    
    $export .= "SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";\n";
    $export .= "SET AUTOCOMMIT = 0;\n";
    $export .= "START TRANSACTION;\n";
    $export .= "SET time_zone = \"+00:00\";\n\n";
    
    $export .= "/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;\n";
    $export .= "/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;\n";
    $export .= "/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;\n";
    $export .= "/*!40101 SET NAMES utf8mb4 */;\n\n";
    
    foreach ($tables as $table) {
        echo "📦 Exporting table: $table\n";
        
        // Drop table statement
        $export .= "-- --------------------------------------------------------\n";
        $export .= "-- Table structure for table `$table`\n";
        $export .= "-- --------------------------------------------------------\n\n";
        $export .= "DROP TABLE IF EXISTS `$table`;\n";
        
        // Create table statement
        $result = $mysqli->query("SHOW CREATE TABLE `$table`");
        $row = $result->fetch_row();
        $export .= $row[1] . ";\n\n";
        
        // Table data
        $export .= "-- Dumping data for table `$table`\n";
        $export .= "-- --------------------------------------------------------\n\n";
        
        $result = $mysqli->query("SELECT * FROM `$table`");
        if ($result->num_rows > 0) {
            $export .= "INSERT INTO `$table` VALUES\n";
            
            $rows = array();
            while ($row = $result->fetch_row()) {
                $escaped_row = array();
                foreach ($row as $field) {
                    if ($field === null) {
                        $escaped_row[] = 'NULL';
                    } else {
                        $escaped_row[] = "'" . $mysqli->real_escape_string($field) . "'";
                    }
                }
                $rows[] = '(' . implode(',', $escaped_row) . ')';
            }
            
            $export .= implode(",\n", $rows) . ";\n\n";
        } else {
            $export .= "-- No data for table `$table`\n\n";
        }
    }
    
    $export .= "COMMIT;\n\n";
    $export .= "/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;\n";
    $export .= "/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;\n";
    $export .= "/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;\n";
    
    // Save to file
    $filename = 'database/opencart_vietnamese_' . date('Y-m-d_H-i-s') . '.sql';
    file_put_contents($filename, $export);
    
    echo "✅ Database exported successfully to: $filename\n";
    echo "📊 File size: " . round(filesize($filename) / 1024 / 1024, 2) . " MB\n";
    
    $mysqli->close();
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
}
?>

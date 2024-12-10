<?php
class Database {
    private static $instance = null;
    private $connection;
    
    private function __construct() {
      

        $serverName = "USER";

        //$serverName = "MSI\SQLEXPRESS"; //cfb702b77dcb15ba96ab5144cdaf8b2ef45a39d2

        //$serverName = "MSI\SQLEXPRESS";

        $connectionOptions = [
            "Database" => "SIBTAN",
            
            "Uid" => "sa",
            "PWD" => "12345",
           
            "TrustServerCertificate" => true,
            "Encrypt" => false
        ];
        
        try {
            $this->connection = sqlsrv_connect($serverName, $connectionOptions);
            
            if ($this->connection === false) {
                throw new Exception("Database connection failed: " . print_r(sqlsrv_errors(), true));
            }
        } catch (Exception $e) {
            die("Connection error: " . $e->getMessage());
        }
    }
    
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function getConnection() {
        return $this->connection;
    }
}
    
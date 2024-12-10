<?php
class Database {
    private static $instance = null;
    private $connection;
    
    private function __construct() {
      

 main
        $serverName = "USER";

        $serverName = "LAPTOP-SH40GF02\SQLEXPRESS";
 main

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
    
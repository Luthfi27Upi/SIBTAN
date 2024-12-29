<?php
class Berkas {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }

    public function getAll() {
        
        $sql = "
            SELECT * FROM [BERKAS]
        ";
        
        $stmt = sqlsrv_query($this->db, $sql);
    
        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }
    
        $forms = [];
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $forms[] = $row;
        }
        return $forms;
    }
}
    
    

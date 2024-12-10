<?php
class Cetak {
    private $db;

    public function __construct($db) {
        $this->db = $db; // mengkonekkan mongoDB
    }

   //mengambil query
    public function getMahasiswaById($userId) {
        $query = "
            SELECT
                m.ID_MHS,
                u.USERNAME,
                u.NIM,
                u.EMAIL,
                m.JURUSAN
            FROM DATA_MHS m
            JOIN [USER] u ON u.ID = m.ID_MHS
            WHERE m.ID_MHS = ?
        ";
        
        
        $stmt = sqlsrv_prepare($this->db, $query, [$userId]);

        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));  // Handle errors if preparation fails
        }

        // mengexecute query
        $result = sqlsrv_execute($stmt);

        if ($result === false) {
            die(print_r(sqlsrv_errors(), true));  // Handle errors if execution fails
        }

        //hasil
        $data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
        
        return $data;  
    }
}
?>

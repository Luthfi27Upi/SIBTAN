<?php
class Cetak {
    private $db;

    public function __construct($db) {
        $this->db = $db; // mengkonekkan sql
    }

   //mengambil query
    public function getMahasiswaById($userId) {
        $query = "SELECT [USER].*, PROGRAM_STUDI.PRODI
        FROM [USER]
        LEFT JOIN PROGRAM_STUDI
        ON [USER].ID_PRODI = PROGRAM_STUDI.ID_PRODI
        WHERE NIM = ?;
        ";
        
        $stmt = sqlsrv_prepare($this->db, $query, [$userId]);

        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));  
        }

        $result = sqlsrv_execute($stmt);

        if ($result === false) {
            die(print_r(sqlsrv_errors(), true));  
        }

        $data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
        
        return $data;  
    }
}
?>

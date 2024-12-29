<?php
class Form {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }
    
    public function create($nim, $id_status, $id_berkas, $file_path) {
        $sql = "INSERT INTO [BEBAS_TANGGUNGAN] (nim, id_status, id_berkas, file_path) 
                VALUES (?, ?, ?, ?)";
        $params = [$nim, $id_status, $id_berkas, $file_path];
        var_dump($params); // Debug untuk melihat nilai parameter

    
        $stmt = sqlsrv_query($this->db, $sql, $params);

        if ($stmt === false) {
            echo $stmt;
            die(print_r(sqlsrv_errors(), true)); 
        }

        return true; 
    }

    public function update($id, $file_name, $file_path, $status) {
        $sql = "UPDATE [FILES] SET file_path = ?, status = ? WHERE id = ? AND file_name = ?";
        $params = [$file_path, $status, $id, $file_name];
    
        $stmt = sqlsrv_query($this->db, $sql, $params);
    
        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }
    
        return true; 
    }    

    public function checkForm($userId, $file_name) {
        $sql = "SELECT status FROM FILES WHERE id = ? AND file_name = ?";
        $params = [$userId, $file_name];
        $stmt = sqlsrv_prepare($this->db, $sql, $params);

        if (!$stmt) {
            die(print_r(sqlsrv_errors(), true));
        }

        if (sqlsrv_execute($stmt)) {
            $result = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
            return $result ? $result['status'] : null;
        }
    }

    public function getFile($nim, $id) {
        $sql = "SELECT FILE_PATH FROM BEBAS_TANGGUNGAN WHERE NIM = ? AND ID_BERKAS = ?";
        $params = [$nim, $id];
        
        $stmt = sqlsrv_query($this->db, $sql, $params);

        if (!$stmt) {
            die(print_r(sqlsrv_errors(), true));
        }

        $result = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
        return $result ? $result['FILE_PATH'] : null;
    }
    
    public function updateStatus($userId, $id_berkas, $newStatus) {
        $sql = "UPDATE BEBAS_TANGGUNGAN SET id_status = ? WHERE nim = ? AND id_berkas = ?";
        $params = [$newStatus, $userId, $id_berkas];
        
        $stmt = sqlsrv_query($this->db, $sql, $params);
        
        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }
    
        return true; 
    }
    public function verificationPending($nim) {
        $sql = "SELECT * FROM BEBAS_TANGGUNGAN WHERE nim = ?";
        $params = [$nim];
        $stmt = sqlsrv_query($this->db, $sql, $params);

        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true)); 
        }

        $filesToVerify = [];
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $filesToVerify[] = $row; 
        }

        return $filesToVerify; 
    }

    public function getAll() {
        
        $sql = "
            SELECT * FROM [FILES]
        ";
        
        $stmt = sqlsrv_query($this->db, $sql);
    
        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }
    
        $forms = [];
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $users[] = $row;
        }
        return $forms;
    }

    public function getBerkas() {
        
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

    public function getBerkasAdmin($id_role) {
        
        $sql = "
            SELECT * FROM [BERKAS] WHERE TINGKAT = ?
        ";
        
        $params = [$id_role];
        $stmt = sqlsrv_query($this->db, $sql, $params);
    
        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }
    
        $forms = [];
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $forms[] = $row;
        }
        return $forms;
    }

    public function getStatus($nim, $id) {
        
        $sql = "SELECT ID_STATUS FROM [BEBAS_TANGGUNGAN] WHERE NIM = ? AND ID_BERKAS = ?";
        $params = [$nim, $id];
        
        $stmt = sqlsrv_query($this->db, $sql, $params);
    
        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        $result = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
        return $result ? $result['ID_STATUS'] : null;
    }
}
    
    

<?php
class Auth {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }
    
    public function authenticate($nim, $password) {
        $query = "SELECT * FROM [USER] WHERE nim = ?";
        $stmt = sqlsrv_query($this->db, $query, [$nim]);
        
        if ($stmt === false) {
            throw new Exception(print_r(sqlsrv_errors(), true));
        }
        
        $user = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
        
        if ($user && password_verify($password, $user['PASSWORD'])) {
            return $user;
        }
        
        return false;
    }
    public function getJurusan($id) {
        $sql = "SELECT JURUSAN FROM DATA_MHS WHERE ID_MHS = ?";
        $stmt = sqlsrv_query($this->db, $sql, [$id]);
        
        return sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
        
    }
 
    public function createPasswordResetToken($email) {
        date_default_timezone_set('Asia/Jakarta');
        
        $token = bin2hex(random_bytes(16));
        $expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));
        
        $query = "UPDATE [USER] SET reset_token = ?, reset_token_expiry = ? WHERE EMAIL = ?";
        $stmt = sqlsrv_prepare($this->db, $query, [$token, $expiry, $email]);
        sqlsrv_execute($stmt);
        
        return $token;
    }
    
    public function resetPassword($token, $newPassword) {
        $query = "SELECT ID FROM [USER] WHERE reset_token = ? AND reset_token_expiry > ?";
        $stmt = sqlsrv_prepare($this->db, $query, [$token, date('Y-m-d H:i:s')]);
        sqlsrv_execute($stmt);
        
        $user = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
        
        if ($user) {
            $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
            $query = "UPDATE [USER] SET PASSWORD = ?, reset_token = NULL, reset_token_expiry = NULL WHERE ID = ?";
            $stmt = sqlsrv_prepare($this->db, $query, [$hashedPassword, $user['ID']]);
            
            if (sqlsrv_execute($stmt) === false) {
                throw new Exception(print_r(sqlsrv_errors(), true));
            }
            
            return true;
        }
        
        return false;
    }
}
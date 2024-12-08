<?php
class User {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Create a new user
    public function create($id, $username, $password, $email, $no_hp, $nim, $alamat, $jenis_kelamin, $role, $tempat_lahir, $tanggal_lahir, $image, $jurusan) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO [USER] (id, username, password, email, no_hp, nim, alamat, jenis_kelamin, role, tempat_lahir, tanggal_lahir, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $params = [$id, $username, $hashedPassword, $email, $no_hp, $nim, $alamat, $jenis_kelamin, $role, $tempat_lahir, $tanggal_lahir, $image];
        $stmt = sqlsrv_query($this->db, $sql, $params);

        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true)); 
        }
        if ($role === 'admin_jurusan' || $role === 'admin_prodi') {
            $sql = "INSERT INTO [DATA_ADMIN] (ID_ADM,JURUSAN) VALUES (?,?)";
            $params = [$id, $jurusan];
            $stmt = sqlsrv_query($this->db, $sql, $params);
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true)); 
            }
        }
        if($role ==='mahasiswa'){
            $sql = "INSERT INTO [DATA_MHS] (ID_MHS, JURUSAN) VALUES (?,?)";
            $params = [$id, $jurusan];
            $stmt = sqlsrv_query($this->db, $sql, $params);
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true)); 
            }
        }

        return true; 
    }

    
    public function find($id) {
        $sql = "SELECT * FROM [USER] WHERE id = ?";
        $params = [$id];
        $stmt = sqlsrv_query($this->db, $sql, $params);
        return sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
    }


    public function update($id, $username, $email, $no_hp, $nim, $alamat, $jenis_kelamin, $role, $tempat_lahir, $tanggal_lahir,$image,$jurusan)
     {
        $temp_role =  "SELECT role FROM [USER] WHERE id = ?";
        $stmTemp = sqlsrv_query($this->db, $temp_role, [$id]);
        $oldRole = sqlsrv_fetch_array($stmTemp, SQLSRV_FETCH_ASSOC)['role'];
        
        $sql = "UPDATE [USER] SET username = ?, email = ?, no_hp = ?, nim = ?, alamat = ?, jenis_kelamin = ?, role = ?, tempat_lahir = ?, tanggal_lahir = ?";
        if ($image) {
            $sql .= ", image = ?";
        }
        $sql .= " WHERE id = ?";

        $params = [$username, $email, $no_hp, $nim, $alamat, $jenis_kelamin, $role, $tempat_lahir, $tanggal_lahir];
        if ($image) {
            $params[] = $image;
        }
        $params[] = $id; 
        $stmt = sqlsrv_query($this->db, $sql, $params);
        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }
        if ($oldRole === 'mahasiswa') {
            $sql = "DELETE FROM DATA_MHS WHERE ID_MHS = ?";
            $params = [$id];
            $stmt = sqlsrv_query($this->db, $sql, $params);
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
            }
        }
        else if ($oldRole === 'admin_prodi' || $oldRole === 'admin_jurusan') {
            $sql = "DELETE FROM DATA_ADMIN WHERE ID_ADM =?";
            $params = [$id];
            $stmt = sqlsrv_query($this->db, $sql, $params);
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
            }
        }
        if($role === 'mahasiswa'){
            $sql = "INSERT INTO DATA_MHS (ID_MHS, JURUSAN) VALUES (?,?)";
            $params = [$id, $jurusan];
            $stmt = sqlsrv_query($this->db, $sql, $params);
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
            }
        }
        else if ($role === 'admin_prodi' || $role === 'admin_jurusan') {
            $sql = "INSERT INTO DATA_ADMIN (ID_ADM, JURUSAN) VALUES (?, ?)";
            $params = [$id, $jurusan];
            $stmt = sqlsrv_query($this->db, $sql, $params);
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
            }
        }

        return true;
    }

    // Delete a user
    public function delete($id) {
        $sql = "DELETE FROM data_mhs WHERE id_mhs = ?";
        $params = [$id];
        $stmt = sqlsrv_query($this->db, $sql, $params);
        if ($stmt === false) {
            throw new Exception('Error deleting from data_mhs: ' . print_r(sqlsrv_errors(), true));
        }
        $sql = "DELETE FROM [USER] WHERE id = ?";
        $params = [$id];
        $stmt = sqlsrv_query($this->db, $sql, $params);
        if ($stmt === false) {
            throw new Exception('Error deleting from user: '. print_r(sqlsrv_errors(), true));
        }
        return true;
    }

    // Get all [USER]
    public function getAll() {
        
        $sql = "
            SELECT u.*, d.jurusan 
            FROM [USER] u
            JOIN data_mhs d ON u.id = d.id_mhs  
            WHERE u.role = 'mahasiswa'
        ";
        
        $stmt = sqlsrv_query($this->db, $sql);
    
        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }
    
        $users = [];
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $users[] = $row;
        }
        return $users;
    }
}
?>
<?php
class User {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Create a new user
    public function create($id, $username, $password, $email, $no_hp, $nim, $alamat, $jenis_kelamin, $role, $tempat_lahir, $tanggal_lahir, $image) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO [USER] (id, username, password, email, no_hp, nim, alamat, jenis_kelamin, role, tempat_lahir, tanggal_lahir, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $params = [$id, $username, $hashedPassword, $email, $no_hp, $nim, $alamat, $jenis_kelamin, $role, $tempat_lahir, $tanggal_lahir, $image];
        $stmt = sqlsrv_query($this->db, $sql, $params);

        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true)); 
        }

        return true; 
    }

    // Find a user by ID
    public function find($id) {
        $sql = "SELECT * FROM [USER] WHERE id = ?";
        $params = [$id];
        $stmt = sqlsrv_query($this->db, $sql, $params);
        return sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
    }


    public function update($id, $username, $email, $no_hp, $nim, $alamat, $jenis_kelamin, $role, $tempat_lahir, $tanggal_lahir,$image) {
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

        return true;
    }

    // Delete a user
    public function delete($id) {
        $sql = "DELETE FROM [USER] WHERE id = ?";
        $params = [$id];
        $stmt = sqlsrv_query($this->db, $sql, $params);
        return $stmt !== false;
    }

    // Get all [USER]
    public function getAll() {
        $sql = "SELECT * FROM [USER]";
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
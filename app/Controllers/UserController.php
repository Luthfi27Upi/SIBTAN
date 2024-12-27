<?php
class UserController {
    private $userModel;

    public function __construct(User $userModel) {
        $this->userModel = $userModel;
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['ID'];
            $username = $_POST['USERNAME'];
            $password = $_POST['PASSWORD'];
            $email = $_POST['EMAIL'];
            $no_hp = $_POST['NO_HP'];
            $nim = $_POST['NIM'];
            $alamat = $_POST['ALAMAT'];
            $jenis_kelamin = $_POST['JENIS_KELAMIN'];
            $role = $_POST['ROLE'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $jurusan = $_POST['jurusan'];
            
            $imagePath = null;
            if (isset($_FILES['IMAGE']) && $_FILES['IMAGE']['error'] == UPLOAD_ERR_OK) {
                $imageTmpPath = $_FILES['IMAGE']['tmp_name'];
                $imageName = $_FILES['IMAGE']['name'];
                $imagePath = 'uploads/' . basename($imageName); 

                
                move_uploaded_file($imageTmpPath, $imagePath);
            }

            $this->userModel->create($id, $username, $password, $email, $no_hp, $nim, $alamat, $jenis_kelamin, $role, $tempat_lahir,$tanggal_lahir,$imagePath,$jurusan);
            header('Location: ../users');
            exit;
        }
        require 'views/users/create.php';
    }

    public function read($id) {
        $user = $this->userModel->find($id);
        require 'views/users/read.php';
    }

    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['USERNAME'];
            $email = $_POST['EMAIL'];
            $no_hp = $_POST['NO_HP'];
            $nim = $_POST['NIM'];
            $alamat = $_POST['ALAMAT'];
            $jenis_kelamin = $_POST['JENIS_KELAMIN'];
            $role = $_POST['ROLE'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $jurusan = $_POST['jurusan'];
    

            $user = $this->userModel->find($id);
            $imagePath = $user['imagePath'];
    
            if (isset($_FILES['IMAGE']) && $_FILES['IMAGE']['error'] == UPLOAD_ERR_OK) {
                $imageTmpPath = $_FILES['IMAGE']['tmp_name'];
                $imageName = $_FILES['IMAGE']['name'];
                $imagePath = 'uploads/' . basename($imageName); 
    
                move_uploaded_file($imageTmpPath, $imagePath);
            }
    
            $this->userModel->update($id, $username, $email, $no_hp, $nim, $alamat, $jenis_kelamin, $role, $tempat_lahir, $tanggal_lahir, $imagePath,$jurusan);
            
            header('Location: /users');
            exit;
        }
        $user = $this->userModel->find($id);
        require 'views/users/update.php';
    }
    public function delete($id) {
        $this->userModel->delete($id);
        header('Location: /users');
    }

    public function index() {
        $users = $this->userModel->getAll();
        
        $progressBar = [];
        foreach ($users as $key => $user) {
            $progress = $this->userModel->countProgress($user['NIM']);
            $totalBerkas = $this->userModel->countBerkas();
            $users[$key]['progress_bar'] = [
                'total' => $totalBerkas,
                'status_2' => ($progress['status_2'] / $totalBerkas) * 100,
                'status_3' => ($progress['status_3'] / $totalBerkas) * 100,
                'status_4' => ($progress['status_4'] / $totalBerkas) * 100,
            ];
        }
        require 'views/admin/data.php';
    }
}
?>
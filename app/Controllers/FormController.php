<?php
class FormController
{
    private $formModel;

    public function __construct(Form $formModel)
    {
        $this->formModel = $formModel;
    }

    public function renderCards()
    {
        $nim = $_SESSION['user']['nim'];

        $berkas = $this->formModel->getBerkas();
        
        $cardStatuses = [];
        foreach ($berkas as $key => $berkasData) {
            $status = $this->formModel->getStatus($nim, $berkasData['ID_BERKAS']);
            $filePath = $this->formModel->getFile($nim, $berkasData['ID_BERKAS']);
            $cardStatuses[] = [
                'fileName' => $key,
                'id_berkas' => $berkasData['ID_BERKAS'],
                'label' => $berkasData['NAMA_BERKAS'],
                'status' => $status,
                'file_path' => '../' . $filePath
            ];
        }

        require 'views/mahasiswa/dataku.php';
    }

    public function renderTables() {
        $forms = $this->formModel->getAll();
        require 'views/admin/data.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $label = $_POST['label'];
            $id_berkas = $_POST['id_berkas'];

            if (isset($_FILES['uploaded_file']) && $_FILES['uploaded_file']['error'] == UPLOAD_ERR_OK) {
                $fileTmpPath = $_FILES['uploaded_file']['tmp_name'];
                $fileName = uniqid() . "_" . $_FILES['uploaded_file']['name'];
                $filePath = 'uploads/' . basename($fileName); 

                move_uploaded_file($fileTmpPath, $filePath);
            }
        
            $nim = $_SESSION['user']['nim'];
            $this->formModel->create($nim, 2,$id_berkas, $filePath);
            header('Location: /users/dataku');
        } else {
            echo "No file submitted.";
        }
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $label = $_POST['label'];

            if (isset($_FILES['uploaded_file']) && $_FILES['uploaded_file']['error'] == UPLOAD_ERR_OK) {
                $fileTmpPath = $_FILES['uploaded_file']['tmp_name'];
                $fileName = uniqid() . "_" . $_FILES['uploaded_file']['name'];
                $filePath = 'uploads/' . basename($fileName); 

                move_uploaded_file($fileTmpPath, $filePath);
            }
        
            $userId = $_SESSION['user']['id'];
            $this->formModel->update($userId, $label,$filePath, 'Menunggu Verifikasi');
            header('Location: /users/dataku');
        } else {
            echo "No file submitted.";
        }
    }

    public function renderAdminVerification($id) {
        
        $filesToVerify = $this->formModel->verificationPending($id);

        $role = $_SESSION['user']['role'];

        $allowedFileNames = [];
    
        if ($role == 'admin_jurusan') {
            $allowedFileNames = [
                'Alat / Program / Aplikasi',
                'Laporan',
                'Pernyataan Publikasi'
            ];
        } elseif ($role == 'admin_prodi') {
            $allowedFileNames = [
                'Distribusi Laporan Skripsi',
                'Distribusi Laporan Magang',
                'Bebas Kompensasi',
                'Scan TOEIC'
            ];
        }
    
        $filteredFiles = array_filter($filesToVerify, function ($file) use ($allowedFileNames) {
            return in_array($file['FILE_NAME'], $allowedFileNames);
        });

        require 'views/admin/verification.php'; 
    }
    public function verifyForm() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userId = $_POST['userId'];
            $fileName = $_POST['fileName'];
            $action = $_POST['action'];
    
            if ($action === 'approve') {
                $this->formModel->updateStatus($userId, $fileName, "ACC");
            } elseif ($action === 'decline') {
                $this->formModel->updateStatus($userId, $fileName, "Ditolak");
            }
    
            header('Location: /users/files/'.$userId); 
            exit();
        }
    }

    public function cetak() {
        require 'views/mahasiswa/cetak.php'; 
    }
    
}

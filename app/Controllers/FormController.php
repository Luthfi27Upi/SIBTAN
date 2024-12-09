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
        $userId = $_SESSION['user']['id'];

        $cards = [
            "APA" => "Alat / Program / Aplikasi",
            "LAPORAN" => "Laporan",
            "PUBLIKASI" => "Pernyataan Publikasi",
            "SKRIPSI" => "Distribusi Laporan Skripsi",
            "MAGANG" => "Distribusi Laporan Magang",
            "KOMPEN" => "Bebas Kompensasi",
            "TOEFL" => "Scan TOEIC",
        ];

        $cardStatuses = [];
        foreach ($cards as $key => $label) {
            $status = $this->formModel->checkForm($userId, $label);
            $filePath = $this->formModel->getFile($userId, $label);
            $cardStatuses[] = [
                'fileName' => $key,
                'label' => $label,
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

            if (isset($_FILES['uploaded_file']) && $_FILES['uploaded_file']['error'] == UPLOAD_ERR_OK) {
                $fileTmpPath = $_FILES['uploaded_file']['tmp_name'];
                $fileName = uniqid() . "_" . $_FILES['uploaded_file']['name'];
                $filePath = 'uploads/' . basename($fileName); 

                move_uploaded_file($fileTmpPath, $filePath);
            }
        
            $userId = $_SESSION['user']['id'];
            $this->formModel->create($userId, $label,$filePath, 'Menunggu Verifikasi');
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
    
}

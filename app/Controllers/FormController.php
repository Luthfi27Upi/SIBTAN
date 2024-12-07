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
            "PKL" => "Laporan Magang / PKL",
            "DistribusiSkripsi" => "Distribusi Laporan Skripsi",
            "DistribusiPKL" => "Distribusi Laporan Magang / PKL",
            "Kompen" => "Pernyataan Bebas Kompen",
            "TOEFL" => "Scan TOEIC / TOEFL"
            
        ];

        $cardStatuses = [];
        foreach ($cards as $key => $label) {
            $status = $this->formModel->checkForm($userId, $key);
            $filePath = $this->formModel->getFile($userId, $key);
            $cardStatuses[] = [
                'fileName' => $key,
                'label' => $label,
                'status' => $status,
                'file_path' => '../' . $filePath
            ];
        }

        require 'views/mahasiswa/dataku.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $label = $_POST['label'];
            $file = $_FILES['uploaded_file'];

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
    public function renderAdminVerification() {
        
        $filesToVerify = $this->formModel->verificationPending();

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
    
            
            header('Location: /actionVerify'); 
            exit();
        }
    }
}

<?php
class CetakController
{
    private $cetakModel;

    public function __construct(Cetak $cetakModel)
    {
        $this->cetakModel = $cetakModel;
    }

    public function renderCards() {
        // Validasi user
        if (!isset($_SESSION['user']['id'])) {
            throw new Exception('User tidak ditemukan: Session tidak diatur dengan benar');
        }

        $userId = (int) $_SESSION['user']['id'];

        if (!$userId) {
            throw new Exception('User tidak ditemukan: id tidak valid');
        }

        // Get mahasiswa data from the model
        $dataMahasiswa = $this->cetakModel->getMahasiswaById($userId);

        // Cek apakah data mahasiswa ditemukan
        if (!$dataMahasiswa) {
            throw new Exception('Data mahasiswa tidak ditemukan');
        }

        // Menyusun array mahasiswa dengan fungsi htmlspecialchars untuk keamanan
        $mahasiswa = [
            'id' => htmlspecialchars($dataMahasiswa['ID_MHS']),
            'username' => htmlspecialchars($dataMahasiswa['USERNAME']),
            'nim' => htmlspecialchars($dataMahasiswa['NIM']),
            'jurusan' => htmlspecialchars($dataMahasiswa['JURUSAN']),
            'email' => htmlspecialchars($dataMahasiswa['EMAIL'])
        ];

        // Include the view file
        include 'views/mahasiswa/cetak.php';

        // Return the mahasiswa data
        return $mahasiswa;
    }
}
?>
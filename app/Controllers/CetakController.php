<?php
class CetakController
{
    private $cetakModel;

    public function __construct(Cetak $cetakModel)
    {
        $this->cetakModel = $cetakModel;
    }

    public function renderCards() {
        if (!isset($_SESSION['user']['nim'])) {
            throw new Exception('User tidak ditemukan: Session tidak diatur dengan benar');
        }

        $userId = (int) $_SESSION['user']['nim'];

        if (!$userId) {
            throw new Exception('User tidak ditemukan: id tidak valid');
        }

        // mengambambil data mahasiswa dari form model
        $dataMahasiswa = $this->cetakModel->getMahasiswaById($userId);

        // Cek apakah data mahasiswa ditemukan
        if (!$dataMahasiswa) {
            throw new Exception('Data mahasiswa tidak ditemukan');
        }

        $mahasiswa = [
            'username' => htmlspecialchars($dataMahasiswa['USERNAME']),
            'nim' => htmlspecialchars($dataMahasiswa['NIM']),
            'prodi' => htmlspecialchars($dataMahasiswa['PRODI']),
            'email' => htmlspecialchars($dataMahasiswa['EMAIL'])
        ];

        //memindahkan ke form cetak
        include 'views/mahasiswa/cetak.php';

        // Return mahasiswa data
        return $mahasiswa;
    }
}
?>
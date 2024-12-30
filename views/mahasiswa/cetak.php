<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Format Tugas Akhir</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .header {
            display: flex; 
            align-items: center; 
            margin-bottom: 20px;
        }
        .header img {
            width: 100px; 
            margin-right: 20px; 
        }
        .content {
            border: 1px solid #000;
            padding: 20px;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            text-decoration: underline;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table, .table th, .table td {
            border: 1px solid #000;
        }
        .table th, .table td {
            padding: 10px;
            text-align: left;
        }
        .table input[type="checkbox"] {
            width: 20px;
            height: 20px;
        }
        
    </style>
</head>
<body>

    <div class="header">
        <img src="/resources/img/LogoPolinema.png" alt="Logo"> 
        <h1 style="text-align: center">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, Riset, dan Teknologi</h1>
    </div>

    <h2 style="text-align: center">JURUSAN TEKNOLOGI INFORMASI</h2>
    <h2 style="text-align: center">Politeknik Negeri Malang</h2>
    
    <div class="content">
        <div class="section">
            <h2 style="text-align:center;">BEBAS TANGGUNGAN JURUSAN</h2>
            <p>Nama: <?php echo htmlspecialchars($mahasiswa['username'] ?? 'Tidak Ditemukan'); ?></p>
            <p>NIM: <?php echo htmlspecialchars($mahasiswa['nim'] ?? 'Tidak Ditemukan'); ?></p>
            <p>Program Studi: <?php echo htmlspecialchars($mahasiswa['prodi'] ?? 'Tidak Ditemukan'); ?></p>
        </div>

        <div class="section">
            <h2>TUGAS AKHIR</h2>
            <table class="table">
                <tr>
                    <th>No.</th>
                    <th>SUB BAGIAN</th>
                    <th>PENANGGUNG JAWAB</th>
                    <th>CHECKLIST</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Alat/Program/Aplikasi</td>
                    <td>
                        Tanggal :
                        <?php 
                        $tanggalHariIni = date('l, d F Y'); 
                        echo $tanggalHariIni; ?>
                    </td>
                    <td><input type="checkbox" checked disabled></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Laporan</td>
                    <td>Anggi Petra W.P., A.Md.</td>
                    <td><input type="checkbox" checked disabled></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Penyampaian Publikasi</td>
                    <td>TTD :</td>
                    <td><input type="checkbox" checked disabled></td>
                </tr>
            </table>
        </div>

        <div class="section">
            <h2>ADMINISTRASI PROGRAM STUDI</h2>
            <table class="table">
                <tr>
                    <th>No.</th>
                    <th>SUB BAGIAN</th>
                    <th>PENANGGUNG JAWAB</th>
                    <th>CHECKLIST</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Distribusi Laporan Skripsi</td>
                    <td>
                        Tanggal :
                        <?php 
                        $tanggalHariIni = date('l, d F Y'); 
                        echo $tanggalHariIni; ?>
                        </td>
                    <td><input type="checkbox" checked disabled></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Distribusi Laporan Magang</td>
                    <td>Sri Warhiyati, S.S.</td>
                    <td><input type="checkbox" checked disabled></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bebas Kompensasi</td>
                    <td>TTD :</td>
                    <td><input type="checkbox" checked disabled></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Scan TOEIC</td>
                    <td></td>
                    <td><input type="checkbox" checked disabled></td>
                </tr>
            </table>
        </div>

        <p>Malang,<?php 
                        $tanggalHariIni = date('l, d F Y'); 
                        echo $tanggalHariIni; ?></p>
        <p>Ketua Jurusan Teknologi Informasi</p>
        <p>Dr. Eng. Rosa Andrie Asmara, S.T., M.T.</p>
        <p>NIP: 198010102005011001</p>
    </div>
</body>
</html>

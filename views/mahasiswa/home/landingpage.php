<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM BEBAS TANGGUNGAN</title>
    <link rel="stylesheet" href="../resources/css/header.css">
    <style>
        html, body {
            height: 100%; 
            margin: 0; 
        }

        body {
            display: flex;
            flex-direction: column; 
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #0E4088;
            color: #333;
        }

        header {
            background: url('../img/RuanganDashboard.png') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px; 
            text-align: center;
            position: relative;
        }

        header h1 {
            font-size: 3.5em;
            margin-bottom: 10px;
            color: #FFE492;
        }

        header p {
            font-size: 1.5em;
            font-weight: bold;
            color: #FFE492;
        }

        .content {
            flex: 1;
            padding: 27px 0;
            background-color: white;
            margin-top: auto;
        }

        .content h4 {
            font-size: 2em;
            text-align: center;
            margin-bottom: 30px;
        }

        .content p {
            font-size: 1.2em;
            max-width: 800px;
            margin: 0 auto;
            text-align: justify;
        }

        footer {
            background-color: #0E4088;
            color: white;
            text-align: center;
            font-size: 0.8em;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <header>
        <div class="container">
            <h1>Sistem Bebas Tanggungan</h1>
            <p>Jurusan Teknologi Informasi</p>
        </div>
    </header>

    <main class="content">
        <div class="container">
            <h4>Profil Sistem Bebas Tanggungan</h4>
            <p>Sistem informasi bebas tanggungan tugas akhir adalah sistem yang dirancang untuk melakukan pengolahan data validasi bebas tanggungan melalui software sehingga proses kegiatan validasi surat dapat dikelola dengan baik sehingga menjadi informasi yang bermanfaat untuk manajemen perguruan tinggi dan pengambilan surat untuk mahasiswa akhir.</p>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 SiBTAN JTI Polinema.</p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM BEBAS TANGGUNGAN</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
        }

        nav {
            background-color: #0E4088;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1px 20px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 5;
            color: white;
        }

        nav .logo {
            color: white;
            font-size: 1.2em; 
            font-weight: bold;
            text-transform: uppercase;
            display: flex;
            align-items: center; 
        }

        nav .logo img {
            height: 40px;
            margin-right: 10px;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-left: 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 0.8em;
            padding: 5px;
            border-radius: 20px;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #5db0d0;
        }

        nav ul li .active {
            background-color: #D3D3D3;
        }

        main {
            margin-top: 40px; 
            padding: 20px;
            display: flex;
            flex-direction: column; 
            gap: 20px;
            margin-bottom: 1px;
        }

        .title-with-icon {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 1px;
        }

        .title-with-icon img {
            width: 40px;
            height: 40px;
        }

        .title-with-icon h1 {
            font-size: 1.3em;
            color: #0E4088;
        }

        .content-section {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .left-column {
            flex: 1;
            padding: 20px;
            margin-bottom: 20px;
        }

        .left-column ul {
            list-style: none;
        }

        .left-column ul li {
            margin-bottom: 10px;
            color: #0E4088;
            font-size: 1em;
            padding: 5px 15px 1px 15px;
            background-color:#D3E7FD;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.2s ease, background-color 0.3s ease;
        }

        .left-column ul li:hover {
            transform: translateY(-3px);
            background-color: #D3E8F5;
        }
        .description {
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #F0F8FF;
            border-radius: 8px;
            display: none;
        }

        .right-column {
            flex: 1;
        }

        .right-column img {
            width: 50%;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #0E4088;
            color: white;
            padding: 10px 10px;
            text-align: center;
            font-size: 0.9em;
        }

        @media (max-width: 768px) {
            .content-section {
                flex-direction: column;
            }

            .left-column, .right-column {
                flex: 1;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="../img/designLogo.png" alt="Logo">
            SIBTAN
        </div>
        <ul>
            <li><a href="#" class="nav-link">Home</a></li>
            <li><a href="#" class="nav-link">Informasi</a></li>
            <li><a href="#" class="nav-link">Menu</a></li>
            <li><a href="#" class="nav-link active">About</a></li>
        </ul>
    </nav>

    <main>
        <div class="title-with-icon">
            <img src="../img/call.png" alt="Tentang SIBTAN">
            <h1 class="page-title">Tentang SIBTAN</h1>
        </div>

        <div class="content-section">
            <div class="left-column">
                <ul>
                    <li onclick="toggleDescription('pendahuluan')">Pendahuluan</li>
                    <div id="pendahuluan" class="description">
                        Sistem informasi bebas tanggungan tugas akhir dirancang untuk pengolahan data validasi bebas tanggungan secara online.
                    </div>

                    <li onclick="toggleDescription('tujuan')">Tujuan</li>
                    <div id="tujuan" class="description">
                        <p>Memudahkan admin prodi dan jurusan untuk verifikasi dokumen mahasiswa akhir.</p>
                        <p>Mempermudah pengurusan surat bebas tanggungan bagi mahasiswa yang berada di luar kota.</p>
                    </div>

                    <li onclick="toggleDescription('ketentuan')">Ketentuan </li>
                    <div id="ketentuan" class="description">
                        <p>- Diwajibkan mengunggah foto formal pada masing-masing akun.</p>
                        <p>- Diberitahukan kepada seluruh mahasiswa bahwa data syarat untuk pengajuan surat bebas tanggungan dapat diunggah di website SiBTAN adalah daftar kegiatan yang diikuti selama masa studi di Politeknik Negeri Malang.</p>
                        <p>- Pertanyaan lebih lanjut dapat menghubungi call center pada website SiBeTa.</p>
                        <p>- Untuk upload Scan TOEIC dengan skor minimal 450 untuk Diploma.</p>
                        <p>- Apabila sudah mengikuti 1x tes gratis Polinema dan 1x ujian mandiri berbayar, namun nilai masih kurang, maka akan diberikan surat keterangan dari UPA Bahasa (Grapol Lantai 3).</p>
                    </div>

                    <li onclick="toggleDescription('info')">Info Data</li>
                    <div id="info" class="description">
                        <p>- Persiapkan berkas yang akan di-upload dan pastikan sudah benar.</p>
                        <p>- Scan file dengan format PDF/PNG dan pastikan gambar sudah jelas.</p>
                        <p>- Ukuran file maksimal 3MB.</p>
                        <p>- Pastikan file sudah terunggah dengan sukses.</p>
                        <p>- Setelah file sukses terunggah, semua file akan diverifikasi oleh admin. Untuk verifikasi akan membutuhkan waktu lebih lama.</p>
                        <p>- Mohon untuk aktif mengecek website SiBTAN setelah melakukan upload dokumen.</p>
                    </div>

                    <li onclick="toggleDescription('call')">Call-Center</li>
                    <div id="call" class="description">
                        <p>Hubungi call center kami di:</p>
                        <p><strong>Telepon:</strong> 0800-123-4567</p>
                        <p><strong>Email:</strong> support@sibtan.ac.id</p>
                    </div>
                </ul>
            </div>

            <div class="right-column">
                <img src="../img/gedung.jpg" alt="Gedung SIBTAN">
            </div>
        </div>
    </main>

    <footer>
        &copy; 2024 SiBTAN JTI Polinema. 
    </footer>
    <script>
        function toggleDescription(id) {
            const element = document.getElementById(id);
            element.style.display = element.style.display === "none" || element.style.display === "" ? "block" : "none";
        }
    </script>
</body>
</html>

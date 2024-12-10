<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM BEBAS TANGGUNGAN</title>
    <style>
        /* Default */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
            display: flex; 
            flex-direction: column;
            min-height: 100vh; 
        }

        /* Navbar */
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

        /* Main */
        main {
            flex: 1; 
            padding: 85px 10px 10px 10px;
            background-color: white;
        }

        /* Info Container */
        .info-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        /* Info Section */
        .info-section, .info-section2 {
            flex: 1 1 48%; /* jarak antar box 48% */
            background-color: #E9F4FB;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 0px;
        }

        .info-text h2 {
            margin-bottom: 15px;
            color: #0E4088;
            font-size: 1.5em; 
            text-align: center;
        }

        .info-text ol {
            margin-left: 20px;
        }

        .info-text ol li {
            margin-bottom: 2px;
            font-size: 0.8em; 
        }

        /* Footer */
        footer {
            background-color: #0E4088;
            color: white;
            padding: 10px 10px;
            text-align: center;
            font-size: 0.9em;
        }

        /* Layout responsive */
        @media (max-width: 768px) {
            .info-section, .info-section2 {
                flex: 1 1 100%; /* Satu kolom di layar kecil */
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include 'header.php'; ?>

    <main>
        <div class="info-container">
            <!-- Info Section 1 -->
            <section class="info-section">
                <div class="info-text">
                    <h2>Pemberitahuan!</h2>
                    <ol>
                        <li>Diwajibkan mengunggah foto formal pada masing-masing akun.</li>
                        <li>Diberitahukan kepada seluruh mahasiswa bahwa data syarat untuk pengajuan surat bebas tanggungan dapat diunggah di website SiBTaN adalah daftar kegiatan yang diikuti selama masa studi di Politeknik Negeri Malang.</li>
                        <li>Pertanyaan lebih lanjut dapat menghubungi call center pada website SiBTaN.</li>
                        <li>Untuk upload scan TOEIC dengan skor minimal 450 untuk Diploma.</li>
                        <li>Apabila sudah mengikuti 1x tes gratis Polinema dan 1x ujian mandiri berbayar namun nilai masih kurang, maka akan diberikan surat keterangan dari UPA Bahasa (Grapol Lantai 3).</li>
                    </ol>
                </div>
            </section>

            <!-- Info Section 2 -->
            <section class="info-section2">
                <div class="info-text">
                    <h2>Tata Cara Upload:</h2>
                    <ol>
                        <li>Persiapkan berkas yang akan di-upload dan pastikan sudah benar.</li>
                        <li>Scan file dengan format PDF/PNG dan pastikan gambar sudah jelas.</li>
                        <li>Ukuran file maksimal 3MB.</li>
                        <li>Pastikan file sudah terunggah dengan sukses.</li>
                        <li>Setelah file sukses terunggah, semua file akan diverifikasi oleh admin. Untuk verifikasi akan membutuhkan waktu lebih lama.</li>
                        <li>Mohon untuk aktif mengecek website SiBTAN setelah melakukan upload dokumen.</li>
                    </ol>
                </div>
            </section>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 SiBTAN JTI Polinema.</p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Informasi Bebas Tanggungan</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <style>
    /* Sidebar styling */
    h5{
      margin-top: -20px; /* mengatur jarak logo dan sibtan */
    }

    header {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      padding: 10px 20px;
      background-color: #CCE5FF;
      
    }

    header .user {
      font-weight: bold;
      color: #2b74c4;
    }

    /* Content  */
    .content {
      margin-left: 200px;
      flex-grow: 1;
    }

    .title-with-icon {
      display: flex;
      align-items: center;
      gap: 10px; /* Jarak antara gambar dan teks */
      margin-top: 20px;
      margin-left: 80px;
    }

    .page-title {
      color: #2B74C4;
      font-weight: bold;
      font-size: 26px;
    }

    .info {
      background: #F5F5F5;
      padding: 20px 30px;
      border-radius: 10px;
      margin-top: 20px;
      margin-left: 80px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      color: #043873;
      max-width: 1050px;
    }

    .info li {
      margin-bottom: 10px;
    }

  </style>
</head>
<body class="d-flex flex-column min-vh-100">
  <div class="d-flex flex-grow-1">
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <div class="content">
      <header>
        <img src="../img/logouser.jpg" alt="User Avatar" style="width: 25px; height: 25px;  border-radius: 50%;margin-right: 10px;">
        <div class="user">Lutfi Triaswangga</div>
      </header>
      <main>
        <div class="title-with-icon">
          <img src="../img/logoinfodata.jpg" alt="Info Icon" style="width: 40px; height: 40px;  border-radius: 50%;margin-right: 10px;">
          <h1 class="page-title">INFO DATA</h1>
        </div>
        <div class="info">
          <ol>
            <li>Berkas yang akan di-upload sudah mendapat ACC dari dosen atau admin terkait.</li>
            <li>Persiapkan berkas yang akan di-upload dan pastikan sudah benar.</li>
            <li>Scan file dengan format PDF/PNG dan pastikan gambar sudah jelas.</li>
            <li>Ukuran file maks 3MB.</li>
            <li>Pastikan file sudah terunggah dengan sukses.</li>
            <li>Setelah file sukses terunggah, semua file akan diverifikasi oleh admin. Untuk verifikasi akan membutuhkan sedikit waktu lebih lama.</li>
            <li>Mohon untuk aktif mengecek website SiBTaN setelah melakukan upload dokumen.</li>
            <li>Pemberitahuan!</li>
            <li>Diwajibkan mengunggah foto formal pada masing-masing akun.</li>
            <li>Diberitahukan kepada seluruh mahasiswa bahwa data syarat untuk pengajuan surat bebas tanggungan dapat diunggah di website SiBTaN adalah daftar kegiatan yang diikuti selama masa studi di Politeknik Negeri Malang.</li>
            <li>Pertanyaan lebih lanjut dapat menghubungi call center pada website SiBTaN.</li>
            <li>Untuk upload scan TOEIC dengan skor minimal 450 untuk Diploma 4. Apabila sudah mengikuti 1x tes gratis Polinema dan 1x ujian mandiri berbayar namun nilai masih kurang,
              maka akan diberikan surat keterangan dari UPA Bahasa (Grapol Lantai 3).</li>
          </ol>
        </div>
      </main>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
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
    /* Sidebar  */
    .sidebar {
      background: linear-gradient(to bottom, #021a44, #043873, #4fa3ff); 
      color: white;
      width: 200px;
      height: 100vh;
      position: fixed;
      display: flex;
      flex-direction: column;
      overflow-y: auto;
      scrollbar-width: thin;
    }

    .sidebar .nav-link {
      color: white;
      font-weight: 500;
      padding: 10px 20px;
      border-radius: 8px;
    }

    .sidebar .nav-link.active, .sidebar .nav-link:hover {
      background-color: #FFE492; 
      color: #043873;
    }

    .sidebar .logo {
      width: 80px;
      margin-top: 10px;
    }

    .sidebar-footer {
      margin-top: auto;
      font-size: 0.8rem;
      text-align: center;
      padding: 10px 0;
      color: white;
    }

    .sidebar .nav-item {
      margin-bottom: 15px;
    }

    /* Header */
    header {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      padding: 10px 20px;
      background-color: #CCE5FF;
      border-radius: 30px;
    }

    header .user {
      font-weight: bold;
      color: #2B74C4;
      margin-left: 10px;
    }

    /* Main Content */
    .content {
      margin-left: 220px;
      padding: 20px;
    }

    .title-with-icon {
      display: flex;
      align-items: center;
      gap: 20px;
      margin-top: 20px;
    }

    .page-title {
      color: #2B74C4;
      font-weight: bold;
      font-size: 26px;
    }

    .cointainer img {
      width: 100%;
      border-radius: 8px;
    }

    .cointainer {
      margin-top: 20px;
    }

    /* Call Center Info */
    .info-section {
      background-color: #f8f9fa;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
    }


    .info-section p {
      color: #043873;
      font-size: 14px;
    }

    /* Scroll Messages */
    .messages-container {
      max-height: 400px;
      overflow-y: auto;
    }

    .message-item {
      background-color: white;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 10px;
      margin-bottom: 10px;
    }

    /* Responsive*/
    @media (max-width: 768px) {
      .sidebar {
        width: 100px;
      }
      .content {
        margin-left: 100px;
      }
      .page-title {
        font-size: 20px;
      }
    }
  </style>
</head>

<body>
  <div class="d-flex">
    <!-- Sidebar -->
    <nav class="sidebar">
      <div class="text-center py-4">
        <img src="../img/designLogo.png" alt="Logo SiBTAN" class="logo">
        <h5>SiBTAN</h5>
      </div>
      <ul class="nav flex-column px-2">
        <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Profile</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Tata Cara</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Dataku</a></li>
        <li class="nav-item"><a href="#" class="nav-link active">Info Data</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Call Center</a></li>
      </ul>
      <div class="sidebar-footer">
        © 2024 SiBTAN JTI Polinema.
      </div>
    </nav>

    <!-- content -->
    <div class="content">
      <!-- header -->
      <header>
        <img src="../img/logouser.jpg" alt="User Avatar" style="width: 30px; height: 30px; border-radius: 50%;">
        <div class="user">Lutfi Triaswangga</div>
      </header>

      <!-- Judul -->
      <div class="title-with-icon">
        <img src="../img/logoinfodata.jpg" alt="Call Center" style="width: 40px; height: 40px;">
        <h1 class="page-title">INFO DATA</h1>
      </div>

      <!-- Info Call Center -->
      <div class="cointainer mt-4">
        <div class="row">
          <div class="col-md-8">
            <div class="info-section">
            <h2>Pemberitahuan!</h2>
                    <ol>
                        <li>Diwajibkan mengunggah foto formal pada masing-masing akun.</li>
                        <li>Diberitahukan kepada seluruh mahasiswa bahwa data syarat untuk pengajuan surat bebas tanggungan dapat diunggah di website SiBTaN adalah daftar kegiatan yang diikuti selama masa studi di Politeknik Negeri Malang.</li>
                        <li>Pertanyaan lebih lanjut dapat menghubungi call center pada website SiBTaN.</li>
                        <li>Untuk upload scan TOEIC dengan skor minimal 450 untuk Diploma.</li>
                        <li>Apabila sudah mengikuti 1x tes gratis Polinema dan 1x ujian mandiri berbayar namun nilai masih kurang, maka akan diberikan surat keterangan dari UPA Bahasa (Grapol Lantai 3).</li>
                    </ol>
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
          </div>

          <div class="col-md-4">
            <img src="../img/gedung.jpg" alt="Gedung" class="img-fluid rounded">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

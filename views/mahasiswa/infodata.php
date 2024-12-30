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

    .content {
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

    /* Untuk Scroll*/
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

    /* Responsive */
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
    <?php include 'sidebar.php'; ?>

    <!-- Content -->
    <div class="content">
      <!-- Header -->
      <header>
        <img src="../img/logouser.jpg" alt="User Avatar" style="width: 25px; height: 25px;  border-radius: 50%;margin-right: 10px;">
        <div class="user"><?php echo $_SESSION['user']['username'] ?></div>
      </header>

      <!-- Judul -->
      <div class="title-with-icon">
        <img src="../img/logoinfodata.jpg" alt="Call Center" style="width: 40px; height: 40px;">
        <h1 class="page-title">INFO DATA</h1>
      </div>

      <div class="container mt-4">
        <div class="row d-flex align-items-stretch">
          <!-- Info Section -->
          <div class="col-md-7">
            <div class="info-section h-100">
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
                <li>Untuk upload scan TOEIC dengan skor minimal 450 untuk Diploma 4. Apabila sudah mengikuti 1x tes gratis Polinema dan 1x ujian mandiri berbayar namun nilai masih kurang, maka akan diberikan surat keterangan dari UPA Bahasa (Grapol Lantai 3).</li>
              </ol>
            </div>
          </div>

          <!-- Image Section -->
          <div class="col-md-5 d-flex">
            <img src="../img/gedung.jpg" alt="Gedung" class="img-fluid rounded h-100" style="object-fit: cover;">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

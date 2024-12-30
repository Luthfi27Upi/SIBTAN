<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Informasi Bebas Tanggungan</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link rel="stylesheet" href="/resources/css/admin/infodata.css">
</head>
<body class="d-flex flex-column min-vh-100">
  <div class="d-flex flex-grow-1">
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Content -->
    <div class="content flex-grow-1">

      <?php include 'header.php'; ?>
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
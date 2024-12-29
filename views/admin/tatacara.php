<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Informasi Bebas Tanggungan</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link rel="stylesheet" href="/resources/css/admin/tatacara.css">
</head>

<body class="d-flex flex-column min-vh-100">
  <div class="d-flex flex-grow-1">
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Content -->
    <div class="content flex-grow-1">

      <?php include 'header.php'; ?>
      <main>
        <div class="card">
          <h1>Tata Cara Upload:</h1>
          <ol>
            <li>Persiapkan berkas yang akan di upload dan pastikan sudah benar.</li>
            <li>Scan file dengan format pdf/png dan pastikan gambar sudah jelas</li>
            <li>Ukuran file maks 3MB.</li>
            <li>Pastikan file sudah terunggah dengan sukses</li>
            <li>Setelah file sukses terunggah semua file akan di verifikasi oleh admin.
              Untuk verifikasi akan membutuhkan sedikit waktu lebih lama.</li>
            <li>Mohon untuk aktif mengecek website SiBTAN setelah melakukan upload dokumen.</li>
          </ol>
        </div>
      </main>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
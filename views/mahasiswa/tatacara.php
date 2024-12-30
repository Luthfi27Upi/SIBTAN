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
    h5{
      margin-top: -20px;/* mengatur jarak logo dan sibtan */
    }

    /* Content Styling */
    .content {
      flex-grow: 1;
      
    }

    .content .card {
    background-color: #CCE5FF; /* Latar biru muda */
    border-radius: 15px; /* Sudut melingkar */
    padding: 80px;
    margin-top: 40px;
    margin-left: 80px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Bayangan */
    color: #043873; /* Teks biru gelap */
    max-width: 1050px;
    text-align: left;
  }

  .content .card h1 {
    font-weight: bold;
    text-align: center;
    color: #043873;
    margin-bottom: 20px;
  }

  .content .card ol {
    padding-left: 20px; /* Untuk list indent */
    color: #043873;
    font-size: 1.5rem;
  }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">
  <div class="d-flex flex-grow-1">
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="content">
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

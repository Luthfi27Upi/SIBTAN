<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Informasi Bebas Tanggungan</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <style>
    body {
      background-color: #f8f9fa; /* Warna latar belakang */
    }

    header {
      background-color: #CCE5FF; /* Warna biru muda */
      text-align: center; 
      color: #043873; /* Warna teks biru gelap */
      font-size: 1.5rem;
      font-weight: 500;
      padding: 20px; /* Mengatur ruang di dalam elemen */
      border-radius: 10px; /* Sudut melingkar */
      margin-bottom: 20px; /* Jarak bawah header */
    }

    .content {
      margin: 0 auto; /* Centering content */
      max-width: 800px; /* Lebar maksimum */
      padding: 20px; /* Ruang di dalam konten */
      background-color: #ffffff; /* Warna latar belakang konten */
      border-radius: 10px; /* Sudut melingkar */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan */
    }

    .form-label {
      font-weight: bold;
      color: #043873;
    }

    .form-control {
      background-color: #F5F5F5;
    }

    .bg-primary {
      background: linear-gradient(to bottom, #021a44, #043873, #4fa3ff);
      text-align: center; 
      color: #fff;
      border-radius: 10px;
      padding: 20px; /* Padding yang lebih kecil */
      margin-top: 20px; /* Jarak atas */
    }

    .bg-primary img {
      width: 150px;
      height: 150px;
      margin-bottom: 20px; /* Jarak bawah gambar */
    }

    .identitas {
      color: #fff;
      font-weight: bold;   
    }

    .back-link {
      margin-top: 20px; /* Jarak atas untuk link kembali */
      text-align: center; /* Centering link */
    }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">
  <header>
    Sistem Informasi Bebas Tanggungan
  </header>
  <div class="content">
    <p class="text-center">
      Berikut adalah profil <strong>Anda</strong>
    </p>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <form>
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="nama-lengkap" class="form-label">Nama Lengkap:</label>
                <input type="text" class="form-control" id="nama-lengkap" name="nama-lengkap" value="<?php echo htmlspecialchars($user['USERNAME']); ?>" disabled>
              </div>
              <div class="col-md-6">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo htmlspecialchars($user['ALAMAT']); ?>" disabled>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="nim" class="form-label">NIM:</label>
                <input type="text" class="form-control" id="nim" name="nim" value="<?php echo htmlspecialchars($user['NIM']); ?>" disabled>
              </div>
              <div class="col-md-6">
                <label for="ttl" class="form-label">Tempat, Tanggal Lahir:</label>
                <input type="text" class="form-control" id="ttl" name="ttl" value="<?= htmlspecialchars($user['tempat_lahir']).',  '.$user['tanggal_lahir'] instanceof DateTime ? htmlspecialchars($user['tanggal_lahir']->format('Y-m-d')) : htmlspecialchars($user['tanggal_lahir']); ?>" disabled>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="no-telp" class="form-label">No. Telp:</label>
                <input type="text" class="form-control" id="no-telp" name="no-telp" value="<?php echo htmlspecialchars($user['NO_HP']); ?>" disabled>
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user['EMAIL']); ?>" disabled>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="jenis_kelamin" class="form-label">Jenis kelamin:</label>
                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $user['JENIS_KELAMIN'] ? 'Laki-laki' : 'Perempuan'; ?>" disabled>
              </div>
            </div>
          </form>
        </div>

        <!-- Profile Section -->
        <div class="col-md-4">
          <div class="bg-primary">
            <img src="/<?= htmlspecialchars($user['image']); ?>" alt="User Avatar" class="rounded-circle mb-4">
            <div class="identitas">
              <span><?= htmlspecialchars($user['USERNAME']); ?></span>
              <br>
              <span><?= htmlspecialchars($user['NIM']); ?></span>
              <br>
              <span><?= htmlspecialchars($user['ROLE']); ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="back-link">
      <a href="/users">Back to Users</a>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

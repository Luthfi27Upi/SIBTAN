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
    /* Sidebar */
    h5{
      margin-top: -20px; /* mengatur jarak logo dan sibtan */
    }

    header {
      background-color: #CCE5FF; /* Warna biru muda */
      text-align: center; 
      color: #043873; /* Warna teks biru gelap */
      font-size: 1.5rem;
      font-weight: 500;
      padding: 15px; /* mengatur ruang didalam elemen */
      border-radius: 40px; /* Sudut melingkar */
      width: 95%; /* Lebar header agar proporsional */

    }

    /* Main Content styling */
    .content {
       margin-bottom: 20px;
       margin-left: 250px
    }

    .content p {
      background-color: #CCE5FF; /* Warna biru muda */
      text-align: center; 
      color: #043873; /* Warna teks biru gelap */
      padding: 10px; /* mengatur ruang didalam elemen */
      border-radius: 40px; /* Sudut melingkar */
      width: 58%; /* Lebar agar proporsional */
      margin-top: 40px;
      margin-bottom: 50px;
    }

    /* Form Section */
    form .form-label {
      font-weight: bold;
      color: #043873;
    }

    .form-control{
      background-color: #F5F5F5;
    }

    /* Profile Section */
    .bg-primary {
      background: linear-gradient(to bottom, #021a44, #043873, #4fa3ff);
      text-align: center; 
      color: #fff;
      border-radius: 10px;
      padding: 80px;
    }

    .bg-primary img {
      width: 150px;
      height: 150px;
      margin-bottom: 50px;
    }

    .identitas {
      color: #fff;
      font-weight: bold;   
    }

  </style>
</head>
<body class="d-flex flex-column min-vh-100">
  <div class="d-flex flex-grow-1">
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
  </div>
  <!-- Main Content -->
  <div class="content flex-grow-1">
      <header>
        Sistem Informasi Bebas Tanggungan
      </header>
      <p>
        Isi Identitas Anda dengan Lengkap, Kemudian Pilih Tombol <strong>Simpan!</strong>
      </p>
        <div class="container">
          <div class="row">
          
            <div class="col-md-7">
              <form>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="nama-lengkap" class="form-label">Nama Lengkap:</label>
                    <input type="text" class="form-control" id="nama-lengkap" name="nama-lengkap">
                  </div>

                  <div class="col-md-6">
                    <label for="nama-panggilan" class="form-label">Nama Panggilan:</label>
                    <input type="text" class="form-control" id="nama-panggilan" name="nama-panggilan">
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="nim" class="form-label">NIM:</label>
                    <input type="text" class="form-control" id="nim" name="nim">
                  </div>

                  <div class="col-md-6">
                    <label for="ttl" class="form-label">Tempat, Tanggal Lahir:</label>
                    <input type="text" class="form-control" id="ttl" name="ttl">
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="no-telp" class="form-label">No. Telp:</label>
                    <input type="text" class="form-control" id="no-telp" name="no-telp">
                  </div>

                  <div class="col-md-6">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                </div>

                <div class="mb-3">
                  <label for="tentang-saya" class="form-label">Tentang Saya:</label>
                  <textarea class="form-control" id="tentang-saya" name="tentang-saya" rows="2"></textarea>
                </div>

                <div>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>

            <!-- Profile Section -->
            <div class="col-md-4 ms-5"style="margin-top: -95px;">
              <div class="bg-primary">
                <img src="../../resources/img/logouser.jpg" alt="User Avatar" class="rounded-circle mb-6">
                  <div class="identitas ">
                  <span style="display: block; margin-bottom: 20px; font-size: 1.3rem;">Lutfi Triaswangga</span>                  
                  <span style="display: block; margin-bottom: 20px; font-size: 1.3rem;">Admin Jurusan</span>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
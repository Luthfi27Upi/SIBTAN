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
    h5 {
      margin-top: -20px;
    }

    header {
      background-color: #CCE5FF;
      text-align: center;
      color: #043873;
      font-size: 1.5rem;
      font-weight: 500;
      padding: 15px;
      border-radius: 40px;

    }

    .content {
      margin-left: 10px;
      width: calc(100% - 200px);
      padding: 20px;

    }

    .hero-section {
      background: url('../../img/RuanganDashboard.png') center/cover no-repeat;
      padding: 100px 20px;
      border-radius: 30px;
    }

    .hero-section h2 {
      color: #FFE492;
      text-align: center;
      font-size: 3rem;
      font-weight: bold;
    }

    .hero-section p {
      color: #FFE492;
      font-size: 1.5rem;
      font-weight: 500;
    }
  </style>
</head>

<body class="d-flex flex-column min-vh-100">
  <div class="d-flex flex-grow-1">
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="content flex-grow-1">
      <header>
        Sistem Informasi Bebas Tanggungan
      </header>
      <div class="p-4">
        <div class="hero-section text-center mb-4">
          <h2 style="color:#FFE492; text-align:center;">Sistem Bebas Tanggungan</h2>
          <p style="color:#FFE492">Jurusan Teknologi Informasi</p>
          <!--<img src="img/RuanganDashboard.png" class="img-fluid rounded mx-auto d-block background-cover-img" style="max-width: 600px;" alt="Ruangan Dashboard">-->
        </div>
        <section class="info-section text-center">
          <h4 style="color:#043873;">Profil Sistem Bebas Tanggungan</h4>
          <p style="color:#043873; font-size: 14px;">
            Sistem "bebas tanggungan" adalah istilah yang biasanya merujuk pada suatu bentuk sistem
            yang tidak menuntut adanya tanggung jawab atau kewajiban yang berkelanjutan dari pihak tertentu.
            Dalam konteks administrasi, keuangan, atau hukum, sistem bebas tanggungan berarti bahwa pihak-pihak
            yang terlibat tidak memiliki kewajiban atau hutang tertentu setelah suatu transaksi atau perjanjian selesai.
          </p>
        </section>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
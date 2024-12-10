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
    .sidebar {
      background: linear-gradient(to bottom, #021a44, #043873, #4fa3ff); 
      color: white;
      min-width: 200px;
      max-width: 200px;
      display: flex;
      flex-direction: column;
      position: fixed;
      height: 100vh;
      top: 0; 
      left: 0;
      padding-top: 0.10px;
    }

    .sidebar .nav-link {
      color: white;
      font-weight: 500;
      padding: 10px 20px;
    }

    .sidebar .nav-link.active, .sidebar .nav-link:hover{
      background-color: #FFE492; 
      color: white;
      padding: 3px 6px;
      border-radius: 8px;
      font-size: 15px;
      margin-top: -4px;
      margin-bottom: -1px;
      
    }
    .sidebar .logo {
      width: 80px;
      margin-top: -20px;
    }

    .sidebar-footer {
      margin-top: auto;
      font-size: 0.8rem;
      text-align: center;
      padding: 10px 0;
      color: white;
    }

    .sidebar .nav-item {
    margin-bottom: 15px; /* Tambah jarak antar menu */
    }

    
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
    width: 80%; /* Lebar header agar proporsional */
    margin-left: 230px;  /*memberi jarak dari sisi kiri */
    }

    /* Main Content styling */
    .content {
      margin-left: 10px; 
      width: calc(100% - 200px);
      padding: 20px;
     
    }

    .hero-section {
      background: url('../../resources/img/RuanganDashboard.png') center/cover no-repeat;
      padding: 100px 20px;
      border-radius: 30px;
      margin-left: 200px;
    }

    .hero-section h2 {
    color: #FFE492; /* Warna teks */
    text-align: center; /* Tengah */
    font-size: 3rem; /* Ukuran font lebih besar */
    font-weight: bold; /* Teks lebih tebal */
  }

  .hero-section p {
    color: #FFE492;
    font-size: 1.5rem; /* Ukuran font lebih besar */
    font-weight: 500; /* Tebal sedang */
  }
    


  </style>
</head>
<body class="d-flex flex-column min-vh-100">
  <div class="d-flex flex-grow-1">
    <!-- Sidebar -->
    <nav class="sidebar">
      <div class="text-center py-4">
        <img src="../../resources/img/designLogo.png" alt="Logo SiBTAN" class="logo mb-1">
        <h5>SiBTAN</h5>
      </div>
      <ul class="nav flex-column px-2">
        <li class="nav-item my-2">
          <a href="home.php" class="nav-link <?php echo $current_page == 'home.php' ? 'active' : ''; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a href="profile.php" class="nav-link <?php echo $current_page == 'profile.php' ? 'active' : ''; ?>">Profile</a>
        </li>
        <li class="nav-item">
          <a href="tatacara.php" class="nav-link <?php echo $current_page == 'tatacara.php' ? 'active' : ''; ?>">Tata Cara</a>
        </li>
        <li class="nav-item">
          <a href="dataku.php" class="nav-link <?php echo $current_page == 'dataku.php' ? 'active' : ''; ?>">Dataku</a>
        </li>
        <li class="nav-item">
          <a href="infodata.php" class="nav-link <?php echo $current_page == 'infodata.php' ? 'active' : ''; ?>">Info Data</a>
        </li>
        <li class="nav-item">
          <a href="logout.php" class="nav-link <?php echo $current_page == 'logout.php' ? 'active' : ''; ?>">Logout</a>
        </li>
        <li class="nav-item">
          <a href="callcenter.php" class="nav-link <?php echo $current_page == 'callcenter.php' ? 'active' : ''; ?>">Call Center</a>
        </li>
      </ul>
      <div class="sidebar-footer">
        © 2024 SiBTAN JTI Polinema.
      </div>
    </nav>

    <!-- Main Content -->
    <div class="content flex-grow-1">
      <header>
        Sistem Informasi Bebas Tanggungan
      </header>
      <div class="p-4">
        <div class="hero-section text-center mb-4">
          <h2 style="color:#FFE492; text-align:center;" >Sistem Bebas Tanggungan</h2>
          <p style="color:#FFE492">Jurusan Teknologi Informasi</p>
          <!--<img src="RuanganDashboard.png" class="img-fluid rounded mx-auto d-block background-cover-img" style="max-width: 600px;" alt="Ruangan Dashboard">-->
        </div>
        <section class="info-section text-center">
          <h4 style="color:#043873; margin-left: 200px;" >Profil Sistem Bebas Tanggungan</h4>
          <p style="color:#043873; font-size: 14px; margin-left: 200px;">
            Sistem "bebas tanggungan" adalah istilah yang biasanya merujuk pada suatu bentuk sistem
            yang tidak menuntut adanya tanggung jawab atau kewajiban yang berkelanjutan dari pihak tertentu.
            Dalam konteks administrasi, keuangan, atau hukum, sistem bebas tanggungan berarti bahwa pihak-pihak
            yang terlibat tidak memiliki kewajiban atau hutang tertentu setelah suatu transaksi atau perjanjian selesai.
          </p>
        </section>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $("#sidebar-container").load("sidebar.html");
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
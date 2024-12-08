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
<<<<<<< HEAD
    /* Sidebar*/
    .sidebar {
      background: linear-gradient(to bottom, #021a44, #043873, #4fa3ff); 
      color: white;
      width: 200px;
      height: 100vh;
      position: fixed;
      display: flex;
      flex-direction: column;
=======
    /* Sidebar styling */
    .sidebar {
      background: linear-gradient(to bottom, #021a44, #043873, #4fa3ff); 
      color: white;
      min-width: 200px;
      max-width: 200px;
      display: flex;
      flex-direction: column;
      position: fixed;
      height: 100vh;
      top: 0; /* ensure sidebar is aligned with the top */
      left: 0;
      padding-top: 0.10px;
>>>>>>> cfb702b77dcb15ba96ab5144cdaf8b2ef45a39d2
    }

    .sidebar .nav-link {
      color: white;
      font-weight: 500;
      padding: 10px 20px;
<<<<<<< HEAD
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
=======
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
      margin-top: auto; /* Push to bottom */
>>>>>>> cfb702b77dcb15ba96ab5144cdaf8b2ef45a39d2
      font-size: 0.8rem;
      text-align: center;
      padding: 10px 0;
      color: white;
    }

    .sidebar .nav-item {
<<<<<<< HEAD
      margin-bottom: 15px;
    }

    /* Header */
=======
    margin-bottom: 15px; /* Tambah jarak antar menu */
    }
 
    h5{
      margin-top: -20px; /* mengatur jarak logo dan sibtan */
    }

>>>>>>> cfb702b77dcb15ba96ab5144cdaf8b2ef45a39d2
    header {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      padding: 10px 20px;
      background-color: #CCE5FF;
<<<<<<< HEAD
      border-radius: 30px;
=======
      
>>>>>>> cfb702b77dcb15ba96ab5144cdaf8b2ef45a39d2
    }

    header .user {
      font-weight: bold;
<<<<<<< HEAD
      color: #2B74C4;
      margin-left: 10px;
    }

    /* Main Content */
    .content {
      margin-left: 220px;
      padding: 20px;
=======
      color: #2b74c4;
    }

    /* Content Styling */
    .content {
      margin-left: 200px;
      flex-grow: 1;
>>>>>>> cfb702b77dcb15ba96ab5144cdaf8b2ef45a39d2
    }

    .title-with-icon {
      display: flex;
      align-items: center;
<<<<<<< HEAD
      gap: 20px;
      margin-top: 20px;
=======
      gap: 10px; /* Jarak antara gambar dan teks */
      margin-top: 20px;
      margin-left: 80px;
>>>>>>> cfb702b77dcb15ba96ab5144cdaf8b2ef45a39d2
    }

    .page-title {
      color: #2B74C4;
      font-weight: bold;
      font-size: 26px;
    }

<<<<<<< HEAD
    .cointainer img {
      width: 100%;
      border-radius: 8px;
    }

    .cointainer {
      margin-top: 20px;
    }

    /* Call Center Info */
    .info-section {
=======
    .messages {
>>>>>>> cfb702b77dcb15ba96ab5144cdaf8b2ef45a39d2
      background-color: #f8f9fa;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
<<<<<<< HEAD
    }

    .info-section h4 {
      color: #2B74C4;
      margin-bottom: 10px;
    }

    .info-section p {
      color: #043873;
      font-size: 14px;
    }

    /* Scrollable Messages */
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

    /* Responsiveness */
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
=======
      overflow-y: auto;
      max-height: 400px; /* Batas tinggi untuk scroll */
    }

    .messages-container {
        background-color: #f8f9fa;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        max-height: 400px; /* Tinggi maksimum container */
    }

    .messages {
        overflow-y: auto; /* Scroll hanya pada bagian pesan */
        max-height: 300px; /* Tinggi maksimum daftar pesan */
        padding-right: 10px; /* Beri jarak untuk scrollbar */
    }

    .message-item {
    background-color: white;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 10px;
    display: flex;
    align-items: center;
    }

    .message-item p {
    margin: 0;
    }

    .input-group {
    margin-top: 20px;
    }

  </style>
</head>
<body class="d-flex flex-column min-vh-100">
  <div class="d-flex flex-grow-1">
    <!-- Sidebar -->
    <nav class="sidebar">
      <div class="text-center py-4">
        <img src="img/designLogo.png" alt="Logo SiBTAN" class="logo mb-1">
        <h5>SiBTAN</h5>
      </div>
      <ul class="nav flex-column px-2">
      <li class="nav-item my-2"><a href="#" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Profile</a></li>
        <li class="nav-item"><a href="#" class="nav-link ">Tata Cara</a></li>
>>>>>>> cfb702b77dcb15ba96ab5144cdaf8b2ef45a39d2
        <li class="nav-item"><a href="#" class="nav-link">Dataku</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Info Data</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
        <li class="nav-item"><a href="#" class="nav-link active">Call Center</a></li>
      </ul>
      <div class="sidebar-footer">
        © 2024 SiBTAN JTI Polinema.
      </div>
    </nav>

    <!-- Main Content -->
    <div class="content">
<<<<<<< HEAD
      <!-- Header -->
      <header>
        <img src="../img/logouser.jpg" alt="User Avatar" style="width: 25px; height: 25px; border-radius: 50%; margin-right: 10px;">
        <div class="user">Lutfi Triaswangga</div>
      </header>

      <!-- Page Title -->
      <div class="title-with-icon">
        <img src="../img/call.png" alt="Call Center" style="width: 40px; height: 40px;">
        <h1 class="page-title">INFO CALL CENTER</h1>
      </div>

      <!-- Info Call Center Section -->
      <div class="cointainer mt-4">
        <div class="row">
          <div class="col-md-8">
            <div class="info-section">
              <p>Jika Anda memiliki pertanyaan, Anda dapat menghubungi call center kami di nomor berikut:</p>
              <p><strong>Telepon:</strong> 0800-123-4567</p>
              <p><strong>Email:</strong> support@sibtan.ac.id</p>
            </div>
          </div>

          <div class="col-md-4">
            <img src="../img/gedung.jpg" alt="Gedung" class="img-fluid rounded">
          </div>
        </div>
      </div>
=======
      <header>
        <img src="img/logouser.jpg" alt="User Avatar" style="width: 25px; height: 25px;  border-radius: 50%;margin-right: 10px;">
        <div class="user">Lutfi Triaswangga</div>
      </header>
      <main>
        <div class="title-with-icon">
          <img src="img/logoinfodata.jpg" alt="Info Icon" style="width: 40px; height: 40px;  border-radius: 50%;margin-right: 10px;">
          <h1 class="page-title">INFO CALL CENTER</h1>
        </div>
        <div class="cointainer mt-4">
            <div class="row">
                <!-- Bagian pesan -->
                <div class="col-md-8">
                <div class="messages-container">
                    <p class="text-muted">Show 20 Previous Message</p>
                    <div class="messages">
                    <div class="message-item mb-3 d-flex align-items-start">
                        <img src="img/logouser.jpg" alt="User Avatar" class="rounded-circle" style="width: 40px; height: 40px; margin-right: 10px;">
                        <div>
                        <div class="fw-bold">Lutfi Triaswangga</div>
                        <small class="text-muted">27 Oktober 2024 20.05</small>
                        <p>ini bagaimana ya kok saya belum di verifikasi?</p>
                        </div>
                        <button class="btn btn-sm btn-primary ms-auto">Reply</button>
                    </div>
                    <!-- Salin div .message-item untuk mengulang pesan -->
                    <div class="message-item mb-3 d-flex align-items-start">
                        <img src="img/logouser.jpg" alt="User Avatar" class="rounded-circle" style="width: 40px; height: 40px; margin-right: 10px;">
                        <div>
                        <div class="fw-bold">Lutfi Triaswangga</div>
                        <small class="text-muted">27 Oktober 2024 20.05</small>
                        <p>ini bagaimana ya kok saya belum di verifikasi?</p>
                        </div>
                        <button class="btn btn-sm btn-primary ms-auto">Reply</button>
                    </div>
                    </div>
                </div>
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" placeholder="Ketikkan Pesan">
                        <button class="btn btn-primary">Kirim</button>
                    </div>
                </div>
                <!-- Bagian gambar -->
                <div class="col-md-4">
                    <img src="building.jpg" alt="Gedung" class="img-fluid rounded">
                </div>
            </div>
        </div>
      </main>
>>>>>>> cfb702b77dcb15ba96ab5144cdaf8b2ef45a39d2
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

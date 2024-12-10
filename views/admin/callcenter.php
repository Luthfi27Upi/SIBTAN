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
    /* Sidebar styling */
    h5{
      margin-top: -20px; /* mengatur jarak logo dan sibtan */
    }

    header {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      padding: 10px 20px;
      background-color: #CCE5FF;
      
    }

    header .user {
      font-weight: bold;
      color: #2b74c4;
    }

    /* Content Styling */
    .content {
      margin-left: 230px;
      flex-grow: 1;
    }   

    .title-with-icon {
      display: flex;
      align-items: center;
      gap: 10px; /* Jarak antara gambar dan teks */
      margin-top: 20px;
      margin-left: 80px;
    }

    .page-title {
      color: #2B74C4;
      font-weight: bold;
      font-size: 26px;
    }

    .messages {
      background-color: #f8f9fa;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
    }

    .messages-container {
        background-color: #f8f9fa;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        max-height: 400px; /* Tinggi maksimum container */
    }

    .messages {
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
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="content">
      <header>
        <img src="../img/logouser.jpg" alt="User Avatar" style="width: 25px; height: 25px;  border-radius: 50%;margin-right: 10px;">
        <div class="user">Lutfi Triaswangga</div>
      </header>
      <main>
        <div class="title-with-icon">
          <img src="../img/logocallcenter.jpg" alt="Info Icon" style="width: 40px; height: 40px;  border-radius: 50%;margin-right: 10px;">
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
                        <img src="../img/logouser.jpg" alt="User Avatar" class="rounded-circle" style="width: 40px; height: 40px; margin-right: 10px;">
                        <div>
                        <div class="fw-bold">Lutfi Triaswangga</div>
                        <small class="text-muted">27 Oktober 2024 20.05</small>
                        <p>ini bagaimana ya kok saya belum di verifikasi?</p>
                        </div>
                        <button class="btn btn-sm btn-primary ms-auto">Reply</button>
                    </div>
                    <!-- Salin div .message-item untuk mengulang pesan -->
                    <div class="message-item mb-3 d-flex align-items-start">
                        <img src="../img/logouser.jpg" alt="User Avatar" class="rounded-circle" style="width: 40px; height: 40px; margin-right: 10px;">
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
                    <img src="../img/Gedung.jpg" alt="../img/Gedung" class="img-fluid rounded">
                </div>
            </div>
        </div>
      </main>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
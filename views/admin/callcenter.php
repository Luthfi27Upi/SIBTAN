<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Informasi Bebas Tanggungan</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link rel="stylesheet" href="/resources/css/admin/callcenter.css">
</head>

<body>
  <div class="d-flex">
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <div class="content">
      <!-- Header -->
      <?php include 'header.php'; ?>

      <!-- Judul -->
      <div class="title-with-icon">
        <img src="../img/call.png" alt="Call Center" style="width: 40px; height: 40px;">
        <h1 class="page-title">INFO CALL CENTER</h1>
      </div>

      <!-- Info Call Center  -->
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
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
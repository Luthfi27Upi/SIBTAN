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
  .card-container {
    position: relative;
    background-color: #e9f5ff;
    border-radius: 8px;
    text-align: center;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    padding: 20px;
    max-width: 80%;
    min-height: 300px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    background-color: rgba(255, 255, 255, 0.95);
  }

  .card-container:hover {
    transform: scale(1.05);
  }

  .card-content {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100%;
    transition: opacity 0.3s ease;
    align-items: center;
  }

  .card-content small {
    color: #6c757d;
    font-size: 12px;
  }

  .card-hover {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(255, 255, 255, 0.95);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.3s ease;
  }

  .card-container:hover .card-content {
    opacity: 0;
  }

  .card-container:hover .card-hover {
    opacity: 1;
    pointer-events: auto;
  }

  .card-content i.icon {
    font-size: 50px;
    color: #4fa3ff;
    margin-bottom: 10px;
  }

  .card-content h5 {
    font-size: 18px;
    font-weight: bold;
    color: #043873;
    margin-bottom: 10px;
  }

  .card-content button {
    font-size: 14px;
    padding: 8px 16px;
    margin-bottom: 10px;
  }

  .card-content p {
    font-size: 16px;
    font-weight: bold;
    color: #021a44;
    margin-bottom: 8px;
  }

  .card-hover p {
    font-size: 16px;
    font-weight: bold;
    color: #021a44;
    margin-bottom: 8px;
  }

  .card-hover small {
    color: #6c757d;
    font-size: 12px;
  }

  .card-hover button {
    font-size: 14px;
    padding: 8px 16px;
    margin-bottom: 10px;
  }
  button.accept {
            background-color: #4caf50;
            border-radius: 8px;
            color: #fff;
        }

        button.accept:hover {
            background-color: #45a049;
            border-radius: 8px;
        }

        button.decline {
            background-color: #f44336;
            border-radius: 8px;
            color: #fff;
        }

        button.decline:hover {
            background-color: #e53935;
            border-radius: 8px;
        }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">
  <div class="d-flex flex-grow-1">
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="content flex-grow-1">
        <div class="card-section container mt-5">
        <div class="row">
        <!-- Card Template -->

        <?php foreach ($filesToVerify as $card): ?>
          <div class="col-md-4 mb-4">
            <div class="card-container">
            <?php if ($card['STATUS'] === null): ?>
            <div class="card-content">
                <h1>Belum ada Unggahan</h1>
            </div>
            <?php elseif ($card['STATUS'] === 'Ditolak'): ?>
               class="card-content">
                <i class="icon fas fa-file-alt"></i>
                <h5><?= $card['FILE_NAME'] ?></h5>
                <button class="btn btn-danger"><?= $card['STATUS'] ?></button>
            </div>
            <div class="card-hover">
                <p><?= $card['FILE_NAME'] ?></p>
                <small>File format: PDF</small>
                <button class="btn btn-primary"  id="uploadButton-<?= $card['FILE_NAME'] ?>">Browse</button>
            </div>
            <form id="uploadForm-<?= $card['FILE_NAME'] ?>-reupload" action="actionupload" method="POST" enctype="multipart/form-data" style="display: none;">
              <input type="hidden" name="label" value="<?= $card['fileName'] ?>">
              <input type="file" name="uploaded_file" id="fileInput-<?= $card['FILE_NAME'] ?>-reupload" accept="application/pdf">
            </form>
            <script>
              document.getElementById('uploadButton-<?= $card['FILE_NAME'] ?>').addEventListener('click', function () {
                  const fileInput = document.getElementById('fileInput-<?= $card['FILE_NAME'] ?>-reupload');
                  fileInput.click();
              });

              document.getElementById('fileInput-<?= $card['FILE_NAME'] ?>-reupload').addEventListener('change', function () {
                  const uploadForm = document.getElementById('uploadForm-<?= $card['FILE_NAME'] ?>-reupload');
                  uploadForm.submit();
              });
              </script>
            <?php elseif ($card['STATUS'] === 'ACC'): ?>
              <div class="card-content">
                <i class="icon fas fa-file-alt"></i>
                <h5><?= $card['FILE_NAME'] ?></h5>
                <button class="btn btn-success"><?= $card['STATUS'] ?></button>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pdfModal">View PDF</button>
    

    </div>
  <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="pdfModalLabel"><?= $card['FILE_NAME'] ?> - PDF</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <embed src="<?= $card['file_path'] ?>" type="application/pdf" width="100%" height="500px">
              </div>
          </div>
      </div>
  </div>

            <?php else: ?>
              <div class="card-content">
                <p><?= $card['FILE_NAME'] ?></p>
                <button class="btn btn-warning"><?= $card['STATUS'] ?></button>
            </div>
            <div class="card-hover">
                <p><?= $card['FILE_NAME'] ?></p>
                <form method="POST" action="/verif">
                <input type="hidden" name="userId" value="<?php echo htmlspecialchars($card['ID']); ?>">
                <input type="hidden" name="fileName" value="<?php echo htmlspecialchars($card['FILE_NAME']); ?>">
                <button type="submit" name="action" value="approve" class="accept">Terima</button>
                <button type="submit" name="action" value="decline" class="decline">Tolak</button>
            </form>
            </div>
            <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Informasi Bebas Tanggungan</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link rel="stylesheet" href="/resources/css/verification.css">
</head>

<body class="d-flex flex-column min-vh-100">
  <div class="d-flex flex-grow-1">
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="content flex-grow-1 d-flex flex-column justify-content-center1">

      <div class="card shadow m-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa Jurusan Teknologi Informasi</h6>
        </div>

        <div class="card-section container mt-5">
          <div class="row">
            <!-- Card Template -->
            <?php foreach ($cardStatuses as $card): ?>
              <div class="col-md-4 mb-4">
                <div class="card-container">
                  <?php if ($card['status'] === null): ?>
                    <div class="card-content">
                      <i class="icon fas fa-file-alt"></i>
                      <h5><?= $card['label'] ?></h5>
                      <button class="btn btn-secondary">Belum ada unggahan</button>
                    </div>
                  <?php elseif ($card['status'] === 3): ?>
                    <div class="card-content">
                      <i class="icon fas fa-file-alt"></i>
                      <h5><?= $card['label'] ?></h5>
                      <button class="btn btn-danger">Ditolak</button>
                    </div>
                    <div class="card-hover">
                      <p><?= $card['label'] ?></p>
                      <button class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#pdfModal-<?= $card['id_berkas'] ?>"
                        data-file-path="../<?= $card['file_path'] ?>">Lihat PDF</button>
                    </div>
                    <div class="modal fade" id="pdfModal-<?= $card['id_berkas'] ?>" tabindex="-1"
                      aria-labelledby="pdfModalLabel-<?= $card['id_berkas'] ?>" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="pdfModalLabel-<?= $card['id_berkas'] ?>"><?= $card['label'] ?> - PDF
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="POST" action="/verif">
                              <input type="hidden" name="userId" value="<?php echo htmlspecialchars($card['nim']); ?>">
                              <input type="hidden" name="fileName"
                                value="<?php echo htmlspecialchars($card['id_berkas']); ?>">
                              <div class="d-flex justify-content-start mb-3">
                                <button type="submit" name="action" value="approve"
                                  class="accept btn btn-success me-2">Terima</button>
                                <button type="submit" name="action" value="decline"
                                  class="decline btn btn-danger">Tolak</button>
                              </div>
                            </form>
                            <embed src="" type="application/pdf" width="100%" height="500px">
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php elseif ($card['status'] === 4): ?>
                    <div class="card-content">
                      <i class="icon fas fa-file-alt"></i>
                      <h5><?= $card['label'] ?></h5>
                      <button class="btn btn-success">Diverifikasi</button>
                    </div>
                    <div class="card-hover">
                      <p><?= $card['label'] ?></p>
                      <button class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#pdfModal-<?= $card['id_berkas'] ?>"
                        data-file-path="../<?= $card['file_path'] ?>">Lihat PDF</button>
                    </div>
                    <div class="modal fade" id="pdfModal-<?= $card['id_berkas'] ?>" tabindex="-1"
                      aria-labelledby="pdfModalLabel-<?= $card['id_berkas'] ?>" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="pdfModalLabel-<?= $card['id_berkas'] ?>"><?= $card['label'] ?> - PDF
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          <form method="POST" action="/verif">
                              <input type="hidden" name="userId" value="<?php echo htmlspecialchars($card['nim']); ?>">
                              <input type="hidden" name="fileName"
                                value="<?php echo htmlspecialchars($card['id_berkas']); ?>">
                              <div class="d-flex justify-content-start mb-3">
                                <button type="submit" name="action" value="approve"
                                  class="accept btn btn-success me-2">Terima</button>
                                <button type="submit" name="action" value="decline"
                                  class="decline btn btn-danger">Tolak</button>
                              </div>
                            </form>
                            <embed src="" type="application/pdf" width="100%" height="500px">
                          </div>
                        </div>
                      </div>
                    </div>

                  <?php else: ?>
                    <div class="card-content">
                      <p><?= $card['label'] ?></p>
                      <button class="btn btn-warning">Menunggu Verifikasi</button>
                    </div>
                    <div class="card-hover">
                      <p><?= $card['label'] ?></p>
                      <button class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#pdfModal-<?= $card['id_berkas'] ?>"
                        data-file-path="../<?= $card['file_path'] ?>">Lihat PDF</button>
                    </div>
                    <div class="modal fade" id="pdfModal-<?= $card['id_berkas'] ?>" tabindex="-1"
                      aria-labelledby="pdfModalLabel-<?= $card['id_berkas'] ?>" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="pdfModalLabel-<?= $card['id_berkas'] ?>"><?= $card['label'] ?> - PDF
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="POST" action="/verif">
                              <input type="hidden" name="userId" value="<?php echo htmlspecialchars($card['nim']); ?>">
                              <input type="hidden" name="fileName"
                                value="<?php echo htmlspecialchars($card['id_berkas']); ?>">
                              <div class="d-flex justify-content-start mb-3">
                                <button type="submit" name="action" value="approve"
                                  class="accept btn btn-success me-2">Terima</button>
                                <button type="submit" name="action" value="decline"
                                  class="decline btn btn-danger">Tolak</button>
                              </div>
                            </form>
                            <embed src="" type="application/pdf" width="100%" height="500px">
                          </div>
                        </div>
                      </div>
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
      document.addEventListener('DOMContentLoaded', () => {
        document.body.addEventListener('show.bs.modal', (event) => {
          const button = event.relatedTarget;
          const filePath = button.getAttribute('data-file-path'); // Ekstrak info dari atribut data-*
          const modalId = button.getAttribute('data-bs-target'); // Dapatkan ID modal 
          const modal = document.querySelector(modalId); // Pilih modal menggunakan ID
          const modalBody = modal.querySelector('.modal-body embed'); // Pilih embed

          modalBody.src = filePath;

          document.body.classList.add('modal-open-hover-disabled');
        });


        modal.addEventListener('hidden.bs.modal', () => {
          document.body.classList.remove('modal-open-hover-disabled');
        });
      });

      $(document).ready(function () {
        $("#sidebar-container").load("sidebar.html");
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
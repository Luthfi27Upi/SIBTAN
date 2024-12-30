<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Bebas Tanggungan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="/resources/css/data.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css" />
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Modal -->
    <div class="modal fade" id="simpleModal" tabindex="-1" aria-labelledby="simpleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="content">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <form>
                                        <div class="row mb-2">
                                            <div class="col">
                                                <label for="nama-lengkap" class="form-label">Nama Lengkap:</label>
                                                <input type="text" class="form-control" id="nama-lengkap"
                                                    name="nama-lengkap"
                                                    value="<?php echo htmlspecialchars($user['USERNAME']); ?>" disabled>
                                            </div>
                                            <div class="col">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat"
                                                    value="<?php echo htmlspecialchars($user['ALAMAT']); ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col">
                                                <label for="nim" class="form-label">NIM:</label>
                                                <input type="text" class="form-control" id="nim" name="nim"
                                                    value="<?php echo htmlspecialchars($user['NIM']); ?>" disabled>
                                            </div>
                                            <div class="col">
                                                <label for="prodi" class="form-label">Prodi:</label>
                                                <input type="text" class="form-control" id="prodi" name="prodi"
                                                    value="<?php echo htmlspecialchars($user['PRODI']); ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col">
                                                <label for="no-telp" class="form-label">No. Telp:</label>
                                                <input type="text" class="form-control" id="no-telp" name="no-telp"
                                                    value="<?php echo htmlspecialchars($user['NO_HP']); ?>" disabled>
                                            </div>
                                            <div class="col">
                                                <label for="email" class="form-label">Email:</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    value="<?php echo htmlspecialchars($user['EMAIL']); ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col">
                                                <label for="jenis_kelamin" class="form-label">Jenis kelamin:</label>
                                                <input type="text" class="form-control" id="jenis_kelamin"
                                                    name="jenis_kelamin"
                                                    value="<?php echo $user['JENIS_KELAMIN'] ? 'Laki-laki' : 'Perempuan'; ?>"
                                                    disabled>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-grow-1">
        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Content -->
        <div class="content flex-grow-1">

            <?php include 'header.php'; ?>

            <div class="card shadow m-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Bebas Tanggungan Jurusan Teknologi Informasi</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Program Studi</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $users = $users ?? []; ?>
                                <?php if (!empty($users)): ?>
                                    <?php foreach ($users as $user): ?>
                                        <tr>
                                            <td>
                                                <div class="cell-content"><?php echo htmlspecialchars($user['NIM']); ?></div>
                                            </td>
                                            <td>
                                                <div class="cell-content"><?php echo htmlspecialchars($user['USERNAME']); ?>
                                                </div>
                                                <div class="progress mt-2" style="height: 5px;">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: <?php echo $user['progress_bar']['status_2']; ?>%"
                                                        aria-valuenow="<?php echo $user['progress_bar']['status_2']; ?>"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: <?php echo $user['progress_bar']['status_4']; ?>%"
                                                        aria-valuenow="<?php echo $user['progress_bar']['status_4']; ?>"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: <?php echo $user['progress_bar']['status_3']; ?>%"
                                                        aria-valuenow="<?php echo $user['progress_bar']['status_3']; ?>"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cell-content"><?php echo htmlspecialchars($user['PRODI']); ?></div>
                                            </td>
                                            <td>
                                                <?php if ($user['progress_bar']['status_2'] != 0) { ?>
                                                    <div class="cell-content">Menunggu Verifikasi</div>
                                                <?php } elseif ($user['progress_bar']['status_4'] == 100) { ?>
                                                    <div class="cell-content">Lengkap</div>
                                                <?php } elseif ($user['progress_bar']['status_2'] == 0) { ?>
                                                    <div class="cell-content">Belum Ada Unggahan</div>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <div class="cell-content">
                                                    <a class="btn btn-primary btn-sm m-1 view-btn" data-bs-toggle="modal"
                                                        data-bs-target="#simpleModal"
                                                        data-username="<?php echo $user['USERNAME']; ?>"
                                                        data-alamat="<?php echo $user['ALAMAT']; ?>"
                                                        data-nim="<?php echo $user['NIM']; ?>"
                                                        data-no-hp="<?php echo $user['NO_HP']; ?>"
                                                        data-prodi="<?php echo $user['PRODI']; ?>"
                                                        data-email="<?php echo $user['EMAIL']; ?>"
                                                        data-jenis-kelamin="<?php echo $user['JENIS_KELAMIN']; ?>"
                                                        data-role="<?php echo $user['ID_ROLE']; ?>">
                                                        View
                                                    </a>

                                                    <a href="/users/update/<?php echo $user['NIM']; ?>"
                                                        class="btn btn-warning btn-sm m-1 text-white">Edit</a>
                                                    <a href="/users/delete/<?php echo $user['NIM']; ?>"
                                                        class="btn btn-danger btn-sm m-1">Delete</a>
                                                    <a href="/users/files/<?php echo $user['NIM']; ?>"
                                                        class="btn btn-secondary btn-sm m-1">Detail</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="3" class="text-center">No users found.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <script>
                $(document).ready(function () {
                    $('#dataTable').DataTable();
                    new DataTable('#dataTable');
                });

                document.addEventListener('DOMContentLoaded', () => {
                    const viewButtons = document.querySelectorAll('.view-btn');
                    const modal = document.querySelector('#simpleModal');

                    viewButtons.forEach(button => {
                        button.addEventListener('click', () => {
                            const username = button.getAttribute('data-username');
                            const alamat = button.getAttribute('data-alamat');
                            const nim = button.getAttribute('data-nim');
                            const noHp = button.getAttribute('data-no-hp');
                            const prodi = button.getAttribute('data-prodi');
                            const email = button.getAttribute('data-email');
                            const jenisKelamin = button.getAttribute('data-jenis-kelamin');
                            const role = button.getAttribute('data-role');

                            modal.querySelector('#nama-lengkap').value = username;
                            modal.querySelector('#alamat').value = alamat;
                            modal.querySelector('#nim').value = nim;
                            modal.querySelector('#no-telp').value = noHp;
                            modal.querySelector('#prodi').value = prodi;
                            modal.querySelector('#email').value = email;
                            modal.querySelector('#jenis_kelamin').value = jenisKelamin;
                        });
                    });
                });

                $(document).ready(function () {
                    $("#sidebar-container").load("sidebar.html");
                });
            </script>
            <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
            <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
            <script
                src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
            <script src="https://kit.fontawesome.com/15ab4f5b8b.js" crossorigin="anonymous"></script>


</body>

</html>
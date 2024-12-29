<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Bebas Tanggungan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="/resources/css/data.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css" />
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="d-flex flex-grow-1">
        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Content -->
        <div class="content flex-grow-1">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="/users/create" class="btn btn-primary">Create New User</a>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa Jurusan Teknologi Informasi</h6>
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
                                        <td><div class="cell-content"><?php echo htmlspecialchars($user['NIM']); ?></div></td>
                                        <td>
                                            <div class="cell-content"><?php echo htmlspecialchars($user['USERNAME']); ?></div>
                                            <div class="progress mt-2" style="height: 5px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $user['progress_bar']['status_2']; ?>%" aria-valuenow="<?php echo $user['progress_bar']['status_2']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $user['progress_bar']['status_4']; ?>%" aria-valuenow="<?php echo $user['progress_bar']['status_4']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $user['progress_bar']['status_3']; ?>%" aria-valuenow="<?php echo $user['progress_bar']['status_3']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td><div class="cell-content"><?php echo htmlspecialchars($user['ID_PRODI']); ?></div></td>
                                        <td>
                                        </td>
                                        <td>
                                            <div class="cell-content">
                                                <a href="/users/read/<?php echo $user['NIM']; ?>" class="btn btn-info btn-sm">View</a>
                                                <a href="/users/update/<?php echo $user['NIM']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/users/delete/<?php echo $user['NIM']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                                <a href="/users/files/<?php echo $user['NIM']; ?>" class="btn btn-secondary btn-sm">Detail</a>
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
                $(document).ready( function () {
                    $('#dataTable').DataTable();
                    new DataTable('#dataTable');
                } );

                document.addEventListener('DOMContentLoaded', () => {
                    const modal = document.querySelector('#pdfModal');

                    modal.addEventListener('show.bs.modal', () => {
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
            <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
            <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
            <script src="https://kit.fontawesome.com/15ab4f5b8b.js" crossorigin="anonymous"></script>

            
</body>

</html>
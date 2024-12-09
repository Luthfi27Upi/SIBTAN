<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Bebas Tanggungan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/resources/css/data.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="d-flex flex-grow-1">
        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <div class="content flex-grow-1">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <label for="entries" class="me-2">Show</label>
                    <select id="entries" class="form-select w-auto">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span class="ms-2">entries</span>
                </div>
                <div class="input-group w-auto">
                    <span class="input-group-text">Search</span>
                    <input type="text" class="form-control" placeholder="Search...">
                </div>
                <a href="/users/create" class="btn btn-primary">Create New User</a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Telepon</th>
                            <th>Jurusan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $users = $users ?? []; ?>
                        <?php if (!empty($users)): ?>
                            <?php foreach ($users as $user): ?>
                            <tr>
                                <td><div class="cell-content"></td>
                                <td><div class="cell-content"><?php echo htmlspecialchars($user['USERNAME']); ?></div></td>
                                <td><div class="cell-content"><?php echo htmlspecialchars($user['EMAIL']); ?></div></td>
                                <td><div class="cell-content"><?php echo htmlspecialchars($user['ALAMAT']); ?></div></td>
                                <td><div class="cell-content"><?php echo htmlspecialchars($user['JENIS_KELAMIN']? 'Laki-laki' : 'Perempuan'); ?></div></td>
                                <td><div class="cell-content"><?php echo htmlspecialchars($user['NO_HP']); ?></div></td>
                                <td><div class="cell-content"><?php echo htmlspecialchars($user['jurusan']); ?></div></td>
                                <td>
                                    <div class="cell-content">
                                        <a href="/users/read/<?php echo $user['ID']; ?>" class="btn btn-info btn-sm">View</a>
                                        <a href="/users/update/<?php echo $user['ID']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="/users/delete/<?php echo $user['ID']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                        <a href="/users/files/<?php echo $user['ID']; ?>" class="btn btn-secondary btn-sm">Detail</a>
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

            <div class="d-flex justify-content-between align-items-center">
                <div>
                    Showing data 1 to <span>10</span> entries
                </div>
                <div>
                    <label for="pagination" class="me-2">Page</label>
                    <select id="pagination" class="form-select w-auto">
                        <option value="1">1</option>
                        <!-- Tambahkan opsi halaman lainnya -->
                    </select>
                </div>
            </div>

            <script>
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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
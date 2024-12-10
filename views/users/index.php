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
        body {
            background-color: #f8f9fa;
        }
        .content {
            padding: 20px;
        }
        .table {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .table th {
            background-color: #007bff;
            color: white;
        }
        .btn {
            margin-right: 5px; 
        }
        .card-container {
            margin-top: 20px;
        }
        .dataTables_wrapper {
            padding: 20px; 
        }
    </style>
</head>
<body class="d-flex">

    <?php include 'views/mahasiswa/sidebar.php'; ?>

    <div class="content flex-grow-1">
        <h1 class="mb-4">User List</h1>
        <a href="/users/create" class="btn btn-primary mb-3">Create New User</a>
        <div class="card-container">
            <table id="userTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Telefon</th>
                        <th>Jurusan</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $users = $users ?? []; ?>
                    <?php if (!empty($users)): ?>
                        <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($user['USERNAME']); ?></td>
                            <td><?php echo htmlspecialchars($user['EMAIL']); ?></td>
                            <td><?php echo htmlspecialchars($user['ALAMAT']); ?></td>
                            <td><?php echo htmlspecialchars($user['JENIS_KELAMIN']? 'Laki-laki' : 'Perempuan'); ?></td>
                            <td><?php echo htmlspecialchars($user['NO_HP']); ?></td>
                            <td><?php echo htmlspecialchars($user['jurusan']); ?></td>
                            <td>
                                <a href="/users/read/<?php echo $user['ID']; ?>" class="btn btn-info btn-sm">View</a>
                                <a href="/users/update/<?php echo $user['ID']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/users/delete/<?php echo $user['ID']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                <a href="/users/files/<?php echo $user['ID']; ?>" class="btn btn-secondary btn-sm">Detail</a>
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

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#userTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "lengthChange": true,
                "pageLength": 10 
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        header {
            background-color: #CCE5FF;
            text-align: center;
            color: #043873;
            font-size: 1.5rem;
            font-weight: 500;
            padding: 15px;
            border-radius: 40px;
            width: 95%;
            margin: 0 auto;
        }

        .content {
            margin: 40px auto;
            max-width: 800px;
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
            color: #043873;
        }

        .form-control {
            background-color: #F5F5F5;
        }

        .btn-primary {
            background-color: #043873;
            border: none;
        }

        .btn-primary:hover {
            background-color: #021a44;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        Edit User
    </header>

    <div class="content">
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="USERNAME" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="USERNAME" name="USERNAME" placeholder="Enter Username" required value="<?php echo htmlspecialchars($user['USERNAME']); ?>">
                </div>
                <div class="col-md-6">
                    <label for="EMAIL" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="EMAIL" name="EMAIL" placeholder="Enter Email" required value="<?php echo htmlspecialchars($user['EMAIL']); ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="NO_HP" class="form-label">No Telepon:</label>
                    <input type="text" class="form-control" id="NO_HP" name="NO_HP" placeholder="Enter Phone Number" required value="<?php echo htmlspecialchars($user['NO_HP']); ?>">
                </div>
                <div class="col-md-6">
                    <label for="NIM" class="form-label">NIM:</label>
                    <input type="text" class="form-control" id="NIM" name="NIM" placeholder="Enter NIM" value="<?php echo htmlspecialchars($user['NIM']); ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="ALAMAT" class="form-label">Alamat:</label>
                    <input type="text" class="form-control" id="ALAMAT" name="ALAMAT" placeholder="Enter Address" value="<?php echo htmlspecialchars($user['ALAMAT']); ?>">
                </div>
                <div class="col-md-6">
                    <label for="JENIS_KELAMIN" class="form-label">Jenis Kelamin:</label>
                    <select class="form-select" id="JENIS_KELAMIN" name="JENIS_KELAMIN">
                        <option value="1">Laki Laki</option>
                        <option value="0">Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="ROLE" class="form-label">Role:</label>
                    <select name="ROLE" class="form-select">
                        <option value="admin_jurusan" <?php echo $user['ROLE'] == 'admin_jurusan' ? 'selected' : ''; ?>>Admin Jurusan</option>
                        <option value="admin_prodi" <?php echo $user['ROLE'] == 'admin_prodi' ? 'selected' : ''; ?>>Admin Prodi</option>
                        <option value="mahasiswa" <?php echo $user['ROLE'] == 'mahasiswa' ? 'selected' : ''; ?>>Mahasiswa</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="IMAGE" class="form-label">Profile Picture:</label>
                    <input type="file" class="form-control" id="IMAGE" name="IMAGE" accept="image/*">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir:</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Enter Place of Birth" value="<?php echo htmlspecialchars($user['tempat_lahir']); ?>">
                </div>
                <div class="col-md-6">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                </div>
            </div>

            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan:</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Enter Jurusan">
            </div>

            <button type="submit" class="btn btn-primary w-100">Edit User</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

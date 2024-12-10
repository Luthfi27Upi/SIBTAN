
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
<body>
    <h1>Update User</h1>
    <form method="POST" action="" enctype="multipart/form-data">
        <input type="text" name="USERNAME" value="<?php echo htmlspecialchars($user['USERNAME']); ?>" required>
        <input type="email" name="EMAIL" value="<?php echo htmlspecialchars($user['EMAIL']); ?>" required>
        <input type="text" name="NO_HP" value="<?php echo htmlspecialchars($user['NO_HP']); ?>">
        <input type="text" name="NIM" value="<?php echo htmlspecialchars($user['NIM']); ?>">
        <input type="text" name="ALAMAT" value="<?php echo htmlspecialchars($user['ALAMAT']); ?>">
        <select name="JENIS_KELAMIN">
            <option value="1" <?php echo $user['JENIS_KELAMIN'] ? 'selected' : ''; ?>>Male</option>
            <option value="0" <?php echo !$user['JENIS_KELAMIN'] ? 'selected' : ''; ?>>Female</option>
        </select>
        <input type="file" name="IMAGE" accept="image/*">
        <input type="text" name="tempat_lahir" value="<?php echo htmlspecialchars($user['tempat_lahir']); ?>" placeholder="Tempat Lahir" required>
        <input type="date" name="tanggal_lahir" placeholder="tanggal lahir" required>
        <select name="ROLE">
            <option value="admin_jurusan" <?php echo $user['ROLE'] == 'admin_jurusan' ? 'selected' : ''; ?>>Admin Jurusan</option>
            <option value="admin_prodi" <?php echo $user['ROLE'] == 'admin_prodi' ? 'selected' : ''; ?>>Admin Prodi</option>
            <option value="mahasiswa" <?php echo $user['ROLE'] == 'mahasiswa' ? 'selected' : ''; ?>>Mahasiswa</option>
        </select>
        <input type="text" name="jurusan" placeholder="jurusan">
        <button type="submit">Update User</button>
    </form>
</body>
</html> 
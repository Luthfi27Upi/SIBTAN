<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update User</title>
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
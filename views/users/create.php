<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create User</title>
</head>
<body>
    <h1>Create User</h1>
    <form method="POST" action="" enctype="multipart/form-data">
        <input type="text" name="ID" id="ID" placeholder="Id" required>
        <input type="text" name="USERNAME" placeholder="Username" required>
        <input type="password" name="PASSWORD" placeholder="Password" required>
        <input type="email" name="EMAIL" placeholder="Email" required>
        <input type="text" name="NO_HP" placeholder="Phone Number">
        <input type="text" name="NIM" placeholder="NIM">
        <input type="text" name="ALAMAT" placeholder="Address">
        <select name="JENIS_KELAMIN">
            <option value="1">Male</option>
            <option value="0">Female</option>
        </select>
        <input type="text" name="ROLE" placeholder="Role">
        <input type="file" name="IMAGE" accept="image/*">
        <input type="text" name="tempat_lahir" placeholder="tempat lahir">
        <input type="date" name="tanggal_lahir" placeholder="tanggal lahir">
        <button type="submit">Create User</button>
    </form>
</body>
</html> 
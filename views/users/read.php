<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Details</title>
</head>
<body>
    <h1>User Details</h1>
    <p>Username: <?php echo htmlspecialchars($user['USERNAME']); ?></p>
    <p>Email: <?php echo htmlspecialchars($user['EMAIL']); ?></p>
    <p>Phone Number: <?php echo htmlspecialchars($user['NO_HP']); ?></p>
    <p>NIM: <?php echo htmlspecialchars($user['NIM']); ?></p>
    <p>Address: <?php echo htmlspecialchars($user['ALAMAT']); ?></p>
    <p>Gender: <?php echo $user['JENIS_KELAMIN'] ? 'Male' : 'Female'; ?></p>
    <p>Role: <?php echo htmlspecialchars($user['ROLE']); ?></p>
       <?php if (!empty($user['image'])): ?>
        <img src="/<?php echo htmlspecialchars($user['image']); ?>" alt="User Image" style="max-width: 200px; max-height: 200px;">
   <?php else: ?>   
       <img src="/path/to/default/image.jpg" alt="Default User Image" style="max-width: 200px; max-height: 200px;">
   <?php endif; ?>
    <p>Tempat Lahir: <?php echo htmlspecialchars($user['tempat_lahir']); ?></p>
    <p>Tanggal Lahir: <?php echo $user['tanggal_lahir'] instanceof DateTime ? htmlspecialchars($user['tanggal_lahir']->format('Y-m-d')) : htmlspecialchars($user['tanggal_lahir']); ?></p>
    <a href="/users">Back to Users</a>
</body>
</html> 
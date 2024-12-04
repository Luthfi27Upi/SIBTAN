<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User List</title>
</head>
<body>
    <h1>User List</h1>
    <a href="users/create">Create New User</a>
    <table>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php $users = $users ?? []; ?>
        <?php if (!empty($users)): ?>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo htmlspecialchars($user['USERNAME']); ?></td>
                <td><?php echo htmlspecialchars($user['EMAIL']); ?></td>
                <td>
                    <a href="users/read/<?php echo $user['ID']; ?>">View</a>
                    <a href="users/update/<?php echo $user['ID']; ?>">Edit</a>
                    <a href="users/delete/<?php echo $user['ID']; ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">No users found.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html> 
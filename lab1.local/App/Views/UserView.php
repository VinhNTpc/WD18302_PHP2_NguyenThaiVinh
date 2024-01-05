<!DOCTYPE html>
<html>
<head>
    <title>List of Users</title>
</head>
<body>
    <h1>List of Users</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?php echo $user['username']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Reset Your Password</h2>
    <form action="reset_password_process.php" method="post">
        <input type="hidden" name="token" value="<?php echo htmlspecialchars($_GET['token']); ?>">
        
        <label for="password">New Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Reset Password</button>
    </form>
</body>
</html>

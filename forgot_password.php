<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Forgot Password</h2>
    <form action="forgot_password_process.php" method="post">
        <label for="email">Enter Your Email:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Reset Password</button>
    </form>

    <?php if (isset($_GET['message'])): ?>
        <p><?php echo htmlspecialchars($_GET['message']); ?></p>
    <?php endif; ?>
</body>
</html>

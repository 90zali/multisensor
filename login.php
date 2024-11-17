<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
<body> 
    <div class="center">
    <div class="login-containers ">
        <h2>Login</h2>
        <form action="login_process.php" method="POST">
            <input type="text" name="username" class="input-field" placeholder="Username" required>
            <input type="password" name="password" class="input-field" placeholder="Password" required>
            <button type="submit" class="btn">Login</button>
        </form>

        <?php if (isset($_GET['error'])): ?>
            <p style="color:red;"><?php echo htmlspecialchars($_GET['error']); ?></p>
        <?php endif; ?>

        <div class="footer">
            <p>Lupa Password? <a href="reset_password.php">Reset password</a></p>
            <p>Tidak Memiliki Akun <a href="register.php">Daftar</a></p>
        </div>
    </div>
</div>
</body>
<?php
include 'database.php';

// Mengambil data dari form pendaftaran
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing password

// Cek apakah username atau email sudah terdaftar
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
$stmt->execute([$username, $email]);
$user = $stmt->fetch();

if ($user) {
    header("Location: register.php?error=Username atau email sudah digunakan");
    exit();
}

// Insert data ke tabel users
$stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->execute([$username, $email, $password]);

header("Location: login.php?message=Registrasi berhasil. Silakan login.");
exit();
?>

<?php
session_start();
include 'database.php'; // file untuk koneksi ke database

// Mendapatkan input dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Mencari username dalam database
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch();

// Verifikasi password dan login
if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header("Location: monitoring.php"); // redirect ke halaman monitoring
    exit();
} else {
    header("Location: login.php?error=Username atau password salah");
    exit();
}
?>

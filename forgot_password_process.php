<?php
include 'database.php';
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

$email = $_POST['email'];

// Cek apakah email terdaftar
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if (!$user) {
    header("Location: forgot_password.php?message=Email tidak terdaftar");
    exit();
}

// Generate token reset password
$token = bin2hex(random_bytes(50));

// Simpan token ke database
$stmt = $pdo->prepare("UPDATE users SET reset_token = ?, reset_expiration = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE email = ?");
$stmt->execute([$token, $email]);

// Kirim email reset password
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.example.com';
$mail->SMTPAuth = true;
$mail->Username = 'your-email@example.com';
$mail->Password = 'your-email-password';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('your-email@example.com', 'Monitoring System');
$mail->addAddress($email);
$mail->Subject = "Password Reset Request";
$mail->Body = "Klik link berikut untuk mengatur ulang password Anda: http://yourwebsite.com/reset_password.php?token=$token";

if ($mail->send()) {
    header("Location: forgot_password.php?message=Silakan cek email Anda untuk reset password");
} else {
    header("Location: forgot_password.php?message=Gagal mengirim email: {$mail->ErrorInfo}");
}
exit();
?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

$stmt = $pdo->query("SELECT email FROM users");
$users = $stmt->fetchAll();

foreach ($users as $user) {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'your-email@example.com';
    $mail->Password = 'your-email-password';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('your-email@example.com', 'Monitoring System');
    $mail->addAddress($user['email']);
    $mail->Subject = "Peringatan Intensitas UV Abnormal";
    $mail->Body = "Nilai intensitas UV saat ini: " . $sensorData['intensity'] . ". Harap periksa sistem Anda segera.";

    if (!$mail->send()) {
        echo "Gagal mengirim email ke {$user['email']}: {$mail->ErrorInfo}";
    }
}
?>
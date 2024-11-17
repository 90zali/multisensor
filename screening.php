<?php
include 'database.php';

$threshold = 100; // misalnya nilai abnormal
$stmt = $pdo->query("SELECT * FROM nilai_sensor ORDER BY created_at DESC LIMIT 1");
$sensorData = $stmt->fetch();

if ($sensorData['intensity'] > $threshold) {
    // Kirim notifikasi email ke pengguna
    include 'send_email.php';
}
?>
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Lanjutkan dengan kode monitoring intensitas lampu UV...
?>

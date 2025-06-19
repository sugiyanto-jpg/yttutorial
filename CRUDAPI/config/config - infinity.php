<?php
$host = "sql210.infinityfree.com";
$user = "if0_38663323"; // username dari InfinityFree
$pass = "SzUKmvvXKchUi6"; // yang muncul saat kamu klik ikon mata
$db   = "if0_38663323_yt_dbfinance"; // sesuai nama database kamu

$connection = mysqli_connect($host, $user, $pass, $db);

// Periksa koneksi
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>

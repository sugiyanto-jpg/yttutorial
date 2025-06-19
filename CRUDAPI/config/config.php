<?php
$host = "sql111.byetcluster.com";
$user = "ezyro_39251769"; // username dari InfinityFree
$pass = "15e03cc3c38a"; // yang muncul saat kamu klik ikon mata
$db   = "ezyro_39251769_yt_dbfinance"; // sesuai nama database kamu

$connection = mysqli_connect($host, $user, $pass, $db);

// Periksa koneksi
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>

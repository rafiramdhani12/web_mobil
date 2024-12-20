<?php
$server = "localhost";
$username = "root";
$password = '';
$database = "web_mobil";

// Cek jika koneksi belum dibuat
if (!isset($db)) {
    $db = mysqli_connect($server, $username, $password, $database);
    if (!$db) {
        die("Gagal terhubung ke database: " . mysqli_connect_error());
    }
}
?>

<?php
    $servername = "localhost"; // Sesuaikan dengan host database Anda
    $username = "root"; // Sesuaikan dengan username database Anda
    $password = ""; // Sesuaikan dengan password database Anda
    $dbname = "lifemedia_regis"; // Sesuaikan dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);

}
?>
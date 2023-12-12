<?php
// Sertakan file config.php
require("config.php");

// Inisialisasi variabel filter
$filter = "semua"; // Nilai default untuk filter

// Periksa apakah parameter filter telah diterima melalui URL
if (isset($_GET['filter'])) {
    // Jika parameter filter diterima, gunakan nilainya
    $filter = $_GET['filter'];

    // Berdasarkan nilai filter, atur query SQL yang sesuai
    if ($filter === "Yogyakarta") {
        $sql = "SELECT * FROM produk WHERE id_lokasi IN ('1', '2')";
    } elseif ($filter === "Tanggerang") {
        $sql = "SELECT * FROM produk WHERE id_lokasi = '5'";
    } elseif ($filter === "DKI Jakarta") {
        $sql = "SELECT * FROM produk WHERE id_lokasi = '6'";
    } elseif ($filter === "Bogor") {
        $sql = "SELECT * FROM produk WHERE id_lokasi = '7'";
    } else {
        // Jika filter "Semua" atau tidak dikenal, tampilkan semua data
        $sql = "SELECT * FROM `produk` WHERE `id_lokasi` >= 1 AND `active` <= 1";
    }
} else {
    // Jika parameter filter tidak ada, tampilkan semua data
    $sql = "SELECT * FROM `produk` WHERE `id_lokasi` >= 1 AND `active` <= 1";
}

$result = $conn->query($sql);
?>

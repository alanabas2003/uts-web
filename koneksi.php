<?php
// Konfigurasi database
$host = "localhost"; // Host database (biasanya localhost)
$user = "root";      // Username database (default: root)
$pass = "";          // Password database (default: kosong)
$db   = "db_user";   // Nama database

// Membuat koneksi ke MySQL
$conn = mysqli_connect($host, $user, $pass, $db);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    // Hapus komentar di bawah untuk memastikan koneksi berhasil (opsional)
    // echo "Koneksi berhasil ke database $db";
}
?>

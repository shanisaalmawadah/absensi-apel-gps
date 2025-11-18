<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $lokasi = $_POST['lokasi'];

    $tanggal = date('Y-m-d');
    $jam = date('H:i:s');

    $query = "INSERT INTO absensi (user_id, tanggal, jam, lokasi)
              VALUES ('$user_id', '$tanggal', '$jam', '$lokasi')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Absensi berhasil dicatat!'); window.location='dashboard.php';</script>";
    } else {
        echo "<script>alert('Gagal mencatat absensi.'); window.location='dashboard.php';</script>";
    }
}
?>

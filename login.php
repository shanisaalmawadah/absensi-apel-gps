<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Login berhasil!'); window.location='dashboard.php';</script>";
    } else {
        echo "<script>alert('Login gagal! Periksa username & password'); window.location='index.html';</script>";
    }
}
?>

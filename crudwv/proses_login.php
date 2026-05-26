<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

// Cek user di database
$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
$data = mysqli_fetch_assoc($query);

// Cek apakah user ada dan password (teks biasa) cocok
if ($data && $password == $data['password']) {
    $_SESSION['user_id']  = $data['id'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['role']     = $data['role'];

    header("Location: index.php");
} else {
    echo "<script>alert('Gagal login! Cek username/password'); window.location='login.php';</script>";
}
?>
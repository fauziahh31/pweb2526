<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

// QUERY: Pastikan dia nyari berdasarkan username yang diketik
$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
$data = mysqli_fetch_assoc($query);

// Cek apakah user ada dan password cocok
if($data && $password == $data['password']) {
    $_SESSION['user_id']  = $data['id'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['role']     = $data['role']; // Ini penting: role-nya harus ambil dari database!

    header("Location: index.php");
    exit;
} else {
    echo "<script>alert('Login Gagal!'); window.location='login.php';</script>";
}
?>
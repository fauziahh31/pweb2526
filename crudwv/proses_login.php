<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");

// Cek apakah username ada?
if(mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_assoc($query);
    
    // Sekarang kita bandingkan dan tampilkan hasilnya ke layar (debug)
    if($password == $data['password']) {
        echo "Login Berhasil! Username cocok, Password cocok.";
        $_SESSION['user_id']  = $data['id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['role']     = $data['role'];
        // header("Location: index.php"); // Matikan dulu biar kita bisa lihat tulisan di atas
    } else {
        echo "Password salah!<br>";
        echo "Yang kamu ketik: " . $password . "<br>";
        echo "Yang ada di database: " . $data['password'];
    }
} else {
    echo "Username '" . $username . "' tidak ditemukan di database!";
}
?>
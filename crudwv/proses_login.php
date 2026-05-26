<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");

if(mysqli_num_rows($query) > 0){
    $data = mysqli_fetch_assoc($query);

    // Kita bandingkan password apa adanya
    if($password == $data['password']){
        $_SESSION['user_id']  = $data['id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['role']     = $data['role'];

        header("Location: index.php");
        exit;
    } else {
        echo "<script>alert('Password salah!'); window.location='login.php';</script>";
    }
} else {
    echo "<script>alert('Username tidak terdaftar!'); window.location='login.php';</script>";
}
?>
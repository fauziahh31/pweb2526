<?php
session_start();
include "koneksi.php";

if(isset($_POST['login'])){

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi,
    "SELECT * FROM users
    WHERE username='$username'
    AND password='$password'");

    $cek = mysqli_num_rows($query);

    if($cek > 0){

        // SESSION
        $_SESSION['nama'] = $nama;
        $_SESSION['username'] = $username;

        header("location:index.php");
        exit;

    }else{

        echo "
        <script>
        alert('Login gagal!');
        window.location='login.php';
        </script>
        ";

    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Login</title>

<link rel="stylesheet" href="style.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

</head>

<body>

<div class="center-page">

<div class="login-box">

<img src="assets/logo.jpg" class="logo">

<h2>LOGIN</h2>

<form method="post">

Nama
<input type="text" name="nama" required>

Username
<input type="text" name="username" required>

Password
<input type="password" name="password" required>

<button type="submit" name="login">
LOGIN
</button>

</form>

<p>
Belum punya akun?
<a href="register.php">Daftar</a>
</p>

</div>

</div>

</body>
</html>
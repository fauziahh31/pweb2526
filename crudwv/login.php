<?php
session_start();
include "koneksi.php";
 
if(isset($_SESSION['username']) && $_SESSION['username'] != ""){
    header("location:index.php");
    exit;
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
 
<form method="post" action="proses_login.php">
 
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
<?php
session_start();
include "koneksi.php";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi,
    "SELECT * FROM users 
    WHERE username='$username' 
    AND password='$password'");

    $data = mysqli_fetch_assoc($query);

    if($data){

        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];

        header("location:index.php");
        exit;

    }else{
        echo "<script>alert('Login gagal');window.location='login.php';</script>";
    }
}
?>

<form method="post">
    Username <input type="text" name="username" required>
    Password <input type="password" name="password" required>
    <button type="submit" name="login">Login</button>
</form>
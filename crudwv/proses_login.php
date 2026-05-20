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

    $cek = mysqli_num_rows($query);

    if($cek > 0){

        $_SESSION['username'] = $username;

        header("location:dashboard.php");

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
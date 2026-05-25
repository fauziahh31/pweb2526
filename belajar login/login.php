<?php
session_start();
include "koneksi.php";

if (isset($_SESSION['username'])){
    header("Location: berhasil_login.php");
    exit();
} 
else if (isset($_POST['submit'])){

    $username_benar ="fauziah";
    $password_benar = hash('sha256', "Qwerty123*");

    $username = $_POST['username'];
    $password = hash('sha256', $_POST['password']);

    if (($username == $username_benar) && ($password == $password_benar)){

        $_SESSION['username'] = $username;

        // 🔥 TAMBAHAN PENTING INI
        $_SESSION['role'] = "admin";

        header("Location: index.php");
        exit();

    } else {
        echo "<script>alert('Di Harap untuk LOGIN terlebih dahulu!')</script>";
        echo "<script>window.location.replace('index.php')</script>";
        exit();
    }
}
?>
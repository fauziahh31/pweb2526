<?php
session_start();

if (isset($_SESSION['username'])){
    header("Location: berhasil_login.php");
    exit();
} else if (isset($_POST['submit'])){

    $username_benar ="fauziah";
    $password_benar = hash('sha256', "Qwerty123*");

    $username = $_POST['username'];
    $password = hash('sha256', $_POST['password']);

    if (($username == $username_benar) && ($password == $password_benar)){

        $_SESSION['username'] = $username;

        // 🔥 TAMBAHAN PENTING INI
        if($username == "fauziah"){
            $_SESSION['role'] = "admin";
        } else {
            $_SESSION['role'] = "user";
        }

        header("Location: berhasil_login.php");
        exit();

    } else {
        echo "<script>alert('Login gagal!')</script>";
        echo "<script>window.location='index.php'</script>";
        exit();
    }
}
?>
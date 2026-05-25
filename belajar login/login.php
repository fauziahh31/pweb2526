<?php
    session_start();
    
    if (isset($_SESSION['username'])){
        header("Location: berhasil_login.php");
        exit();
    } else if (isset($_POST['submit'])){
        $username_benar ="fauziah";
        $password_benar = hash('sha256', "Qwerty123*");
        $username = $_POST['username'];
        $password = hash('sha256', $_POST['password']); // Hash the input password using SHA-256
        if (($username == $username_benar) && ($password == $password_benar)){
            $_SESSION['username'] = $username;
            header("Location: berhasil_login.php");
            exit();
            
        } else {
            echo "<script>alert('Di Harap untuk LOGIN terlebih dahulu!')</script>";
            echo "<script>window.location.replace('index.php')</script>";
            exit();
        }
    }

?>
<?php
include "koneksi.php";
 
if(isset($_POST['register'])){
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    // cek username
    $cek = mysqli_query($koneksi,
    "SELECT * FROM users WHERE username='$username'");
 
    if(mysqli_num_rows($cek) > 0){
 
        echo "
        <script>
        alert('Username sudah digunakan!');
        window.location='register.php';
        </script>
        ";
 
    }else{
 
        mysqli_query($koneksi,
        "INSERT INTO users(username, password, role)
        VALUES('$username', '$password', 'anggota')");
 
        echo "
        <script>
        alert('Register berhasil! Silakan login.');
        window.location='login.php';
        </script>
        ";
 
    }
}
?>
 
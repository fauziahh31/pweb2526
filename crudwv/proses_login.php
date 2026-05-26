<?php
session_start();
include "koneksi.php";
 
if(isset($_POST['login'])){
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
$cek = mysqli_num_rows($query);

if($cek > 0) {
    echo "Username ketemu! "; // Ini buat tes
    $data = mysqli_fetch_assoc($query);
    // Cek password manual
    if($password == $data['password']) {
        echo "Password cocok!";
        // ... (lanjutkan session kamu di sini)
    } else {
        echo "Password di database: " . $data['password']; // Biar kamu tahu isi database
    }
} else {
    echo "Username tidak ada di database!";
}
die();
        $data = mysqli_fetch_assoc($query);
 
        $_SESSION['user_id']  = $data['id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['role']     = $data['role'];
 
        header("Location: index.php");
        exit;
 
    }else{
 
        echo "
        <script>
        alert('Username atau password salah!');
        window.location='login.php';
        </script>
        ";
 
    }
}
?>
<?php
session_start();
include "koneksi.php";
 
if(!isset($_SESSION['username'])){
    header("location:login.php");
    exit;
}
 
$user_id    = $_SESSION['user_id'];
$nama       = $_POST['nama'];
$kelas      = $_POST['kelas'];
$jabatan    = $_POST['jabatan'];
$keaktifan  = $_POST['keaktifan'];
$jenis_suara = $_POST['jenis_suara'];
 
mysqli_query($koneksi,
"INSERT INTO anggota_wahana_vokalia
(nama, kelas, jabatan, keaktifan, jenis_suara, username)
VALUES
('$nama','$kelas','$jabatan','$keaktifan','$jenis_suara','$username')");
?>
 
<!DOCTYPE html>
<html>
 
<head>
 
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
 
<style>
 
body{
background:#D78FEE;
font-family:Poppins;
}
 
.notif{
position:fixed;
top:20px;
right:20px;
background:#85409D;
color:white;
padding:15px 25px;
border-radius:15px;
box-shadow:0 5px 15px rgba(0,0,0,0.2);
animation:muncul 0.5s;
}
 
@keyframes muncul{
from{ opacity:0; transform:translateY(-20px); }
to{ opacity:1; transform:translateY(0); }
}
 
</style>
 
</head>
 
<body>
 
<div class="notif">
✅ Data berhasil ditambahkan
</div>
 
<script>
setTimeout(function(){
    window.location='index.php';
}, 1500);
</script>
 
</body>
</html>
<?php
session_start();
include "koneksi.php";
 
if(!isset($_SESSION['username'])){
    header("location:login.php");
    exit;
}
 
$id = $_GET['id'];
 
// Ambil data dulu untuk cek kepemilikan
$cek = mysqli_query($koneksi, "SELECT * FROM anggota_wahana_vokalia WHERE id='$id'");
$data = mysqli_fetch_assoc($cek);
 
if(!$data){
    header("location:index.php");
    exit;
}
 
// Admin bisa hapus semua, guru hanya bisa hapus punya sendiri
if($_SESSION['role'] != 'admin' && $data['user_id'] != $_SESSION['user_id']){
    header("location:index.php");
    exit;
}
 
mysqli_query($koneksi, "DELETE FROM anggota_wahana_vokalia WHERE id='$id'");
header("location:index.php");
exit;
?>
 
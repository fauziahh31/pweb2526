<?php
session_start();
include "koneksi.php";
 
if(!isset($_SESSION['username'])){
    header("location:login.php");
    exit;
}
 
$id          = $_POST['id'];
$nama        = $_POST['nama'];
$kelas       = $_POST['kelas'];
$jabatan     = $_POST['jabatan'];
$keaktifan   = $_POST['keaktifan'];
$jenis_suara = $_POST['jenis_suara'];
 
// Cek kepemilikan sebelum update
$cek = mysqli_query($koneksi, "SELECT * FROM anggota_wahana_vokalia WHERE id='$id'");
$data = mysqli_fetch_assoc($cek);
 
if(!$data){
    header("location:index.php");
    exit;
}
 
if($_SESSION['role'] != 'admin' && $data['user_id'] != $_SESSION['user_id']){
    header("location:index.php");
    exit;
}
 
mysqli_query($koneksi,
"UPDATE anggota_wahana_vokalia SET
nama='$nama',
kelas='$kelas',
jabatan='$jabatan',
keaktifan='$keaktifan',
jenis_suara='$jenis_suara'
WHERE id='$id'");
 
header("location:index.php");
exit;
?>
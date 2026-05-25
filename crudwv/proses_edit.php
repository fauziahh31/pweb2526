<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jabatan = $_POST['jabatan'];
$keaktifan = $_POST['keaktifan'];
$jenis_suara = $_POST['jenis_suara'];

mysqli_query($koneksi,
"UPDATE anggota_wahana_vokalia SET
nama='$nama',
kelas='$kelas',
jabatan='$jabatan',
keaktifan='$keaktifan',
jenis_suara='$jenis_suara'
WHERE id='$id'");

header("location:dashboard.php");
?><?php
session_start();
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jabatan = $_POST['jabatan'];
$keaktifan = $_POST['keaktifan'];
$jenis_suara = $_POST['jenis_suara'];

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
<?php
session_start();
include "koneksi.php";

/* 🔒 hanya admin boleh hapus */
if(!isset($_SESSION['username']) || $_SESSION['role'] != 'admin'){
    header("location:index.php");
    exit;
}

$id = $_GET['id'];

mysqli_query($koneksi,
"DELETE FROM anggota_wahana_vokalia
WHERE id='$id'");

header("location:index.php");
exit;
?>
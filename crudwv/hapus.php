<?php
include "koneksi.php";

$id = $_GET['id'];

mysqli_query($koneksi,
"DELETE FROM anggota_wahana_vokalia
WHERE id='$id'");

header("location:dashboard.php");
?>
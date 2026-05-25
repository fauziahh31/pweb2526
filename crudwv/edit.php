<?php
session_start();
include "koneksi.php";

if(!isset($_SESSION['username']) || $_SESSION['role'] != 'admin'){
    header("location:index.php");
    exit;
}
$id = $_GET['id'];

$data = mysqli_query($koneksi,
"SELECT * FROM anggota_wahana_vokalia WHERE id='$id'");

$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Anggota</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    margin:0;
    font-family:Poppins, sans-serif;
    background: linear-gradient(135deg,#D78FEE,#85409D,#5D2F77);
    min-height:100vh;

    display:flex;
    justify-content:center;
    align-items:flex-start;

    padding:50px 0;
}

.container{
    width:420px;
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(15px);
    padding:30px;
    border-radius:20px;
    color:white;
    box-shadow:0 10px 30px rgba(0,0,0,0.3);
}

.container h2{
    text-align:center;
    margin-bottom:25px;
}

label{
    display:block;
    margin-top:14px;
    margin-bottom:6px;
    font-weight:500;
}

input, select{
    width:100%;
    padding:12px;
    border:none;
    border-radius:10px;
    outline:none;
    margin-bottom:10px;
}

button{
    width:100%;
    padding:12px;
    border:none;
    border-radius:10px;
    background:#5D2F77;
    color:white;
    font-weight:bold;
    cursor:pointer;
    margin-top:20px;
}

button:hover{
    background:#85409D;
}

</style>

</head>

<body>

<div class="container">

<h2>Edit Anggota</h2>

<form method="post" action="proses_edit.php">

<input type="hidden" name="id" value="<?= $d['id']; ?>">

<label>Nama</label>
<input type="text" name="nama" value="<?= $d['nama']; ?>" required>

<label>Kelas</label>
<select name="kelas">

<option <?= ($d['kelas']=="10 TJKT 1") ? "selected" : ""; ?>>10 TJKT 1</option>
<option <?= ($d['kelas']=="10 TJKT 2") ? "selected" : ""; ?>>10 TJKT 2</option>
<option <?= ($d['kelas']=="10 TJKT 3") ? "selected" : ""; ?>>10 TJKT 3</option>

<option <?= ($d['kelas']=="11 TJKT 1") ? "selected" : ""; ?>>11 TJKT 1</option>
<option <?= ($d['kelas']=="11 TJKT 2") ? "selected" : ""; ?>>11 TJKT 2</option>
<option <?= ($d['kelas']=="11 TJKT 3") ? "selected" : ""; ?>>11 TJKT 3</option>
<option <?= ($d['kelas']=="11 TJKT 4") ? "selected" : ""; ?>>11 TJKT 4</option>

<option <?= ($d['kelas']=="12 TJKT 1") ? "selected" : ""; ?>>12 TJKT 1</option>
<option <?= ($d['kelas']=="12 TJKT 2") ? "selected" : ""; ?>>12 TJKT 2</option>
<option <?= ($d['kelas']=="12 TJKT 3") ? "selected" : ""; ?>>12 TJKT 3</option>

</select>

<label>Jabatan</label>
<select name="jabatan" required>

<option value="Ketua" <?= ($d['jabatan']=="Ketua") ? "selected" : "" ?>>Ketua</option>

<option value="Wakil Ketua" <?= ($d['jabatan']=="Wakil Ketua") ? "selected" : "" ?>>Wakil Ketua</option>

<option value="Sekretaris" <?= ($d['jabatan']=="Sekretaris") ? "selected" : "" ?>>Sekretaris</option>

<option value="Wakil Sekretaris" <?= ($d['jabatan']=="Wakil Sekretaris") ? "selected" : "" ?>>Wakil Sekretaris</option>

<option value="Bendahara" <?= ($d['jabatan']=="Bendahara") ? "selected" : "" ?>>Bendahara</option>

<option value="Wakil Bendahara" <?= ($d['jabatan']=="Wakil Bendahara") ? "selected" : "" ?>>Wakil Bendahara</option>

<option value="Koordinasi Latihan" <?= ($d['jabatan']=="Koordinasi Latihan") ? "selected" : "" ?>>Koordinasi Latihan</option>

<option value="Wakil Koordinasi Latihan" <?= ($d['jabatan']=="Wakil Koordinasi Latihan") ? "selected" : "" ?>>Wakil Koordinasi Latihan</option>

<option value="Kedisiplinan" <?= ($d['jabatan']=="Kedisiplinan") ? "selected" : "" ?>>Kedisiplinan</option>

<option value="Wakil Kedisiplinan" <?= ($d['jabatan']=="Wakil Kedisiplinan") ? "selected" : "" ?>>Wakil Kedisiplinan</option>

<option value="Dokumentasi" <?= ($d['jabatan']=="Dokumentasi") ? "selected" : "" ?>>Dokumentasi</option>

<option value="Wakil Dokumentasi" <?= ($d['jabatan']=="Wakil Dokumentasi") ? "selected" : "" ?>>Wakil Dokumentasi</option>

<option value="Anggota Biasa" <?= ($d['jabatan']=="Anggota Biasa") ? "selected" : "" ?>>Anggota Biasa</option>

<option value="Pembina Eskul" <?= ($d['jabatan']=="Pembina Eskul") ? "selected" : "" ?>>Pembina Eskul</option>

</select>

<label>Keaktifan</label>
<select name="keaktifan">

<option <?= ($d['keaktifan']=="Anggota Aktif") ? "selected" : ""; ?>>
Anggota Aktif
</option>

<option <?= ($d['keaktifan']=="Alumni") ? "selected" : ""; ?>>
Alumni
</option>

</select>

<label>Jenis Suara</label>
<select name="jenis_suara">

<option <?= ($d['jenis_suara']=="Sopran") ? "selected" : ""; ?>>
Sopran
</option>

<option <?= ($d['jenis_suara']=="Alto") ? "selected" : ""; ?>>
Alto
</option>

<option <?= ($d['jenis_suara']=="Tenor") ? "selected" : ""; ?>>
Tenor
</option>

<option <?= ($d['jenis_suara']=="Bass") ? "selected" : ""; ?>>
Bass
</option>

</select>

<button type="submit">
UPDATE
</button>

</form>

</div>

</body>
</html>
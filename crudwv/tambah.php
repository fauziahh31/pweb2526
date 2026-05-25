<?php
session_start();
include "koneksi.php";
 
if(!isset($_SESSION['username'])){
    header("location:login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html>
<head>
 
<title>Tambah Anggota</title>
 
<link rel="stylesheet" href="style.css">
 
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
 
<style>
 
.container{
    width:420px;
    margin:50px auto;
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
    margin-top:10px;
}
 
button:hover{
    background:#85409D;
}
 
.kembali{
    display:block;
    text-align:center;
    margin-top:15px;
    color:white;
    text-decoration:none;
}
 
</style>
 
</head>
 
<body>
 
<div class="container">
 
<h2>Tambah Anggota</h2>
 
<form method="post" action="proses_tambah.php">
 
<label>Nama</label>
<input type="text" name="nama" placeholder="Masukkan nama anggota" required>
 
<label>Kelas</label>
<select name="kelas">
 
<!-- TJKT -->
<option>10 TJKT 1</option>
<option>10 TJKT 2</option>
<option>10 TJKT 3</option>
<option>11 TJKT 1</option>
<option>11 TJKT 2</option>
<option>11 TJKT 3</option>
<option>11 TJKT 4</option>
<option>12 TJKT 1</option>
<option>12 TJKT 2</option>
<option>12 TJKT 3</option>
 
<!-- KULINER -->
<option>10 Kuliner 1</option>
<option>10 Kuliner 2</option>
<option>10 Kuliner 3</option>
<option>10 Kuliner 4</option>
<option>10 Kuliner 5</option>
<option>11 Kuliner 1</option>
<option>11 Kuliner 2</option>
<option>11 Kuliner 3</option>
<option>11 Kuliner 4</option>
<option>11 Kuliner 5</option>
<option>11 Kuliner 6</option>
<option>12 Kuliner 1</option>
<option>12 Kuliner 2</option>
<option>12 Kuliner 3</option>
<option>12 Kuliner 4</option>
<option>12 Kuliner 5</option>
 
<!-- KECANTIKAN SPA -->
<option>10 Kecantikan SPA 1</option>
<option>10 Kecantikan SPA 2</option>
<option>11 Kecantikan SPA 1</option>
<option>11 Kecantikan SPA 2</option>
<option>12 Kecantikan SPA 1</option>
<option>12 Kecantikan SPA 2</option>
 
<!-- DPB -->
<option>10 DPB 1</option>
<option>10 DPB 2</option>
<option>10 DPB 3</option>
<option>11 DPB 1</option>
<option>11 DPB 2</option>
<option>11 DPB 3</option>
<option>12 DPB 1</option>
<option>12 DPB 2</option>
<option>12 DPB 3</option>
 
<!-- TKI -->
<option>10 TKI 1</option>
<option>10 TKI 2</option>
<option>10 TKI 3</option>
<option>11 TKI 1</option>
<option>11 TKI 2</option>
<option>11 TKI 3</option>
<option>12 TKI 1</option>
<option>12 TKI 2</option>
<option>12 TKI 3</option>
 
</select>
 
<label>Jabatan</label>
<select name="jabatan" required>
  <option value="">-- Pilih Jabatan --</option>
  <option value="Ketua">Ketua</option>
  <option value="Wakil Ketua">Wakil Ketua</option>
  <option value="Sekretaris">Sekretaris</option>
  <option value="Wakil Sekretaris">Wakil Sekretaris</option>
  <option value="Bendahara">Bendahara</option>
  <option value="Wakil Bendahara">Wakil Bendahara</option>
  <option value="Koordinasi Latihan">Koordinasi Latihan</option>
  <option value="Wakil Koordinasi Latihan">Wakil Koordinasi Latihan</option>
  <option value="Kedisiplinan">Kedisiplinan</option>
  <option value="Wakil Kedisiplinan">Wakil Kedisiplinan</option>
  <option value="Dokumentasi">Dokumentasi</option>
  <option value="Wakil Dokumentasi">Wakil Dokumentasi</option>
  <option value="Anggota Biasa">Anggota Biasa</option>
  <option value="Pembina Eskul">Pembina Eskul</option>
</select>
 
<label>Keaktifan</label>
<select name="keaktifan">
<option>Anggota Aktif</option>
<option>Alumni</option>
</select>
 
<label>Jenis Suara</label>
<select name="jenis_suara">
<option>Sopran</option>
<option>Alto</option>
<option>Tenor</option>
<option>Bass</option>
</select>
 
<button type="submit">SIMPAN</button>
 
</form>
 
<a href="index.php" class="kembali">← Kembali ke Dashboard</a>
 
</div>
 
</body>
</html>
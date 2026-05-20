<?php
include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($koneksi,
"SELECT * FROM anggota_wahana_vokalia WHERE id='$id'");

$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Anggota</title>

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
}

input, select{
    width:100%;
    padding:12px;
    border:none;
    border-radius:10px;
    outline:none;
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

<!-- TJKT -->
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

<!-- KULINER -->
<option <?= ($d['kelas']=="10 Kuliner 1") ? "selected" : ""; ?>>10 Kuliner 1</option>
<option <?= ($d['kelas']=="10 Kuliner 2") ? "selected" : ""; ?>>10 Kuliner 2</option>
<option <?= ($d['kelas']=="10 Kuliner 3") ? "selected" : ""; ?>>10 Kuliner 3</option>
<option <?= ($d['kelas']=="10 Kuliner 4") ? "selected" : ""; ?>>10 Kuliner 4</option>
<option <?= ($d['kelas']=="10 Kuliner 5") ? "selected" : ""; ?>>10 Kuliner 5</option>

<option <?= ($d['kelas']=="11 Kuliner 1") ? "selected" : ""; ?>>11 Kuliner 1</option>
<option <?= ($d['kelas']=="11 Kuliner 2") ? "selected" : ""; ?>>11 Kuliner 2</option>
<option <?= ($d['kelas']=="11 Kuliner 3") ? "selected" : ""; ?>>11 Kuliner 3</option>
<option <?= ($d['kelas']=="11 Kuliner 4") ? "selected" : ""; ?>>11 Kuliner 4</option>
<option <?= ($d['kelas']=="11 Kuliner 5") ? "selected" : ""; ?>>11 Kuliner 5</option>
<option <?= ($d['kelas']=="11 Kuliner 6") ? "selected" : ""; ?>>11 Kuliner 6</option>

<option <?= ($d['kelas']=="12 Kuliner 1") ? "selected" : ""; ?>>12 Kuliner 1</option>
<option <?= ($d['kelas']=="12 Kuliner 2") ? "selected" : ""; ?>>12 Kuliner 2</option>
<option <?= ($d['kelas']=="12 Kuliner 3") ? "selected" : ""; ?>>12 Kuliner 3</option>
<option <?= ($d['kelas']=="12 Kuliner 4") ? "selected" : ""; ?>>12 Kuliner 4</option>
<option <?= ($d['kelas']=="12 Kuliner 5") ? "selected" : ""; ?>>12 Kuliner 5</option>

<!-- KECANTIKAN SPA -->
<option <?= ($d['kelas']=="10 Kecantikan SPA 1") ? "selected" : ""; ?>>10 Kecantikan SPA 1</option>
<option <?= ($d['kelas']=="10 Kecantikan SPA 2") ? "selected" : ""; ?>>10 Kecantikan SPA 2</option>

<option <?= ($d['kelas']=="11 Kecantikan SPA 1") ? "selected" : ""; ?>>11 Kecantikan SPA 1</option>
<option <?= ($d['kelas']=="11 Kecantikan SPA 2") ? "selected" : ""; ?>>11 Kecantikan SPA 2</option>

<option <?= ($d['kelas']=="12 Kecantikan SPA 1") ? "selected" : ""; ?>>12 Kecantikan SPA 1</option>
<option <?= ($d['kelas']=="12 Kecantikan SPA 2") ? "selected" : ""; ?>>12 Kecantikan SPA 2</option>

<!-- DPB -->
<option <?= ($d['kelas']=="10 DPB 1") ? "selected" : ""; ?>>10 DPB 1</option>
<option <?= ($d['kelas']=="10 DPB 2") ? "selected" : ""; ?>>10 DPB 2</option>
<option <?= ($d['kelas']=="10 DPB 3") ? "selected" : ""; ?>>10 DPB 3</option>

<option <?= ($d['kelas']=="11 DPB 1") ? "selected" : ""; ?>>11 DPB 1</option>
<option <?= ($d['kelas']=="11 DPB 2") ? "selected" : ""; ?>>11 DPB 2</option>
<option <?= ($d['kelas']=="11 DPB 3") ? "selected" : ""; ?>>11 DPB 3</option>

<option <?= ($d['kelas']=="12 DPB 1") ? "selected" : ""; ?>>12 DPB 1</option>
<option <?= ($d['kelas']=="12 DPB 2") ? "selected" : ""; ?>>12 DPB 2</option>
<option <?= ($d['kelas']=="12 DPB 3") ? "selected" : ""; ?>>12 DPB 3</option>

<!-- TKI -->
<option <?= ($d['kelas']=="10 TKI 1") ? "selected" : ""; ?>>10 TKI 1</option>
<option <?= ($d['kelas']=="10 TKI 2") ? "selected" : ""; ?>>10 TKI 2</option>
<option <?= ($d['kelas']=="10 TKI 3") ? "selected" : ""; ?>>10 TKI 3</option>

<option <?= ($d['kelas']=="11 TKI 1") ? "selected" : ""; ?>>11 TKI 1</option>
<option <?= ($d['kelas']=="11 TKI 2") ? "selected" : ""; ?>>11 TKI 2</option>
<option <?= ($d['kelas']=="11 TKI 3") ? "selected" : ""; ?>>11 TKI 3</option>

<option <?= ($d['kelas']=="12 TKI 1") ? "selected" : ""; ?>>12 TKI 1</option>
<option <?= ($d['kelas']=="12 TKI 2") ? "selected" : ""; ?>>12 TKI 2</option>
<option <?= ($d['kelas']=="12 TKI 3") ? "selected" : ""; ?>>12 TKI 3</option>

</select>

<select name="jabatan" required>
  <option value="Ketua" <?= ($data['jabatan']=="Ketua") ? "selected" : "" ?>>Ketua</option>
  <option value="Wakil Ketua" <?= ($data['jabatan']=="Wakil Ketua") ? "selected" : "" ?>>Wakil Ketua</option>
  <option value="Sekretaris" <?= ($data['jabatan']=="Sekretaris") ? "selected" : "" ?>>Sekretaris</option>
  <option value="Wakil Sekretaris" <?= ($data['jabatan']=="Wakil Sekretaris") ? "selected" : "" ?>>Wakil Sekretaris</option>
  <option value="Bendahara" <?= ($data['jabatan']=="Bendahara") ? "selected" : "" ?>>Bendahara</option>
  <option value="Wakil Bendahara" <?= ($data['jabatan']=="Wakil Bendahara") ? "selected" : "" ?>>Wakil Bendahara</option>
  <option value="Koordinasi Latihan" <?= ($data['jabatan']=="Koordinasi Latihan") ? "selected" : "" ?>>Koordinasi Latihan</option>
  <option value="Wakil Koordinasi Latihan" <?= ($data['jabatan']=="Wakil Koordinasi Latihan") ? "selected" : "" ?>>Wakil Koordinasi Latihan</option>
  <option value="Kedisiplinan" <?= ($data['jabatan']=="Kedisiplinan") ? "selected" : "" ?>>Kedisiplinan</option>
  <option value="Wakil Kedisiplinan" <?= ($data['jabatan']=="Wakil Kedisiplinan") ? "selected" : "" ?>>Wakil Kedisiplinan</option>
  <option value="Dokumentasi" <?= ($data['jabatan']=="Dokumentasi") ? "selected" : "" ?>>Dokumentasi</option>
  <option value="Wakil Dokumentasi" <?= ($data['jabatan']=="Wakil Dokumentasi") ? "selected" : "" ?>>Wakil Dokumentasi</option>
  <option value="Anggota Biasa" <?= ($data['jabatan']=="Anggota Biasa") ? "selected" : "" ?>>Anggota Biasa</option>
  <option value="Pembina Eskul" <?= ($data['jabatan']=="Pembina Eskul") ? "selected" : "" ?>>Pembina Eskul</option>
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
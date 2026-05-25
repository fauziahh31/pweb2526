<?php
session_start();
include "koneksi.php";

if(!isset($_SESSION['username'])){
    header("location:login.php");
    exit;
}

$data = mysqli_query($koneksi, "SELECT * FROM anggota_wahana_vokalia");
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="app">

<div class="sidebar">
    <h2>Dashboard</h2>

    <a href="index.php">Home</a>

    <?php if($_SESSION['role'] == 'admin'){ ?>
    <a href="tambah.php">Tambah</a>
    <?php } ?>

    <a href="logout.php">Logout</a>
</div>

<div class="content">

<div class="card">
    <h2>Halo, <?= $_SESSION['username']; ?></h2>
</div>

<div class="card">

<?php if($_SESSION['role'] == 'admin'){ ?>
<a href="tambah.php" class="btn">+ Tambah Data</a>
<?php } ?>

<table>
<tr>
<th>No</th><th>Nama</th><th>Kelas</th><th>Jabatan</th><th>Keaktifan</th><th>Suara</th>

<?php if($_SESSION['role'] == 'admin'){ ?>
<th>Aksi</th>
<?php } ?>
</tr>

<?php $no=1; while($d=mysqli_fetch_assoc($data)){ ?>

<tr>
<td><?= $no++; ?></td>
<td><?= $d['nama']; ?></td>
<td><?= $d['kelas']; ?></td>
<td><?= $d['jabatan']; ?></td>
<td><?= $d['keaktifan']; ?></td>
<td><?= $d['jenis_suara']; ?></td>

<?php if($_SESSION['role'] == 'admin'){ ?>
<td>
<a href="edit.php?id=<?= $d['id']; ?>" class="edit">Edit</a>
<a href="hapus.php?id=<?= $d['id']; ?>" class="hapus">Hapus</a>
</td>
<?php } ?>

</tr>

<?php } ?>

</table>

</div>

</div>

</div>

</body>
</html>
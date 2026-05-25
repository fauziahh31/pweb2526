<?php
session_start();
include "koneksi.php";

if(!isset($_SESSION['username'])){
    header("location:login.php");
    exit;
}

$query = mysqli_query($koneksi, "SELECT * FROM anggota_wahana_vokalia");
?>

<h2>Halo <?= $_SESSION['username']; ?></h2>

<?php if($_SESSION['role'] == 'admin'){ ?>
    <a href="tambah.php">+ Tambah</a>
<?php } ?>

<table border="1">
<tr>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Jabatan</th>
    <th>Keaktifan</th>
    <th>Suara</th>

    <?php if($_SESSION['role'] == 'admin'){ ?>
    <th>Aksi</th>
    <?php } ?>
</tr>

<?php while($d = mysqli_fetch_array($query)){ ?>
<tr>
    <td><?= $d['nama']; ?></td>
    <td><?= $d['kelas']; ?></td>
    <td><?= $d['jabatan']; ?></td>
    <td><?= $d['keaktifan']; ?></td>
    <td><?= $d['jenis_suara']; ?></td>

    <?php if($_SESSION['role'] == 'admin'){ ?>
    <td>
        <a href="edit.php?id=<?= $d['id']; ?>">Edit</a>
        <a href="hapus.php?id=<?= $d['id']; ?>">Hapus</a>
    </td>
    <?php } ?>
</tr>
<?php } ?>
</table>

<a href="logout.php">Logout</a>
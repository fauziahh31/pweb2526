<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit;
}

$data = mysqli_query($koneksi, "SELECT * FROM anggota_wahana_vokalia");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
   <link rel="stylesheet" href="style.css?v=999">
</head>

<body>

<div class="app">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>Dashboard</h2>

        <a href="index.php">🏠 Home</a>
        <a href="tambah.php">➕ Tambah Data</a>
        <a href="logout.php" class="logout">🚪 Logout</a>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <div class="topbar">
            <h3>Selamat datang, <?= $_SESSION['username']; ?> 👋</h3>
        </div>

        <div class="card">

            <a href="tambah.php" class="btn">+ Tambah Data</a>

            <table>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jabatan</th>
                    <th>Keaktifan</th>
                    <th>Jenis Suara</th>
                    <th>Aksi</th>
                </tr>

                <?php
                $no = 1;
                while ($d = mysqli_fetch_assoc($data)) {
                ?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $d['nama']; ?></td>
                    <td><?= $d['kelas']; ?></td>
                    <td><?= $d['jabatan']; ?></td>
                    <td><?= $d['keaktifan']; ?></td>
                    <td><?= $d['jenis_suara']; ?></td>
                    <td>

<?php if($_SESSION['role'] == 'admin'){ ?>

    <a href="edit.php?id=<?= $d['id']; ?>" class="edit">Edit</a> |
    <a href="hapus.php?id=<?= $d['id']; ?>" class="hapus" onclick="return confirm('Yakin?')">Hapus</a>

<?php } ?>

</td>
                </tr>

                <?php } ?>

            </table>

        </div>

    </div>

</div>

</body>
</html>
<?php
session_start();
include "koneksi.php";
 
if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit;
}
 
if($_SESSION['role'] == 'admin'){
    $data = mysqli_query($koneksi, "SELECT * FROM anggota_wahana_vokalia");
} else {
    $user = $_SESSION['username'];
    $data = mysqli_query($koneksi, "SELECT * FROM anggota_wahana_vokalia WHERE username='$user'");

} else {
    $user = $_SESSION['username'];
    $data = mysqli_query($koneksi, "SELECT * FROM anggota_wahana_vokalia WHERE username='$user'");
}
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css?v=999">
    <style>
    .aksi { display:flex; justify-content:center; gap:8px; }
    .edit {
        background:#5D2F77; color:white;
        padding:5px 12px; border-radius:8px;
        text-decoration:none; font-size:13px;
    }
    .edit:hover { background:#85409D; }
    .hapus {
        background:crimson; color:white;
        padding:5px 12px; border-radius:8px;
        text-decoration:none; font-size:13px;
    }
    .hapus:hover { background:darkred; }
    </style>
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
            <h3>Selamat datang, <?= $_SESSION['username']; ?> 👋
            <small style="font-size:13px; opacity:0.7;">(<?= $_SESSION['role']; ?>)</small></h3>
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
                    // Tampilkan tombol Edit/Hapus jika: admin, atau data milik sendiri
                    $boleh_aksi = ($_SESSION['role'] == 'admin') || ($d['user_id'] == $_SESSION['user_id']);
                ?>
 
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $d['nama']; ?></td>
                    <td><?= $d['kelas']; ?></td>
                    <td><?= $d['jabatan']; ?></td>
                    <td><?= $d['keaktifan']; ?></td>
                    <td><?= $d['jenis_suara']; ?></td>
                    <td>
                        <?php if($boleh_aksi){ ?>
                        <div class="aksi">
                            <a href="edit.php?id=<?= $d['id']; ?>" class="edit">Edit</a>
                            <a href="hapus.php?id=<?= $d['id']; ?>" class="hapus" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
                        </div>
                        <?php } else { ?>
                        <span style="color:#aaa; font-size:12px;">-</span>
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
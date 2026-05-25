<?php
session_start();
include "koneksi.php";

if(!isset($_SESSION['username'])){
    header("location:login.php");
    exit;
}

$query = mysqli_query($koneksi,
"SELECT * FROM anggota_wahana_vokalia");
?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title>

<link rel="stylesheet" href="style.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

.aksi{
    display:flex;
    justify-content:center;
    gap:10px;
}

.edit{
    background:#5D2F77;
    color:white;
    padding:6px 12px;
    border-radius:8px;
    text-decoration:none;
    font-size:14px;
}

.edit:hover{
    background:#85409D;
}

.hapus{
    background:crimson;
    color:white;
    padding:6px 12px;
    border-radius:8px;
    text-decoration:none;
    font-size:14px;
}

.hapus:hover{
    background:darkred;
}

</style>

</head>

<body>

<div class="app">

    <!-- SIDEBAR -->
    <div class="sidebar">

        <h2>DASHBOARD</h2>

        <a href="dashboard.php">
            <i class="fa fa-home"></i> Home
        </a>

        <?php if($_SESSION['role'] == 'admin'){ ?>

        <a href="tambah.php">
            <i class="fa fa-user-plus"></i> Tambah Anggota
        </a>

        <a class="logout" href="logout.php">
            <i class="fa fa-right-from-bracket"></i> Logout
        </a>

        <?php } ?>

    </div>

    <!-- CONTENT -->
    <div class="content">

        <!-- CARD -->
        <div class="card">

            <h2>
                Halo, <?= $_SESSION['username']; ?> 👋
            </h2>

            <p>
                Selamat datang di Dashboard Wahana Vokalia
            </p>

        </div>

        <!-- TABLE -->
        <div class="card">

            <?php if($_SESSION['role'] == 'admin'){ ?>

            <a href="tambah.php" class="btn">
                + Tambah Anggota
            </a>

            <?php } ?>

            <table>

                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jabatan</th>
                    <th>Keaktifan</th>
                    <th>Jenis Suara</th>

                    <?php if($_SESSION['role'] == 'admin'){ ?>
                    <th>Aksi</th>
                    <?php } ?>

                </tr>

                <?php
                $no = 1;

                while($d = mysqli_fetch_array($query)){
                ?>

                <tr>

                    <td><?= $no++; ?></td>

                    <td><?= $d['nama']; ?></td>

                    <td><?= $d['kelas']; ?></td>

                    <td><?= $d['jabatan']; ?></td>

                    <td><?= $d['keaktifan']; ?></td>

                    <td><?= $d['jenis_suara']; ?></td>

                    <?php if($_SESSION['role'] == 'admin'){ ?>

                    <td>

                        <div class="aksi">

                            <a href="edit.php?id=<?= $d['id']; ?>" class="edit">
                                Edit
                            </a>

                            <a 
                            href="hapus.php?id=<?= $d['id']; ?>" 
                            class="hapus"
                            onclick="return confirm('Yakin mau hapus data ini?')">

                                Hapus

                            </a>

                        </div>

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
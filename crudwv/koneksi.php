<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_wv");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
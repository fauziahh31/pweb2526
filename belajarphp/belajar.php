<?php
    $nama_lengkap = "fauziah nur islami";
    $jenis_kelamin = "P";
    $umur ="16 tahun";

    echo "Nama: $nama_lengkap<br>";
    echo "Jenis Kelamin: $jenis_kelamin<br>";
    echo "Umur: $umur tahun<br>";

    echo "<br><br>";

    $namabarang ="blush on";
    $harga = "50000";
    $stok = "12";

    echo "Nama: $namabarang<br>";
    echo "harga: $harga<br>";
    echo "Umur: $stok<br>";
    echo "saya membeli $namabarang seharga $harga";

    echo "<br><br>";

    $total_belanja = 500000;
    if($total_belanja > 100000){
    echo "Anda dapat hadiah!";
    }

    echo "<br><br>";

    $suka = true;

    echo $suka ? "Aku juga suka ice cream": "yeayy!";

    echo "<br><br>";

    $nilai = 150;
if ($nilai > 100){
    echo "Anda salah memasukan nilai!<br>";
} else {
    echo "Anda benar memasukan nilai!<br>";
}
    if ($nilai > 90) {
        $grade = "A+";
    } elseif($nilai > 80){
        $grade = "A";
    } elseif($nilai > 70){
        $grade = "B+";
    } elseif($nilai > 60){
        $grade = "B";
    } elseif($nilai > 50){
        $grade = "C+";
    } elseif($nilai > 40){
        $grade = "C";
    } elseif($nilai > 30){
        $grade = "D";
    } elseif($nilai > 20){
        $grade = "E";
    } else {
        $grade = "F";
    }

    echo "Nilai anda: $nilai<br>";
if ($nilai <=100){
    echo "Grade:$grade";
}


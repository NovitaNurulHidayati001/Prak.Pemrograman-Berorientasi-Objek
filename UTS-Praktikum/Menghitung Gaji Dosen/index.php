<!-- Nama   : Novita Nurul Hidayati -->
<!-- NIM    : 20051397001 -->
<!-- Kelas  : 2020 A -->
<!-- Prodi  : D4 Manajemen Informatika-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Hitung Gaji Dosen</title>
</head>
<body>
<div class="container">
      <div class="header">
        <h2 class="judul">Menghitung Gaji Dosen</h2>
  </div>
<div class="data">
<form method="POST" action="">
    <p>Nama</p>
    <div class="awal">
    <input type="text" name="nama" placeholder="Masukkan Nama" style="text-align: center ;">
    </div>
    <p>Jumlah SKS</p>
    <div class="akhir">
    <input type="text" name="sks" placeholder="Masukan Jumlah SKS" style="text-align: center ;">
    </div>
    <br><br> 
    <div class="enter">
    <input type="submit" name="submit" value="HITUNG">
    </div>
</form>
</div>

</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n=$_POST['nama'];
    $sks=$_POST['sks'];
    $g=1500000;
    $t=100000;
    $j=$t*$sks;
    $h=$g+$j;

    echo "<div class='hasil'> Nama " . $n . " </div>";
    echo "<div class='hasil'> Total Gaji Rp. " . $h . " </div>";
    
  }

?>
<!-- Nama          : Novita Nurul Hidayati -->
<!-- NIM           : 20051397001 -->
<!-- Kelas         : 2020 A -->
<!-- Program Studi : D4 Manajemen Informatika -->

<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="No 1.css">
    <title>Praktikum 4</title>
</head>
<body>
<div class="container">
<h2>Soal 1</h2>
<!-- Program PHP -->
<?php

class Orang{
    protected $nama,$umur;

    public function __construct($nama,$umur){
    $this->nama = $nama;
    $this->umur = $umur;
    }
}

class Dosen extends Orang{
    private $nip;
    
    public function __construct($nama, $umur, $nip){
    $this->nip = $nip;
    parent::__construct($nama, $umur);    
    }

    public function hasil(){
        return $this->nama . ' berumur ' . $this->umur. 'th dengan NIP ' . $this->nip;
    }
}

$dosen1 = new Dosen('Daniel', 30, 19961210001); 
$dosen2 = new Dosen('Jihoon', 27, 19990529011);
$dosen3 = new Dosen('Minhyun', 35, 19950809089);

echo $dosen1->hasil();
echo '<br> <br>';
echo $dosen2->hasil();
echo '<br> <br>';
echo $dosen3->hasil();
echo '<br> <br>';

?>
<!-- Akhir Program PHP -->
</div>
</body>
</html>

<!-- Nama  : Novita Nurul Hidayati -->
<!-- NIM   : 20051397001 -->
<!-- Prodi/Kelas : D4 Manajemen Informatika/2020A -->

<?php 

//Berikut Merupakan Implementasi Inheritance!

class Prodi {
    public $namaprodi; 
    private Mahasiswa $mahasiswa;  
    
    public function Prodi(String $namaprodi){ 
        $this->namaProdi = $namaprodi; 
        $mahasiswa = null; 
    } 
    public function setMahasiswa(Mahasiswa $mahasiswa):void { 
       $this->mahasiswa = $mahasiswa; 
    } 
    
    public function getNamaProdi() { 
        return $this->namaProdi; 
    } 
    
    public function setNamaProdi(String $namaprodi):void { 
        $this->namaProdi = $namaprodi; 
    } 
}

class Fakultas {
   public $namafakultas; 
   private Mahasiswa $mahasiswa;  
   
   public function Fakultas(String $namafakultas){ 
       $this->namaFakultas = $namafakultas; 
       $mahasiswa = null; 
   } 
   public function setMahasiswa(Mahasiswa $mahasiswa):void { 
      $this->mahasiswa = $mahasiswa; 
   } 
   
   public function getNamaFakultas() { 
       return $this->namaFakultas; 
   } 
   
   public function setNamaFakultas(String $namafakultas):void { 
       $this->namaFakultas = $namafakultas; 
   } 
}

//Komposisi
$prodi = new Prodi();
$prodi->setNamaProdi('D4 Manajemen Informatikas');
$fakultas = new Fakultas();
$fakultas->setNamaFakultas('Fakultas Vokasi');


echo "-. HASIL OUTPUT! .-";
echo "<br>";
echo "Prodi : " . $prodi->getNamaProdi();
echo "<br/>";
echo "Fakultas : " .  $fakultas->getNamaFakultas();
?>
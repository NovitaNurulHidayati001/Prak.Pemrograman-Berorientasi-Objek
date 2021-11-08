<!-- Nama  : Novita Nurul Hidayati -->
<!-- NIM   : 20051397001 -->
<!-- Prodi/Kelas : D4 Manajemen Informatika/2020A -->

<?php 

//Berikut Merupakan Implementasi Inheritance!

 class Mahasiswa { 
    
    private String $nama; 
    private int $nomorID; 
    private Prodi $prodi; 
    
    public function IDnama(String $nama, int $nomorID){ 
        return $this->nama = $nama; 
                $this->nomorID = $nomorID; 
                $prodi = null;
                $fakultas = null;
    } 
    public function getNama() {
        return $this->nama; 
    } 
    
    public function setNama(String $nama):void {
        $this->nama = $nama; 
    } 
    
    public function getNomorID() { 
        return $this->nomorID; 
    } 
    
    public function setNomorID(int $nomorID):void { 
        $this->nomorID = $nomorID; 
    } 
    
    public function setProdi(Prodi $prodi):void { 
        $this->Prodi = $prodi; 
    }

    public function setFakultas(Fakultas $fakultas):void {
        $this->Fakultas = $fakultas;
    }
}

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
//Asosiasi
$mahasiswa = new Mahasiswa(); 
$mahasiswa->setNama('Novita Nurul Hidayati');
$mahasiswa->setNomorID(20051397001);
$prodi = new Prodi();
$prodi->setNamaProdi("D4 Manajemen Informatika"); 
$fakultas = new Fakultas();
$fakultas->setNamaFakultas('Fakultas Vokasi');

echo "-. HASIL OUTPUT! .-";
echo "<br>";
echo "Nama : " . $mahasiswa->getNama();
echo "<br/>";
echo "Nomor ID : " . $mahasiswa->getNomorID();
echo "<br/>";
echo "Prodi : " . $prodi->getNamaProdi();
echo "<br/>";
echo "Fakultas : " .  $fakultas->getNamaFakultas();
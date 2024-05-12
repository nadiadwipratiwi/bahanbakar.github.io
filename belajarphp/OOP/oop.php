<?php
class Animal{
    public $nama;
    public $umur;
    public $JenisHidup;

    public function setNama($nama){
        $this->nama=$nama;
    }
    public function setJenisHidup($JenisHidup){
        $this->JenisHidup=$JenisHidup;
    }
    public function getCetak(){
        echo "Nama Animal: ".$this->nama;
        echo "<br>";
        echo "Jenis Hidup: ".$this->JenisHidup;
        echo "<br> ================================= <br>";
    }
}

$jerapah = new Animal();
$jerapah->setNama("Jerapah Afrika");
$jerapah->setJenisHidup("Darat");
$jerapah->getcetak();

$burung = new Animal();
$burung->setNama("Burung Garuda");
$burung->setJenisHidup("Udara");
$burung->getcetak();
?>
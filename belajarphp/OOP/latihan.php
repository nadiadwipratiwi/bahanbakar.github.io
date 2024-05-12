<?php
class Siswa {
    public $nama;
    protected $nis;

    public function __construct($nama, $nis){
        $this->nama = $nama;
        $this->nis = $nis;
    }

    public function getNis() {
        return $this->nis;
    }
}

// $siswa = new Siswa('Nadia', '12309917');

// echo $siswa->nama;
// echo "<br>";
// echo $siswa->getNis();

class SiswaKelas extends Siswa {
    public $rombel;
    public $rayon;

    public function __construct($nama, $nis, $rombel, $rayon) {
        parent::__construct($nama, $nis);
        $this->rombel = $rombel;
        $this->rayon = $rayon;
    }

    public function dataSiswa() {
        return "Nama : " . $this->nama . "<br> NIS : " . $this->nis . "<br> 
        Rombel: " . $this->rombel . "<br> Rayon: " . $this->rayon;
    }
} 

$siswa_kelas = new SiswaKelas('Marsha', '12007880', 'RPL XI-10', 'Ciawi 10');

echo $siswa_kelas->getNis();
echo "<br>";
echo $siswa_kelas->dataSiswa();
?>
<?php
// class Laptop {
//     public $nama;

// public function setnama($nama) {
//     $this->nama=$nama;
// }
// public function getnama(){
//     return $this->nama;
// }
// }

// $produk1 = new Laptop();
// $produk1->setNama("Momo");

// $produk2 = new Laptop();
// $produk2->setNama("Lani");

// $produk3 = new Laptop();
// $produk3->setNama("Beni");

// echo "Laptop 1 milik :  " . "<b>" . $produk1->getNama() . "</b>" . "<br>";
// echo "Laptop 2 milik :  " . "<b>" . $produk2->getNama() . "</b>" . "<br>";
// echo "Laptop 3 milik :  " . "<b>" . $produk3->getNama() . "</b>" . "<br>";

// class laptop {
//     public $pemilik = "Andi";
//     public $merk = "Lenovo";

//     public function __construct(){
//         echo "Ini berasal dari Construct Laptop";
//     }

//     public function hidupkan_laptop(){
//         return "Hidupkan Laptop $this->merk punya $this->pemilik";
//     }

//     public function __destruct(){
//         echo "Ini berasal dari Destruct Laptop";
//     }
// }
// $laptop_andi = new Laptop();

// echo "<br />";
// echo $laptop_andi->hidupkan_laptop();
// echo "<br />";

// class Komputer {
//     private $jenis_processor = "Intel Core i7-4790";

//     public function tampilkan_processor(){
//         echo $this->jenis_processor;
//     }

//     public function gettampilkan_processor1(){
//         echo $this->jenis_processor;
//     }
// }
// $komputer_baru = new Komputer();

// echo $komputer_baru->tampilkan_processor();
// echo "<br>";
// echo $komputer_baru->gettampilkan_processor1();

// class Laptop {
//     protected $pemilik = "Anto";

//     public function akses_pemilik() {
//         return $this->pemilik;
//     }

//     public function akses_pemilik2() {
//         return $this->pemilik;
//     }

//     protected function hidupkan_laptop() {
//         return "Hidupkan Laptop";
//     }

//     public function paksa_hidup() {
//         return $this->hidupkan_laptop();
//     }
// }
// $laptop_anto = new laptop();

// echo $laptop_anto->akses_pemilik();
// echo "<br>";
// echo $laptop_anto->akses_pemilik2();
// echo "<br>";
// echo $laptop_anto->paksa_hidup();
// echo "<br>";
// echo $laptop_anto->hidupkan_laptop();

// class Laptop {
//     public static $merk; // property static

//     public static function hidupkan_laptop() { // static method => membuat method bisa dipangggil oleh method yang berada di class yang sama tanpa perlu instansiasi class
//         echo "Hidupkan laptop";
//     } 

//     public function matikan_laptop() {
//         self::hidupkan_laptop(); // self:: =>kata kunci untuk memanggil property atau method static
//     }
// }
// $laptop_anto = new laptop();
// Laptop::$merk = "Asus";
// echo "dengan merk <b>". Laptop::$merk . "</b> <br>";
// echo $laptop_anto->matikan_laptop(); echo "<br>";
// echo Laptop::hidupkan_laptop(); // memanggil method static yang mana memanggil method tanpa perlu instansiasi class menjadi object


// class Komputer {
//     private $merk = 'HP';

//     public function get_merk(){
//         return $this->merk;
//     }
// }
// $komputer = new Komputer;
// echo $komputer->get_merk(); // tidak akan error walaupun isis dari method tersebut memanggil property private, karena ditampilkan melalui public method
// echo $komputer->merk; // bakal error karena memanggil peroperty merk yang bersifat private

// class Komputer { // class parent
//     protected $merk = 'HP';

//     public function get_merk() {
//         return $this->merk;
//     }
// }

// class Laptop extends Komputer { // class child
//     public function nama_merk() {
//         return $this->merk;
//     }

//     protected function merk_lagi() {
//         return $this->get_merk();
//     }
// }
// $komputer = new Komputer;
// $laptop = new Laptop;
// echo $laptop->nama_merk();
// // echo $laptop->merk_lagi();
// echo "<br>";
// echo $laptop->get_merk();

// class Komputer {
//     public $merk;
//     public function processor() {
//         echo 'i7';
//     }

//     public function get_merk() {
//         return $this->merk;
//     }
// }

// class Laptop extends Komputer {
//     public function get_processor() {
//         return $this->processor();
//     }
// }
// $komputer = new Komputer;
// $laptop = new laptop;
// $komputer->merk = 'HP';
// // $laptop->merk = 'ACER';
// echo $komputer->merk;
// echo "<br>";
// echo $komputer->processor();
// echo "<br>";
// echo $komputer->get_merk();
// echo "<br>";
// echo $laptop->get_processor();

// class Barang {
//     private $nama;
//     private $harga;
//     public function set_harga($nama, $harga = "100000") {
//         $this->nama = $nama;
//         $this->harga = $harga;
//     }
//     public function get_harga() {
//         echo "Harga dari $this->nama tersebut adalah $this->harga";
//     }
// }

// $barang = new Barang;
// $barang->set_harga('Paprika');
// echo $barang->get_harga();

// class yang tidak bisa di instansiasi (tidak bisa dibuat menjadi objek) dan berperan sebagai 'kerangka dasar' bagi class turunannya
abstract class Komputer {
    abstract public function lihat_spec();
    public static function hidupkan_komputer() {
        echo "Hidupkan komputer";
    }
}

class Laptop extends Komputer {
    public function lihat_spec() {
        return "Lihat Spec Laptop...";
    }

    public function beli_laptop() {
        return "Beli Laptop...";
    }
}
$laptop_baru = new Laptop();
echo $laptop_baru->lihat_spec();
echo "<br>";
echo $laptop_baru->beli_laptop();
echo "<br>";
echo Komputer::hidupkan_komputer();
?>
<?php

class Hitung {
    public $result;

    public function __construct() {
        $this->result = 1;
    }

    public function multiply($a, $b) {
        $this->result = $a * $b;
    }

    public function getResult() {
        return $this->result;
    }
}

$hitung = new Hitung();
$hitung->multiply(7, 3);

echo "Hasil perkalian: " . $hitung->getResult();
?>
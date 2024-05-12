<?php
    $string1 = 'Ini adalah contoh string sederhana';
    $string2 = 'Variabel juga tidak otomatis ditampilkan : $string1';

    echo $string1; echo "<br>";
    echo $string2;

    echo "<br>";echo "<br>";

    $stringa = 'Ini adalah contoh string sederhana 2';
    $stringb = 'Variabel akan otomatis ditampilkan : $stringa';

    echo $stringa; echo "<br>";
    echo $stringb;

    echo "<br>";echo "<br>";

    $nama = "Novica";
    $umur = 20;

    echo "Nama saya adalah ", $nama, " dan saya berumur ", $umur; echo "<br>";
    echo "Nama saya adalah " .$nama. " dan saya berumur " .$umur; echo "<br>";

    echo "<br>";echo "<br>";

    $a = "1";
    $b = 2;
    echo $a + $b;

    /*$name = "Faidz";
    $age = 16;
    $score = 12.45;

    var_dump($name);
    echo "<br>";
    var_dump($age);
    echo "<br>";
    var_dump($score);*/

    // array
    // $laptops = array("asus", "acer", "huawei", "hp", "lenovo");
    // var_dump($laptops);

    // cara pake []
    $laptops = ["asus", "acer", "huawei", "hp", "lenovo"];
    var_dump($laptops[4])
?>


<?php
function kurangAngka ($parameter1, $parameter2){
    $hasil = $parameter1 - $parameter2;
    echo $hasil . "<br>"; 
}

kurangAngka (56, 67);
kurangAngka (112, 70);
kurangAngka (119, 89);

echo "<br>";
function pangkat ($pangkat1, $pangkat2){
    $hasil = $pangkat1 ** $pangkat2;
    echo $hasil . "<br>";
}

pangkat (2, 5);
pangkat (6, 4);
pangkat (12, 6);

echo "<br>";
function perbandingan ($p1, $p2, $p3){
    $hasil = (max ($p1, $p2, $p3));
    echo $hasil. "<br>";
}

perbandingan (2, 3, 5);
perbandingan (9, 7, 3);
perbandingan (8, 12, 6);
?>
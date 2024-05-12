<?php
// looping for 1-50 (increment ver.)
echo "<h4>Looping for 1-50</h4>";
for($i = 1; $i <= 50; $i++){
    echo $i;
    echo "<br>";
}

echo "<hr>";

// (decrement ver.)
echo "<h4>Looping for 50-1</h4>";
for($i = 50; $i >= 1; $i--){
    echo $i;
    echo "<br>";
}


echo "<hr>";
// dengan keterangan
for($i = 1; $i <= 50; $i++){
    if($i % 2 == 0){
        echo "$i adalah bilangan genap"; echo "<br>";
    }else{
        echo "$i adalah bilangan ganjil"; echo "<br>";
    }
}

echo "<hr>";
// dengan keterangan (genap)
for($i = 2; $i <= 50; $i+=2){
    echo "$i adalah bilangan ganjil"; echo "<br>";
}

echo "<hr>";
// dengan keterangan (ganjil)
for($i = 1; $i <= 50; $i+=2){
    echo "$i adalah bilangan ganjil"; echo "<br>";
}

echo "<hr>";
// kelipatan 5
for($i = 5; $i <= 100; $i+=5){
    echo "$i adalah bilangan dari kelipatan 5"; echo "<br>";
}

echo "<hr>";
// Looping while cetak 1-10
$kursi = 1;
while($kursi <= 10){
    echo $kursi . "<br>";
    $kursi++;
}

// cetak 10-1
echo "<hr>";
$kursi = 10;
while($kursi >= 1){
    echo $kursi . "<br>";
    $kursi--;
}

// ganjil
echo "<hr>";
$kursi = 1;
while($kursi <= 10){
    if($kursi % 2 == 1){
        echo $kursi . "<br>";
    }
    $kursi++;
}

// genap
echo "<hr>";


?>
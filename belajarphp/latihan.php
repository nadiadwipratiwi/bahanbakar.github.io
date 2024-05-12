<?php
echo "<h2> Tugas 1 Operator Aritmatika & Penugasan <h2>";
// operator aritmatika
// $c = $a ** $b;
// echo "$a ** $b = $c";
// echo "<hr>";
$b = 20;
$b = $b + 20;
echo "$b";
echo "<hr>";

// operator penugasan
$b += 30;
echo "$b";
echo "<hr>";
echo "<br>";

echo "<h2> Tugas Increment & Decrement <h2>";
// increment
$goal = 4;

$goal++;
$goal++;
$goal++;

echo "$goal";
echo "<hr>";

//decrement
$value = 20;

$value--;
$value--;
$value--;
$value--;

echo "$value";
echo "<hr>";
echo "<br>";

echo "<h3> Tugas Increment & Decrement dalam versi Operator Penugasan <h3>";
// Penugasan
$goal = 4;
echo $goal += 3;
echo "<hr>";

// Penugasan
$value = 20;
echo $value -= 4;
echo "<hr>";
echo "<br>";

echo "<h2> Tugas Operator Relasi <h2>";
$nilai1 = 17;
$nilai2 = 20;

// lebih kecil
$nilai = $nilai1 < $nilai2;
echo "$nilai1 < $nilai2 = $nilai";
echo "<hr>";

// lebih besar
$nilai = $nilai1 > $nilai2;
echo "$nilai1 > $nilai2 = $nilai";
echo "<hr>";

// persamaan
$nilai = $nilai1 == $nilai2;
echo "$nilai1 == $nilai2 = $nilai";
echo "<hr>";

// pertidaksamaan
$nilai = $nilai1 != $nilai2;
echo "$nilai1 != $nilai2 = $nilai";
echo "<hr>";
echo "<br>";

echo "<h2> Tugas 2 Operator Relasi <h2>";
$nilai3 = "20";
$nilai4 = 20;

// persamaan
$nilai = $nilai3 == $nilai4;
echo "$nilai3 == $nilai4 = $nilai";
echo "<hr>";

// persamaan (false)
$nilai = $nilai3 === $nilai4;
echo "$nilai3 === $nilai4 = $nilai";
echo "<hr>";

// pertidaksamaan (false)
$nilai = $nilai3 != $nilai4;
echo "$nilai3 != $nilai4 = $nilai";
echo "<hr>";

// pertidaksamaan
$nilai = $nilai3 !== $nilai4;
echo "$nilai3 !== $nilai4 = $nilai";
echo "<hr>";
echo "<br>";

echo "<h2> Tugas Operator Logika <h2>";
$first = true;
$second = false;

//AND
$third = $first && $second;
echo $third;
echo "<hr>";

//OR
$third = $first || $second;
echo $third;
echo "<hr>";

$third = $first == $second;
echo $third;
echo "<hr>";
echo "<br>";

echo "<h2> Tugas Operator Ternary <h2>";
// ternary
$suka = true;
$jawab = $suka ? "Ya": "Tidak";
echo $jawab;
echo "<hr>";

$belajar = true;
$result = $belajar ? "Semangat": "Tidak Semangat";
echo $result;
echo "<hr>";

$alas = 10;
$tinggi = 24;
$luas = $alas * $tinggi / 2;
echo "Luas segitiga dengan alas $alas cm dan tinggi $tinggi cm adalah $luas cm";
echo "<hr>";
echo "<br>";

echo "<h2> Tugas 3 nomor <h2>";
// luas persegi dengan sisi 4cm
$sisi = 4;
$luas = $sisi * $sisi;
echo $luas;
echo "<hr>";

// luas lingkaran
$jari = 8;
$luas = 3.14 * $jari *$jari;
echo $luas;
echo "<hr>";

// membandingkan
$angka1 = 19;
$angka2 = 20;
$hasil = $angka1 == $angka2;
?>
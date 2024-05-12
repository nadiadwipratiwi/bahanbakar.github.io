<?php
$nilai = array(80, 78, 72, 84, 92, 88);
echo "Nilai saya : ";
echo implode(', ', $nilai); echo "<br>";

echo "Nilai terkecil : " . min ($nilai); echo "<br>";

echo "Nilai terbesar : " . max ($nilai); echo "<br>";

sort($nilai);
echo "Diurutkan dari yang terkecil : ";
echo implode(', ', $nilai);

echo "<br>";
rsort($nilai);
echo "Diurutkan dari yang terkecil : ";
echo implode(', ', $nilai);

echo "<br>";
$total = array_sum($nilai);
$jumlah = count($nilai);
$ratarata = $total / $jumlah;
echo "Rata-rata nilai : " . $ratarata;

echo "<br>";
$nilai = array(80, 78, 72, 84, 92, 88);
$nilai[2] = 75;
echo "Angka 72 diubah menjadi 75 : ";
echo implode(', ', $nilai);
?>
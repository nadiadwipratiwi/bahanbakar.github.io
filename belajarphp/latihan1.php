<?php
// nomor 1
$age = 23;
$hasil = $age >= 17 ? "Membuat KTP": "Belum cukup umur";
echo $hasil;
echo "<hr>";

// nomor 2
$umur = 45;
if ($umur >= 25){
    echo "Dewasa";
} else if ($umur >= 12){
    echo "Remaja";
} else if ($umur >=5){
    echo "Anak-anak";
} else {
    echo "Balita";
}
echo "<hr>";

// ternary
$umur = 45;
$hasil = $umur >= 25 ? "Dewasa": (($umur >= 12) ? "Remaja": (($umur >= 5) ? "Anak-anak": "Balita"));
echo $hasil;
echo "<hr>";

// nomor 3
$grade = 85;
$hasil = $grade >= 90 ? "Grade A": (($grade >= 80) ? "Grade B": (($grade >= 70) ? "Grade C": "Grade D"));
echo $hasil;
echo "<hr>";

// nomor 4
$dpk = 70;
$mtk = 87;
$agama = 80;
$mean = ($dpk + $mtk + $agama) / 3;
$hasil = $mean >= 90 ? "Sangat bagus!": (($mean >=85) ? "Bagus!": (($mean >= 80) ? "Sangat baik!": (($mean >= 70)? "Baik": "Kurang")));
echo $hasil;
echo "<hr>";

// nomor 5
$x = 20;
$y = 30;
$hasil = ($x == $y) ? "Nilai sama": (($x > $y) ? "Lebih besar x": "Lebih besar y");
echo $hasil;
?>

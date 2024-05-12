<?php
// array index
$data = ["nasi", "mie", "ikan goreng"];
$data2 = array(80, 70, 88);
// memanggil
$data[1];
// menambahkan item
$data2[] = 90;
array_push($data2, 75);
array_unshift($data2, 100);
array_splice($data2, 3, 0, 72);
array_splice($data2, 3, 0, 83);
// mengubah item
$data2[5] = 81;
array_splice($data2, 2, 1, 60);
// menghapus
unset($data2[1]);
array_pop($data2);
array_shift($data2);
print_r($data2);
echo "<br>";
foreach ($data2 as $nilai) {
    echo $nilai . ", ";
}
echo "<br>";
echo implode(' dan ', $data2);
echo "<br>";
foreach ($data as $key => $value) {
    echo strtoupper($value) . ", ";
}

// array assotif
$dataSiswa = [
    "nama" => "Fema",
    "rombel" => "PPLG X-4",
    "nilai" => 80
];
$dataSiswa['rombel'];
$dataSiswa['rayon'] = 'Cic 3';
$dataSiswa['nama'] = 'Putri';
unset($dataSiswa['nilai']);

// array multidimensi
$database = [
    [
        "nama" => "Fema",
        "rombel" => "PPLG X-1"
    ],
    [
        "nama" => "Putri",
        "rombel" => "PPLG X-2"
    ],
    [
        "nama" => "Putra",
        "rombel" => "PPLG X-3"
    ]
];
$database[2]['nama'];
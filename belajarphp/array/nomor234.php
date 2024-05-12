<?php
    // nomor 2
    // for($n = 1; $n <= 10; $n++) {
    //     for($n2 = 1; $n2 <= 10; $n2+=10) {
    //         echo "<br>" . $n . " x " . $n2 . " = " . $n * $n2;
    //     }
    // } echo "<br>";

    // for($n = 1; $n <= 10; $n++) {
    //     for($n2 = 2; $n2 <= 10; $n2+=10) {
    //         echo "<br>" . $n . " x " . $n2 . " = " . $n * $n2;
    //     }
    // } echo "<br>";

    // for($n = 1; $n <= 10; $n++) {
    //     for($n2 = 3; $n2 <= 10; $n2+=10) {
    //         echo "<br>" . $n . " x " . $n2 . " = " . $n * $n2;
    //     }
    // } echo "<br>";

    // revisi
    // for($i = 1; $i <= 3;  $i++){
    //     echo "Perkalian $i <br>";
    //     for($s = 1; $s <= 10; $s++ ){
    //     echo "<br>" . $i . "x" . $s . "=" . $i*$s;
    //     }
    // }


    // nomor 3
    echo "<hr>";
    $data = [
        [
            'nama' => 'Andi',
            'tahun' => 2008,
        ],
        [
            'nama' => 'Beni',
            'tahun' => 2001,
        ],
        [
            'nama' => 'Dani',
            'tahun' => 2004,
        ],
        [
            'nama' => 'Eko',
            'tahun' => 2006,
        ]
    ];
    // foreach($data as $key => $value){
    //     if($value['tahun'] % 400 == 0 && $value['tahun'] % 100 == 0 || $value['tahun'] % 4 == 0) {
    //         echo $value['nama'] . " lahir pada tahun kabisat " . "(" . $value['tahun'] . ")" . "<br>";
    //     } else {
    //         echo $value['nama'] . " lahir BUKAN pada tahun kabisat " . "(" . $value['tahun'] . ")" . "<br>";
    //     }
    // }

    // revisi
    foreach($data as $a => $b){
        $nomor = $a + 1;
        $name = $b['nama'];
        $year = $b['tahun'];
        $keterangan = $year % 4 == 0 ? "pada tahun kabisat" : "BUKAN pada tahun kabisat";
        echo "$nomor. $name : lahir $keterangan ($year) <br>";
    }
    


    // nomor 4
    $barang = [
        [
            'nama_barang' => 'Pasta Gigi',
            'harga_barang' => 18000,
            'jumlah_beli' => 1,
        ],
        [
            'nama_barang' => 'Sabun Mandi',
            'harga_barang' => 5000,
            'jumlah_beli' => 3,
        ],
        [
            'nama_barang' => 'Aloe Vera Sheet Mask',
            'harga_barang' => 15000,
            'jumlah_beli' => 4,
        ],
    ];
    echo "<hr>";
    $sum = 0;
    foreach($barang as $total){
        $harga = ($total['harga_barang']) * ($total['jumlah_beli']);
        $sum += $harga;
    }
    echo "Total harga yang harus dibayar adalah " . "<b>" . "Rp." . $sum . "</b>" . "<br>";
?>
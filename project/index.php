<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div id="box" class="container">
    <h1 class="text-center mt-5">Kalkulator</h1>
    <div id="form1" class="d-flex p-5 justify-content-center mb-2 col-auto">
        <div class="bg-body-secondary w-40 p-5">
        <form action="" method="POST">
        <div id="form" class="d-flex grid gap-2 row row-cols-lg-auto g-3 align-items-center">
            <div>
                <label for="angka_pertama"><b>Angka Pertama *</b></label>
                <input type="number" class="mb-3 form-control" name="angka_pertama" id="angka_pertama" placeholder="Masukan Angka" aria-label="Masukan Angka">
            </div>
            <div>
                <label  for="angka_kedua"><b>Angka Kedua *</b></label>
                <input type="number" class="mb-3 form-control" name="angka_kedua" id="angka_kedua" placeholder="Masukan Angka" aria-label="Masukan Angka">
            </div>
        </div>
    
        <label for="hitung"><b>Operator *</b></label>
        <select class="form-select" id="hitung" name="operasi">
            <option selected>Pilih Operator</option>
            <option value="pertambahan">(+)</option>
            <option value="pengurangan">(-)</option>
            <option value="perkalian">(*)</option>
            <option value="pembagian">(/)</option>
        </select>
        <button class="form-control btn btn-success mt-3 mb-4" type="submit" name="btn" id="button">CEK HASIL</button>
    
    <?php
        if (isset($_POST['btn'])) {
            if ($_POST['angka_pertama'] == "" && $_POST['angka_kedua'] == "") {
                echo "<center class='fs-2'>Coba lagi</center>";
            } else {
            $angka1 = $_POST['angka_pertama'];
            $angka2 = $_POST['angka_kedua'];
            $operasi = $_POST['operasi'];
            switch ($operasi){
                case 'pertambahan':
                    $hasil = $angka1 + $angka2;
                    $operator = "+";
                    break;
                case 'pengurangan':
                    $hasil = $angka1 - $angka2;
                    $operator = "-";
                    break;
                case 'perkalian' :
                    $hasil = $angka1 * $angka2;
                    $operator = "*";
                    break;
                case 'pembagian' :
                    if ($angka2 == 0){ 
                        $hasil = "Tidak bisa dibagi 0";
                        $operator = "/";
                    } else {
                        $hasil = $angka1 / $angka2;
                        $operator = "/";
                    }
                    break;
                default :
                    echo "<center>Tidak dapat memunculkan hasil!</center>";
                }
            echo '<center class="fs-2 mt-3">'.$angka1 .' '. $operator .' '. $angka2 . ' = ' . $hasil.'</center>';
            }
        }
    ?>
    </div>
    </div>
    </div>
</body>
</html>

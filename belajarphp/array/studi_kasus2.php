<?php
if (@$_POST['nilai_awal'] == "" || @$_POST['nilai_pembagi'] == "") {
    echo "<p style='text-align: center; color: red; margin: 10px 0'>Silahkan lengkapi seluruh data!</p>";
} else {
    // echo "<p style='text-align: center; color: green; margin: 10px 0'>Siap diproses!</p>";
    $hasilPembagi = $_POST['nilai_awal'] % $_POST['nilai_pembagi'];

    echo "<p style='text-align: center; margin: 10px 0;'> Sisa bagi " . "<b>" . 
    $_POST['nilai_awal'] . " % " . $_POST['nilai_pembagi'] . " = " . $hasilPembagi . 
    "</b>" . "</p>";
    
}

if ($hasilPembagi >= 1) {
    $data = $_POST['nilai_awal'] - $hasilPembagi;
    $hasil = $data / $_POST['nilai_pembagi'];
    
    echo "<p style='style='text-align: center;'> Bilangan paling mendekati ialah " . "<b>" .
    $data . "</b>" . yang merupakan hasil dari " . "<b> . $hasil . " * " . $_POST['nilai_pembagi'] . '</b> . "</b>" . "</p>";
    
}







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="POST">
            <table border="1">
                <tr>
                    <td><label for="nilai_awal">Nilai Awal </label></td>
                    <td><input type="number" name="nilai_awal" id="nilai_awal"></td>
                </tr>
                <tr>
                    <td><label for="nilai_pembagi">Nilai Pembagi </label></td>
                    <td><input type="number" name="nilai_pembagi" id="nilai_pembagi"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Kirim</button></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
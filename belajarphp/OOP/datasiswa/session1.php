<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><center>
        <h1>
           Masukan Data Siswa
        </h1>
        <form action="">
            <div>
                <input type="text" name="nama" placeholder="Masukan Nama">
                <input type="text" name="nis" placeholder="Masukan NIS">
                <input type="text" name="rayon" placeholder="Masukan Rayon">
            </div>
            <input type="submit" name="btn" value="Tambah">
        </form>

<?php
session_start();

if (isset($_SESSION['btn'])) {
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $rayon = $_POST['rayon'];
}

?>

<table>
    <tr>
        <th>Nama</th>
        <th>NIS</th>
        <th>Rayon</th>
    </tr>
    <tr>
        <td><?php echo $nama; ?></td>
        <td><?php echo $nis; ?></td>
        <td><?php echo $rayon; ?></td>
    </tr>
</table>























</center></div>
</body>
</html>
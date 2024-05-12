<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>
    
        </h2>
        <form action="">
            <div>
                <label for=""></label>
                <input type="text">
            </div>
            <div>
                <label for=""></label>
                <input type="text">
            </div>
            <div>
                <label for=""></label>
                <select name="" id="">
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
            <button>Submit</button>
        </form>

        <?php
        class Rental {
            
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $waktu = $_POST['waktu'];
            $jenis = $_POST['jenis'];

            $rental = new Rental($nama, $waktu, $jenis);

            echo "";

        }












        ?>
    </div>
</body>
</html>
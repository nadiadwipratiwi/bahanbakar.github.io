<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
    class Shell {
        public $harga;
        public $jumlah;
        public $jenis;
        public $ppn;

        public function __construct($harga, $jumlah, $jenis) {
            $this->harga = $harga;
            $this->jumlah = $jumlah;
            $this->jenis = $jenis;
            $this->ppn = $harga * 0.10;
        }

        public function getTotal() {
            return $this->harga * $this->jumlah + $this->ppn;
        }
    }

    class Beli extends Shell {
        public function hasil() {
            echo "<center>--------------------------------------------</center>";
            echo "<center>Anda membeli bahan bakar minyak tipe {$this->jenis}<br>";
            echo "Dengan jumlah : {$this->jumlah} Liter<br>";
            echo "Total yang harus anda bayar : Rp. " . number_format($this->getTotal(), 2, ',', '.') . "</center>";
            echo "<center>--------------------------------------------</center>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jumlahLiter = floatval($_POST["jumlahLiter"]);
        $operasi = $_POST["operasi"];

        switch ($operasi) {
            case "Shell Super":
                $harga = 15420;
                break;
            case "Shell V-Power":
                $harga = 16130;
                break;
            case "Shell V-Power Diesel":
                $harga = 18310;
                break;
            case "Shell V-Power Nitro":
                $harga = 16510;
                break;
            default:
                $harga = 0;
        }
        $beli = new Beli($harga, $jumlahLiter, $operasi);
        echo $beli->hasil();
    }
    ?>
    <center>
    <form action="" method="post">
        <label for="jumlahLiter" class="fs-6 mt-3">Masukkan Jumlah Liter:</label>
        <input type="number" step="0.01" id="jumlahLiter" name="jumlahLiter" required>
        <br><br>
        <label for="operasi" class="fs-6">Pilih Tipe Bahan Bakar:</label>
        <select id="operasi" name="operasi" required>
            <option value="Shell Super">Shell Super</option>
            <option value="Shell V-Power">Shell V-Power</option>
            <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
            <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
        </select>
        <br><br>
        <input type="submit" value="Beli">
    </form>
    </center>
</body>
</html>
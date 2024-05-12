<?php
// header
echo '<h1>My Navbar</h1>';
// navbar
echo '<a href="?haha=home">HOME</a><br>';
echo '<a href="?haha=tentang">TENTANG</a><br>';
echo '<a href="?haha=tutorial">TUTORIAL</a><br>';
// main
$haha = $_GET['haha'];
switch ($haha){
    case 'home':
        $tampil = 'HOME';
        break;
    case 'tentang':
        $tampil = 'TENTANG';
        break;
    case 'tutorial':
        $tampil = 'TUTORIAL';
        break;
    default:
        $tampil = 'MAAF';
        break;
}
echo $tampil;
// footer
echo "<h1>Footer</h1>";
?>
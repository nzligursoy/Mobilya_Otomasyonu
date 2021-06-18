<?php
$server = 'localhost';
$user = '285515';
$password = '244524';
$database = '285515';

$baglanti = mysqli_connect($server, $user, $password, $database);

if (!$baglanti) {
    echo "MySQL sunucu ile baglanti kurulamadi! </br>";
    echo "HATA: " . mysqli_connect_error();
    exit;
}

//echo "MySQL sunucuya baglanti kuruldu.</br>";
?>

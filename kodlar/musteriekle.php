<?php
   include "mysqlbaglan.php";
   session_start(); 
   if ( !(isset($_SESSION['AdminMail']) && isset($_SESSION['AdminSifre']) ) ) { 
    echo "
    <html><body><h2><font align=center size='6'> 
    Giriş yapmadan sayfalara erişim sağlayamazsınız.
    </font></h2></body></html>"; 
    ?>
    <html>
    <head>
    <title>Giriş Sayfasına Yönlendirme</title> 
    <meta HTTP-EQUIV="Refresh" CONTENT="2; URL='index.php'">
    </head>
    <body></body>
    </html>
<?php 
 exit();
}
?> 
<?php 
include ("mysqlbaglan.php");  
session_start();
extract($_POST);

if(isset($MusteriAdi) && isset($MusteriMail) && isset($MusteriAdres) ){
    $MusteriAdi = $_POST["MusteriAdi"];
    $MusteriMail = $_POST["MusteriMail"];
    $MusteriAdres = $_POST["MusteriAdres"];

$sql = "INSERT INTO musteriler( MusteriAdi, MusteriMail, MusteriAdres ) VALUES ( '$MusteriAdi', '$MusteriMail', '$MusteriAdres' ) ";
$cevap = mysqli_query($baglanti,$sql);

if(!$cevap)
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else
{
    echo "Veritabanina eklendi.";
    header('Refresh:1 ; musteri.php');
}
}
//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
?> 


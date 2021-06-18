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

if(isset($UrunAdi) && isset($Fiyat) ){
    $UrunAdi = $_POST["UrunAdi"];
    $Fiyat = $_POST["Fiyat"];

$sql = "INSERT INTO Urunler( UrunAdi, Fiyat ) VALUES ( '$UrunAdi', '$Fiyat') ";
$cevap = mysqli_query($baglanti,$sql);

if(!$cevap)
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else
{
    echo "Veritabanina eklendi.";
    header('Refresh:1 ; urun.php');
}
}
//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
?> 


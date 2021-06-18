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
//mysql baglanti kodunu ekliyoruz
include("mysqlbaglan.php");

//degiskenleri formdan aliyoruz
extract($_POST);
$UrunID = $_GET['UrunID'];
//sorguyu hazirliyoruz
$sql ="UPDATE Urunler SET UrunAdi = '$UrunAdi', Fiyat = '$Fiyat' WHERE UrunID= '$UrunID'";

//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query( $baglanti,$sql);

//eger cevap FALSE ise hata yazdiriyoruz.      
if(!$cevap){
    echo '</br>Hata:' . mysqli_error($baglanti);
}
else{
    echo "Kayıt Güncellendi.";
    header('Refresh:1 ; urun.php');
}

//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
?>

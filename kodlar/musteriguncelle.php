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
$MusteriID = $_GET['MusteriID'];
//sorguyu hazirliyoruz
$sql ="UPDATE musteriler SET MusteriAdi = '$MusteriAdi', MusteriMail = '$MusteriMail', MusteriAdres = '$MusteriAdres' WHERE MusteriID= '$MusteriID'";

//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query( $baglanti,$sql);

//eger cevap FALSE ise hata yazdiriyoruz.      
if(!$cevap){
    echo '</br>Hata:' . mysqli_error($baglanti);
}
else{
    echo "Kayıt Güncellendi.";
    header('Refresh:1 ; musteri.php');
}

//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
?>

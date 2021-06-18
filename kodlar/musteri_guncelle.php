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

//sorguyu hazirliyoruz
$sql = "SELECT * FROM musteriler WHERE MusteriID=".$_GET['MusteriID'];

//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($baglanti,$sql);

//eger cevap FALSE ise hata yazdiriyoruz.      
if(!$cevap ){
    echo '<br>Hata:' . mysqli_error($baglanti);
}


//veritabanından gelen cevabı alıyoruz.
$gelen=mysqli_fetch_array($cevap);
?>
<html>
<body>
<form action="musteriguncelle.php?MusteriID=<?php echo $_GET['MusteriID'] ?>" 
method="POST">
Müşteri Adı: <input type="text" name="MusteriAdi" value="<?php echo $gelen['MusteriAdi']?>" />    <br />
Müşteri Mail: <input type="text" name="MusteriMail" value="<?php echo $gelen['MusteriMail'] ?>" /> <br />
Müşteri Adres : <input type="text" name="MusteriAdres" value="<?php echo $gelen['MusteriAdres'] ?>" /> <br />
<input type="submit" value="Güncelle"/>
</form>
</body>
</html>
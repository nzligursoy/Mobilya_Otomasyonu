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
$sql = "SELECT * FROM Urunler WHERE UrunID=".$_GET['UrunID'];

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
<form action="urunguncelle.php?UrunID=<?php echo $_GET['UrunID'] ?>" 
method="POST">
Ürün Adı: <input type="text" name="UrunAdi" value="<?php echo $gelen['UrunAdi']?>" />    </br></br>
Fiyat: <input type="text" name="Fiyat" value="<?php echo $gelen['Fiyat'] ?>" /> </br></br></br>
<input type="submit" value="Güncelle"/>
</form>
</body>
</html>
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
 <!DOCTYPE html>
 <html lang="tr">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ürünler</title>
     <style>
        body{
            background: url(modernkoltuk.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            text-align: center;
            color: black;
            font-size: large;
            font-weight: bold;
         }
        input{
            border-radius: 7px;
        } 
        table{
            color: black;
            background-color: wheat;
        }  
        form{
            color: black;
        }        
     </style>
 </head>
   <body><center>
   <a href="anasayfa.php"><b>MOBİLYA</b></a>
<?php 
include ("mysqlbaglan.php");

$sql="SELECT * FROM Urunler ";
$sonuc=mysqli_query($baglanti,$sql); 

echo "<p><b>Ürün Listesi</b></p>";
echo '<table align="center" border=1 bordercolor=black cellspacing=5 ><tr>
<th>Ürün ID </th>
<th>Ürün Adı</th>
<th>Ürün Fiyat</th>
<th></th>
<th></th></tr>';

while($satir = mysqli_fetch_array($sonuc))
{
echo '<tr>';
echo '<td>'.$satir['UrunID'].'</td>';
echo '<td>'.$satir['UrunAdi'].'</td>';
echo '<td>'.$satir['Fiyat'].'</td>';
echo '<td> <a href="urunsil.php?UrunID='.$satir['UrunID'].'" onclick="return uyari();"><b>SİL</b></a> </td>';
echo '<td> <a href="urun_guncelle.php?UrunID='.$satir['UrunID'].'" onclick="return uyari();"><b>GÜNCELLE</b></a> </td>';
echo '</tr>';
}
echo'</table></br></br></br>';
?>
      <p><b>Ürün Ekle</b></p>
      <form action="urunekle.php" method="POST"> 
        Ürün Adı  : <input type="text"  name="UrunAdi" />    </br></br>
        Fiyatı : <input type="text"  name="Fiyat" /> </br></br></br>
        <input type="submit" value="KAYDET"/> 
      </form>
      </center>
   </body>
</html>
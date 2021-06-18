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
     <title>Müşteri</title>
     <style>
        body{
            background: url(modernkoltuk.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            text-align: center;
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

$sql="SELECT * FROM musteriler ";
$sonuc=mysqli_query($baglanti,$sql); 

echo "<p><b>Müşteri Listesi</b></p>";
echo '<table align="center" border=1 bordercolor=black cellspacing=5 ><tr>
<th>Müşteri ID </th>
<th>Müşteri Adı Soyadı</th>
<th>Müşteri Mail</th>
<th>Müşteri Adres</th>
<th></th>
<th></th></tr>';

while($satir = mysqli_fetch_array($sonuc))
{
echo '<tr>';
echo '<td>'.$satir['MusteriID'].'</td>';
echo '<td>'.$satir['MusteriAdi'].'</td>';
echo '<td>'.$satir['MusteriMail'].'</td>';
echo '<td>'.$satir['MusteriAdres'].'</td>';
echo '<td> <a href="musterisil.php?MusteriID='.$satir['MusteriID'].'" onclick="return uyari();"><b>SİL</b></a> </td>';
echo '<td> <a href="musteri_guncelle.php?MusteriID='.$satir['MusteriID'].'" onclick="return uyari();"><b>GÜNCELLE</b></a> </td>';
echo '</tr>';
}
echo'</table></br></br></br>';
?>
      <p><b>Müşteri Ekle</b></p>
      <form action="musteriekle.php" method="POST"> 
         Müşteri Adı Soyadı   : <input type="text"  name="MusteriAdi" />    </br></br>
         Mail  : <input type="text"  name="MusteriMail" /> </br></br>
         Adres : <input type="text"  name="MusteriAdres" /> </br></br></br>
         <input type="submit" value="KAYDET"/> 
      </form>
      </center>
   </body>
</html>
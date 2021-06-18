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
<style>
    *{
        box-sizing: border-box;
    }
    body{
        background: url(modernkoltuk.jpg) no-repeat center center fixed; 
        font-family: Impact, 'Haettenschweiler', 'Arial Narrow Bold', sans-serif;
        margin: 0;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }   
    #menu{
        height: 200px;
        padding: 0 30px;
    } 
    nav{
        text-align: center;
        line-height: 100px;
    }
    nav a:link{
        text-decoration: none;
        margin-right: 45px;
        color: black;
        font-weight: bolder;
    }
    nav a:hover{
        border-bottom: 5px solid black;
        
    }
    a:visited{
        text-decoration: none;
        color: black;
    }
    a{
        font-size: 30px;
    }
 
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobilya Anasayfa</title>
</head>
<body>
<section id="menu">
<nav>
    <a href="anasayfa.php">Mobilya Admin Sistemi</a> </br>
    <a href="musteri.php">Müşteriler</a> </br>
    <a href="urun.php">Ürünler</a> </br>
    <a href="cıkıs.php">Çıkış</a>
</nav>
</section>
</body>
</html>
<?php 
   session_start(); 
   include "mysqlbaglan.php"; 
   $AdminMail = $_POST["AdminMail"];
   $AdminSifre = $_POST["AdminSifre"]; 
   if (isset($AdminMail) && isset($AdminSifre) ){ 
   $sql = "SELECT AdminMail , AdminSifre FROM adminler WHERE AdminMail='$AdminMail' AND AdminSifre='$AdminSifre' "; 

   $cevap = mysqli_query($baglanti, $sql); 
   //eger cevap FALSE ise hata yazdirma       
   if(!$cevap ){    
       echo '<br>Hata:' . mysqli_error($baglanti); 
   } 
   //veritabanindan dönen satır sayısını bulma 
   $say = mysqli_num_rows($cevap); 
   if ($say == 1){ 
       $_SESSION['AdminMail'] = $AdminMail;
       $_SESSION['AdminSifre'] = $AdminSifre;
    }
    else{ 
   echo "<html><body style='background-color:wheat;' align=center><h2><font color= 'purple'> 
   Hatalı Kullanıcı adı veya Şifre!
   </font></h2></body></html>";  
    } 
   }   
   if ( isset( $_SESSION['AdminMail'])  &&  isset($_SESSION['AdminSifre']) ){ 
    header('Refresh:1 ; anasayfa.php');
    }
   else{
    header('Refresh:1 ; index.php');
 } 
?>
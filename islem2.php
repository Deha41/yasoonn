<?php 
require_once 'baglan.php';
if(isset($_POST['giris'])){
    $mail=$_POST["mail"];
    $sifre=$_POST["sifre"];
    $sor=$db->prepare('SELECT * FROM kullanicilar WHERE kullanici_mail= ? and kullanici_sifre= ?');
    $sor->execute([
        $mail,$sifre

    ]);
    echo $say=$sor->rowCount();
    $cikti = $sor->fetch(PDO::FETCH_ASSOC);
    if($say==1){
        $_SESSION["kullanici_ad"]=$cikti["kullanici_adsoyad"];


        
        
        
        header( "refresh:5;url=profil.php" );
       
    }


}


?>
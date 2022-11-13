<?php 
session_start();
require_once 'baglan.php';
if(isset($_POST['giris'])){
    $mail=$_POST["mail"];
    $sifre=$_POST["sifre"];
    $sor=$db->prepare('SELECT * FROM kullanicilarr WHERE kullanici_mail= ? and kullanici_sifre= ?');
    $sor->execute([
        $mail,$sifre

    ]);
    echo $say=$sor->rowCount();
    $cikti = $sor->fetch(PDO::FETCH_ASSOC);
    if($say==1){
        $_SESSION['kullanici_adsoyad']=$cikti["kullanici_adsoyad"];
        $_SESSION["kullanici_mail"]=$cikti["kullanici_mail"];
        $_SESSION["kullanici_telefon"]=$cikti["kullanici_telefon"];
        $_SESSION["kullanici_adres"]=$cikti["kullanici_adres"];
        $_SESSION["login"]=1;
        header( "location:profil.php" );
       
    }


}


?>
<?php 

require_once 'baglan.php';

if(isset($_POST['ekle'])){
    $kaydet=$db->prepare("INSERT into  kullanicilarr set
    
    kullanici_adsoyad=:kullanici_adsoyad,
    kullanici_telefon=:kullanici_telefon,
    kullanici_adres=:kullanici_adres,
    kullanici_mail=:kullanici_mail,
    kullanici_sifre=:kullanici_sifre
    ");
    $insert=$kaydet->execute(array(
        'kullanici_adsoyad'=>$_POST['kullanici_adsoyad'],
        'kullanici_telefon'=>$_POST['kullanici_telefon'],
        'kullanici_adres'=>$_POST['kullanici_adres'],
        'kullanici_mail'=>$_POST['kullanici_mail'],
        'kullanici_sifre'=>$_POST['kullanici_sifre'],
    ));
    header( "location:kayıtol.php?durum=ok" );
    
    
}
else{header( "location:kayıtol.php?durum=no" );}



if(isset($_POST['cikis'])){
    session_destroy();
    header( "location:index.php" );

}
if(isset($_POST['sepet'])){
    $kaydet=$db->prepare("INSERT into  sepet set
    
    kullanici_id=:kullanici_id,
    urun_id=:urun_id,
    
   
    ");
    $insert=$kaydet->execute(array(
        'kullanici_id'=>$_POST['kullanici_id'],
        'urun_id'=>$ciktii["urunler_id"],
        
       
    ));
    header( "location:urunler.php?durum=ok" );
    
    
}
else{header( "location:urunler.php?durum=no" );}





?>
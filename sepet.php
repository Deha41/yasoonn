<?php  include "navbar.php";
require_once 'baglan.php';

if(!isset($_SESSION["kullanici_mail"])){
    header( "location:profil.php" );
    
}
$kullaniciid=$_SESSION["kullanici"];

?>
<div class="container">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Sepet İd</th>
      <th scope="col">Kullanici İD</th>
      <th scope="col">Urun Id</th>
      <th scope="col">Urun Adet</th>
    </tr>
  </thead>
  <?php
   /*$urunidd=$sor["urun_id"];
   $sor1=$db->prepare("SELECT * FROM urunlerr WHERE urunler_id= ? ");
   $sor1->execute([$urunidd]);
   $cikti1 = $sor1->fetch(PDO::FETCH_ASSOC);*/



  $sorr=$db->prepare("SELECT * FROM sepet WHERE kullanici_id= ? ");
  $sorr->execute([$kullaniciid]);
  $ciktii = $sorr->fetch(PDO::FETCH_ASSOC);

  if($sorr->rowCount()){
    $i=0;
    foreach($sorr as $sor){
      $i++; 

     
    ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $sor["sepet_id"] ?></td>
      <td> <?php echo $sor["kullanici_id"] ?></td>
      <td><?php echo $sor["urunler_ad"] ?></td>
      <td><?php echo $sor["urun_adet"] ?></td>
      
    </tr>
  </tbody>
  <?php
        
    }
}
?>
</table>
</div>

<?php  include "footer.php";?>
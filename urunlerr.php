<?php 
 include "navbar.php";
 require_once 'baglan.php';
 $urunid=$_GET['urunid'];

 if(!isset($_SESSION["kullanici_mail"])){
    header( "location:profil.php" );
    
}
$sorr=$db->prepare("SELECT * FROM urunlerr WHERE urunler_id= ? ");
$sorr->execute(array($urunid));


  ?>
<?php echo $sorr['urunler_id'] ?>
  
 <div class="col mb-3 mt-3">
        <div class="card" style=" dispplay=flex;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">ÜRÜN İD : </li>
        </ul>
        <div class="card-body">
       
        <button type="button"  class="btn btn-primary">Ürün Detayları</button> </a>  
        </div>
      </div>
</div>

  
  
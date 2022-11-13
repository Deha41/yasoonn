<?php  include "navbar.php";
session_start();

?>

  
  <div class="container my-5">
    <div class="container slide col-md-5  " data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class=" w-100 img-thumbnail" src="organizasyon1.jpg">
          </div>
          <div class="carousel-item">
            <img class=" w-100 img-thumbnail" src="organizasyon2.jpg">
          </div>
        </div>
    </div>
  </div>

  <div class="container justify-content-around" id="cards">
    <div class="card" style="width: 18rem;">
      <img src="organizasyon2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">KAMPANYALAR</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="organizasyon1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">KAMPANYALAR</h5>
        <p class="card-text">Lorem ipsum dolor sit amet.
        </p>
       
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="organizasyon3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">KAMPANYALAR</h5>
        <p class="card-text"> Quo at ratione facere et sequi deserunt, nam quisquam ipsam qui earum dolorem voluptate perspiciatis repudian</p>
        
      </div>
    </div>
  </div>
  <?php  include "footer.php";?>
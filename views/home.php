<?php include "header.php"; ?>
<?php include "my_bag.php"; ?>
<div class="container">
  <div id="carousel-home" class="carousel slide" data-ride="carousel">        
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img src="assets/img/banner1.png" class="img-fluid">

        <div class="carousel-caption hidden-sm-down">
          <div class="col-xs-12">
            <div class="card card-inverse" style="background-color: #333; border-color: #333;">
              <div class="card-block">
                <h3 class="card-title">Special title treatment</h3>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>    
              </div>
            </div>
            <button class="btn btn-primary btn-lg pull-xs-right">SHOP NOW</button>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/banner1.png" class="img-fluid">
      </div>
    </div>    
  </div>  
</div>
<div class="container mt-2">
  <div class="row">
    <div class="col-xs-12 col-md-6">
      <div id="carousel-big-home" class="carousel slide" data-ride="carousel">        
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img src="assets/img/slider1.png" class="img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/slider1.png" class="img-fluid" alt="...">
          </div>
        </div>
        <a href="#carousel-big-home" role="button" data-slide="prev">
          <div class="prev-carousel prev-carousel-white">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
          </div>
        </a>
        <a href="#carousel-big-home" role="button" data-slide="next">
          <div class="next-carousel next-carousel-white">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </div>
        </a>        
      </div>
    </div>
    <div class="col-xs-12 col-md-6">
      <div id="carousel-shop" class="carousel slide" data-ride="carousel" style="border: 1px solid #000;">        
        <div class="carousel-inner" role="listbox">
          <?php 
          foreach ($productos as $key => $producto) {
            ?>
              <div class="carousel-item p-2 <?php if ($key==0) echo "active"; ?>">
                <center>
                  <img src="<?=$producto["img_principal"]?>" alt="<?=$producto["nombre"]?>" class="img-fluid" style="max-height: 200px;"><br>
                  <a href="<?=URL_PRODUCTOS."/".$producto["url"]?>" class="btn btn-primary mt-1">SHOP NOW</a>
                </center>
              </div>
            <?php
          }
          ?>
        </div>
        <a href="#carousel-shop" role="button" data-slide="prev">
          <div class="prev-carousel prev-carousel-black">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
          </div>
        </a>
        <a href="#carousel-shop" role="button" data-slide="next">
          <div class="next-carousel next-carousel-black">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </div>
        </a>
      </div>  	
    </div>
    <div class="col-xs-12 col-md-6 mt-1">
      <div style="position: absolute;color: #fff;" class="text-xs-center w-100 h-100">
        <h3 class="mt-3">GENTE LO</h3>
        <button class="btn btn-secondary">VIEW MORE</button>
      </div>
    	<img src="assets/img/gente-lo.png" class="w-100" style="max-height: 220px;">
    </div>
  </div>
</div>
<div class="container mt-2">
  <div class="row">
  	<h2 class="text-xs-center"><i>INSTAGRAM</i></h2>
  	<div class="col-xs-6 col-md-3">
  		<img src="assets/img/instagram1.png" class="img-fluid">
  	</div>
  	<div class="col-xs-6 col-md-3">
  		<img src="assets/img/instagram2.png" class="img-fluid">
  	</div>
  	<div class="col-xs-6 col-md-3">
  		<img src="assets/img/instagram3.png" class="img-fluid">
  	</div>
  	<div class="col-xs-6 col-md-3">
  		<img src="assets/img/instagram4.png" class="img-fluid">
  	</div>
  	<div class="col-xs-12">
  		<center>
        <button class="btn btn-lg btn-default mt-2">FOLLOW</button>
      </center>
  	</div>
  </div>
</div>
<?php include "footer.php" ?>
<?php include "header.php"; ?>
<?php include "my_bag.php"; ?>
<div class="container">
  <div id="carousel-home" class="carousel slide" data-ride="carousel">        
    <div class="carousel-inner" role="listbox">
      <?php 
      if (count($bannersprincipal)>0) {
        foreach ($bannersprincipal as $key => $banner) {
      ?>
      <div class="carousel-item <?php ($key==0)? print('active') : false; ?>">
        <img src="<?=$banner["imagen"]?>" class="img-fluid">

        <?php if (!empty($banner["descripcion"])) { ?>
        <div class="carousel-caption hidden-sm-down">
          <?=$banner["descripcion"]?>
        </div>  
        <?php } ?>        
      </div>  
      <?php
        }
      }
      ?>
    </div>    
  </div>  
</div>
<div class="container mt-2">
  <div class="row">
    <div class="col-xs-12 col-md-6">
      <div id="carousel-big-home" class="carousel slide" data-ride="carousel">        
        <div class="carousel-inner" role="listbox">
          <?php      
          if (count($bannershome1)>0) {
            foreach ($bannershome1 as $key => $banner) {
          ?>
            <div class="carousel-item <?php ($key==0)? print('active') : false; ?>">
              <img src="<?=$banner["imagen"]?>" class="img-fluid">

              <?php if (!empty($banner["descripcion"])) { ?>
                <div class="carousel-caption pb-1">
                  <?=$banner["descripcion"]?>
                </div>  
              <?php } ?>        
            </div>  
          <?php
            }
          }
          ?>
        </div>
        <a href="#carousel-big-home" role="button" data-slide="prev">
          <div class="prev-carousel">
            <img src="assets/img/arrow_left.png" class="img-fluid">
          </div>
        </a>
        <a href="#carousel-big-home" role="button" data-slide="next">
          <div class="next-carousel">
            <img src="assets/img/arrow-right.png" class="img-fluid">
          </div>
        </a>        
      </div>
    </div>
    <div class="col-xs-12 col-md-6" style="max-height:250px !important;">
      <div id="carousel-shop" class="carousel slide" data-ride="carousel" style="border: 1px solid #000;">        
        <div class="carousel-inner" role="listbox">
          <?php 
          foreach ($productos as $key => $producto) {
            ?>
              <div class="carousel-item p-2 <?php if ($key==0) echo "active"; ?>">
                <center>
                  <img src="<?=$producto["img_principal"]?>" alt="<?=$producto["nombre"]?>" class="img-fluid" style="max-height: 160px;"><br>
                  <a href="<?=URL_PRODUCTOS."/".$producto["url"]?>" class="btn btn-primary mt-1"><?=Lenguajes::consultarFrase("SHOP NOW", $_SESSION["lenguaje"])?></a>
                </center>
              </div>
            <?php
          }
          ?>
        </div>
        <a href="#carousel-shop" role="button" data-slide="prev">
          <!--<div class="prev-carousel prev-carousel-black">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <img src="assets/img/arrow_left.png" class="img-fluid">
          </div>-->
          <div class="prev-carousel">            
            <img src="assets/img/arrow_left.png" class="img-fluid">
          </div>
        </a>
        <a href="#carousel-shop" role="button" data-slide="next">
          <!--<div class="next-carousel next-carousel-black">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </div>-->
          <div class="next-carousel">            
            <img src="assets/img/arrow-right.png" class="img-fluid">
          </div>
        </a>
      </div>  	
    </div>
    <div class="col-xs-12 col-md-6 mt-1">
      <!--<div style="position: absolute;color: #fff;" class="text-xs-center w-100 h-100">
        <h3 class="mt-3">GENTE LO</h3>
        <button class="btn btn-secondary">VIEW MORE</button>
      </div>
    	<img src="assets/img/gente-lo.png" class="w-100" style="max-height: 220px;">-->
      <div id="carousel-home2" class="carousel slide" data-ride="carousel">        
        <div class="carousel-inner" role="listbox">
          <?php      
          if (count($bannershome2)>0) {
            foreach ($bannershome2 as $key => $banner) {
          ?>
            <div class="carousel-item <?php ($key==0)? print('active') : false; ?>">
              <img src="<?=$banner["imagen"]?>" class="img-fluid">

              <?php if (!empty($banner["descripcion"])) { ?>
                <div class="carousel-caption pb-2" style="background-color:rgba(225,225,225,0.8)">
                  <?=$banner["descripcion"]?>
                </div>
              <?php } ?>        
            </div>  
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container mt-2">
  <div class="row">
  	<h2 class="text-xs-center my-2"><?=Lenguajes::consultarFrase("LYFESTYLE", $_SESSION["lenguaje"])?></h2>
  	<!--<div class="col-xs-6 col-md-3">
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
  	</div>-->
    <div class="row instagram">
    </div>
  	<div class="col-xs-12">
  		<center>
        <a href="https://www.instagram.com/linaojedaoficial/" class="btn btn-lg btn-success mt-2" target="_blank"><?=Lenguajes::consultarFrase("FOLLOW US", $_SESSION["lenguaje"])?></a>
      </center>
  	</div>
  </div>
</div>
<?php include "footer.php" ?>
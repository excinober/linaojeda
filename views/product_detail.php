<?php include 'header.php'; ?>
<?php include "my_bag.php"; ?>
<div class="container">
	<div class="col-xs-12 col-md-3">
		<h4>MENÚ</h4>
		<?php include "views/nav_sidebar.php"; ?>
		<h4 class="mt-2">FILTERS</h4>
		<?php filters($categorias_padre); ?>
	</div>
	<div class="col-xs-12 col-md-9">
		<!--<div class="row">
			<div class="col-xs-12">
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
		</div>-->
		<?php include "filters.php"; ?>
		<hr class="mt-1">
		<div class="row">
			<div class="col-xs-12"><h6 class="text-muted">LO MINI / BLACK / LOREM IPSUM</h6></div>
			<div class="col-xs-12 col-md-7">
				<div class="row">
					<div class="col-xs-12">
						<div style="width: 100%;border:1px solid #000;" class="p-3 col-xs-12 text-xs-center">			
								<img src="<?=$producto["img_principal"]?>" class="img-fluid">
						</div>
					</div>
				</div>
				<div class="row">
					<?php 
					foreach ($imgs_producto as $key => $img) {
					?>
						<div class="col-xs-6 col-md-4 mt-1">
						<div class="p-1 text-xs-center" style="border:1px solid #000;width: 100%;">
							<img src="<?=$img["imagen"]?>" class="img-fluid">
						</div>
					</div>
					<?php
					}
					?>					
				</div>
				<hr>
				<h2 class="text-xs-center">VISTO RECIENTEMENTE</h2>
			</div>
			<div class="col-xs-12 col-md-5">
				<h1 class="text-xs-center"><?=$producto["nombre"]?></h1>
				<h2 class="text-xs-center"><?=convertir_pesos($producto["precio"])?></h2>
				<hr>
				<h3 class="text-xs-center">DESCRIPTION</h3>
				<p class="text-xs-justify"><?=$producto["descripcion"]?></p>
				<hr>
				<!--<h3 class="text-xs-center">COLOR</h3>
				<hr>-->
				<h3 class="text-xs-center">QTY</h3>
				<div class="row">
					<div class="col-xs-4 offset-xs-4">
						<select name="cantidad" id="cantidad" max="<?=$producto["cantidad"]?>" class="form-control form-control-lg">
							<?php
							for ($i=1; $i<=$producto["cantidad"]; $i++) { 
							?>
							<option value="<?=$i?>"><?=$i?></option>
							<?php
							}
							?>
						</select>
					</div>
					<div class="col-xs-4">
					<h4 class="">
						<i class="fa fa-plus" aria-hidden="true" id="sumQty"></i><br>
						<i class="fa fa-minus" aria-hidden="true" id="subQty"></i>
					</h4>
					</div>
				</div>
				<center>					
					<button idpdt="<?=$producto["idproducto"]?>" class="btn btn-primary btn-lg mt-1 addPdt">SHOP NOW</button>
				</center>
				<hr>
				<h3 class="text-xs-center">SHARE</h3>
				<h3 class="text-xs-center">
					<i class="fa fa-facebook-square" aria-hidden="true"></i>
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</h3>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
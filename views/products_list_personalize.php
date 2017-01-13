<?php include 'header.php'; ?>

<div class="container">
	<div class="col-xs-12 col-md-3">
		<h4>MENÚ</h4>
		
		<?php include "views/nav_sidebar.php"; ?>

		<h4 class="m-t-3">FILTERS</h4>
		<?php
		foreach ($categorias_padre as $key => $categoria_padre) {	
		?>		
		<div class="col-xs-12" style="border:1px solid #000;">
			<p class="text-xs-center mt-1">
				<a data-toggle="collapse" href="#collapse<?=$categoria_padre["padre"]?>" aria-expanded="false"><?=$categoria_padre["nombre"]?>
				<i class="fa fa-caret-down float-xs-right" aria-hidden="true"></i>
				</a> 
			</p>			
			<div class="collapse" id="collapse<?=$categoria_padre["padre"]?>">
				<?php
				foreach ($categoria_padre["hijas"] as $key => $categoria_hija) {
				?>
					<hr class="m-0" style="background: #000;">
					<p class="text-xs-center mt-1"><?=$categoria_hija["nombre"]?></p>
				<?php
				}
				?>
			</div>
		</div>
		<?php
		}
		?>		
	</div>
	<div class="col-xs-12 col-md-9">
		<div class="row">
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
		</div>
		<div class="row mt-1">
			<div class="col-xs-12 col-md-6">				
				<div class="col-xs-4 px-0">
					ORDENAR POR:
				</div>
				<div class="col-xs-5 px-0">
					<select class="form-control form-control-sm">
						<option>Precio de mmayor a menor</option>
					</select>								
				</div>
				<div class="col-xs-3 px-0 text-xs-center">
					VIEW ALL
				</div>				
			</div>
			<div class="col-xs-12 col-md-3">
				<h6 class="text-xs-center"><i class="fa fa-github" aria-hidden="true"></i> ALEJANDRA / LOG OUT</h6>
			</div>
			<div class="col-xs-12 col-md-3">
				<h6 class="text-xs-center">DREAM <i class="fa fa-github" aria-hidden="true"></i> BOX</h6>
			</div>
		</div>
		<hr class="mt-0">
		<div class="row">
			<?php 
			foreach ($productos as $key => $producto) {
				product_block($producto);
			}
			?>			
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
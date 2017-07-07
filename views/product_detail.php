<?php include 'header.php'; ?>
<?php include "my_bag.php"; ?>
<div class="container">
	<div class="col-xs-12 col-md-3">
		<h4>MENÚ</h4>
		<?php include "views/nav_sidebar.php"; ?>
		<?php 
	    if (FILTER_SIDEBAR) {
	    ?>
			<h4 class="mt-2"><?=Lenguajes::consultarFrase("FILTERS", $_SESSION["lenguaje"])?></h4>
			<?php filters($categorias_padre); 
		}?>
		<?php 
	    if (COLECCIONES_SIDEBAR) {
	    ?>
		<h4 class="mt-2"><?=Lenguajes::consultarFrase("COLLECTIONS", $_SESSION["lenguaje"])?></h4>
		<?php collections($colecciones); 
		}?>
	</div>
	<div class="col-xs-12 col-md-9">		
		<?php //include "filters.php"; ?>
		<!--<hr class="mt-1">-->
		<div class="row mt-3">
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
				<?php 
				if (count($vistos)>0) {
				?>
					<hr>
					<h4 class="text-xs-center"><?=Lenguajes::consultarFrase("VISTO RECIENTEMENTE", $_SESSION["lenguaje"])?></h4>
					<div class="row">						
						<?php
							foreach ($vistos as $key => $visto) {
								product_view($visto);
							}
						?>			
					</div>
				<?php
				}
				?>
			</div>
			<div class="col-xs-12 col-md-5">
				<h1 class="text-xs-center"><?=$producto["nombre"]?></h1>
				<h3 class="text-xs-center"><?=conversor_monedas("COP",$_SESSION["moneda"],$producto["precio"])?></h3>
				<hr>
				<h4 class="text-xs-center"><?=Lenguajes::consultarFrase("DESCRIPTION", $_SESSION["lenguaje"])?></h4>
				<p class="text-xs-justify"><?=$producto["descripcion"]?></p>
				<hr>
				<!--<h3 class="text-xs-center">COLOR</h3>
				<hr>-->
				<h4 class="text-xs-center"><?=Lenguajes::consultarFrase("QTY", $_SESSION["lenguaje"])?></h4>
				<?php if($producto["cantidad"]>0) { ?>
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
				<?php }else{ ?>
					<p class="text-xs-center">No disponible</p>
				<?php } ?>
				<center>
					<input type="hidden" name="personalizable" id="personalizable" value="<?=$producto["personalizable"]?>">	
					<?php if($producto["cantidad"]>0) { ?>
					<button idpdt="<?=$producto["idproducto"]?>" class="btn btn-primary btn-lg mt-1 addPdt"><?=Lenguajes::consultarFrase("SHOP NOW", $_SESSION["lenguaje"])?></button>
					<?php } ?>
				</center>
				<hr>
				<h4 class="text-xs-center"><?=Lenguajes::consultarFrase("SHARE", $_SESSION["lenguaje"])?></h4>
				<h3 class="text-xs-center">
					<i class="fa fa-facebook-square" aria-hidden="true"></i>
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</h3>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
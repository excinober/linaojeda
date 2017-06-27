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
			<?php filters($categorias_padre); ?>
		<?php	
		}
		?>
		<?php 
	    if (COLECCIONES_SIDEBAR) {
	    ?>
		<h4 class="mt-2"><?=Lenguajes::consultarFrase("COLLECTIONS", $_SESSION["lenguaje"])?></h4>
		<?php collections($colecciones); 
		}?>
	</div>
	<div class="col-xs-12 col-md-9">
		<?php
		if (!empty($coleccion['imagen'])) {
		?>
		<div class="row mb-2">
			<img src="<?=$coleccion['imagen']?>" class="img-fluid">
		</div>
		<?php
		}
		?>
		<?php include "filters.php"; ?>
		<hr class="mt-1">
		<div class="row">
			<?php
			if (count($productos)>0) {				
				foreach ($productos as $key => $producto) {
					product_block($producto);
				}
			}else{
				echo "<p class='text-xs-center'>".Lenguajes::consultarFrase("NO PRODUCTS IN COLLECTION", $_SESSION["lenguaje"])."</p>";
			}
			
			?>			
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
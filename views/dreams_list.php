<?php include 'header.php'; ?>
<?php include "my_bag.php"; ?>
<div class="container">
	<div class="col-xs-12 col-md-3">
		<h4 class="text-bold">MENÚ</h4>
		
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
		<?php include "filters.php"; ?>

		<hr class="mt-1">
		<div class="row">
			<h3 class="ml-1"><?=Lenguajes::consultarFrase("DREAM BOX", $_SESSION["lenguaje"])?></h3>
			<?php 
			if (count($productos)>0) {				
			
				foreach ($productos as $key => $producto) {
					product_dream_box($producto);
				}
			}else{
				echo "No hay productos en tu Dream Box";
			}
			?>			
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
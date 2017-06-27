<?php include 'header.php'; ?>
<?php include "my_bag.php"; ?>
<div class="container mb-3">
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
		<?php
		if (!empty($pagina_detalle["banner"])) {
		?>
		<div clas="row">
			<img src="<?=$pagina_detalle["banner"]?>" class="img-fluid">
		</div>
		<?php
		}
		?>		
		<div class="row mt-3">
			<div class="col-xs-12">
				<?php 
			        if ($_SESSION["lenguaje"]=="es")
			          echo $pagina_detalle["contenido"];
			        else 
			          echo $pagina_detalle["contenido_en"];
			    ?>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
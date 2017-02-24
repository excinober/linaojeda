<?php include 'header.php'; ?>
<?php include "my_bag.php"; ?>
<div class="container mb-3">
	<div class="col-xs-12 col-md-3">
		<h4>MENÚ</h4>
		
		<?php include "views/nav_sidebar.php"; ?>

		<h4 class="mt-2">FILTERS</h4>
		<?php filters($categorias_padre); ?>
	</div>
	<div class="col-xs-12 col-md-9">		
		<div class="row mt-3">
			<?=$pagina_detalle["contenido"]?>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
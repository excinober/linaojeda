<?php include "header.php"; ?>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
        <div class="col-lg-12">			
			<a class="pull-right" href="<?=URL_ADMIN."/".URL_ADMIN_PIEZAS."/Nuevo"?>">Nueva Pieza</a>
			<table class="table table-striped">
			  <thead>
			  	<tr>
			  		<th>ID</th>		  		
			  		<th>Nombre</th>
			  		<th>Producto</th>
			  		<th>Acciones</th>
			  	</tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	foreach ($piezas as $pieza) {
		  		?>
		  		<tr>
		  			<td><?=$pieza["idpieza"]?></td>	
		  			<td><?=$pieza["nombre"]?></td>	  			
		  			<td><?=$pieza["producto"]?></td>
		  			<td><a href="<?=URL_ADMIN."/".URL_ADMIN_PIEZAS."/".$pieza['idpieza']?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
		  		</tr>
		  		<?php
			  	}
			  	?>
			  </tbody>
			</table>
		</div>
	</div>
</div>
<?php include "footer.php"; ?>
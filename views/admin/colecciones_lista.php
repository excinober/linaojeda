<?php include "header.php"; ?>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
        <div class="col-lg-12">			
			<a class="pull-right" href="<?=URL_ADMIN."/".URL_ADMIN_COLECCIONES."/Nuevo"?>">Nueva Colección</a>
			<table class="table table-striped">
			  <thead>
			  	<tr>
			  		<th>Nombre</th>		  		
			  		<th>Descripción</th>
			  		<th>Estado</th>
			  		<th>Acciones</th>
			  	</tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	if (count($colecciones)>0) {			  		
			  	
				  	foreach ($colecciones as $coleccion) {
			  		?>
			  		<tr>
			  			<td><?=$coleccion["nombre"]?></td>	  			
			  			<td><?=$coleccion["descripcion"]?></td>
			  			<td><?=$coleccion["estado"]?></td>
			  			<td><a href="<?=URL_ADMIN."/".URL_ADMIN_COLECCIONES."/".$coleccion['idcoleccion']?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
			  		</tr>
			  		<?php
				  	}
			  	}else{
			  	?>
			  		<tr><td colspan="4">No existen colecciones</td></tr>

			  	<?php
			  	}
			  	?>
			  </tbody>
			</table>
		</div>
	</div>
</div>
<?php include "footer.php"; ?>
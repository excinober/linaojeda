<?php include "header.php"; ?>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
        <div class="col-lg-12">						
			<div class="row">
				<div class="col-xs-3">OPCIÓN</div>
				<div class="col-xs-3">ESTADO</div>				
				<div class="col-xs-3">ACCIONES</div>
			</div>        				
			<hr>
		  	<?php 
		  	foreach ($parametros as $parametro) {
	  		?>
	  		<form method="post">			  			
				<div class="row">
					<div class="col-xs-3"><?=$parametro["opcion"]?></div>
					<div class="col-xs-3"><input type="text" class="form-control" name="estado" id="nombre" value="<?=$parametro['estado']?>" required></div>					
					<div class="col-xs-3"><button class="btn btn-sm btn-primary" name="actualizarParametro" type="submit">ACTUALIZAR</button></div>		
		  		</div>	
		  		<input name="idparametro" value="<?=$parametro['id']?>" type="hidden">
		  	</form>
	  		<?php
			}
		  	?>
		</div>			
	</div>
</div>
<?php include "footer.php"; ?>
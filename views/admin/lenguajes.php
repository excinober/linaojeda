<?php include "header.php"; ?>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
        <div class="col-lg-12">						
			<div class="row">
				<div class="col-xs-3">LLAVE</div>
				<div class="col-xs-3">ESPAÑOL</div>
				<div class="col-xs-3">ENGLISH</div>
				<div class="col-xs-3">ACCIONES</div>
			</div>        				
			<hr>
		  	<?php 
		  	foreach ($frases as $frase) {
	  		?>
	  		<form method="post">			  			
				<div class="row">
					<div class="col-xs-3"><?=$frase["llave"]?></div>
					<div class="col-xs-3"><input type="text" class="form-control" name="es" id="nombre" value="<?=$frase['es']?>" required></div>
					<div class="col-xs-3"><input type="text" class="form-control" name="en" id="nombre" value="<?=$frase['en']?>" required></div>
					<div class="col-xs-3"><button class="btn btn-sm btn-primary" name="actualizarFrase" type="submit">ACTUALIZAR</button></div>		
		  		</div>	
		  		<input name="idfrase" value="<?=$frase['idfrase']?>" type="hidden">
		  	</form>
	  		<?php
			}
		  	?>
		</div>			
	</div>
</div>
<?php include "footer.php"; ?>
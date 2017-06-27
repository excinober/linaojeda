<?php include "header.php"; ?>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
        <div class="col-lg-12">		
			<form method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="exampleInputEmail1">Nombre</label>
					<input type="text" class="form-control" name="nombre" id="nombre" value="<?=$coleccion['nombre']?>" required>
				</div>			
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Imágen</label>
							<input type="file" name="imagen" class="form-control">
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<?php
						if (!empty($coleccion['imagen'])) {				
						
						?>
							<img src="<?=$coleccion['imagen']?>" class="img-responsive">
						<?php
						}	
						?>				
					</div>			
				</div>								
				<div class="form-group">
					<label for="exampleInputEmail1">Descripción</label>
					<textarea name="descripcion" class="form-control"><?=$coleccion["descripcion"]?></textarea>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Estado</label>
					<select name="estado" id="estado" class="form-control" required>
						<option value="1" <?php if ($coleccion['estado']) echo 'selected'; ?>>Activo</option>
						<option value="0" <?php if (!$coleccion['estado']) echo 'selected'; ?>>Inactivo</option>
					</select>
				</div>
				<?php
				if (isset($idcoleccion) && $idcoleccion!='') {
				?>
					<button type="submit" name="actualizarColeccion" class="btn btn-lg btn-primary center-block">ACTUALIZAR</button>
				<?php
				}else{
				?>
					<button type="submit" name="crearColeccion" class="btn btn-lg btn-primary center-block">GUARDAR</button>
				<?php
				}
				?>
				
			</form>
		</div>
	</div>
</div>
<?php include "footer.php"; ?>
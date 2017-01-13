<?php include "header.php"; ?>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
        <div class="col-lg-12">		
			<form method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="exampleInputEmail1">Nombre</label>
					<input type="text" class="form-control" name="nombre" id="nombre" value="<?=$categoria['nombre']?>" required>
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
						if (!empty($categoria['imagen'])) {				
						
						?>
							<img src="<?=$categoria['imagen']?>" class="img-responsive">
						<?php
						}	
						?>				
					</div>			
				</div>								
				<div class="form-group">
					<label for="exampleInputEmail1">Categoría Padre</label>
					<select name="padre" id="padre" class="form-control" required>
						<?php 
						foreach ($categorias as $key => $categoria_padre) {
						?>
							<option value="<?=$categoria_padre['idcategoria']?>" <?php if ($categoria['padre']==$categoria_padre['idcategoria']) echo "selected"; ?>><?=$categoria_padre['nombre']?></option>
						<?php
						}
						?>	
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Estado</label>
					<select name="estado" id="estado" class="form-control" required>
						<option value="1" <?php if ($categoria['estado']) echo 'selected'; ?>>Activo</option>
						<option value="0" <?php if (!$categoria['estado']) echo 'selected'; ?>>Inactivo</option>
					</select>
				</div>
				<?php
				if (isset($idcategoria) && $idcategoria!='') {
				?>
					<button type="submit" name="actualizarCategoria" class="btn btn-lg btn-primary center-block">ACTUALIZAR</button>
				<?php
				}else{
				?>
					<button type="submit" name="crearCategoria" class="btn btn-lg btn-primary center-block">GUARDAR</button>
				<?php
				}
				?>
				
			</form>
		</div>
	</div>
</div>
<?php include "footer.php"; ?>
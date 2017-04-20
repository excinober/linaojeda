<?php include "header.php"; ?>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
        <div class="col-lg-12">			
			<form method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="exampleInputEmail1">Titulo</label>
					<input type="text" class="form-control" name="titulo" id="nombre" value="<?=$banner['titulo']?>" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Link</label>
					<input type="text" class="form-control" name="link" id="link" value="<?=$banner['link']?>" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Descripción</label>
					<textarea name="descripcion" id="descripcion" class="form-control"><?=$banner['descripcion']?></textarea>
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
						if (!empty($banner['imagen'])) {				
						
						?>
							<img src="<?=$banner['imagen']?>" class="img-responsive">
						<?php
						}	
						?>				
					</div>			
				</div>					
				<div class="form-group">
					<label for="exampleInputEmail1">Ubicación</label>
					<select name="ubicacion" id="ubicacion" class="form-control" required>
						<option value="PRINCIPAL" <?php if ($banner['ubicacion']=='PRINCIPAL') echo 'selected'; ?>>PRINCIPAL</option>
						<option value="HOME1" <?php if ($banner['ubicacion']=='HOME1') echo 'selected'; ?>>HOME 1</option>
						<option value="HOME2" <?php if ($banner['ubicacion']=='HOME2') echo 'selected'; ?>>HOME 2</option>						
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Estado</label>
					<select name="estado" id="estado" class="form-control" required>
						<option value="1" <?php if ($banner['estado']) echo 'selected'; ?>>Activo</option>
						<option value="0" <?php if (!$banner['estado']) echo 'selected'; ?>>Inactivo</option>
					</select>
				</div>
				<?php
				if (isset($idbanner) && $idbanner!='') {
				?>
					<button type="submit" name="actualizarBanner" class="btn btn-lg btn-primary center-block">ACTUALIZAR</button>
				<?php
				}else{
				?>
					<button type="submit" name="crearBanner" class="btn btn-lg btn-primary center-block">GUARDAR</button>
				<?php
				}
				?>				
			</form>
		</div>
	</div>
</div>
<?php include "footer.php"; ?>
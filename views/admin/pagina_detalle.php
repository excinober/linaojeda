<?php include "header.php"; ?>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
        <div class="col-lg-12">
			<form method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="exampleInputEmail1">Título</label>
					<input type="text" class="form-control" name="titulo" id="titulo" value="<?=$pagina[0]['titulo']?>" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Título Inglés</label>
					<input type="text" class="form-control" name="titulo_en" id="titulo_en" value="<?=$pagina[0]['titulo_en']?>" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Url</label>
					<input type="text" class="form-control" name="url" id="url" value="<?=$pagina[0]['url']?>" required>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Banner</label>
							<input type="file" name="banner" class="form-control">
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<?php
						if (!empty($pagina[0]['banner'])) {				
						
						?>
							<img src="<?=$pagina[0]['banner']?>" class="img-responsive">
						<?php
						}	
						?>				
					</div>			
				</div>		
				<div class="form-group">
					<label for="exampleInputEmail1">Contenido</label>
					<textarea name="contenido" id="descripcion" class="form-control"><?=$pagina[0]['contenido']?></textarea>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Contenido Inglés</label>
					<textarea name="contenido_en" id="contenido" class="form-control"><?=$pagina[0]['contenido_en']?></textarea>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Posición</label>
					<select name="posicion" id="posicion" class="form-control" required>
						<option value="MENU" <?php if ($pagina[0]['posicion']=='MENU') echo 'selected'; ?>>MENÚ</option>
						<option value="FOOTER" <?php if ($pagina[0]['posicion']=='FOOTER') echo 'selected'; ?>>FOOTER</option>
						<option value="CONSIGNACION" <?php if ($pagina[0]['posicion']=='CONSIGNACION') echo 'selected'; ?>>CONSIGNACION</option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Estado</label>
					<select name="estado" id="estado" class="form-control" required>
						<option value="1" <?php if ($pagina[0]['estado']) echo 'selected'; ?>>Activo</option>
						<option value="0" <?php if (!$pagina[0]['estado']) echo 'selected'; ?>>Inactivo</option>
					</select>
				</div>
				<?php
				if (isset($idpagina) && $idpagina!='') {
				?>
					<button type="submit" name="actualizarPagina" class="btn btn-lg btn-primary center-block">ACTUALIZAR</button>
				<?php
				}else{
				?>
					<button type="submit" name="crearPagina" class="btn btn-lg btn-primary center-block">GUARDAR</button>
				<?php
				}
				?>
				
			</form>
		</div>
	</div>
</div>
<?php include "footer.php"; ?>
<?php include "header.php"; ?>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
        <div class="col-lg-12">		
			<form method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="exampleInputEmail1">Nombre</label>
					<input type="text" class="form-control" name="nombre" id="nombre" value="<?=$producto['nombre']?>" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Código</label>
					<input type="text" class="form-control" name="codigo" id="codigo" value="<?=$producto['codigo']?>" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Categoría</label>
					<select name="categoria" id="categoria" class="form-control" required>					
						<?php 
						foreach ($categorias as $key => $categoria) {
						?>
							<option value="<?=$categoria['idcategoria']?>" <?php if ($producto['categorias_idcategoria']==$categoria['idcategoria']) echo "selected"; ?>><?=$categoria['nombre']?></option>
						<?php
						}
						?>					
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Compañía</label>
					<select name="compania" id="compania" class="form-control" required>
						<option value="1" <?php if ($producto['companias_idcompania']==1) echo "selected"; ?>>LO</option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Relevancia</label>
					<select name="relevancia" id="relevancia" class="form-control" required>
						<option value="1" <?php if ($producto['relevancias_idrelevancia']==1) echo "selected"; ?>>Muy Relevante</option>
						<option value="3" <?php if ($producto['relevancias_idrelevancia']==3) echo "selected"; ?>>Relevante</option>
						<option value="4" <?php if ($producto['relevancias_idrelevancia']==4) echo "selected"; ?>>Normal</option>
						<option value="2" <?php if ($producto['relevancias_idrelevancia']==2) echo "selected"; ?>>Poco Relevante</option>
					</select>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="form-group">
						<label for="exampleInputEmail1">Imágen Principal</label>
						<input type="file" name="img_principal" class="form-control">
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<?php
					if (!empty($producto['img_principal'])) {				
					
					?>
						<img src="<?=$producto['img_principal']?>" class="img-responsive" style="max-width: 300px;">
					<?php
					}	
					?>				
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Registro</label>
					<input type="text" class="form-control" name="registro" id="registro" value="<?=$producto['registro']?>" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Cantidad</label>
					<input type="number" class="form-control" name="cantidad" id="cantidad" value="<?=$producto['cantidad']?>" required>
				</div>				
				<div class="form-group">
					<label for="exampleInputEmail1">Precio Público</label>
					<div class="input-group">
				      <div class="input-group-addon">$</div>
				      <input type="text" class="form-control" name="precio" id="precio" value="<?=$producto['precio']?>" required>
				      <div class="input-group-addon">.00</div>
				    </div>			
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Precio Oferta</label>
					<div class="input-group">
				      <div class="input-group-addon">$</div>
				      <input type="text" class="form-control" name="precio_oferta" id="precio_oferta" value="<?=$producto['precio_oferta']?>" required>
				      <div class="input-group-addon">.00</div>
				    </div>			
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">IVA</label>
					<div class="input-group">
				      <input type="text" class="form-control" id="iva" name="iva" value="<?=$producto['iva']?>" required>
				      <div class="input-group-addon">%</div>
				    </div>			
				</div>				
				<div class="form-group">
					<label for="exampleInputEmail1">Presentación</label>
					<input type="text" name="presentacion" class="form-control" value="<?=$producto['presentacion']?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Descripción</label>
					<textarea name="descripcion" id="descripcion" class="form-control"><?=$producto['descripcion']?></textarea>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Uso</label>
					<textarea name="uso" id="uso" class="form-control"><?=$producto['uso']?></textarea>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Más Información</label>
					<textarea name="mas_info" id="contenido" class="form-control contenido"><?=$producto['mas_info']?></textarea>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Metas</label>
					<textarea name="metas" class="form-control"><?=$producto['metas']?></textarea>
				</div>		
				<div class="form-group">
					<label for="exampleInputEmail1">Personalizable</label>
					<select name="personalizable" id="personalizable" class="form-control" required>
						<option value="0" <?php if ($producto['personalizable']==0) echo 'selected'; ?>>NO</option>
						<option value="1" <?php if ($producto['personalizable']==1) echo 'selected'; ?>>SI</option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Estado</label>
					<select name="estado" id="estado" class="form-control" required>
						<option value="1" <?php if ($producto['estado']) echo 'selected'; ?>>Activo</option>
						<option value="0" <?php if (!$producto['estado']) echo 'selected'; ?>>Inactivo</option>
					</select>
				</div>
				<?php
				if (isset($idproducto) && $idproducto!='') {
				?>
					<button type="submit" name="actualizarProducto" class="btn btn-lg btn-primary center-block">ACTUALIZAR</button>
				<?php
				}else{
				?>
					<button type="submit" name="crearProducto" class="btn btn-lg btn-primary center-block">GUARDAR</button>
				<?php
				}
				?>
				
			</form>
		</div>
	</div>
</div>
<?php include "footer.php"; ?>
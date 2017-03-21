<?php include "header.php"; ?>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
        <div class="col-lg-12">		
			<form method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="exampleInputEmail1">Nombre</label>
					<input type="text" class="form-control" name="nombre" id="nombre" value="<?=$pieza['nombre']?>" required>
				</div>												
				<div class="form-group">
					<label for="exampleInputEmail1">Producto</label>
					<select name="producto" id="producto" class="form-control" required>
						<?php 
						foreach ($productos as $key => $producto) {
						?>
							<option value="<?=$producto['idproducto']?>" <?php if ($producto['idproducto']==$pieza['productos_idproducto']) echo "selected"; ?>><?=$producto['nombre']?></option>
						<?php
						}
						?>	
					</select>
				</div>
				<div class="row">
					<h2 class="text-center">OPCIONES</h2>
					<div class="col-xs-12">
						<table class="table">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Imágen</th>
									<th>Tipo convención</th>
									<th>Convención</th>
									<th>Estado</th>									
									<th>Acciones</th>
								</tr>								
							</thead>
							<tbody>
								<?php 
									foreach ($opciones_pieza as $key => $opcion) {
										?>
										<tr>
											<td><?=$opcion["nombre"]?></td>
											<td><?='<img src="'.$opcion["imagen"].'" class="img-responsive" style="max-width:200px;">'?></td>
											<td><?=$opcion["tipo_convencion"]?></td>
											<td>
											<?php 
											if ($opcion["tipo_convencion"]=="IMAGEN") {
												echo '<img src="'.$opcion["imagen_convencion"].'" class="img-responsive">';
											}else{
												echo $opcion["color_convencion"];
											}
											?>												
											</td>
											<td><?=$opcion["estado"]?></td>
											<td></td>
										</tr>
										<?php
									}
								?>
								<tr>
									<td><input type="text" name="nombre" class="form-control"></td>
									<td><input type="file" name="imagen" class="form-control"></td>
									<td>
									<select name="tipo_convencion" class="form-control">
										<option value="COLOR">COLOR</option>	
										<option value="IMAGEN">IMAGEN</option>	
									</select></td>
									<td><input type="color" name="color_convencion" class="form-control" id="color_convencion"> <input type="file" name="imagen_convencion" class="form-control" id="imagen_convencion" style="display: none;"></td>
									<td>
										<select name="estado" class="form-control"> 
											<option value="1">ACTIVO</option>
											<option value="0">INACTIVO</option>
										</select>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<?php
				if (isset($idpieza) && $idpieza!='') {
				?>
					<button type="submit" name="actualizarPieza" class="btn btn-lg btn-primary center-block">ACTUALIZAR</button>
				<?php
				}else{
				?>
					<button type="submit" name="crearPieza" class="btn btn-lg btn-primary center-block">GUARDAR</button>
				<?php
				}
				?>
				
			</form>
		</div>
	</div>
</div>
<?php include "footer.php"; ?>
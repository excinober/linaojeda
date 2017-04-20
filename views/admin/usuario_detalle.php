<?php include "header.php"; ?>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
        <div class="col-lg-12">			
			<div class="col-xs-12 col-md-6">
				<h2>INFORMACIÓN</h2>
				<form method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="exampleInputEmail1">Nombre</label>
						<input type="text" class="form-control" name="nombre" id="nombre" value="<?=$usuario['nombre']?>" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Apellido</label>
						<input type="text" class="form-control" name="apellido" id="apellido" value="<?=$usuario['apellido']?>" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Sexo</label>
						<select name="sexo" id="sexo" class="form-control" required>
							<option value="MASCULINO" <?php if ($usuario['sexo']) echo 'selected'; ?>>MASCULINO</option>
							<option value="FEMENINO" <?php if (!$usuario['sexo']) echo 'selected'; ?>>FEMENINO</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Fecha de Nacimiento</label>
						<input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="<?=$usuario['fecha_nacimiento']?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" class="form-control" name="email" id="email" value="<?=$usuario['email']?>" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Número de Identificación</label>
						<input type="text" class="form-control" name="num_identificacion" id="num_identificacion" value="<?=$usuario['num_identificacion']?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Dirección</label>
						<input type="text" class="form-control" name="direccion" id="direccion" value="<?=$usuario['direccion']?>" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Teléfono</label>
						<input type="text" class="form-control" name="telefono" id="telefono" value="<?=$usuario['telefono']?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Móvil</label>
						<input type="text" class="form-control" name="telefono_m" id="telefono_m" value="<?=$usuario['telefono_m']?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Ciudad</label>
						<input type="text" class="form-control" name="ciudad" id="ciudad" value="<?=$usuario['ciudad']?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">País</label>
						<input type="text" class="form-control" name="pais" id="pais" value="<?=$usuario['pais']?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Código Postal</label>
						<input type="text" class="form-control" name="cod_postal" id="cod_postal" value="<?=$usuario['cod_postal']?>">
					</div>					
					<div class="form-group">
						<label for="exampleInputEmail1">Estado</label>
						<select name="estado" id="estado" class="form-control" required>
							<option value="1" <?php if ($usuario['estado']) echo 'selected'; ?>>Activo</option>
							<option value="0" <?php if (!$usuario['estado']) echo 'selected'; ?>>Inactivo</option>
						</select>
					</div>
					<?php
					if (isset($idusuario) && $idusuario!='') {
					?>
						<button type="submit" name="actualizarUsuario" class="btn btn-lg btn-primary center-block">ACTUALIZAR</button>
					<?php
					}else{
					?>
						<button type="submit" name="crearUsuario" class="btn btn-lg btn-primary center-block">GUARDAR</button>
					<?php
					}
					?>
					
				</form>
			</div>
			<!--<div class="col-xs-12 col-md-6">
			<?php if (isset($idusuario) && $idusuario!='') { ?>				
				<h2>ACCIONES</h2>
				<hr>
				<form method="post" action="<?=URL_INGRESO_REMOTO?>">
					<input type="hidden" value="<?=$usuario["email"]?>" name="email">
					<input type="hidden" value="<?=$usuario["password"]?>" name="password">

					<button type="submit" name="ingresoRemoto" class="btn btn-primary" title="Ingresa como <?=$usuario["nombre"]." ".$usuario["apellido"]?>">Ingresar a Cuenta <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></button>
				</form>
			<?php } ?>
			</div>-->
		</div>
	</div>
</div>
<?php include "footer.php"; ?>
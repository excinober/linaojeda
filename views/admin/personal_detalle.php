<?php include "header.php"; ?>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
        <div class="col-lg-12">
			<form method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="exampleInputEmail1">Nombre</label>
					<input type="text" class="form-control" name="nombre" id="nombre" value="<?=$persona['nombre']?>" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Cargo</label>
					<input type="text" class="form-control" name="cargo" id="cargo" value="<?=$persona['cargo']?>" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Usuario</label>
					<input type="text" class="form-control" name="usuario" id="usuario" value="<?=$persona['usuario']?>" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Contraseña</label>
					<input type="password" class="form-control" name="password" id="password" value="<?=$persona['password']?>" required>
				</div>								
				<div class="form-group">
					<label for="exampleInputEmail1">Rol</label>
					<select name="rol" id="rol" class="form-control" required>
						<option value="ADMIN" <?php if ($persona['rol']=='ADMIN') echo 'selected'; ?>>ADMIN</option>
						<option value="PROVEEDOR" <?php if ($persona['rol']=='PROVEEDOR') echo 'selected'; ?>>PROVEEDOR</option>
						<option value="SOPORTE" <?php if ($persona['rol']=='SOPORTE') echo 'selected'; ?>>SOPORTE</option>
					</select>
				</div>				
				<div class="form-group">
					<label for="exampleInputEmail1">Estado</label>
					<select name="estado" id="estado" class="form-control" required>
						<option value="1" <?php if ($persona['estado']) echo 'selected'; ?>>Activo</option>
						<option value="0" <?php if (!$persona['estado']) echo 'selected'; ?>>Inactivo</option>
					</select>
				</div>
				<?php
				if (isset($idpersona) && $idpersona!='') {
				?>
					<button type="submit" name="actualizarPersonal" class="btn btn-lg btn-primary center-block">ACTUALIZAR</button>
				<?php
				}else{
				?>
					<button type="submit" name="crearPersonal" class="btn btn-lg btn-primary center-block">GUARDAR</button>
				<?php
				}
				?>
				
			</form>
		</div>
	</div>
</div>
<?php include "footer.php"; ?>
<?php include 'header.php'; ?>
<?php include "my_bag.php"; ?>
<div class="container mb-3">
	<div class="col-xs-12 col-md-3">
		<h4>MENÚ</h4>
		<?php include "views/nav_sidebar.php"; ?>
	</div>
	<div class="col-xs-12 col-md-9">
		<h2><?=Lenguajes::consultarFrase("MY ACCOUNT", $_SESSION["lenguaje"])?></h2>
		<form method="post">
			<table class="table table-striped">
				<tr>
					<td>Identificación</td>
					<td><input type="text" class="form-control" name="num_identificacion" value="<?=$usuario["num_identificacion"]?>" required></td>
				</tr>
				<tr>
					<td>Nombre</td>
					<td><input type="text" class="form-control" name="nombre" value="<?=$usuario["nombre"]?>" required></td>
				</tr>
				<tr>
					<td>Apellido</td>
					<td><input type="text" class="form-control" name="apellido" value="<?=$usuario["apellido"]?>" required></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" class="form-control" name="email" value="<?=$usuario["email"]?>" required></td>
				</tr>
				<tr>
					<td>Género</td>
					<td>
						<select name="sexo" class="form-control" required>
							<option value="">--</option>
							<option value="FEMENINO" <?php if ($usuario["sexo"]=="FEMENINO") echo "selected"; ?>>FEMENINO</option>
							<option value="MASCULINO" <?php if ($usuario["sexo"]=="MASCULINO") echo "selected"; ?>>MASCULINO</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Fecha de Nacimiento</td>
					<td><input type="date" class="form-control" name="fecha_nacimiento" value="<?=$usuario['fecha_nacimiento']?>"></td>
				</tr>
				<tr>
					<td>Dirección</td>
					<td><input type="text" class="form-control" name="direccion" value="<?=$usuario['direccion']?>" required></td>
				</tr>
				<tr>
					<td>Ciudad</td>
					<td><input type="text" class="form-control" name="ciudad" value="<?=$usuario['ciudad']?>" required></td>
				</tr>
				<tr>
					<td>Pais</td>
					<td><input type="text" class="form-control" name="pais" value="<?=$usuario['pais']?>" required></td>
				</tr>
				<tr>
					<td>Código Postal</td>
					<td><input type="text" class="form-control" name="cod_postal" value="<?=$usuario['cod_postal']?>"></td>
				</tr>				
				<tr>
					<td>Teléfono</td>
					<td><input type="text" class="form-control" name="telefono" value="<?=$usuario['telefono']?>" required></td>
				</tr>
				<tr>
					<td>Teléfono Móvil</td>
					<td><input type="text" class="form-control" name="telefono_m" value="<?=$usuario['telefono_m']?>" required></td>
				</tr>
				<tr>
					<td>Boletines</td>
					<td><input type="checkbox" name="boletines" value="1" <?php if ($usuario['boletines']) echo "checked"; ?>></td>
				</tr>
				<tr>
					<td>Condiciones</td>
					<td><input type="checkbox" name="condiciones" value="1" <?php if ($usuario['condiciones']) echo "checked"; ?>></td>
				</tr>
			</table>
			<h2>Cambiar Contraseña</h2>
			<table class="table table-striped">
				<tr>
					<td>Contraseña actual</td>
					<td><input type="password" class="form-control" name="contrasena_actual" value=""></td>
				</tr>
				<tr>
					<td>Nueva contraseña</td>
					<td><input type="password" class="form-control" name="nueva_contrasena"></td>
				</tr>
				<tr>
					<td>Repetir nueva contraseña</td>
					<td><input type="password" class="form-control" name="nueva_contrasena2"></td>
				</tr>
			</table>
			<button type="submit" class="btn btn-primary" name="cambiarDatos">GUARDAR PERFIL</button>
		</form>		
	</div>
</div>
<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>
<?php include "my_bag.php"; ?>
<div class="container mb-3">
	<div class="col-xs-12 col-md-3">
		<h4>MENÚ</h4>
		<?php include "views/nav_sidebar.php"; ?>
	</div>
	<div class="col-xs-12 col-md-9">
		<h2><?=Lenguajes::consultarFrase("MY ACCOUNT", $_SESSION["lenguaje"])?></h2>
		<table class="table table-striped">
				<tr>
					<td>Identificación</td>
					<td><?=$usuario["num_identificacion"]?></td>
				</tr>
				<tr>
					<td>Nombre</td>
					<td><?=$usuario["nombre"]?></td>
				</tr>
				<tr>
					<td>Apellido</td>
					<td><?=$usuario["apellido"]?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?=$usuario["email"]?></td>
				</tr>
				<tr>
					<td>Género</td>
					<td><?=$usuario["sexo"]?></td>
				</tr>
				<tr>
					<td>Fecha de Nacimiento</td>
					<td><?=$usuario["fecha_nacimiento"]?></td>
				</tr>
				<tr>
					<td>Dirección</td>
					<td><?=$usuario["direccion"]?></td>
				</tr>
				<tr>
					<td>Ciudad</td>
					<td><?=$usuario["ciudad"]?></td>
				</tr>
				<tr>
					<td>Pais</td>
					<td><?=$usuario["pais"]?></td>
				</tr>
				<tr>
					<td>Código Postal</td>
					<td><?=$usuario["cod_postal"]?></td>
				</tr>				
				<tr>
					<td>Teléfono</td>
					<td><?=$usuario["telefono"]?></td>
				</tr>
				<tr>
					<td>Teléfono Móvil</td>
					<td><?=$usuario["telefono_m"]?></td>
				</tr>
		</table>
		<a href="<?=URL_USUARIO."/".URL_USUARIO_CAMBIAR_DATOS?>" class="btn btn-primary">ACTUALIZAR PERFIL</a>
	</div>
</div>
<?php include 'footer.php'; ?>
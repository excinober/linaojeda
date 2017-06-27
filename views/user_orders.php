<?php include 'header.php'; ?>
<?php include "my_bag.php"; ?>
<div class="container mb-3">
	<div class="col-xs-12 col-md-3">
		<h4>MENÚ</h4>
		<?php include "views/nav_sidebar.php"; ?>
	</div>
	<div class="col-xs-12 col-md-9">
		<h2><?=Lenguajes::consultarFrase("MY ORDERS", $_SESSION["lenguaje"])?></h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Número de Orden</th>
					<th>Fecha Pedido</th>
					<th>Total</th>
					<th>Estado</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			if (count($ordenes)>0) {
				foreach ($ordenes as $key => $orden) {
			?>
				<tr>
					<td><a class="text-muted" href="<?=URL_USUARIO."/".URL_USUARIO_ORDENES."/".$orden["idorden"]?>"><?=$orden["num_orden"]?></a></td>
					<td><?=$orden["fecha_pedido"]?></td>
					<td><?=conversor_monedas("COP",$_SESSION["moneda"],$orden["total"])?></td>
					<td><?=$orden["estado"]?></td>
				</tr>
			<?php
				}
			}else{
			?>
				<tr>
					<td colspan="4">No existen ordenes aún.</td>
				</tr>
			<?php
			}
			?>				
			</tbody>
		</table>
	</div>
</div>
<?php include 'footer.php'; ?>
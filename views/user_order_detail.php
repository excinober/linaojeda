<?php include 'header.php'; ?>
<?php include "my_bag.php"; ?>
<div class="container mb-3">
	<div class="col-xs-12 col-md-3">
		<h4>MENÚ</h4>
		<?php include "views/nav_sidebar.php"; ?>
	</div>
	<div class="col-xs-12 col-md-9">
		<h2><?=Lenguajes::consultarFrase("MY ORDERS", $_SESSION["lenguaje"])?></h2>
		<hr>
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<p class="text-xs-left">ORDEN No.<br>
					<span class="text-muted"><?=$orden["detalle"]["num_orden"]?></span>
				</p>
				<p class="text-xs-left">
					Estado<br>
					<span class="text-muted"><?=$orden["detalle"]["estado"]?></span>
				</p>
				<p class="text-xs-left">
					Fecha<br>
					<span class="text-muted"><?=$orden["detalle"]["fecha_pedido"]?></span>
				</p>
				<p class="text-xs-left">
					Número de guía<br>
					<span class="text-muted"><?=$orden["detalle"]["guia_flete"]?></span>
				</p>
				<p class="text-xs-left">
					Método<br>
					<span class="text-muted"><?=$orden["detalle"]["metodo"]?></span>
				</p>
			</div>
			<div class="col-xs-12 col-md-6">
				<p class="text-xs-right">
					<i class="fa fa-user" aria-hidden="true"></i>
					<?=$orden["detalle"]["nombre"]." ".$orden["detalle"]["apellido"]?><br>
					<?=$orden["detalle"]["num_identificacion"]?></p>
				<p class="text-xs-right">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<?=$orden["detalle"]["direccion"]?><br>
					<?=$orden["detalle"]["ciudad"]?><br>
					<?=$orden["detalle"]["pais"]?><br>
					<?=$orden["detalle"]["cod_postal"]?>
				</p>
				<p class="text-xs-right">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<?=$orden["detalle"]["telefono"]?><br>
					<i class="fa fa-phone" aria-hidden="true"></i>
					<?=$orden["detalle"]["telefono_m"]?>
				</p>
			</div>
		</div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Producto</th>
					<th class="text-xs-center">Cantidad</th>
					<th class="text-xs-right">Precio</th>
				</tr>
			</thead>
			<tbody>
			<?php
			if ($orden["productos"]>0) {
				foreach ($orden["productos"] as $key => $producto) {
			?>
				<tr>
					<td><?=$producto["nombre_producto"]?></td>
					<td class="text-xs-center"><?=$producto["cantidad"]?></td>
					<td class="text-xs-right"><?=conversor_monedas("COP",$_SESSION["moneda"],$producto["precio"])?></td>
				</tr>
			<?php
				}
			}else{
			?>
				<tr><td colspan="3">Esta orden no tiene productos</td></tr>
			<?php 
			}
			?>
			<tr>
				<td colspan="2" class="text-xs-right text-muted">Subtotal</td>
				<td class="text-xs-right"><?=conversor_monedas("COP",$_SESSION["moneda"],$orden["detalle"]["subtotal"])?></td>
			</tr>
			<tr>
				<td colspan="2" class="text-xs-right text-muted">Descuentos</td>
				<td class="text-xs-right"><?=conversor_monedas("COP",$_SESSION["moneda"],$orden["descuentos"]["subtotal"])?></td>
			</tr>
			<tr>
				<td colspan="2" class="text-xs-right text-muted">Impuestos</td>
				<td class="text-xs-right"><?=conversor_monedas("COP",$_SESSION["moneda"],$orden["detalle"]["impuestos"])?></td>
			</tr>
			<tr>
				<td colspan="2" class="text-xs-right text-muted">Costo de envío</td>
				<td class="text-xs-right"><?=conversor_monedas("COP",$_SESSION["moneda"],$orden["detalle"]["costo_envio"])?></td>
			</tr>
			<tr>
				<td colspan="2" class="text-xs-right text-muted">TOTAL</td>
				<td class="text-xs-right"><?=conversor_monedas("COP",$_SESSION["moneda"],$orden["detalle"]["total"])?></td>
			</tr>
			</tbody>
		</table>
	</div>
</div>
<?php include 'footer.php'; ?>
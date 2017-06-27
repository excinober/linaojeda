<?php include 'header.php'; ?>
<?php include "my_bag.php"; ?>
<div class="container mb-3">
	<div class="col-xs-12 col-md-9">
		<?php
		if (!empty($info_consignacion[0]["banner"])) {
		?>
		<div clas="row">
			<img src="<?=$info_consignacion[0]["banner"]?>" class="img-fluid">
		</div>
		<?php
		}
		?>		
		<div class="row mt-3">
			<div class="col-xs-12">
				<?=$info_consignacion[0]["contenido"]?>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-xs-12">
				<h2>Información de la Orden</h2>
				<table class="table table-striped">
					<tr>
						<td>Código Orden</td>
						<td><?=$info_orden["codigo_orden"]?></td>
					</tr>
					<tr>
						<td>Total</td>
						<td><?=conversor_monedas("COP",$info_orden["moneda"],$info_orden["total"])?></td>
					</tr>
					<tr>
						<td>Moneda</td>
						<td><?=$info_orden["moneda"]?></td>
					</tr>
					<tr>
						<td>Estado</td>
						<td><?=$info_orden["estado"]?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
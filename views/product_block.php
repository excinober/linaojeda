<?php 
function product_block($producto){
?>
<div class="col-xs-12 col-md-4 text-xs-center">
	<div class="col-xs-12 px-2 py-3" style="border: 1px solid rgba(0,0,0,0.5);height: auto;">
		<div id="popup<?=$producto["idproducto"]?>" class="text-xs-center rounded-circle popup-product-list pt-1" style="position:absolute;background-color: rgba(0,0,0,0.7);width: 90%;height: 90%;left: 5%;top:5%;display: none;color: #fff;">
			<?php if ($producto["personalizable"]) {
			?>
			<a class="btn btn-success mt-3" href="<?=URL_PRODUCTOS_PERSONALIZAR."/".$producto["url"]?>"><?=Lenguajes::consultarFrase("PERSONALIZE", $_SESSION["lenguaje"])?></a>
			<?php }else{ ?>
			<a class="quick-view" name-pdt="<?=$producto["nombre"]?>" img-pdt="<?=$producto["img_principal"]?>" ref-pdt="<?=$producto["codigo"]?>" price-pdt="<?=conversor_monedas("COP",$_SESSION["moneda"],$producto["precio"])?>" url-pdt="<?=URL_PRODUCTOS."/".$producto["url"]?>" style="cursor: pointer;">
				<h3 class="mt-3" ><?=Lenguajes::consultarFrase("QUICK VIEW", $_SESSION["lenguaje"])?></h3>
			</a>
			<?php } ?>
		</div>
		<img src="<?=$producto["img_principal"]?>" class="img-fluid img-product-list" idpdt="<?=$producto["idproducto"]?>">
	</div>
	<div class="col-xs-12 p-1 text-xs-center">
		<h4 class="m-0"><?=$producto["nombre"]?></h4>
		<!--<h4 class="m-0"><?=$producto["codigo"]?></h4>-->
		<p class="mb-0" style="color:red;">
		<?php 
		if ($producto["cantidad"]>0) {
			echo Lenguajes::consultarFrase("QUANTITY AVAILABLE", $_SESSION["lenguaje"]).": ".$producto["cantidad"];
		}else{
			echo "No existen unidades disponibles";
		}
		?>
		</p>
		<h4 class="m-0"><?=conversor_monedas("COP",$_SESSION["moneda"],$producto["precio"])?></h4>
		<?php if ($producto["cantidad"]>0) { ?>
			<?php if ($producto["personalizable"]) {
			?>
			<a href="<?=URL_PRODUCTOS_PERSONALIZAR."/".$producto["url"]?>" class="btn btn-primary mt-1"><?=Lenguajes::consultarFrase("PERSONALIZE", $_SESSION["lenguaje"])?></a>
			<?php }else{ ?>
			<a href="<?=URL_PRODUCTOS."/".$producto["url"]?>" class="btn btn-primary mt-1"><?=Lenguajes::consultarFrase("SHOP NOW", $_SESSION["lenguaje"])?></a>
			<?php } ?>
		<?php }else{ ?>
			<a class="btn btn-default mt-1">No disponible</a>
		<?php } ?>
	</div>
</div>
<?php
}

function product_dream_box($producto){
?>
<div class="col-xs-12 col-md-4 text-xs-center">
	<div class="col-xs-12 px-2 py-3" style="border: 1px solid rgba(0,0,0,0.5);height: auto;">
		<div id="popup<?=$producto["idproducto"]?>" class="text-xs-center rounded-circle popup-product-list pt-1" style="position:absolute;background-color: rgba(0,0,0,0.7);width: 90%;height: 90%;left: 5%;top:5%;display: none;color: #fff;">
			<?php if ($producto["personalizable"]) {
			?>
			<a class="btn btn-success mt-3" href="<?=URL_PRODUCTOS_PERSONALIZAR."/".$producto["url"]?>"><?=Lenguajes::consultarFrase("PERSONALIZE", $_SESSION["lenguaje"])?></a>
			<?php }else{ ?>
			<a class="quick-view" name-pdt="<?=$producto["nombre"]?>" img-pdt="<?=$producto["img_principal"]?>" ref-pdt="<?=$producto["codigo"]?>" price-pdt="<?=conversor_monedas("COP",$_SESSION["moneda"],$producto["precio"])?>" url-pdt="<?=URL_PRODUCTOS."/".$producto["url"]?>" style="cursor: pointer;">
				<h3 class="mt-3" ><?=Lenguajes::consultarFrase("QUICK VIEW", $_SESSION["lenguaje"])?></h3>
			</a>
			<?php } ?>
		</div>
		<img src="<?=$producto["img_principal"]?>" class="img-fluid img-product-list" idpdt="<?=$producto["idproducto"]?>">
	</div>
	<div class="col-xs-12 p-1 text-xs-center">
		<h4 class="m-0"><?=$producto["nombre"]?></h4>
		<!--<h4 class="m-0"><?=$producto["codigo"]?></h4>-->
		<p class="mb-0" style="color:red;">
		<?php 
		if ($producto["cantidad"]>0) {
			echo Lenguajes::consultarFrase("QUANTITY AVAILABLE", $_SESSION["lenguaje"]).": ".$producto["cantidad"];
		}else{
			echo "No existen unidades disponibles";
		}
		?>
		</p>
		<h4 class="m-0"><?=conversor_monedas("COP",$_SESSION["moneda"],$producto["precio"])?></h4>
		<?php if ($producto["cantidad"]>0) { ?>
			<?php if ($producto["personalizable"]) {
			?>
			<a href="<?=URL_PRODUCTOS_PERSONALIZAR."/".$producto["url"]?>" class="btn btn-primary mt-1"><?=Lenguajes::consultarFrase("PERSONALIZE", $_SESSION["lenguaje"])?></a>
			<?php }else{ ?>
			<a href="<?=URL_PRODUCTOS."/".$producto["url"]?>" class="btn btn-primary mt-1"><?=Lenguajes::consultarFrase("SHOP NOW", $_SESSION["lenguaje"])?></a>
			<?php } ?>
		<?php }else{ ?>
			<a class="btn btn-default mt-1">No disponible</a>
		<?php } ?>
		<a href="<?=URL_DESEOS_ELIMINAR."/".$producto["idproducto"]?>" class="btn btn-sm btn-secondary mt-1">Eliminar de la lista</a>
	</div>
</div>
<?php
}

function product_view($producto){
?>
<div class="col-xs-12 col-md-4 text-xs-center">
	<div class="col-xs-12 px-2 py-3" style="border: 1px solid rgba(0,0,0,0.5);height: auto;">
		<img src="<?=$producto["img_principal"]?>" class="img-fluid img-product-list" idpdt="<?=$producto["idproducto"]?>">
	</div>
	<div class="col-xs-12 px-0 pt-1 text-xs-center">
		<h5 class="m-0"><?=$producto["nombre"]?></h5>
		<p class="mb-0" style="color:red;">

		<?php 
		if ($producto["cantidad"]>0) {
			echo Lenguajes::consultarFrase("QUANTITY AVAILABLE", $_SESSION["lenguaje"]).": ".$producto["cantidad"];
		}else{
			echo "No existen unidades disponibles";
		}
		?>
		</p>
		<h6 class="m-0"><?=conversor_monedas("COP",$_SESSION["moneda"],$producto["precio"])?></h6>
		<?php if ($producto["cantidad"]>0) { ?>
		<?php if ($producto["personalizable"]) { ?>		
			<a href="<?=URL_PRODUCTOS_PERSONALIZAR."/".$producto["url"]?>" class="btn btn-primary mt-1"><?=Lenguajes::consultarFrase("PERSONALIZE", $_SESSION["lenguaje"])?></a>
			<?php }else{ ?>
			<a href="<?=URL_PRODUCTOS."/".$producto["url"]?>" class="btn btn-sm btn-primary mt-1"><?=Lenguajes::consultarFrase("SHOP NOW VIEWS", $_SESSION["lenguaje"])?></a>
			<?php } ?>
		<?php }else{ ?>
			<a class="btn btn-default mt-1">No disponible</a>
		<?php } ?>
	</div>
</div>
<?php
}

function product_block_personalize($producto){
?>
<div class="col-xs-12 col-md-4 text-xs-center">
	<div class="col-xs-12 px-2 py-3" style="border: 1px solid rgba(0,0,0,0.5);height: 250px;">
		<div id="popup<?=$producto["idproducto"]?>" class="text-xs-center rounded-circle popup-product-list pt-1" style="position:absolute;background-color: rgba(0,0,0,0.7);width: 90%;height: 90%;left: 5%;top:5%;display: none;color: #fff;">
			<?php if ($producto["personalizable"]) {
			?>
			<a class="btn btn-success mt-3" href="<?=URL_PRODUCTOS_PERSONALIZAR."/".$producto["url"]?>"><?=Lenguajes::consultarFrase("PERSONALIZE", $_SESSION["lenguaje"])?></a>
			<?php }else{ ?>
			<a class="quick-view" name-pdt="<?=$producto["nombre"]?>" img-pdt="<?=$producto["img_principal"]?>" ref-pdt="<?=$producto["codigo"]?>" price-pdt="<?=conversor_monedas("COP",$_SESSION["moneda"],$producto["precio"])?>" url-pdt="<?=URL_PRODUCTOS."/".$producto["url"]?>">
				<h3 class="mt-3"><?=Lenguajes::consultarFrase("QUICK VIEW", $_SESSION["lenguaje"])?></h3>
			</a>
			<?php } ?>
		</div>
		<img src="<?=$producto["img_principal"]?>" class="img-fluid img-product-list" idpdt="<?=$producto["idproducto"]?>">
	</div>
	<div class="col-xs-12 p-1 text-xs-center">
		<h4 class="m-0"><?=$producto["nombre"]?></h4>
		<!--<h4 class="m-0"><?=$producto["codigo"]?></h4>-->
		<?php if ($producto["personalizable"]) {
		?>
		<a href="<?=URL_PRODUCTOS_PERSONALIZAR."/".$producto["url"]?>" class="btn btn-primary mt-1"><?=Lenguajes::consultarFrase("PERSONALIZE", $_SESSION["lenguaje"])?></a>
		<?php }else{ ?>
		<a href="<?=URL_PRODUCTOS."/".$producto["url"]?>" class="btn btn-primary mt-1"><?=Lenguajes::consultarFrase("SHOP NOW", $_SESSION["lenguaje"])?></a>
		<?php } ?>
	</div>
</div>
<?php
}
?>
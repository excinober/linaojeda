<?php 
function product_block($producto){
?>
<div class="col-xs-12 col-md-4 text-xs-center">
	<div class="col-xs-12 px-2 py-3" style="border: 1px solid rgba(0,0,0,0.5);height: auto;">
		<div id="popup<?=$producto["idproducto"]?>" class="text-xs-center rounded-circle popup-product-list" style="position:absolute;background-color: rgba(0,0,0,0.7);width: 90%;height: 90%;left: 5%;top:5%;display: none;color: #fff;">
			<?php if ($producto["personalizable"]) {
			?>
			<a class="btn btn-success mt-3" href="<?=URL_PRODUCTOS_PERSONALIZAR."/".$producto["url"]?>">PERSONALIZE</a>
			<?php }else{ ?>
			<a class="quick-view" name-pdt="<?=$producto["nombre"]?>" img-pdt="<?=$producto["img_principal"]?>" ref-pdt="<?=$producto["codigo"]?>" price-pdt="<?=$producto["precio"]?>" url-pdt="<?=URL_PRODUCTOS."/".$producto["url"]?>">
				<h3 class="mt-3">QUICK<br>VIEW</h3>
			</a>
			<?php } ?>
		</div>
		<img src="<?=$producto["img_principal"]?>" class="img-fluid img-product-list" idpdt="<?=$producto["idproducto"]?>">
	</div>
	<div class="col-xs-12 p-1 text-xs-center">
		<h4 class="m-0"><?=$producto["nombre"]?></h4>
		<h4 class="m-0"><?=$producto["codigo"]?></h4>
		<h4 class="m-0"><?=convertir_pesos($producto["precio"])?></h4>
		<?php if ($producto["personalizable"]) {
		?>
		<a href="<?=URL_PRODUCTOS_PERSONALIZAR."/".$producto["url"]?>" class="btn btn-primary mt-1">PERSONALIZE</a>
		<?php }else{ ?>
		<a href="<?=URL_PRODUCTOS."/".$producto["url"]?>" class="btn btn-primary mt-1">SHOP NOW</a>
		<?php } ?>
	</div>
</div>
<?php
}
?>
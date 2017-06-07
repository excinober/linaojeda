<div class="my-bag hidden-xs-down">
  <p><?=Lenguajes::consultarFrase("MY BAG", $_SESSION["lenguaje"])?> <span class="rounded-circle text-white count-bag"><?=Carrito::productosAgregados()?></span></p>
</div>
<div class="p-2 bag-box">
  <?php 
  $itemsCarrito = Carrito::getProductsCart();
  foreach ($itemsCarrito["id"] as $key => $iditem) {
  ?>
    <div class="row">
      <div class="col-xs-5">
        <div class="col-xs-12" style="background-color: #fff;">
          <img src="<?=$itemsCarrito["img_principal"][$key]?>" class="img-fluid my-1">        
        </div>
      </div>
      <div class="col-xs-7">
        <h6><?=$itemsCarrito["nombre"][$key]?></h6>
        <h6>Ref: <?=$itemsCarrito["codigo"][$key]?></h6>
        <h6>Cantidad: <?=$itemsCarrito["cantidad"][$key]?></h6>        
        <h6><?=conversor_monedas("COP",$_SESSION["moneda"],$itemsCarrito["subtotal"][$key])?></h6>
        <a class="btn btn-sm btn-secondary" href="<?=URL_SITIO.URL_PRODUCTOS."/".$itemsCarrito["url"][$key]?>"><?=Lenguajes::consultarFrase("VIEW MORE", $_SESSION["lenguaje"])?></a>
      </div>
    </div>
    <hr class="my-1 bg-white">
  <?php
  } ?>
  <a href="<?=URL_CARRITO?>" class="btn btn-primary mb-1"><?=Lenguajes::consultarFrase("SHOW CART", $_SESSION["lenguaje"])?></a>
</div>
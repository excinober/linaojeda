<div class="my-bag hidden-xs-down">
  <p>MY BAG <span class="rounded-circle text-white count-bag"><?=Carrito::productosAgregados()?></span></p>
</div>
<div class="p-2 bag-box">
  <?php 
  $itemsCarrito = Carrito::getProductsCart();
  foreach ($itemsCarrito["id"] as $key => $iditem) {
  ?>
    <div class="row">

      <div class="col-xs-5">
        <img src="http://localhost/linaojeda/www/assets/img/productos/producto2.png" class="img-fluid my-1">        
      </div>
      <div class="col-xs-7">
        <h6><?=$itemsCarrito["nombre"][$key]?></h6>
        <h6>Ref: <?=$itemsCarrito["codigo"][$key]?></h6>
        <h6>Cantidad: <?=$itemsCarrito["cantidad"][$key]?></h6>
        <!--<hr class="my-1 bg-white">-->
        <h6><?=convertir_pesos($itemsCarrito["subtotal"][$key])?></h6>
      </div>
    </div>
    <hr class="my-1 bg-white">
  <?php
  } ?>
</div>
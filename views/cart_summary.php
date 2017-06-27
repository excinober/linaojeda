<?php include "header.php" ?>
<?php //include "my_bag.php"; ?>
<div class="container-fluid pt-1" style="background-color: #9F972D; color: #fff;">
  <div class="container">
    <h1><?=Lenguajes::consultarFrase("SUMMARY", $_SESSION["lenguaje"])?></h1>
  </div>
</div>
<div class="container mt-2">
  <div class="row">
    <table class="table table-cart">
      <thead>
        <tr>
          <th width="15%">Producto</th>
          <th class="text-xs-center" width="20%">Descripción</th>
          <th class="text-xs-center">Disponibilidad</th>
          <th class="text-xs-center">Precio Unitario</th>
          <th class="text-xs-center">Cantidad</th>
          <th class="text-xs-center">Total</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (isset($itemsCarrito) && count($itemsCarrito)>0) {
          
          foreach ($itemsCarrito["id"] as $key => $iditem) {
        ?>
          <tr>
            <td><img src="<?=$itemsCarrito["img_principal"][$key]?>" class="img-fluid"></td>
            <td>
              <?=$itemsCarrito["nombre"][$key]?><br>
              Ref: <?=$itemsCarrito["codigo"][$key]?><br>              
              Cantidad: <?=$itemsCarrito["cantidad"][$key]?><br>
            </td>
            <td><div class="rounded-circle mx-auto" style="background-color: #61A257;width: 30px;height: 30px;"></div></td>
            <td class="text-xs-center"><?=conversor_monedas("COP",$_SESSION["moneda"],$itemsCarrito["precio"][$key])?></td>
            <td class="text-xs-center">
              <?=$itemsCarrito["cantidadstock"][$key]?>
            </td>
            <td class="text-xs-right"><?=conversor_monedas("COP",$_SESSION["moneda"],$itemsCarrito["subtotal"][$key])?></td>
          </tr>
        <?php
          }
        }else{
          ?>
          <tr>
            <td colspan="6"><p class="text-xs-center">No hay productos en el carrito</p></td>
          </tr>
          <?php
        }
        ?>
        <tr>
          <td colspan="4"></td>
          <td colspan="1" class="text-xs-right">Subtotal</td>                    
          <td colspan="1" class="text-xs-right"><?=conversor_monedas("COP",$_SESSION["moneda"],$subtotalAntesIva)?></td>
        </tr>
        <tr>
          <td colspan="4"></td>
          <td colspan="1" class="text-xs-right">Impuesto</td>                    
          <td colspan="1" class="text-xs-right"><?=conversor_monedas("COP",$_SESSION["moneda"],$iva)?></td>
        </tr>
        <tr>
          <td colspan="4"></td>
          <td colspan="1" class="text-xs-right">Flete</td>                    
          <td colspan="1" class="text-xs-right"><?=conversor_monedas("COP",$_SESSION["moneda"],$flete)?></td>
        </tr>
        <tr>
          <td colspan="4"></td>
          <td colspan="1" class="text-xs-right"><b>Total</b></td>                    
          <td colspan="1" class="text-xs-right"><b><?=conversor_monedas("COP",$_SESSION["moneda"],$total)?></b></td>
        </tr>
      </tbody>
    </table>
    </div>
    <div class="row p-2" style="background-color: rgba(0,0,0,0.2);color: #000 !important;">
      <div class="col-xs-12 col-md-3">
        <h2 class="mt-2">DETALLES <br>DE ENVÍO</h2>
      </div>
      <div class="col-xs-12 col-md-3" style="border-left: 2px solid rgba(0,0,0,0.4);">
        <h6>DIRECCIÓN DE ENVÍO</h6>
        <hr class="mt-0">
        <h5 style="line-height: 1.3rem;">
          <?php if ($_SESSION["login"]) { ?>
            <b style="text-transform: uppercase;"><?=$_SESSION["nombre"]." ".$_SESSION["apellido"]?></b><br>
            <p><?=$_SESSION["direccion"]?><br>
            <?=$_SESSION["ciudad"]?><br>
            <?=$_SESSION["pais"]?><br>
            <?=$_SESSION["telefono_m"]." - ".$_SESSION["telefono"]?></p>
            <button class="btn btn-sm btn-primary">Actualizar</button>
          <?php }else{ ?>          
          <a class="login-popup">Ingresar</a>
          <?php } ?>
        </h5>
      </div>
      <div class="col-xs-6 col-md-3" style="border-left: 2px solid rgba(0,0,0,0.4);">
        <h6>TRANSPORTE</h6>
        <hr class="mt-0">
        <h5 style="line-height: 1.3rem;">
          <b>COORDINADORA</b><br>
          4 días hábiles
        </h5>
      </div>
      <div class="col-xs-6 col-md-3" style="border-left: 2px solid rgba(0,0,0,0.4);">
        <h6>COSTO ENVÍO</h6>
        <hr class="mt-0">
        <h5 style="line-height: 1.3rem;"><?=conversor_monedas("COP",$_SESSION["moneda"],20000)?></h5>
      </div>
    </div>
    <div class="row mt-1">
      <?php if ($_SESSION["login"]) { 
              if ($total>0) {             
        ?>
        <a href="<?=URL_GENERAR_ORDEN?>?method=CONSIGNACION" class="btn btn-primary btn-lg pull-right ml-1">Pagar por Consignación</a>
        <a href="<?=URL_GENERAR_ORDEN?>?method=IATAI" class="btn btn-primary btn-lg pull-right ml-1">Pagar con tarjeta de crédito</a>
      <?php } }else{ ?>      
        <button class="btn btn-primary btn-lg pull-right ml-1 login-popup">Continuar Pago</button>
      <?php }?>      
    </div>  
    <div class="row mt-1">
      <a href="<?=URL_PRODUCTOS?>" class="btn btn-lg btn-success pull-right">Seguir Comprando</a>
    </div>
</div>
<?php include "footer.php" ?>
<?php include "header.php" ?>
<div class="my-bag hidden-xs-down"><p>MY BAG</p></div>
<div class="container-fluid pt-1 p-1" style="background-color: #9F972D; color: #fff;">
  <div class="container">
    <h1>MY BAG</h1>
  </div>
</div>
<div class="container mt-2">
  <div class="row">
    <table class="table">
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
            <td class="text-xs-center"><?=convertir_pesos($itemsCarrito["precio"][$key])?></td>
            <td>
              <select name="cantidad" id="cantidad" class="form-control input-sm updateQuantity" idpdt="<?=$iditem?>">
                  <?php 
                  for ($i=1; $i <= $itemsCarrito["cantidadstock"][$key]; $i++) {
                    ?>
                    <option value="<?=$i?>" <?php if ($itemsCarrito["cantidad"][$key]==$i) { echo "selected"; } ?>><?=$i?></option>
                    <?php
                  }
                  ?>
                </select>
            </td>
            <td class="text-xs-right"><?=convertir_pesos($itemsCarrito["subtotal"][$key])?></td>
          </tr>
        <?php
          }
        }
        ?>
        <tr>
          <td colspan="4"></td>
          <td colspan="1" class="text-xs-right">Subtotal</td>                    
          <td colspan="1" class="text-xs-right"><?=convertir_pesos($subtotalAntesIva)?></td>
        </tr>
        <tr>
          <td colspan="4"></td>
          <td colspan="1" class="text-xs-right">Impuesto</td>                    
          <td colspan="1" class="text-xs-right"><?=convertir_pesos($iva)?></td>
        </tr>
        <tr>
          <td colspan="4"></td>
          <td colspan="1" class="text-xs-right">Flete</td>                    
          <td colspan="1" class="text-xs-right"><?=convertir_pesos($flete)?></td>
        </tr>
        <tr>
          <td colspan="4"></td>
          <td colspan="1" class="text-xs-right">Total</td>                    
          <td colspan="1" class="text-xs-right"><?=convertir_pesos($total)?></td>
        </tr>
      </tbody>
    </table>
    <div class="row p-2" style="background-color: rgba(0,0,0,0.2);">
      <div class="col-xs-6 col-md-3" style="border-right: 2px solid rgba(0,0,0,0.4); height: 150px;">
        <h2>DETALLES <br>DE ENVÍO</h2>
      </div>
      <div class="col-xs-6 col-md-3" style="border-right: 2px solid rgba(0,0,0,0.4); height: 150px;">
        <h6>DIRECCIÓN DE ENVÍO</h6>
        <p style="line-height: 1rem;">
          Lorena Perez<br>
          Cra 53 # 140 - 35<br>
          111111 Bogotá<br>
          Colombia<br>
          321546879
        </p>
      </div>
      <div class="col-xs-6 col-md-3" style="border-right: 2px solid rgba(0,0,0,0.4); height: 150px;">
        <h6>TRANSPORTE</h6>
        <p style="line-height: 1rem;">
          COORDINADORA<br>
          4 días hábiles
        </p>
      </div>
      <div class="col-xs-6 col-md-3" style="height: 150px;">
        <h6>COSTO ENVÍO</h6>
        <p>$20.000</p>
      </div>
    </div>
    <div class="row mt-1">    
      <button class="btn btn-primary pull-right ml-1">Continuar Pago</button>
      <button class="btn btn-success pull-right">Seguir Comprando</button>      
    </div>
  </div>
</div>
<?php include "footer.php" ?>
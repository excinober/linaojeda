<?php
/**
* 
*/
class Ordenes extends Database
{
	
	public function unidadesVendidas($fecha_inicio, $fecha_fin, $estado_orden, $cod_producto=0){

		if (!empty($cod_producto)) {
			
			$where_producto = "AND `detalle_orden`.`cod_producto`='$cod_producto'";
		}else{
			$where_producto = "";
		}

		$query = $this->consulta("SELECT SUM(`detalle_orden`.`cantidad`) as 'cantidad' 
									FROM `ordenes_pedidos` 
									INNER JOIN `detalle_orden` ON (`ordenes_pedidos`.`idorden`=`detalle_orden`.`ordenes_pedidos_idorden`) 
									WHERE `ordenes_pedidos`.`estado`='$estado_orden' $where_producto AND `ordenes_pedidos`.`fecha_pedido` BETWEEN '$fecha_inicio' AND '$fecha_fin'");
		return $query[0];
	}

	

	public function listarOrdenes($inicio="", $fin="", $estado=""){

		if (!empty($inicio) && !empty($fin)) {
			$where = "WHERE `ordenes_pedidos`.`fecha_pedido` BETWEEN '$inicio' AND '$fin'";
		
			if (!empty($estado)) {
				$where .= " AND `ordenes_pedidos`.`estado`='$estado'";
			}
		}else{
			$where = "";

			if (!empty($estado)) {
				$where .= "WHERE `ordenes_pedidos`.`estado`='$estado'";
			}
		}		
		
		$query = $this->consulta("SELECT `ordenes_pedidos`.`idorden`, `ordenes_pedidos`.`num_orden`, `ordenes_pedidos`.`fecha_pedido`, `ordenes_pedidos`.`subtotal`, `ordenes_pedidos`.`descuentos`, `ordenes_pedidos`.`neto_sin_iva`, `ordenes_pedidos`.`impuestos`, `ordenes_pedidos`.`pago_puntos`, `ordenes_pedidos`.`valor_punto`, `ordenes_pedidos`.`costo_envio`, `ordenes_pedidos`.`total`, `ordenes_pedidos`.`estado`, `ordenes_pedidos`.`fecha_facturacion`, `ordenes_pedidos`.`num_factura`, `ordenes_pedidos`.`usuarios_idusuario`, `usuarios`.`nombre`,`usuarios`.`apellido`
									FROM `ordenes_pedidos`
									INNER JOIN `usuarios` ON (`ordenes_pedidos`.`usuarios_idusuario`=`usuarios`.`idusuario`)
									$where
									ORDER BY `ordenes_pedidos`.`fecha_pedido` DESC");
		
		return $query;
	}

	public function detalleOrden($idorden){
		
		$query = $this->consulta("SELECT `ordenes_pedidos`.`idorden`, `ordenes_pedidos`.`num_orden`, `ordenes_pedidos`.`fecha_pedido`, `ordenes_pedidos`.`subtotal`,`ordenes_pedidos`.`descuentos`, `ordenes_pedidos`.`neto_sin_iva`, `ordenes_pedidos`.`impuestos`, `ordenes_pedidos`.`pago_puntos`, `ordenes_pedidos`.`valor_punto`, `ordenes_pedidos`.`costo_envio`, `ordenes_pedidos`.`total`, `ordenes_pedidos`.`estado`, `ordenes_pedidos`.`fecha_facturacion`, `ordenes_pedidos`.`num_factura`, `ordenes_pedidos`.`guia_flete`, `ordenes_pedidos`.`usuarios_idusuario`, `usuarios`.`nombre`, `usuarios`.`apellido`, `usuarios`.`email`, `usuarios`.`num_identificacion`, `usuarios`.`telefono`, `usuarios`.`telefono_m`, `usuarios`.`direccion`, `usuarios`.`ciudad`, `usuarios`.`pais`, `usuarios`.`cod_postal`
									FROM `ordenes_pedidos` 
									INNER JOIN `usuarios` ON (`ordenes_pedidos`.`usuarios_idusuario`=`usuarios`.`idusuario`)									
									WHERE `ordenes_pedidos`.`idorden`='$idorden'");


		$productos = $this->consulta("SELECT `detalle_orden`.`iddetalle_orden`, `detalle_orden`.`nombre_producto`, `detalle_orden`.`cod_producto`, `detalle_orden`.`cantidad`, `detalle_orden`.`precio`, `detalle_orden`.`precio_base`, `detalle_orden`.`descuento_cupon`, `detalle_orden`.`iva`, `detalle_orden`.`descuento_puntos`
										FROM `detalle_orden`
										WHERE `ordenes_pedidos_idorden`='$idorden'");

		

		$return = array('detalle' => $query[0], 'productos' => $productos);

		return $return;
	}

}
?>
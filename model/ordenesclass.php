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

	public function actualizarOrden($idorden, $estado, $fecha_facturacion, $num_factura, $guia_flete){
		
		$query = $this->actualizar("UPDATE `ordenes_pedidos` SET 
									`estado`= '$estado',
									`fecha_facturacion`= '$fecha_facturacion',
									`num_factura`= '$num_factura',
									`guia_flete`= '$guia_flete'
									WHERE `idorden`='$idorden'");
		return $query;
	}

	public function listarOrdenesUsuario($idusuario,$inicio,$fin,$estados=array()){

		if (count($estados)>0) {

			$where_estados = "AND (";

			foreach ($estados as $key => $estado) {
				$where_estados .= "`ordenes_pedidos`.`estado`='$estado'";
			
				if (($key+1) <  count($estados)) {
					$where_estados .= " OR ";
				}
			}

			$where_estados .= ")";
		}else{
			$where_estados = "";
		}

		if (!empty($inicio) && !empty($fin)) {
			$between = "BETWEEN '$inicio' AND '$fin'";
		}else{
			$between = "";
		}
		
		$query = $this->consulta("SELECT `ordenes_pedidos`.`idorden`, `ordenes_pedidos`.`num_orden`, `ordenes_pedidos`.`fecha_pedido`, `ordenes_pedidos`.`subtotal`,`ordenes_pedidos`.`descuentos`, `ordenes_pedidos`.`neto_sin_iva`, `ordenes_pedidos`.`impuestos`, `ordenes_pedidos`.`pago_puntos`, `ordenes_pedidos`.`valor_punto`, `ordenes_pedidos`.`costo_envio`, `ordenes_pedidos`.`total`, `ordenes_pedidos`.`estado`, `ordenes_pedidos`.`fecha_facturacion`, `ordenes_pedidos`.`num_factura`, `ordenes_pedidos`.`guia_flete`, `ordenes_pedidos`.`usuarios_idusuario`, `usuarios`.`nombre`, `usuarios`.`apellido`, `usuarios`.`email`, `usuarios`.`num_identificacion`, `usuarios`.`telefono`, `usuarios`.`telefono_m`, `usuarios`.`direccion`, `usuarios`.`ciudad`, `usuarios`.`pais`, `usuarios`.`cod_postal`
									FROM `ordenes_pedidos` 
									INNER JOIN `usuarios` ON (`ordenes_pedidos`.`usuarios_idusuario`=`usuarios`.`idusuario`)									 
									WHERE `usuarios_idusuario`='$idusuario' $where_estados AND `fecha_pedido` $between 
									ORDER BY `fecha_pedido` DESC");
		
		return $query;
	}

	public function eliminarOrden($idorden){

		$filas_puntos = $this->actualizar("DELETE FROM `puntos` WHERE `ordenes_pedidos_idorden`='$idorden'");
		$filas_productos = $this->actualizar("DELETE FROM `detalle_orden` WHERE `ordenes_pedidos_idorden`='$idorden'");
		$filas_ordenes = $this->actualizar("DELETE FROM `ordenes_pedidos` WHERE `idorden`='$idorden'");

		return $filas_ordenes;
	}

}
?>
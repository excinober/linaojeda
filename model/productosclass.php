<?php 

/**
* 
*/
class Productos extends Database
{
	public function crearProducto($nombre,$cantidad,$precio,$iva,$aplica_cupon,$precio_oferta,$presentacion,$registro,$codigo,$descripcion,$img_principal,$url,$estado,$uso,$mas_info,$metas,$personalizable,$categoria,$compania,$relevancia){
		
		$idproducto = $this->insertar("INSERT INTO `productos`(
										`nombre`, 
										`cantidad`, 										 
										`precio`, 
										`iva`, 
										`aplica_cupon`, 
										`precio_oferta`, 
										`presentacion`, 
										`registro`, 
										`codigo`, 										
										`descripcion`, 
										`img_principal`, 
										`url`, 
										`estado`, 
										`uso`, 
										`mas_info`, 
										`metas`, 
										`personalizable`,
										`categorias_idcategoria`, 
										`companias_idcompania`, 
										`relevancias_idrelevancia`) VALUES (
										'$nombre', 
										'$cantidad', 										
										'$precio',
										'$iva',
										'$aplica_cupon', 
										'$precio_oferta', 
										'$presentacion', 
										'$registro', 
										'$codigo', 										
										'$descripcion', 
										'$img_principal', 
										'$url', 
										'$estado', 
										'$uso', 
										'$mas_info', 
										'$metas', 
										'$personalizable',
										'$categoria', 
										'$compania', 
										'$relevancia')");
		
		return $idproducto;
	}

	public function listarProductos($estados=array(1), $idcategoria=0, $personalizable=0, $buscar="", $limit=""){

		if (count($estados)>0) {

			$estados_select = "(";

			$count = 0;

			foreach ($estados as $estado) {
				if ($count>0) {
					$estados_select .= " OR ";
				}

				$estados_select .= "`productos`.`estado` = '$estado'";
				$count++;
			}
			$estados_select .= ")";
		}else{
			$estados_select = "";
		}

		if (!empty($idcategoria)) {
			$categoria_where = " AND `productos`.`categorias_idcategoria`='$idcategoria'";
		}else{
			$categoria_where = "";
		}

		if (!empty($buscar)) {
			$buscar_where = " AND (`productos`.`nombre` LIKE '%$buscar%' OR `productos`.`descripcion` LIKE '%$buscar%')";
		}else{
			$buscar_where = "";
		}

		
		$query = $this->consulta("SELECT `productos`.`idproducto`, `productos`.`nombre`, `productos`.`cantidad`, `productos`.`precio`, `productos`.`iva`, `productos`.`aplica_cupon`, `productos`.`precio_oferta`, `productos`.`presentacion`, `productos`.`registro`, `productos`.`codigo`, `productos`.`descripcion`, `productos`.`img_principal`, `productos`.`url`, `productos`.`estado`, `productos`.`uso`, `productos`.`mas_info`, `productos`.`metas`, `productos`.`personalizable`, `productos`.`categorias_idcategoria`, `productos`.`companias_idcompania`, `productos`.`relevancias_idrelevancia`, `companias`.`nombre` AS 'compania', `categorias`.`nombre` AS 'categoria'
								FROM `productos`
								INNER JOIN `companias` ON (`productos`.`companias_idcompania`=`companias`.`idcompania`)
								INNER JOIN `categorias` ON (`productos`.`categorias_idcategoria`=`categorias`.`idcategoria`)
								WHERE $estados_select $tipos_select $categoria_where $buscar_where AND `productos`.`personalizable`='$personalizable' $limit");
		return $query;
	}

	public function detalleProductos($idproducto=0,$url=""){
		

		if (!empty($url)) {
			$where = "WHERE `idproducto`='$idproducto' OR `url`='$url'";
		}else{
			$where = "WHERE `idproducto`='$idproducto'";
		}

		$query = $this->consulta("SELECT `productos`.`idproducto`, `productos`.`nombre`, `productos`.`cantidad`, `productos`.`precio`, `productos`.`iva`, `productos`.`aplica_cupon`, `productos`.`precio_oferta`, `productos`.`presentacion`, `productos`.`registro`, `productos`.`codigo`,`productos`.`descripcion`, `productos`.`img_principal`, `productos`.`url`, `productos`.`estado`, `productos`.`uso`, `productos`.`mas_info`, `productos`.`metas`, `productos`.`personalizable`, `productos`.`categorias_idcategoria`, `productos`.`companias_idcompania`, `productos`.`relevancias_idrelevancia`, `companias`.`nombre` AS 'compania' 
								FROM `productos`
								INNER JOIN `companias` ON (`productos`.`companias_idcompania`=`companias`.`idcompania`)
								$where");
		
		return $query[0];
	}

	public function actualizarCantidadProducto($idproducto,$cantidad){
		
		$query = $this->actualizar("UPDATE `productos` SET 										
										`cantidad`='$cantidad'									
										WHERE `idproducto`='$idproducto'");			
		return $query;
	}

	public function imgsProducto($idproducto){
		
		$query = $this->consulta("SELECT `idimg`, `imagen`, `productos_idproducto` FROM `img_productos` WHERE `productos_idproducto`='$idproducto'");
		return $query;
	}

	public function listarPiezas(){
		
		$query = $this->consulta("SELECT `piezas`.`idpieza`, `piezas`.`nombre`, `piezas`.`productos_idproducto`, `productos`.`nombre` AS 'producto'
									FROM `piezas`
									INNER JOIN productos ON (`piezas`.`productos_idproducto`=`productos`.`idproducto`)");
		return $query;
	}

	public function detallePieza($idpieza){
		$query = $this->consulta("SELECT `piezas`.`idpieza`, `piezas`.`nombre`, `piezas`.`productos_idproducto`, `productos`.`nombre` AS 'producto'
									FROM `piezas`
									INNER JOIN productos ON (`piezas`.`productos_idproducto`=`productos`.`idproducto`)
									WHERE `piezas`.`idpieza`='$idpieza'");
		return $query[0];
	}

	public function piezasProducto($idproducto){
		
		$query = $this->consulta("SELECT `idpieza`, `nombre`, `productos_idproducto` FROM `piezas` WHERE `productos_idproducto`='$idproducto'");
		return $query;
	}

	public function actualizarPieza($idpieza=0,$nombre="",$producto=0){
		
		$query = $this->actualizar("UPDATE `piezas` SET 
										`nombre`='$nombre',
										`productos_idproducto`='$producto'							
										WHERE `idpieza`='$idpieza'");
		
		return $query;
	}

	public function crearPieza($nombre="",$producto=0){
		
		$idpieza = $this->insertar("INSERT INTO `piezas`(
										`nombre`, 
										`productos_idproducto`) VALUES (
										'$nombre', 
										'$producto')");
		
		return $idpieza;
	}

	public function opcionesPieza($idpieza){

		$query = $this->consulta("SELECT `opcion_pieza`.`idopcionpieza`, `opcion_pieza`.`nombre`, `opcion_pieza`.`imagen`, `opcion_pieza`.`tipo_convencion`, `opcion_pieza`.`color_convencion`, `opcion_pieza`.`imagen_convencion`, `opcion_pieza`.`estado` 
									FROM `opcion_pieza` 
									INNER JOIN `piezas_has_opcion_pieza` ON (`opcion_pieza`.`idopcionpieza`=`piezas_has_opcion_pieza`.`opcion_pieza_idopcionpieza`)
									WHERE `piezas_has_opcion_pieza`.`piezas_idpieza`='$idpieza'");
		return $query;
		
	}

	public function crearOpcionPieza($idpieza, $nombre, $destino_pieza, $tipo_convencion, $color_convencion, $destino_convencion, $estado){

		$idopcionpieza = $this->insertar("INSERT INTO `opcion_pieza`(								
											`nombre`, 
											`imagen`, 
											`tipo_convencion`, 
											`color_convencion`, 
											`imagen_convencion`, 
											`estado`) VALUES (
											'$nombre',
											'$destino_pieza',
											'$tipo_convencion',
											'$color_convencion',
											'$destino_convencion',
											'$estado')");
		

		$this->insertar("INSERT INTO `piezas_has_opcion_pieza`(`piezas_idpieza`, `opcion_pieza_idopcionpieza`) VALUES ('$idpieza', '$idopcionpieza')");
		
		return $idopcionpieza;
	}

	public function eliminarOpcionPieza($idpieza, $idopcion){
		$filas = $this->actualizar("DELETE FROM `piezas_has_opcion_pieza` WHERE `piezas_idpieza`='$idpieza' AND `opcion_pieza_idopcionpieza` = '$idopcion'");
		
		$this->actualizar("DELETE FROM `piezas` WHERE `idpieza`='$idpieza'");

		return $filas;
	}

	public function actualizarProducto($idproducto,$nombre,$cantidad,$precio,$iva,$aplica_cupon,$precio_oferta,$presentacion,$registro,$codigo,$descripcion,$img_principal,$url,$estado,$uso,$mas_info,$metas,$personalizable,$categoria,$compania,$relevancia){
		
		$query = $this->actualizar("UPDATE `productos` SET 
										`nombre`='$nombre',
										`cantidad`='$cantidad',										
										`precio`='$precio',
										`iva`='$iva',
										`aplica_cupon`='$aplica_cupon',
										`precio_oferta`='$precio_oferta',
										`presentacion`='$presentacion',
										`registro`='$registro',
										`codigo`='$codigo',										
										`descripcion`='$descripcion',										
										`url`='$url',
										`estado`='$estado',
										`uso`='$uso',
										`mas_info`='$mas_info',
										`metas`='$metas',
										`personalizable`='$personalizable',
										`categorias_idcategoria`='$categoria',
										`companias_idcompania`='$compania',
										`relevancias_idrelevancia`='$relevancia'
										WHERE `idproducto`='$idproducto'");
		if (!empty($img_principal)) {
			$img = $this->actualizar("UPDATE `productos` SET 										
										`img_principal`='$img_principal'										
										WHERE `idproducto`='$idproducto'");	
		}		

		
		return $query;
	}


	
}
?>
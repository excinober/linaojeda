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

	public function imgsProducto($idproducto){
		
		$query = $this->consulta("SELECT `idimg`, `imagen`, `productos_idproducto` FROM `img_productos` WHERE `productos_idproducto`='$idproducto'");
		return $query;
	}

	public function piezasProducto($idproducto){
		
		$query = $this->consulta("SELECT `idpieza`, `nombre`, `productos_idproducto` FROM `piezas` WHERE `productos_idproducto`='$idproducto'");
		return $query;
	}

	public function opcionesPieza($idpieza){

		$query = $this->consulta("SELECT `opcion_pieza`.`idopcionpieza`, `opcion_pieza`.`nombre`, `opcion_pieza`.`imagen`, `opcion_pieza`.`tipo_convencion`, `opcion_pieza`.`color_convencion`, `opcion_pieza`.`imagen_convencion`, `opcion_pieza`.`estado` 
									FROM `opcion_pieza` 
									INNER JOIN `piezas_has_opcion_pieza` ON (`opcion_pieza`.`idopcionpieza`=`piezas_has_opcion_pieza`.`opcion_pieza_idopcionpieza`)
									WHERE `piezas_has_opcion_pieza`.`piezas_idpieza`='$idpieza'");
		return $query;
		
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
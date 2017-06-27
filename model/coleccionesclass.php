<?php

/**
* 
*/
class Colecciones extends Database
{
	
		public function crearColeccion($nombre="",$url="", $imagen="", $descripcion="", $estado=0, $fecha){
		
		$idcoleccion = $this->insertar("INSERT INTO `colecciones`(									
										`nombre`, 
										`descripcion`, 
										`url`, 
										`imagen`,										
										`estado`,
										`fecha_creacion`) VALUES (				
										'$nombre',
										'$descripcion',
										'$url',
										'$imagen',
										'$estado',
										'$fecha_creacion')");
		
		return $idcoleccion;
	}

	public function listarColecciones($estados){

		if (count($estados)>0) {

			$estados_select = "(";

			$count = 0;

			foreach ($estados as $estado) {
				if ($count>0) {
					$estados_select .= " OR ";
				}

				$estados_select .= "`colecciones`.`estado` = '$estado'";
				$count++;
			}
			$estados_select .= ")";
		}else{
			$estados_select = "";
		}

		$query = $this->consulta("SELECT `idcoleccion`, `nombre`, `descripcion`, `url`, `imagen`, `fecha_creacion`, `estado` 
									FROM `colecciones` 
									WHERE $estados_select");
		
		return $query;

	}

	public function detalleColeccion($idcoleccion){
		
		$query = $this->consulta("SELECT `idcoleccion`, `nombre`, `descripcion`, `url`, `imagen`, `fecha_creacion`, `estado` FROM `colecciones` WHERE `idcoleccion`='$idcoleccion'");
		
		return $query[0];
	}

	public function detalleColeccionUrl($url){
		
		$query = $this->consulta("SELECT `idcoleccion`, `nombre`, `descripcion`, `url`, `imagen`, `fecha_creacion`, `estado` FROM `colecciones` WHERE `url`='$url'");
		
		return $query[0];
	}

	public function actualizarColeccion($idcoleccion, $nombre="",$url="", $imagen="", $descripcion="", $estado=0){
		
		$query = $this->actualizar("UPDATE `colecciones` SET 
									`nombre`= '$nombre',
									`descripcion`= '$descripcion',
									`url`= '$url',													
									`estado`= '$estado' 
									WHERE `idcoleccion`='$idcoleccion'");

		if (!empty($imagen)) {

			$img = $this->actualizar("UPDATE `colecciones` SET 									
									`imagen`= '$imagen'									
									WHERE `idcoleccion`='$idcoleccion'");
		}

		return $query;
	}
}
?>
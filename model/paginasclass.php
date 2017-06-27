<?php
/**
* 
*/
class Paginas extends Database
{
	
	public function listarPaginas($posicion=""){		

		if (!empty($posicion)) {
			$posicion_where = " WHERE `posicion`='$posicion'";
		}else{
			$posicion_where = "";
		}

		$query = $this->consulta("SELECT `idpagina`, `titulo`, `titulo_en`, `url`, `contenido`, `contenido_en`, `banner`, `posicion`, `estado` FROM `paginas` $posicion_where");
		
		return $query;
	}

	public function crearPagina($titulo="",$titulo_en="",$url="",$contenido="",$contenido_en="",$posicion="",$banner="",$menu=0,$estado=0){
		
		$idpagina = $this->insertar("INSERT INTO `paginas`(									
									`titulo`, 
									`titulo_en`, 
									`url`, 
									`contenido`, 
									`contenido_en`, 
									`banner`, 									
									`posicion`, 
									`estado`) VALUES (									
									'$titulo',
									'$titulo_en',
									'$url',
									'$contenido',
									'$contenido_en',
									'$banner',									
									'$posicion',
									'$estado')");
		
		return $idpagina;
	}

	public function actualizarPagina($idpagina,$titulo,$titulo_en,$url,$contenido,$contenido_en,$posicion,$banner,$menu,$estado){
		
		$query = $this->actualizar("UPDATE `paginas` SET 									
									`titulo`= '$titulo',
									`titulo_en`= '$titulo_en',
									`url`= '$url',
									`contenido`= '$contenido',
									`contenido_en`= '$contenido_en',
									`posicion`= '$posicion',									
									`estado`= '$estado' 
									WHERE `idpagina`='$idpagina'");	

		if (!empty($banner)) {
			$img = $this->actualizar("UPDATE `paginas` SET
									`banner`= '$banner'	
									WHERE `idpagina`='$idpagina'");	
		}

		
		return $query;
	}



	public function detallePagina($idpagina){
		
		$query = $this->consulta("SELECT `titulo`, `titulo_en`, `url`, `contenido`, `contenido_en`, `banner`, `posicion`, `estado` FROM `paginas` WHERE `idpagina`='$idpagina'");
		
		return $query;
	}

	public function contenidoPagina($url){
		
		$query = $this->consulta("SELECT `idpagina`, `titulo`, `titulo_en`, `contenido`, `contenido_en`, `banner`, `posicion`, `estado` FROM `paginas` WHERE `url`='$url'");
		
		return $query[0];
	}
}
?>

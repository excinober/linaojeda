<?php
/**
* 
*/
class Paginas extends Database
{
	
	public function listarPaginas($posicion="",$estado=1){
		
		$where = "WHERE `estado`='$estado'";

		if (!empty($posicion)) {
			$where .= " AND `posicion`='$posicion'";
		}

		$query = $this->consulta("SELECT `idpagina`, `titulo`, `url`, `contenido`, `banner`, `posicion`, `estado` FROM `paginas` $where");
		
		return $query;
	}

	public function crearPagina($titulo="",$url="",$contenido="",$banner="",$menu=0,$estado=0){
		$this->conectar();
		$idpagina = $this->insertar("INSERT INTO `paginas`(									
									`titulo`, 
									`url`, 
									`contenido`, 
									`banner`, 
									`menu`, 
									`estado`) VALUES (									
									'$titulo',
									'$url',
									'$contenido',
									'$banner',
									'$menu',
									'$estado')");
		$this->disconnect();
		return $idpagina;
	}

	public function actualizarPagina($idpagina,$titulo,$contenido,$banner,$menu,$estado){
		$this->conectar();
		$query = $this->actualizar("UPDATE `paginas` SET 									
									`titulo`= '$titulo',									
									`contenido`= '$contenido',									
									`menu`= '$menu',
									`estado`= '$estado' 
									WHERE `idpagina`='$idpagina'");	

		if (!empty($banner)) {
			$img = $this->actualizar("UPDATE `paginas` SET
									`banner`= '$banner'	
									WHERE `idpagina`='$idpagina'");	
		}

		$this->disconnect();
		return $query;
	}



	public function detallePagina($idpagina){
		$this->conectar();
		$query = $this->consulta("SELECT `titulo`, `url`, `contenido`, `banner`, `menu`, `estado` FROM `paginas` WHERE `idpagina`='$idpagina'");
		$this->disconnect();
		return $query;
	}

	public function contenidoPagina($url){
		$this->conectar();
		$query = $this->consulta("SELECT `idpagina`, `titulo`, `contenido`, `banner`, `menu`, `estado` FROM `paginas` WHERE `url`='$url'");
		$this->disconnect();
		return $query[0];
	}
}
?>

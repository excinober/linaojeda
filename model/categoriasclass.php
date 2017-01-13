<?php
/**
* 
*/
class Categorias extends Database
{

	public function crearCategoria($nombre="",$url="",$imagen="",$estado=0){
		
		$idcategoria = $this->insertar("INSERT INTO `categorias`(											
											`nombre`,
											`url`,
											`imagen`, 
											`estado`) VALUES (
											'$nombre',
											'$url',
											'$imagen',
											'$estado')");
		
		return $idcategoria;
	}

	public function listarCategoriasPadres(){

		$query = $this->consulta("SELECT `padre` 
									FROM `categorias` 
									WHERE `padre`>0 
									GROUP BY `padre`");
		
		return $query;
	}

	public function listarCategorias($idpadre,$estados){

		if (count($estados)>0) {

			$estados_select = "(";

			$count = 0;

			foreach ($estados as $estado) {
				if ($count>0) {
					$estados_select .= " OR ";
				}

				$estados_select .= "`categorias`.`estado` = '$estado'";
				$count++;
			}
			$estados_select .= ")";
		}else{
			$estados_select = "";
		}

		if (!empty($idpadre)) {
			$padre_where = " AND `categorias`.`padre`='$idpadre'";
		}else{
			$padre_where = "";
		}

		$query = $this->consulta("SELECT `idcategoria`, `nombre`, `url`, `imagen`, `padre`, `estado` 
									FROM `categorias` 
									WHERE $estados_select $padre_where");
		
		return $query;

	}

	public function detalleCategoria($idcategoria){
		
		$query = $this->consulta("SELECT `idcategoria`, `nombre`, `url`, `imagen`, `padre`, `estado` FROM `categorias` WHERE `idcategoria`='$idcategoria'");
		
		return $query[0];
	}

	public function detalleCategoriaUrl($url){
		
		$query = $this->consulta("SELECT `idcategoria`, `nombre`, `imagen`, `estado` FROM `categorias` WHERE `url`='$url'");
		
		return $query[0];
	}

	public function actualizarCategoria($idcategoria,$nombre="",$url="",$imagen="",$estado=0){
		
		$query = $this->actualizar("UPDATE `categorias` SET 
										`nombre`='$nombre',
										`url`='$url',										
										`estado`='$estado'										
										WHERE `idcategoria`='$idcategoria'");

		if (!empty($imagen)) {

			$img = $this->actualizar("UPDATE `categorias` SET 										
										`imagen`='$imagen'																				
										WHERE `idcategoria`='$idcategoria'");
		}

		
		return $query;
	}
}
?>
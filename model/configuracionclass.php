<?php

/**
* 
*/
class Configuracion extends Database
{
	
	public function getParameters($opcion)
	{
		$query = $this->consulta("SELECT `id`, `opcion`, `estado` 
									FROM `configuracion` 
									WHERE `opcion` = '$opcion'");

		return $query[0]["estado"];
	}

	public function listarParametros(){

		$query = $this->consulta("SELECT `id`, `opcion`, `estado` 
									FROM `configuracion`");

		return $query;	
	}

	public function actualizarParametro($idparametro, $estado){
		$query = $this->actualizar("UPDATE `configuracion` SET 										
											`estado`='$estado'
											
											WHERE `id`='$idparametro'");
		return $query;
	}
}
?>
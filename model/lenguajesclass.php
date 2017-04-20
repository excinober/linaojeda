<?php
/**
* 
*/
class Lenguajes extends Database
{
	
	public function listarFrases(){
		
		$query = $this->consulta("SELECT `idfrase`, `llave`, `es`, `en` FROM `lenguajes`");
		
		return $query;
	}

	public function actualizarFrase($idfrase="", $es="", $en=""){
		
			$query = $this->actualizar("UPDATE `lenguajes` SET 										
											`es`='$es',
											`en`='$en'
											WHERE `idfrase`='$idfrase'");			
		
		return $query;
	}



	public static function consultarFrase($llave, $lenguaje){
		
		$database = new Database();

		$query = $database->consulta("SELECT `idfrase`, `llave`, `es`, `en` FROM `lenguajes` WHERE `llave`='$llave'");
		
		$database->disconnect();

		return $query[0][$_SESSION["lenguaje"]];
	}
}
?>
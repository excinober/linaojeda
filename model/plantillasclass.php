<?php 
/**
* 
*/
class Plantillas extends Database
{
	
	public function detallePlantilla($idplantilla){
		
		$query = $this->consulta("SELECT `titulo`, `asunto`, `mensaje`, `email`, `estado` 
									FROM `mensajes_email` 
									WHERE `idmensaje`='$idplantilla'");
		
		return $query[0];
	}

	public function listarPlantillas(){
		
		$query = $this->consulta("SELECT `idmensaje`, `titulo`, `asunto`, `mensaje`, `email`, `estado` 
									FROM `mensajes_email`");
		
		return $query;
	}

	public function actualizarPlantilla($idmensaje, $titulo, $asunto, $mensaje, $email, $estado){
		
		$query = $this->actualizar("UPDATE `mensajes_email` SET 									
									`titulo`='$titulo',
									`asunto`='$asunto',
									`mensaje`='$mensaje',
									`email`='$email',
									`estado`='$estado' 
									WHERE `idmensaje`='$idmensaje'");
		
		return $query;
	}
}
?>
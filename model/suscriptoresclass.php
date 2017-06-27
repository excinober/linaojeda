<?php 
/**
* 
*/
class Suscriptores extends Database
{
	
	/****NEWSLETTER****/
	public function suscribirNewsletter($email, $fecha){
		
		$idsuscriptor = $this->insertar("INSERT INTO `boletines`(									
										`email`, 
										`fecha`) 
										VALUES (										
										'$email',
										'$fecha')");		
		return $idsuscriptor;
	}

	public function listarSuscriptores(){

		$query = $this->consulta("SELECT `id`, `nombre`, `email`, `fecha` FROM `boletines`");
		return $query;
	}

	public function suscriptorDetalle($idsuscriptor){

		$query = $this->consulta("SELECT `id`, `nombre`, `email`, `fecha` FROM `boletines` WHERE `id`='$idsuscriptor'");
		return $query[0];
	}

	public function crearSuscriptor($nombre,$email,$fecha){
		
		$idsuscriptor = $this->insertar("INSERT INTO `boletines`(
											`nombre`,
											`email`,
											`fecha`) 
											VALUES (
											'$nombre',
											'$email',
											'$fecha')");
		
		return $idsuscriptor;
	}

	public function actualizarSuscriptor($idsuscriptor,$nombre,$email){
		
		$query = $this->actualizar("UPDATE `boletines` SET 
										`nombre`='$nombre',
										`email`='$email'
										WHERE `id`='$idsuscriptor'");
		return $query;
	}
}
?>
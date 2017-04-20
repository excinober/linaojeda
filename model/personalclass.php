<?php 
/**
* 
*/
class Personal extends Database
{
	public function listarPersonal(){
		
		$query = $this->consulta("SELECT `idpersona`, `nombre`, `cargo`, `usuario`, `password`, `rol`, `estado` FROM `personal`");
		
		return $query;
	}

	public function crearPersonal($nombre="", $cargo="", $usuario="", $password="", $rol="", $estado=""){
		
		$idpersona = $this->insertar("INSERT INTO `personal`(										
										`nombre`, 
										`cargo`, 
										`usuario`, 
										`password`, 
										`rol`, 
										`estado`
										) VALUES (										
										'$nombre',
										'$cargo',
										'$usuario',
										'$password',
										'$rol',
										'$estado')");
		
		return $idpersona;
	}

	public function actualizarPersonal($idpersona=0, $nombre="", $cargo="", $usuario="", $password="", $rol="", $estado=""){
		
		$query = $this->actualizar("UPDATE `personal` SET 
									`nombre`= '$nombre',
									`cargo`= '$cargo',
									`usuario`= '$usuario',
									`password`= '$password',
									`rol`= '$rol',
									`estado`= '$estado'									
								WHERE `idpersona`='$idpersona'");
		return $query;
	}



	public function detallePersona($idpersona){
		
		$query = $this->consulta("SELECT `idpersona`, `nombre`, `cargo`, `usuario`, `password`, `rol`, `estado` FROM `personal` WHERE `idpersona`='$idpersona'");
		
		return $query[0];
	}

	/*public function listarCompanias(){
		
		$query = $this->consulta("SELECT `idcompania`, `nombre`, `nit`, `direccion`, `email`, `telefono`, `representante_legal`, `estado` FROM `companias`");
		
		return $query;
	}*/
}
?>
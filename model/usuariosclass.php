<?php

/**
* 
*/
class Usuarios extends Database
{
	public function listarUsuarios(){		
		
		$query = $this->consulta("SELECT `idusuario`, `nombre`, `apellido`, `sexo`, `fecha_nacimiento`, `email`, `password`, `num_identificacion`, `boletines`, `condiciones`, `direccion`, `telefono`, `telefono_m`, `estado`, `fecha_registro`, `ciudad`, `pais`, `cod_postal`
									FROM `usuarios`									
									ORDER BY `fecha_registro` DESC");
		
		return $query;
	}
	
	public function crearUsuario($nombre="", $apellido="", $sexo="", $fecha_nacimiento="", $email="", $password="", $num_identificacion, $boletines=0, $condiciones=0, $direccion="", $telefono="", $telefono_m="", $estado=0, $fecha_registro="", $ciudad="", $pais="", $cod_postal=""){	
		
		$idusuario = $this->insertar("INSERT INTO usuarios(
										num_identificacion,
										nombre,
										apellido, 
										sexo, 
										fecha_nacimiento, 
										email, 
										password, 										
										boletines, 
										condiciones, 
										direccion, 
										ciudad,
										pais,
										cod_postal,
										telefono, 
										telefono_m, 
										estado, 
										fecha_registro) VALUES (
										'$num_identificacion',
										'$nombre',
										'$apellido', 
										'$sexo', 
										'$fecha_nacimiento', 
										'$email', 
										'$password', 										
										'$boletines', 
										'$condiciones', 
										'$direccion', 
										'$ciudad',
										'$pais',
										'$cod_postal',
										'$telefono', 
										'$telefono_m', 										
										'$estado', 
										'$fecha_registro')");

		return $idusuario;	
	}

	public function actualizarUsuario($idusuario, $nombre, $apellido, $sexo, $fecha_nacimiento, $email, $num_identificacion, $boletines, $condiciones, $direccion, $telefono, $telefono_m, $estado, $ciudad, $pais, $cod_postal){
		
		$query = $this->actualizar("UPDATE `usuarios` SET 									
									`num_identificacion`='$num_identificacion',
									`nombre`='$nombre',
									`apellido`='$apellido',
									`sexo`='$sexo',
									`fecha_nacimiento`='$fecha_nacimiento',
									`email`='$email',
									`boletines`='$boletines',									
									`condiciones`='$condiciones',									
									`direccion`='$direccion',
									`telefono`='$telefono',
									`telefono_m`='$telefono_m',									
									`estado`='$estado',									
									`ciudad`= '$ciudad',
									`pais`= '$pais',
									`cod_postal`= '$cod_postal'
									WHERE `idusuario`='$idusuario'");
		
		return $query;
	}

	public function cambiarContrasenaUsuario($idusuario, $contrasena_actual, $nueva_contrasena){
		
		$query = $this->actualizar("UPDATE `usuarios` SET 									
									`password`='$nueva_contrasena'
									WHERE `idusuario`='$idusuario' AND `password`='$contrasena_actual'");
		
		return $query;
	}

	public function generarContrasena(){
		
		$rnd = str_pad(rand(0,999999),9, "0", STR_PAD_LEFT);
		$codigo = $rnd;
		return $codigo;
	}

	public function nombreCiudad($idciudad){
		
		$query = $this->consulta("SELECT `codigo`, `ciudad`, `departamento` FROM `ciudades` WHERE `idciudad`='$idciudad'");
		
		return $query[0];
	}

	public function listarCiudades(){
		
		$query = $this->consulta("SELECT `idciudad`, `codigo`, `ciudad`, `departamento` FROM `ciudades` ORDER BY `ciudad` ASC");
		
		return $query;
	}

	public function loguearUsuario($email,$password){
		
		$query = $this->consulta("SELECT `idusuario`, `nombre`, `apellido`, `sexo`, `fecha_nacimiento`, `email`, `password`, `boletines`, `condiciones`, `direccion`, `ciudad`, `pais`, `cod_postal`, `telefono`, `telefono_m`, `estado`, `fecha_registro`
									FROM `usuarios` 									
									WHERE `email`='$email' AND `password`='$password'");
		
		return $query[0];
	}

	public function loguearPersonal($email,$password){
		
		$query = $this->consulta("SELECT `idpersona`, `nombre`, `cargo`, `usuario`, `password`, `rol`, `estado`
									FROM `personal`
									WHERE `usuario`='$email' AND `password`='$password'");
		
		return $query[0];
	}

	public function detalleUsuario($idusuario){
		
		$query = $this->consulta("SELECT  `usuarios`.`idusuario`, `usuarios`.`nombre`, `usuarios`.`apellido`, `usuarios`.`sexo`, `usuarios`.`fecha_nacimiento`, `usuarios`.`email`, `usuarios`.`password`, `usuarios`.`num_identificacion`, `usuarios`.`boletines`, `usuarios`.`condiciones`, `usuarios`.`direccion`, `usuarios`.`telefono`, `usuarios`.`telefono_m`, `usuarios`.`estado`, `usuarios`.`fecha_registro`, `usuarios`.`ciudad`, `usuarios`.`pais`, `usuarios`.`cod_postal`
									FROM `usuarios`									
									WHERE `idusuario`='$idusuario'");
		
		return $query[0];
	}

	public function detalleUsuarioEmail($email){
		
		$query = $this->consulta("SELECT  `usuarios`.`idusuario`, `usuarios`.`nombre`, `usuarios`.`apellido`, `usuarios`.`sexo`, `usuarios`.`fecha_nacimiento`, `usuarios`.`email`, `usuarios`.`password`, `usuarios`.`num_identificacion`, `usuarios`.`boletines`, `usuarios`.`condiciones`, `usuarios`.`direccion`, `usuarios`.`telefono`, `usuarios`.`telefono_m`, `usuarios`.`tipo`, `usuarios`.`segmento`, `usuarios`.`foto`, `usuarios`.`estado`, `usuarios`.`fecha_registro`, `usuarios`.`lider`, `usuarios`.`ciudades_idciudad`, `ciudades`.`ciudad` 
									FROM `usuarios`
									INNER JOIN `ciudades` ON(`usuarios`.`ciudades_idciudad`=`ciudades`.`idciudad`)
									WHERE `usuarios`.`email`='$email'");
		
		return $query[0];
	}

	public function comprasNetasPeriodo($inicio, $fin, $estado, $idusuario){
		
		$query = $this->consulta("SELECT SUM(`neto_sin_iva`) as 'compras_netas'
									FROM `ordenes_pedidos` 
									WHERE `usuarios_idusuario`='$idusuario' AND `estado`='$estado' AND `fecha_pedido` BETWEEN '$inicio' AND '$fin'");
		
		return $query[0];
	}
	
	public function listarCupones(){
		
		$query = $this->consulta("SELECT `idcodigo`, `titulo`, `aplicacion`, `val_descuento`, `fecha_expiracion`, `num_codigo_desc`, `estado`, `tipo`, `privado`, `monto_minimo` 
									FROM `codigos_descuento`");
		
		return $query;
	}

	/**************PUNTOS******************/

	public function listarPuntosUsuario($idusuario, $estado=1, $idorden=0){

		if (!empty($idorden)) {
			$where_orden = "AND `ordenes_pedidos_idorden`='$idorden'";
		}else{
			$where_orden = "";
		}
		
		$query = $this->consulta("SELECT `idpuntos`, `puntos`, `concepto`, `fecha_adquirido`, `fecha_redimido`, `redimido`
					FROM `puntos` 
					WHERE `usuarios_idusuario` = '$idusuario' AND `estado`='$estado' $where_orden");
		
		return $query;
	}

	public function puntosDisponibles($idusuario){
		
		$query = $this->consulta("SELECT SUM(`puntos`-`redimido`) AS 'disponibles'
					FROM `puntos`
					WHERE `usuarios_idusuario` = '$idusuario' AND `estado`='1' AND NOW()<= DATE_ADD(`fecha_adquirido`, INTERVAL 365 DAY)");
		
		return $query[0];
	}

	public function listarPuntosDisponibles($idusuario){
		
		$query = $this->consulta("SELECT (`puntos`-`redimido`) AS 'disponibles', idpuntos, puntos, redimido
					FROM `puntos`
					WHERE `usuarios_idusuario` = '$idusuario' AND `estado`='1' AND NOW()<= DATE_ADD(`fecha_adquirido`, INTERVAL 365 DAY)
					ORDER BY fecha_adquirido ASC");
		
		return $query;
	}

	public function actualizarPuntosRedimidos($idpuntos, $puntos_redimidos){
		
		$query = $this->actualizar("UPDATE `puntos` SET `redimido` = $puntos_redimidos WHERE `idpuntos` = '$idpuntos'");		
		return $query;
	}

	public function actualizarPuntosEstado($idpuntos, $estado=0){
		
		$query = $this->actualizar("UPDATE `puntos` SET `estado` = '$estado' WHERE `idpuntos` = '$idpuntos'");
		return $query;
	}

	public function asignarNuevosPuntos($nuevos_puntos, $concepto, $fecha_adquirido, $redimido, $estado=0, $idusuario, $idorden=0){
		
		$idpuntos = $this->insertar("INSERT INTO `puntos`(
									`puntos`, 
									`concepto`, 
									`fecha_adquirido`, 									
									`redimido`, 
									`estado`, 									
									`usuarios_idusuario`,
									`ordenes_pedidos_idorden`) VALUES (									
									'$nuevos_puntos',
									'$concepto',
									'$fecha_adquirido',
									'$redimido',
									'$estado',
									'$idusuario',
									'$idorden')");
		
		return $idpuntos;
	}


	/******ORGANIZACIONES******/
	public function crearOrganizacion($nit, $razon_social, $direccion, $telefono, $ciudad){

		$idorganizacion = $this->insertar("INSERT INTO `organizaciones`(
										`nit`, 
										`razon_social`, 
										`direccion`, 
										`telefono`,
										`ciudades_idciudad`) VALUES (
										'$nit',
										'$razon_social',
										'$direccion',
										'$telefono',
										'$ciudad')");
		return $idorganizacion;
	}

	public function detalleOrganizacionUsuario($idorganizacion){
		
		$query = $this->consulta("SELECT `organizaciones`.`idorganizacion`, `organizaciones`.`nit`, `organizaciones`.`razon_social`, `organizaciones`.`direccion`, `organizaciones`.`telefono`, `organizaciones`.`ciudades_idciudad`, `ciudades`.`ciudad` AS 'ciudad' FROM `organizaciones` INNER JOIN `ciudades` ON(`organizaciones`.`ciudades_idciudad`=`ciudades`.`idciudad`) WHERE `organizaciones`.`idorganizacion`='$idorganizacion'");

		return $query[0];
	}

	public function actualizarOrganizacion($idorganizacion, $razon_social, $telefono, $direccion, $ciudad){
		$query = $this->actualizar("UPDATE `organizaciones` SET 
										`razon_social`='$razon_social',
										`direccion`='$direccion',
										`telefono`='$telefono',
										`ciudades_idciudad`='$ciudad'
										WHERE `idorganizacion`='$idorganizacion'");
		return $query;
	}


	/*****DOCUMENTOS*****/
	public function crearDocumento($idusuario,$nombre,$url){
		
		$iddocumento = $this->insertar("INSERT INTO `documentos`(										
										`nombre`, 
										`url`, 
										`usuarios_idusuario`) VALUES (										
										'$nombre',
										'$url',
										'$idusuario')");		
		return $iddocumento;
	}

	public function actualizarDocumento($iddocumento,$nombre,$url){
		
		$query = $this->actualizar("UPDATE `documentos` SET 
									`nombre`='$nombre',
									`url`='$url'
									WHERE `iddocumento`='$iddocumento'");
		return $query;
	}

	public function listarDocumentos($idusuario){

		$query = $this->consulta("SELECT `iddocumento`, `nombre`, `url`, `usuarios_idusuario` FROM `documentos` WHERE `usuarios_idusuario`='$idusuario'");
		return $query;
	}

}
?>
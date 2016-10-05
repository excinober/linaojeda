<?php

/**
* 
*/
class Usuarios extends Database
{
	public function listarUsuarios(){
		$this->conectar();
		$query = $this->consulta("SELECT `idusuario`, `nombre`, `apellido`, `sexo`, `fecha_nacimiento`, `email`, `password`, `num_identificacion`, `boletines`, `condiciones`, `direccion`, `telefono`, `telefono_m`, `tipo`, `foto`, `estado`, `fecha_registro`, `lider`, `ciudades_idciudad`, `ciudades`.`ciudad` AS 'ciudad'
									FROM `usuarios`
									INNER JOIN `ciudades` ON (`usuarios`.`ciudades_idciudad`=`ciudades`.`idciudad`)");
		$this->disconnect();
		return $query;
	}
	
	public function crearUsuario($nombre="", $apellido="", $sexo="", $fecha_nacimiento="", $email="", $password="", $num_identificacion="", $boletines=0, $condiciones=0, $direccion="", $telefono="", $telefono_m="", $tipo="", $foto="", $estado=0, $fecha_registro="", $ciudad=0){	
		$this->conectar();
		$idusuario = $this->insertar("INSERT INTO usuarios(										
										nombre,
										apellido, 
										sexo, 
										fecha_nacimiento, 
										email, 
										password, 
										num_identificacion, 
										boletines, 
										condiciones, 
										direccion, 
										telefono, 
										telefono_m, 
										tipo, 										
										estado, 
										fecha_registro, 
										ciudades_idciudad) VALUES (
										'$nombre',
										'$apellido', 
										'$sexo', 
										'$fecha_nacimiento', 
										'$email', 
										'$password', 
										'$num_identificacion', 
										'$boletines', 
										'$condiciones', 
										'$direccion', 
										'$telefono', 
										'$telefono_m', 
										'$tipo',										
										'$estado', 
										'$fecha_registro', 
										'$ciudad')");

		if (!empty($foto)) {
			$foto = $this->insertar("INSERT INTO usuarios(foto) VALUES ('$foto')");
		}

		$this->disconnect();
		return $idusuario;	
	}

	public function actualizarUsuario($idusuario, $nombre, $apellido, $sexo, $fecha_nacimiento, $email, $boletines, $direccion, $telefono, $telefono_m, $foto, $ciudad){
		$this->conectar();
		$query = $this->actualizar("UPDATE `usuarios` SET 									
									`nombre`='$nombre',
									`apellido`='$apellido',
									`sexo`='$sexo',
									`fecha_nacimiento`='$fecha_nacimiento',
									`email`='$email',
									`boletines`='$boletines',									
									`direccion`='$direccion',
									`telefono`='$telefono',
									`telefono_m`='$telefono_m',									
									`foto`='$foto',
									`ciudades_idciudad`= '$ciudad'
									WHERE `idusuario`='$idusuario'");
		$this->disconnect();
		return $query;
	}

	public function cambiarContrasenaUsuario($idusuario, $contrasena_actual, $nueva_contrasena){
		$this->conectar();
		$query = $this->actualizar("UPDATE `usuarios` SET 									
									`password`='$nueva_contrasena'
									WHERE `idusuario`='$idusuario' AND `password`='$contrasena_actual'");
		$this->disconnect();
		return $query;
	}

	public function generarContrasena(){
		
		$rnd = str_pad(rand(0,999999),9, "0", STR_PAD_LEFT);
		$codigo = $rnd;
		return $codigo;
	}

	public function nombreCiudad($idciudad){
		$this->conectar();
		$query = $this->consulta("SELECT `codigo`, `ciudad`, `departamento` FROM `ciudades` WHERE `idciudad`='$idciudad'");
		$this->disconnect();
		return $query[0];
	}

	public function listarCiudades(){
		$this->conectar();
		$query = $this->consulta("SELECT `idciudad`, `codigo`, `ciudad`, `departamento` FROM `ciudades` ORDER BY `ciudad` ASC");
		$this->disconnect();
		return $query;
	}

	public function loguearUsuario($email,$password){
		$this->conectar();
		$query = $this->consulta("SELECT `usuarios`.`idusuario`, `usuarios`.`nombre`, `usuarios`.`apellido`, `usuarios`.`sexo`, `usuarios`.`fecha_nacimiento`, `usuarios`.`email`, `usuarios`.`num_identificacion`, `usuarios`.`boletines`, `usuarios`.`condiciones`, `usuarios`.`direccion`, `usuarios`.`telefono`, `usuarios`.`telefono_m`, `usuarios`.`tipo`, `usuarios`.`foto`, `usuarios`.`estado`, `usuarios`.`fecha_registro`, `usuarios`.`ciudades_idciudad`, `ciudades`.`ciudad` 
									FROM `usuarios` 
									INNER JOIN `ciudades` ON(`usuarios`.`ciudades_idciudad`=`ciudades`.`idciudad`)
									WHERE `email`='$email' AND `password`='$password'");
		$this->disconnect();
		return $query;
	}

	public function loguearPersonal($email,$password){
		$this->conectar();
		$query = $this->consulta("SELECT `idpersona`, `usuario`, `password`, `rol`, `estado`, `companias_idcompania` FROM `personal`
									WHERE `usuario`='$email' AND `password`='$password'");
		$this->disconnect();
		return $query[0];
	}

	public function detalleUsuario($idusuario){
		$this->conectar();
		$query = $this->consulta("SELECT  `usuarios`.`nombre`, `usuarios`.`apellido`, `usuarios`.`sexo`, `usuarios`.`fecha_nacimiento`, `usuarios`.`email`, `usuarios`.`password`, `usuarios`.`num_identificacion`, `usuarios`.`boletines`, `usuarios`.`condiciones`, `usuarios`.`direccion`, `usuarios`.`telefono`, `usuarios`.`telefono_m`, `usuarios`.`tipo`, `usuarios`.`foto`, `usuarios`.`estado`, `usuarios`.`fecha_registro`, `usuarios`.`lider`, `usuarios`.`ciudades_idciudad`, `ciudades`.`ciudad` 
									FROM `usuarios`
									INNER JOIN `ciudades` ON(`usuarios`.`ciudades_idciudad`=`ciudades`.`idciudad`)
									WHERE `idusuario`='$idusuario'");
		$this->disconnect();
		return $query[0];
	}

	public function detalleUsuarioEmail($email){
		$this->conectar();
		$query = $this->consulta("SELECT  `usuarios`.`idusuario`, `usuarios`.`nombre`, `usuarios`.`apellido`, `usuarios`.`sexo`, `usuarios`.`fecha_nacimiento`, `usuarios`.`email`, `usuarios`.`password`, `usuarios`.`num_identificacion`, `usuarios`.`boletines`, `usuarios`.`condiciones`, `usuarios`.`direccion`, `usuarios`.`telefono`, `usuarios`.`telefono_m`, `usuarios`.`tipo`, `usuarios`.`foto`, `usuarios`.`estado`, `usuarios`.`fecha_registro`, `usuarios`.`lider`, `usuarios`.`ciudades_idciudad`, `ciudades`.`ciudad` 
									FROM `usuarios`
									INNER JOIN `ciudades` ON(`usuarios`.`ciudades_idciudad`=`ciudades`.`idciudad`)
									WHERE `usuarios`.`email`='$email'");
		$this->disconnect();
		return $query[0];
	}

	public function listarOrdenes(){
		$this->conectar();
		$query = $this->consulta("SELECT `ordenes_pedidos`.`idorden`, `ordenes_pedidos`.`num_orden`, `ordenes_pedidos`.`fecha_pedido`, `ordenes_pedidos`.`subtotal`, `ordenes_pedidos`.`descuentos`, `ordenes_pedidos`.`porc_escala`, `ordenes_pedidos`.`desc_escala`, `ordenes_pedidos`.`neto_sin_iva`, `ordenes_pedidos`.`impuestos`, `ordenes_pedidos`.`pago_puntos`, `ordenes_pedidos`.`valor_punto`, `ordenes_pedidos`.`costo_envio`, `ordenes_pedidos`.`total`, `ordenes_pedidos`.`estado`, `ordenes_pedidos`.`fecha_facturacion`, `ordenes_pedidos`.`num_factura`, `usuarios`.`nombre`,`usuarios`.`apellido`
									FROM `ordenes_pedidos`
									INNER JOIN `usuarios` ON (`ordenes_pedidos`.`usuarios_idusuario`=`usuarios`.`idusuario`)
									ORDER BY `ordenes_pedidos`.`fecha_pedido` DESC");
		$this->disconnect();
		return $query;
	}

	public function detalleOrden($idorden){
		$this->conectar();
		$query = $this->consulta("SELECT `ordenes_pedidos`.`idorden`, `ordenes_pedidos`.`num_orden`, `ordenes_pedidos`.`fecha_pedido`, `ordenes_pedidos`.`subtotal`, `ordenes_pedidos`.`descuentos`, `ordenes_pedidos`.`porc_escala`, `ordenes_pedidos`.`desc_escala`, `ordenes_pedidos`.`neto_sin_iva`, `ordenes_pedidos`.`impuestos`, `ordenes_pedidos`.`pago_puntos`, `ordenes_pedidos`.`valor_punto`, `ordenes_pedidos`.`costo_envio`, `ordenes_pedidos`.`total`, `ordenes_pedidos`.`estado`, `ordenes_pedidos`.`fecha_facturacion`, `ordenes_pedidos`.`num_factura`, `ordenes_pedidos`.`usuarios_idusuario`, `usuarios`.`nombre`, `usuarios`.`apellido` 
									FROM `ordenes_pedidos` 
									INNER JOIN `usuarios` ON (`ordenes_pedidos`.`usuarios_idusuario`=`usuarios`.`idusuario`)
									WHERE `ordenes_pedidos`.`idorden`='$idorden'");


		$productos = $this->consulta("SELECT `detalle_orden`.`iddetalle_orden`, `detalle_orden`.`nombre_producto`, `detalle_orden`.`cod_producto`, `detalle_orden`.`cantidad`, `detalle_orden`.`precio`, `detalle_orden`.`precio_base`, `detalle_orden`.`descuento_cupon`, `detalle_orden`.`iva`, `detalle_orden`.`descuento_puntos`
										FROM `detalle_orden`
										WHERE `ordenes_pedidos_idorden`='$idorden'");

		$this->disconnect();

		$return = array('detalle' => $query[0], 'productos' => $productos);

		return $return;
	}

	public function listarOrdenesUsuario($idusuario,$inicio,$fin){
		$this->conectar();
		$query = $this->consulta("SELECT `idorden`, `num_orden`, `fecha_pedido`, `subtotal`, `descuentos`, `porc_escala`, `desc_escala`, `neto_sin_iva`, `impuestos`, `pago_puntos`, `valor_punto`, `costo_envio`, `total`, `estado`, `fecha_facturacion`, `num_factura`
									FROM `ordenes_pedidos` 
									WHERE `usuarios_idusuario`='$idusuario' AND `fecha_pedido` BETWEEN '$inicio' AND '$fin'
									ORDER BY `fecha_pedido` DESC");
		$this->disconnect();
		return $query;
	}

	public function listarIncentivos($usuarios=array()){

		if (count($usuarios)>0) {

			$usuarios_select = "WHERE ";

			$count = 0;

			foreach ($usuarios as $usuario) {
				if ($count>0) {
					$usuarios_select .= " OR ";
				}

				$usuarios_select .= "`usuario` = '$usuario'";
				$count++;
			}			
		}else{
			$usuarios_select = "";
		}

		$this->conectar();
		$query = $this->consulta("SELECT `idincentivo`, `incentivo`, `imagen`, `inicio`, `fin`, `meta`, `descripcion`, `usuario` 
									FROM `incentivos`
									$usuarios_select");
		$this->disconnect();
		return $query;
	}

	public function incentivoDetalle($idincentivo=0){
		$this->conectar();
		$query = $this->consulta("SELECT `idincentivo`, `incentivo`, `imagen`, `inicio`, `fin`, `meta`, `descripcion`, `usuario` 
									FROM `incentivos` 
									WHERE `idincentivo`='$idincentivo'");
		$this->disconnect();
		return $query[0];
	}

	public function actualizarIncentivo($idincentivo, $incentivo, $imagen, $inicio, $fin, $meta, $descripcion, $usuario){
		$this->conectar();
		$query = $this->actualizar("UPDATE `incentivos` SET 									
									`incentivo`='$incentivo',
									`imagen`='$imagen',
									`inicio`='$inicio',
									`fin`='$fin',
									`meta`='$meta',
									`descripcion`='$descripcion',
									`usuario`='$usuario'
									WHERE `idincentivo`='$idincentivo'");
		$this->disconnect();
		return $query;
	}

	public function comprasNetasPeriodo($inicio, $fin, $estado, $idusuario){
		$this->conectar();
		$query = $this->consulta("SELECT SUM(`neto_sin_iva`) as 'compras_netas'
									FROM `ordenes_pedidos` 
									WHERE `usuarios_idusuario`='$idusuario' AND `estado`='$estado' AND `fecha_pedido` BETWEEN '$inicio' AND '$fin'");
		$this->disconnect();
		return $query[0];
	}
	
	public function listarCupones(){
		$this->conectar();
		$query = $this->consulta("SELECT `idcodigo`, `titulo`, `aplicacion`, `val_descuento`, `fecha_expiracion`, `num_codigo_desc`, `estado`, `tipo`, `privado`, `monto_minimo` 
									FROM `codigos_descuento`");
		$this->disconnect();
		return $query;
	}

	public function listarDistribuidoresLider($idlider){
		$this->conectar();
		$query = $this->consulta("SELECT  `usuarios`.`idusuario`, `usuarios`.`nombre`, `usuarios`.`apellido`, `usuarios`.`sexo`, `usuarios`.`fecha_nacimiento`, `usuarios`.`email`, `usuarios`.`password`, `usuarios`.`num_identificacion`, `usuarios`.`boletines`, `usuarios`.`condiciones`, `usuarios`.`direccion`, `usuarios`.`telefono`, `usuarios`.`telefono_m`, `usuarios`.`tipo`, `usuarios`.`foto`, `usuarios`.`estado`, `usuarios`.`fecha_registro`, `usuarios`.`ciudades_idciudad`, `ciudades`.`ciudad` 
									FROM `usuarios`
									INNER JOIN `ciudades` ON(`usuarios`.`ciudades_idciudad`=`ciudades`.`idciudad`) 
									WHERE `lider`='$idlider'");
		$this->disconnect();
		return $query;
	}

	/**************PUNTOS******************/

	public function listarPuntosUsuario($idusuario){
		$this->conectar();
		$query = $this->consulta("SELECT `idpuntos`, `puntos`, `concepto`, `fecha_adquirido`, `fecha_redimido`, `redimido`
					FROM `puntos` 
					WHERE `usuarios_idusuario` = '$idusuario'");
		$this->disconnect();
		return $query;
	}

	public function puntosDisponibles($idusuario){
		$this->conectar();
		$query = $this->consulta("SELECT SUM(`puntos`-`redimido`) AS 'disponibles'
					FROM `puntos`
					WHERE `usuarios_idusuario` = '$idusuario' AND NOW()<= DATE_ADD(`fecha_adquirido`, INTERVAL 365 DAY)");
		$this->disconnect();
		return $query[0];
	}

	public function listarPuntosDisponibles($idusuario){
		$this->conectar();
		$query = $this->consulta("SELECT (`puntos`-`redimido`) AS 'disponibles', idpuntos, puntos, redimido
					FROM `puntos`
					WHERE `usuarios_idusuario` = '$idusuario' AND NOW()<= DATE_ADD(`fecha_adquirido`, INTERVAL 365 DAY)
					ORDER BY fecha_adquirido ASC");
		$this->disconnect();
		return $query;
	}

	public function actualizarPuntosRedimidos($idpuntos, $puntos_redimidos){
		$this->conectar();
		$query = $this->actualizar("UPDATE `puntos` SET `redimido` = $puntos_redimidos WHERE `idpuntos` = '$idpuntos'");
		$this->disconnect();
		return $query;
	}

	public function asignarNuevosPuntos($nuevos_puntos, $concepto, $fecha_adquirido, $redimido, $idusuario){	
		$this->conectar();
		$idpuntos = $this->insertar("INSERT INTO `puntos`(
									`puntos`, 
									`concepto`, 
									`fecha_adquirido`, 									
									`redimido`, 
									`usuarios_idusuario`) VALUES (									
									'$nuevos_puntos',
									'$concepto',
									'$fecha_adquirido',
									'$redimido',
									'$idusuario')");
		$this->disconnect();
		return $idpuntos;	
	}

	public function detallePlantilla($idplantilla){
		$this->conectar();
		$query = $this->consulta("SELECT `titulo`, `asunto`, `mensaje`, `email`, `estado` 
									FROM `mensajes_email` 
									WHERE `idmensaje`='$idplantilla'");
		$this->disconnect();
		return $query[0];
	}

	public function listarPlantillas(){
		$this->conectar();
		$query = $this->consulta("SELECT `idmensaje`, `titulo`, `asunto`, `mensaje`, `email`, `estado` 
									FROM `mensajes_email`");
		$this->disconnect();
		return $query;
	}

	public function actualizarPlantilla($idmensaje, $titulo, $asunto, $mensaje, $email, $estado){
		$this->conectar();
		$query = $this->actualizar("UPDATE `mensajes_email` SET 									
									`titulo`='$titulo',
									`asunto`='$asunto',
									`mensaje`='$mensaje',
									`email`='$email',
									`estado`='$estado' 
									WHERE `idmensaje`='$idmensaje'");
		$this->disconnect();
		return $query;
	}

	public function listarIngredientes(){
		$this->conectar();
		$query = $this->consulta("SELECT `idingrediente`, `nombre`, `descripcion` FROM `ingredientes` ORDER BY `nombre` ASC");
		$this->disconnect();
		return $query;
	}

	public function ingredienteDetalle($idingrediente){
		$this->conectar();
		$query = $this->consulta("SELECT `idingrediente`, `nombre`, `descripcion` FROM `ingredientes` WHERE `idingrediente`='$idingrediente'");
		$this->disconnect();
		return $query[0];
	}

	public function crearIngrediente($nombre,$descripcion){	
		$this->conectar();
		$idingrediente = $this->insertar("INSERT INTO `ingredientes`(										
										`nombre`, 
										`descripcion`) VALUES (										
										'$nombre',
										'$descripcion')");
		$this->disconnect();
		return $idingrediente;	
	}

	public function actualizarIngrediente($idingrediente,$nombre,$descripcion){
		$this->conectar();
		$query = $this->actualizar("UPDATE `ingredientes` SET
									`nombre`='$nombre',
									`descripcion`='$descripcion'
									WHERE `idingrediente`='$idingrediente'");
		$this->disconnect();
		return $query;
	}

	/*****LIDER***********/
	public function zonaUsuario($idusuario){
		$this->conectar();
		$query = $this->consulta("SELECT `idzona`, `zona`, `estado`, `lider` FROM `zonas` WHERE `lider`='$idusuario'");
		$this->disconnect();
		return $query[0];
	}

}
?>
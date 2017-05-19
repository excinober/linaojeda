<?php 
/**
* 
*/

class Controller
{
	
	public function __construct()
	{		
		$this->paginas = new Paginas();		
		$this->productos = new Productos();
		$this->categorias = new Categorias();
		$this->carrito = new Carrito();
		$this->usuarios = new Usuarios();
		$this->banners = new Banners();
	}

	public function logout(){
		session_destroy();
		unset($_SESSION["idusuario"]);
		unset($_SESSION["nombre"]);
		unset($_SESSION["apellido"]);
		unset($_SESSION["email"]);
		unset($_SESSION["telefono"]);
		unset($_SESSION["telefono_m"]);
		unset($_SESSION["direccion"]);		
		unset($_SESSION["ciudad"]);
		unset($_SESSION["pais"]);
		unset($_SESSION["cod_postal"]);

		header("Location: ".URL_SITIO);
	}

	public function updateSession($idusuario, $nombre, $apellido, $email, $telefono, $telefono_m, $direccion, $ciudad, $pais, $cod_postal){
		
		$_SESSION["idusuario"] = $idusuario;
		$_SESSION["nombre"] = $nombre;
		$_SESSION["apellido"] = $apellido;
		$_SESSION["email"] = $email;
		$_SESSION["telefono"] = $telefono;
		$_SESSION["telefono_m"] = $telefono_m;
		$_SESSION["direccion"] = $direccion;		
		$_SESSION["ciudad"] = $ciudad;
		$_SESSION["pais"] = $pais;
		$_SESSION["cod_postal"] = $cod_postal;
		$_SESSION["login"] = true;
	}

	public function pageHome(){

		$posicion = "MENU";
		$estado = 1;
		$menu = $this->paginas->listarPaginas($posicion, $estado);
		$pages_footer = $this->paginas->listarPaginas("FOOTER", $estado);

		$categorias = $this->categorias->listarCategorias(0, array(1));

		$estados_productos = array(1);
		$personalizable = 0;
		$productos = $this->productos->listarProductos($estados_productos,0,$personalizable,"","LIMIT 3");

		$estados = array(1);
		$posicion_banners = "PRINCIPAL";
		$bannersprincipal = $this->banners->listarBanners($posicion_banners, $estados);
		$posicion_banners = "HOME1";
		$bannershome1 = $this->banners->listarBanners($posicion_banners, $estados);
		$posicion_banners = "HOME2";
		$bannershome2 = $this->banners->listarBanners($posicion_banners, $estados);

		include "views/home.php";
	}

	public function pageContent($url){

		$posicion = "MENU";
		$estado = 1;

		$categorias = $this->categorias->listarCategorias(0, array(1));	

		$menu = $this->paginas->listarPaginas($posicion, $estado);
		$pages_footer = $this->paginas->listarPaginas("FOOTER", $estado);
		$categorias_padre = $this->getCategoriesPattern();

		$pagina_detalle = $this->paginas->contenidoPagina($url);

		include "views/page.php";
	}

	public function pageRegister(){

		$posicion = "MENU";
		$estado = 1;

		$menu = $this->paginas->listarPaginas($posicion, $estado);
		$pages_footer = $this->paginas->listarPaginas("FOOTER", $estado);
		$categorias_padre = $this->getCategoriesPattern();

		if (isset($_POST["createUser"])) {
			extract($_POST);

			$idusuario = $this->usuarios->crearUsuario($nombre, $apellido, "", "", $email, md5($password), 0, 0, $direccion, $telefono, $telefono_m, 1, fecha_actual("datetime"), $ciudad, $pais, $cod_postal);

			if ($idusuario) {

				$this->updateSession($idusuario, $nombre, $apellido, $email, $telefono, $telefono_m, $direccion, $ciudad, $pais, $cod_postal);

				if (isset($_GET["return"]) && !empty($_GET["return"])) {
					$redirect = URL_SITIO.$_GET["return"];
				}else{
					$redirect = URL_SITIO.URL_INGRESAR;
				}

				echo "<script> alert('Tu registro fue exitoso. Por favor ingresa con tus datos'); window.location='".$redirect."';</script>";
			}
		}

		include "views/register.php";
	}


	public function pageLogin(){

		$posicion = "MENU";
		$estado = 1;

		$menu = $this->paginas->listarPaginas($posicion, $estado);
		$pages_footer = $this->paginas->listarPaginas("FOOTER", $estado);
		$categorias_padre = $this->getCategoriesPattern();

		if (isset($_POST["login"])) {
			extract($_POST);

			$password = md5($password);

			$usuario = $this->usuarios->loguearUsuario($email, $password);			

			if (count($usuario)>0) {

				$this->updateSession($usuario["idusuario"], $usuario["nombre"], $usuario["apellido"], $usuario["email"], $usuario["telefono"], $usuario["telefono_m"], $usuario["direccion"], $usuario["ciudad"], $usuario["pais"], $usuario["cod_postal"]);

				if (isset($_GET["return"]) && !empty($_GET["return"])) {
					$redirect = URL_SITIO.$_GET["return"];
				}else{
					$redirect = URL_SITIO;
				}

				header("Location: ".$redirect);
				
			}else{
				echo "<script> alert('Los datos de acceso son incorrectos. Por favor intenta de nuevo'); </script>";
			}
		}

		include "views/login.php";	
	}




	public function pageProducts(){

		$posicion = "MENU";
		$estado = 1;
		$menu = $this->paginas->listarPaginas($posicion, $estado);
		$pages_footer = $this->paginas->listarPaginas("FOOTER", $estado);

		$categorias = $this->categorias->listarCategorias(0, array(1));

		$estados_productos = array(1);
		$personalizable = 0;
		$categorias_padre = $this->getCategoriesPattern();
		$productos = $this->productos->listarProductos($estados_productos,0,$personalizable,"","");

		require "views/product_block.php";
		include "views/products_list.php";
	}

	public function pageProductDetail($urlproducto){

		$posicion = "MENU";
		$estado = 1;
		$menu = $this->paginas->listarPaginas($posicion, $estado);
		$pages_footer = $this->paginas->listarPaginas("FOOTER", $estado);

		$categorias = $this->categorias->listarCategorias(0, array(1));
		$categorias_padre = $this->getCategoriesPattern();

		$producto = $this->productos->detalleProductos(0,$urlproducto);
		$imgs_producto = $this->productos->imgsProducto($producto["idproducto"]);

		
		if (isset($_COOKIE["productos_vistos"]) && count($_COOKIE["productos_vistos"]>0)) {
			
			foreach ($_COOKIE["productos_vistos"] as $key => $idvisto) {
				$vistos[$key] = $this->productos->detalleProductos($idvisto);
			}
		}
					

		if (isset($_COOKIE["productos_vistos"])) {
			$count = count($_COOKIE["productos_vistos"]);
			if ($count>0) {

				$almacenado = false;

				for ($i=0; $i < $count; $i++) { 
					if ($_COOKIE["productos_vistos"][$i]==$producto["idproducto"]) {
						$almacenado = true;
					}
				}

				if (!$almacenado) {
					setcookie('productos_vistos['.$count.']', $producto["idproducto"], time()+3600);
				}
			}else{
				setcookie('productos_vistos[0]', $producto["idproducto"], time()+3600);
			}
		}else{
			setcookie('productos_vistos[0]', $producto["idproducto"], time()+3600);
		}

		if (!empty($producto["precio_oferta"])) {
			$porc_oferta=$producto["precio"]-$producto["precio_oferta"];
        	$porc_oferta=round(($porc_oferta/$producto["precio"])*100);
		}

		require "views/product_block.php";
		include "views/product_detail.php";
	}

	public function pageProductPersonalizeDetail($urlproducto){

		$posicion = "MENU";
		$estado = 1;
		$menu = $this->paginas->listarPaginas($posicion, $estado);
		$pages_footer = $this->paginas->listarPaginas("FOOTER", $estado);

		$categorias = $this->categorias->listarCategorias(0, array(1));

		$categorias_padre = $this->getCategoriesPattern();

		$producto = $this->productos->detalleProductos(0,$urlproducto);
		$imgs_producto = $this->productos->imgsProducto($producto["idproducto"]);

		$piezas = $this->productos->piezasProducto($producto["idproducto"]);

		if (count($piezas)>0) {			
		
			foreach ($piezas as $key => $pieza) {
				$opciones_pieza = $this->productos->opcionesPieza($pieza["idpieza"]);
				$piezas[$key]["opciones"] = $opciones_pieza;
			}
		}

		$onbeforeunload = true;

		include "views/product_personalize.php";
	}

	public function getCategoriesPattern(){

		$categorias_padre = $this->categorias->listarCategoriasPadres();

		foreach ($categorias_padre as $key => $categoria_padre) {
			$categorias_padre_info = $this->categorias->detalleCategoria($categoria_padre["padre"]);
			$categorias_padre[$key]["nombre"] = $categorias_padre_info["nombre"];

			$categorias_hijas = $this->categorias->listarCategorias($categoria_padre["padre"],array(1));
			$categorias_padre[$key]["hijas"] = $categorias_hijas;
		}

		return $categorias_padre;
	}

	public function pageProductsPersonalize(){

		$posicion = "MENU";
		$estado = 1;
		$menu = $this->paginas->listarPaginas($posicion, $estado);
		$pages_footer = $this->paginas->listarPaginas("FOOTER", $estado);

		$categorias = $this->categorias->listarCategorias(0, array(1));	

		$estados_productos = array(1);
		$personalizable = 1;
		$categorias_padre = $this->getCategoriesPattern();
		$productos = $this->productos->listarProductos($estados_productos,0,$personalizable,"","");

		require "views/product_block.php";
		include "views/products_list_personalize.php";
	}

	public function pageCategory($url=""){

		$posicion = "MENU";
		$estado = 1;
		$menu = $this->paginas->listarPaginas($posicion, $estado);
		$pages_footer = $this->paginas->listarPaginas("FOOTER", $estado);

		$categorias = $this->categorias->listarCategorias(0, array(1));	
		
		$categoria = $this->categorias->detalleCategoriaUrl($url);				
		$estados_productos = array(1);
		$personalizable = 0;
		$categorias_padre = $this->getCategoriesPattern();
		$productos = $this->productos->listarProductos($estados_productos,$categoria["idcategoria"],$personalizable,"","");

		require "views/product_block.php";		
		include "views/products_category.php";
	}

	/****CART*****/

	public function showCart(){

		$posicion = "MENU";
		$estado = 1;
		$menu = $this->paginas->listarPaginas($posicion, $estado);
		$pages_footer = $this->paginas->listarPaginas("FOOTER", $estado);

		$categorias = $this->categorias->listarCategorias(0, array(1));

		if (isset($_POST["redimirCupon"])) {

			if (!empty($_POST["cupon_descuento"])) {
				$cupon = $_POST["cupon_descuento"];
				$cupon = $this->carrito->infoCupon($cupon);

				if (!empty($cupon)) {
					$_SESSION["idcupon"] = $cupon["idcodigo"];
					$_SESSION["valor_cupon"] = $cupon["val_descuento"];
					$_SESSION["aplicacion_cupon"] = $cupon["aplicacion"];
				}else{

				}
			}
		}

		$itemsCarrito = $this->carrito->listarItems();
		$subtotalAntesIva = $this->carrito->getSubtotalAntesIva();		
		$descuentoCupon = $this->carrito->getDescuentoCupon();
		$subtotalNetoAntesIva = $this->carrito->getSubtotalNetoAntesIva();
		//$descuentoEscala = $this->carrito->getDescuentoEscala();
		//$porcDescuentoEscala = $this->carrito->porcDescuentoEscala();
		$totalNetoAntesIva = $this->carrito->getTotalNetoAntesIva();
		//$pagoPuntos = $this->carrito->getPagoPuntos();	
		$iva = $this->carrito->getIva();
		$flete = $this->carrito->calcularFlete();
		$total = $this->carrito->getTotal();
		//$rentabilidad = $this->carrito->getRentabilidad();

		include "views/cart.php";
	}

	public function cartSummary(){

		$posicion = "MENU";
		$estado = 1;
		$menu = $this->paginas->listarPaginas($posicion, $estado);
		$pages_footer = $this->paginas->listarPaginas("FOOTER", $estado);

		$categorias = $this->categorias->listarCategorias(0, array(1));

		$itemsCarrito = $this->carrito->listarItems();
		$subtotalAntesIva = $this->carrito->getSubtotalAntesIva();		
		$descuentoCupon = $this->carrito->getDescuentoCupon();
		$subtotalNetoAntesIva = $this->carrito->getSubtotalNetoAntesIva();
		//$descuentoEscala = $this->carrito->getDescuentoEscala();
		//$porcDescuentoEscala = $this->carrito->porcDescuentoEscala();
		$totalNetoAntesIva = $this->carrito->getTotalNetoAntesIva();
		//$pagoPuntos = $this->carrito->getPagoPuntos();	
		$iva = $this->carrito->getIva();
		$flete = $this->carrito->calcularFlete();
		$total = $this->carrito->getTotal();
		//$rentabilidad = $this->carrito->getRentabilidad();

		include "views/cart_summary.php";	
	}

	public function createOrder(){

		if (isset($_SESSION["idusuario"]) && !empty($_SESSION["idusuario"]) && count($_SESSION["idpdts"])>0 && count($_SESSION["cantidadpdts"])>0) {

			$codigo_orden = $this->carrito->generarCodOrden();
			$fecha_pedido = fecha_actual("date");
			$subtotalAntesIva = $this->carrito->getSubtotalAntesIva();
			//$subtotalAntesIvaPremios = $this->carrito->getSubtotalAntesIvaPremios();
			$descuentoCupon = $this->carrito->getDescuentoCupon();
			//$descuentoEscala = $this->carrito->getDescuentoEscala();
			//$porcDescuentoEscala = $this->carrito->porcDescuentoEscala();
			$totalNetoAntesIva = $this->carrito->getTotalNetoAntesIva();
			//$retencion = $this->carrito->getRTF();
			$detalleOrden = $this->carrito->getDetalleOrden();			
			//$pagoPuntos = $this->carrito->getPagoPuntos();			
			$iva = $this->carrito->getIva();
			$flete = $this->carrito->calcularFlete();
			$total = $this->carrito->getTotal();
			$estado = "PENDIENTE";
			$fecha_facturacion = "0000-00-00";
			$num_factura = "";

			//Descontar puntos usuario
			/*if ($pagoPuntos["puntos"]>0) {

				$puntos_sin_redimir = $pagoPuntos["puntos"];
				$puntos_disponibles = $this->usuarios->listarPuntosDisponibles($_SESSION["idusuario"]);

				foreach ($puntos_disponibles as $puntos_fila) {
					
					if ($puntos_sin_redimir>=$puntos_fila["disponibles"]) {
						$puntos_redimidos = $puntos_fila["disponibles"];
						$puntos_actualizar = $puntos_fila["puntos"];
					}else{
						$puntos_restantes = $puntos_sin_redimir;
						$puntos_actualizar = $puntos_fila["redimido"]+$puntos_restantes;
						$puntos_redimidos = $puntos_sin_redimir;
					}

					$puntos_sin_redimir=$puntos_sin_redimir-$puntos_redimidos;

					$this->usuarios->actualizarPuntosRedimidos($puntos_fila["idpuntos"],$puntos_actualizar);
					
					if ($puntos_sin_redimir==0) {
						break;
					}
				}
			}*/
			
			//Crear Orden
			$idorden = $this->carrito->generarOrden($codigo_orden, $fecha_pedido, $subtotalAntesIva, $descuentoCupon, $totalNetoAntesIva, $iva, 0, 0, $flete, $total, $estado, $fecha_facturacion, $num_factura, $_SESSION["idusuario"]);



			if ($idorden) {
				
				//Cargar Nuevos Puntos
				/*$valor_punto = 1;
				$fecha_adquirido = fecha_actual('datetime');
				$redimido = 0;
				$estado_puntos = 0;

				$nuevos_puntos = $totalNetoAntesIva*($valor_punto/100);
				$idnuevospuntos = $this->usuarios->asignarNuevosPuntos($nuevos_puntos, "COMPRAS", $fecha_adquirido, $redimido, $estado_puntos, $_SESSION["idusuario"], $idorden);


				$usuario = $this->usuarios->detalleUsuario($_SESSION["idusuario"]);				
				$referente = $usuario["referente"];

				if ($referente) {
					//Abonar puntos a referente
					$idnuevospuntos_referente = $this->usuarios->asignarNuevosPuntos($nuevos_puntos, "COMPRA DE REFERIDO ".$usuario["nombre"], $fecha_adquirido, $redimido, $estado_puntos, $referente, $idorden);
				}*/

				//Registrar detalle de orden
				if (count($detalleOrden)>0) {
					foreach ($detalleOrden as $key => $producto) {

						//Descontar stock
						$filas = $this->descontarStock($producto["idpdt"],$producto["cantidad"]);

						//Agregar detalle orden
						$id_detalle_orden = $this->carrito->agregarDetalleOrden($producto["nombre"], $producto["codigo"], $producto["cantidad"], $producto["precio"], $producto["precio_base"], $producto["descuento_cupon"], $producto["iva"], $producto["descuento_puntos"], $producto["personalizable"], $idorden);
					}
				}


				//Enviar Email Orden
				/*$tabla_orden = '<table cellspacing="10" border="0" width="650px" align="center">
						<thead>
							<tr>
								<th align="center">DESCRIPCIÓN</th>
								<th align="center">PRECIO</th>
								<th align="center">CANTIDAD</th>
								<th align="right">SUBTOTAL</th>
							</tr>
						</thead>
						<tbody>';

				if (count($detalleOrden)>0) {
					foreach ($detalleOrden as $key => $producto) {
						$tabla_orden .= '<tr><td>'.$producto["nombre"].'<br>'.$producto["codigo"].'<br>'.$producto["iva_porc"].'%</td>
								<td>$'.number_format($producto["precio"]).'</td>
								<td align="center">'.$producto["cantidad"].'</td>
								<td align="right">$'.number_format($producto["subtotal"]).'</td></tr>';
					}
				}
				
				$tabla_orden .='<tr><td colspan="3" align="right">Subtotal antes de IVA</td>
								<td align="right">$'.number_format($subtotalAntesIva).'</td></tr>
							<tr><td colspan="3" align="right">Descuento Cupón</td>
								<td align="right">$'.number_format($descuentoCupon).'</td></tr>
							<tr><td colspan="3" align="right">Subtotal Neto Antes de Iva</td>
								<td align="right">$'.number_format(($subtotalAntesIva-$descuentoCupon)).'</td></tr>
							<tr><td colspan="3" align="right">Descuento por Escala %</td>
								<td align="right">'.$porcDescuentoEscala.'%</td></tr>
							<tr><td colspan="3" align="right">Descuento por Escala $</td>
								<td align="right">$'.number_format($descuentoEscala).'</td></tr>
							<tr><td colspan="3" align="right">Total Neto antes de IVA</td>
								<td align="right">$'.number_format($totalNetoAntesIva).'</td></tr>
							<tr><td colspan="3" align="right">Retención</td>
								<td align="right">$'.number_format($retencion).'</td></tr>
							<tr><td colspan="3" align="right">IVA</td>
								<td align="right">$'.number_format($iva).'</td></tr>
							<tr><td colspan="3" align="right">Pago con puntos</td>
								<td align="right">$'.number_format($pagoPuntos["valor_pago"]).'</td></tr>
							<tr><td colspan="3" align="right">Costo de Envío</td>
								<td align="right">$'.number_format($flete).'</td></tr>
							<tr><td colspan="3" align="right"><b>TOTAL A PAGAR</b></td>
								<td align="right"><b>$'.number_format($total).'</b></td></tr>
						</tbody>
					</table>';

				
				
				$idplantilla=1;
				$plantilla = $this->usuarios->detallePlantilla($idplantilla);
				$mensaje = shorcodes_orden_compra($_SESSION["nombre"]." ".$_SESSION["apellido"],$codigo_orden,$plantilla["mensaje"],$tabla_orden,$estado);
				
				// Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0"."\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8"."\r\n";

				// More headers
				$headers .= 'From: Piudali <'.$plantilla["email"].'>'."\r\n";

				$mail = mail($_SESSION["email"], $plantilla["asunto"], $mensaje, $headers);

				//Variables Pago Payu
				$merchantId = 502548;
				$ApiKey = "28tuaar72n6g65ervovdl1sst";
				$referenceCode = $codigo_orden;
				//$accountId = ;
				$description = "COMPRA PRODUCTOS PIUDALI";
				$currency = "COP";
				$buyerEmail = $_SESSION["email"];
				$amount = round($total);
				$tax = round($iva);
				if ($iva == 0) {
					$taxReturnBase = 0;
				}else{
					$taxReturnBase = round($totalNetoAntesIva-$pagoPuntos["valor_pago"]);
				}
				$lng = "ES";
				$payerFullName = $_SESSION["nombre"]." ".$_SESSION["apellido"];
				$extra1 = $_SESSION["idusuario"];
				$extra3 = "PIUDALI";
				$responseUrl = "http://naturalvitalis.com/respagos.php";
				$signature=md5($ApiKey."~".$merchantId."~".$referenceCode."~".$amount."~COP");

				require "include/pago_payu.php";
				*/
				unset($_SESSION["idpdts"]);
				unset($_SESSION["cantidadpdts"]);
				unset($_SESSION["imgspdts"]);

				echo "ESPERANDO POR VINCULACIÓN DE PLATAFORMA DE PAGO";
			}
			
		}else{
			header("Location: ".URL_INGRESAR);
		}
	}

	public function descontarStock($idpdt, $cantidad){

		$producto = $this->productos->detalleProductos($idpdt);
		$cantidad_actual = $producto["cantidad"];
		$cantidad_nueva = $cantidad_actual - $cantidad;
		$filas = $this->productos->actualizarCantidadProducto($idpdt,$cantidad_nueva);

		return $filas;
	}

	public function agregarOpcionPieza(){
		
		if (isset($_POST["idpdt"]) && isset($_POST["idopcion"]) && isset($_POST["idpieza"])) {
			
			extract($_POST);

			$_SESSION["idpdts"][] = $idpdt;

			$return = array();
			echo json_encode($return);
		}		
	}


	public function addPdtCart(){

		if (isset($_POST["idpdt"]) && isset($_POST["cantidad"])) {
		
			$idpdt = $_POST["idpdt"];
			$cantidad = $_POST["cantidad"];
			$personalizable = $_POST["personalizable"];
			$img = $_POST["img"];

			if (in_array($idpdt, $_SESSION["idpdts"]) && !$personalizable) {
				
				$clave = array_search($idpdt, $_SESSION["idpdts"]);
				$_SESSION["cantidadpdts"][$clave] = $_SESSION["cantidadpdts"][$clave] + $cantidad;

			}else{

				$_SESSION["idpdts"][] = $idpdt;
				$_SESSION["cantidadpdts"][] = $cantidad;
				$_SESSION["imgspdts"][] = $img;
			}

			$total = $this->carrito->getTotal();
			$cantidad = $this->carrito->productosAgregados();

			$return = array('total' => number_format($total), 'cantidad' => $cantidad);
			echo json_encode($return);
		}
	}

	public function updateCantPdt(){
		if (isset($_POST["idpdt"]) && isset($_POST["cantidad"])) {
		
			$idpdt = $_POST["idpdt"];
			$cantidad = $_POST["cantidad"];

			if (in_array($idpdt, $_SESSION["idpdts"])) {
				
				$clave = array_search($idpdt, $_SESSION["idpdts"]);
				$_SESSION["cantidadpdts"][$clave] = $cantidad;

				echo "OK";
			}			
		}
	}

	public function saveImgPersonalizer(){

		if (isset($_POST['imgdata']) && !empty($_POST['imgdata'])) {
			
			$imagedata = base64_decode($_POST['imgdata']);
			$filename = md5(uniqid(rand(), true));
			//path where you want to upload image
			$file = DIR_IMG_PERSONALIZADOS.$filename.'.png';
			$imageurl  = DIR_IMG_PERSONALIZADOS.$filename.'.png';
			file_put_contents($file,$imagedata);
			echo $imageurl;
		}
	}
}
?>
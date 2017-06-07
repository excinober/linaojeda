<?php
error_reporting(0);
session_start();

//Lenguaje
if(!isset($_SESSION["lenguaje"])){
	$_SESSION["lenguaje"] = "en";
}

if (isset($_GET["lang"]) && ($_GET["lang"]=="es" || $_GET["lang"]=="en")) {
	$_SESSION["lenguaje"] = $_GET["lang"];	
}

//Moneda
if(!isset($_SESSION["moneda"])){
	$_SESSION["moneda"] = "COP";
}

if (isset($_GET["currency"]) && ($_GET["currency"]=="COP" || $_GET["currency"]=="USD")) {
	$_SESSION["moneda"] = $_GET["currency"];	
}

/** Require Models **/
require "model/dbclass.php";
require "model/paginasclass.php";
require "model/productosclass.php";
require "model/categoriasclass.php";
require "model/carritoclass.php";
require "model/usuariosclass.php";
require "model/ordenesclass.php";
require "model/suscriptoresclass.php";
require "model/personalclass.php";
require "model/plantillasclass.php";
require "model/bannersclass.php";
require "model/lenguajesclass.php";

/** Require Includes **/
require "include/constantes.php";
require "include/functions.php";

require "controllers/controller.php";
require "controllers/controllerAdmin.php";

$controller = new Controller();
$controllerAdmin = new ControllerAdmin();

if (isset($_GET["url"]) && !empty($_GET["url"])) {
	
	$url = $_GET["url"];
	$url = explode("/", $url);

	$var1 = $url[0];
	$var2 = $url[1];
	$var3 = $url[2];
	$var4 = $url[3];

	$GLOBALS["var1"] = $var1;
	$GLOBALS["var2"] = $var2;
	$GLOBALS["var3"] = $var3;
	$GLOBALS["var4"] = $var4;

	if (!empty($var1) && $var1 != URL_INICIO) {
	
		switch ($var1) {

			case URL_INICIO:
				$controller->pageHome();
				break;

			case URL_REGISTRO:
				$controller->pageRegister();
				break;


			case URL_PRODUCTOS:
				if (isset($var2) && !empty($var2)) {
					if ($var2==URL_PRODUCTOS_PERSONALIZAR) {
						if (isset($var3) && !empty($var3)) {
							$controller->pageProductPersonalize($var3);
						}
					}else{
						$controller->pageProductDetail($var2);
					}
				}else{
					$controller->pageProducts();
				}
				break;

			case URL_PRODUCTOS_PERSONALIZAR:
				if (isset($var2) && !empty($var2)) {
					if ($var2 == URL_PRODUCTOS_PERSONALIZAR_IMG) {
						$controller->saveImgPersonalizer();
					}elseif ($var2 == URL_PRODUCTOS_PERSONALIZAR_AGREGAR_OPCION) {
						$controller->agregarOpcionPieza();
					}else{

						$controller->pageProductPersonalizeDetail($var2);
					}
				}else{
					$controller->pageProductsPersonalize();
				}
				break;

			case URL_CATEGORIA:
				if (isset($var2) && !empty($var2)) {					
					$controller->pageCategory($var2);
				}else{
					$controller->pageCategories();
				}
				break;

			case URL_CARRITO:
				if (isset($var2) && !empty($var2)) {
					switch ($var2) {
						case URL_CARRITO_AGREGAR:
							$controller->addPdtCart();
							break;

						case URL_CARRITO_ACTUALIZAR_CANTIDAD:
							$controller->updateCantPdt();
							break;

						case URL_CARRITO_ELIMINAR_PRODUCTO:
							$controller->deletePdtCart();
							break;					

						case URL_ACTUALIZAR_TOTAL_CARRITO:
							$controller->updateTotalCart();
							break;
						
						default:
							header("Location: ".URL_CARRITO);
						break;
					}
				}else{
					$controller->showCart();
				}						
				break;

			case URL_RESUMEN_COMPRA:
				$controller->cartSummary();
				break;

			case URL_GENERAR_ORDEN:
				$controller->createOrder();
				break;

			case URL_REGISTRO:
				# code...
				break;

			case URL_RESTAURAR_CONTRASENA:
				# code...
				break;

			case URL_INGRESAR:
				$controller->pageLogin();
				break;

			case URL_PAGINA_CONTENIDO:
				$controller->pageContent($var2);
				break;

			case URL_USUARIO:
				# code...
				break;

			case URL_SALIR:
				$controller->logout();
				break;

			case URL_ADMIN:
				if (isset($var2) && $var2!='') {

					switch ($var2) {

						case URL_ADMIN_INICIO:
							$controllerAdmin->adminInicio();
							break;
						
						case URL_ADMIN_PRODUCTOS:
							if (isset($var3) && !empty($var3)) {

								if ($var3=="Nuevo") {
									$var3 = "";
								}
								$controllerAdmin->adminProductoDetalle($var3);							
								
							}else{								
								$controllerAdmin->adminProductosLista();
							}
						break;

						case URL_ADMIN_PRODUCTOS_PERSONALIZABLES:
							if (isset($var3) && !empty($var3)) {

								if ($var3=="Nuevo") {
									$var3 = "";
								}
								$controllerAdmin->adminProductoDetalle($var3);							
								
							}else{								
								$controllerAdmin->adminProductosPersonalizablesLista();
							}
						break;

						case URL_ADMIN_CATEGORIAS:
							if (isset($var3) && !empty($var3)) {

								if ($var3=="Nuevo") {
									$var3 = "";							
								}
								$controllerAdmin->adminCategoriaDetalle($var3);
								
							}else{
								$controllerAdmin->adminCategoriasLista();
							}
						break;

						case URL_ADMIN_PIEZAS:
							if (isset($var3) && !empty($var3)) {

								if ($var3==URL_ADMIN_PIEZAS_ELIMINAR_OPCION) {
									$controllerAdmin->adminPiezaEliminarOpcion();	 	
								}elseif ($var3=="Nuevo") {
									$var3 = "";							
								}
								$controllerAdmin->adminPiezaDetalle($var3);
								
							}else{
								$controllerAdmin->adminPiezasLista();
							}
						break;



						case URL_ADMIN_USUARIOS:
							if (isset($var3) && !empty($var3)) {

								if ($var3=="Nuevo") {
									$var3 = "";
								}
								$controllerAdmin->adminUsuarioDetalle($var3);							
								
							}else{
								$controllerAdmin->adminUsuariosLista();
							}												
						break;

						case URL_ADMIN_ORDENES:						
							if (isset($var3) && !empty($var3)) {

								if ($var3==URL_ADMIN_ELIMINAR_ORDEN) {
									$controllerAdmin->eliminarOrden();
								}else{

									if ($var3=="Nuevo") {
										$var3 = "";
									}
									$controllerAdmin->adminOrdenDetalle($var3);							
								}
								
							}else{
								$controllerAdmin->adminOrdenesLista();
							}												
							break;

						case URL_ADMIN_SUSCRIPTORES:
							if (isset($var3) && !empty($var3)) {

								if ($var3=="Nuevo") {
									$var3 = "";
								}
								$controllerAdmin->adminSuscriptorDetalle($var3);
								
							}else{
								$controllerAdmin->adminSuscriptoresLista();
							}
							break;

						case URL_ADMIN_PERSONAL:
							if (isset($var3) && !empty($var3)) {

								if ($var3=="Nuevo") {
									$var3 = "";
								}
								$controllerAdmin->adminPersonalDetalle($var3);
							}else{
								$controllerAdmin->adminPersonalLista();
							}							
							break;

						case URL_ADMIN_PLANTILLAS:
							if (isset($var3) && !empty($var3)) {
								
								if ($var3=="Nuevo") {
									$var3 = "";
								}
								$controllerAdmin->adminPlantillaDetalle($var3);
								
							}else{
								$controllerAdmin->adminPlantillasLista();
							}						
							break;

						case URL_ADMIN_BANNERS:
							if (isset($var3) && !empty($var3)) {

								if ($var3=="Nuevo") {
									$var3 = "";								
								}
								$controllerAdmin->adminBannerDetalle($var3);
								
							}else{
								$controllerAdmin->adminBannersLista();
							}
							break;

						case URL_ADMIN_PAGINAS:
							if (isset($var3) && !empty($var3)) {
								
								if ($var3=="Nuevo") {
									$var3 = "";
								}
								$controllerAdmin->adminPaginaDetalle($var3);							
								
							}else{
								$controllerAdmin->adminPaginasLista();
							}
							break;

						case URL_ADMIN_LENGUAJE:
							$controllerAdmin->adminLenguaje();
							break;
					}
				}else{
					$controllerAdmin->adminLoguin();	
				}				
				break;
			
			default:
				$controller->pageHome();
				break;
		}
	}else{
		$controller->pageHome();	
	}

}else{	
	$controller->pageHome();
}
?>
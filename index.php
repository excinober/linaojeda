<?php
session_start();
require "controllers/controller.php";

$controller = new Controller();

if (isset($_GET["url"]) && !empty($_GET["url"])) {
	
	$url = $_GET["url"];
	$url = explode("/", $url);

	switch ($url[0]) {

		case URL_INICIO:			
			$controller->pageHome();
			break;

		case URL_PRODUCTOS:
			$controller->pageProducts();
			break;

		case URL_CATEGORIA:
			# code...
			break;

		case URL_CARRITO:
			# code...
			break;

		case URL_RESUMEN_COMPRA:
			# code...
			break;

		case URL_REGISTRO:
			# code...
			break;

		case URL_RESTAURAR_CONTRASENA:
			# code...
			break;

		case URL_INGRESAR:
			# code...
			break;

		case URL_USUARIO:
			# code...
			break;

		case URL_SALIR:
			# code...
			break;

		case URL_ADMIN:
			# code...
			break;
		
		default:
			$controller->pageHome();
			break;
	}
}else{
	$controller->pageHome();
}
?>
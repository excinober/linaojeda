<?php
session_start();
require "controllers/controller.php";

$controller = new Controller();

if (isset($_GET["url"]) && !empty($_GET["url"])) {
	
	$url = $_GET["url"];
	$url = explode("/", $url);


	switch ($url) {
		case 'value':
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
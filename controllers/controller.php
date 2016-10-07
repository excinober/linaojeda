<?php 
/**
* 
*/
/** Require Models **/
require "model/dbclass.php";
require "model/paginasclass.php";

/** Require Includes **/
require "include/constantes.php";
require "include/functions.php";

class Controller
{
	
	public function __construct()
	{		
		$this->paginas = new Paginas();		
	}

	public function pageHome(){

		$posicion = "MENU";
		$estado = 1;

		$menu = $this->paginas->listarPaginas($posicion, $estado);		

		include "views/home.php";
	}


	public function pageProducts(){
		include "views/products_list.php";
	}
}
?>
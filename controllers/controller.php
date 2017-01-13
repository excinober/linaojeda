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
	}

	public function pageHome(){

		$posicion = "MENU";
		$estado = 1;

		$menu = $this->paginas->listarPaginas($posicion, $estado);

		$estados_productos = array(1);
		$personalizable = 0;
		$productos = $this->productos->listarProductos($estados_productos,0,$personalizable,"","LIMIT 3");

		include "views/home.php";
	}


	public function pageProducts(){

		$estados_productos = array(1);
		$personalizable = 0;
		$categorias_padre = $this->getCategoriesPattern();
		$productos = $this->productos->listarProductos($estados_productos,0,$personalizable,"","");

		require "views/product_block.php";
		include "views/products_list.php";
	}

	public function pageProductDetail($urlproducto){

		$categorias_padre = $this->getCategoriesPattern();

		$producto = $this->productos->detalleProductos(0,$urlproducto);
		$imgs_producto = $this->productos->imgsProducto($producto["idproducto"]);

		if (!empty($producto["precio_oferta"])) {
			$porc_oferta=$producto["precio"]-$producto["precio_oferta"];
        	$porc_oferta=round(($porc_oferta/$producto["precio"])*100);
		}

		include "views/product_detail.php";
	}

	public function pageProductPersonalizeDetail($urlproducto){

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

		$estados_productos = array(1);
		$personalizable = 1;
		$categorias_padre = $this->getCategoriesPattern();
		$productos = $this->productos->listarProductos($estados_productos,0,$personalizable,"","");

		require "views/product_block.php";
		include "views/products_list.php";
	}

	public function pageCategory($url=""){

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

	public function addPdtCart(){

		if (isset($_POST["idpdt"]) && isset($_POST["cantidad"])) {
		
			$idpdt = $_POST["idpdt"];
			$cantidad = $_POST["cantidad"];

			if (in_array($idpdt, $_SESSION["idpdts"])) {
				
				$clave = array_search($idpdt, $_SESSION["idpdts"]);
				$_SESSION["cantidadpdts"][$clave] = $_SESSION["cantidadpdts"][$clave] + $cantidad;

			}else{

				$_SESSION["idpdts"][] = $idpdt;
				$_SESSION["cantidadpdts"][] = $cantidad;
			}

			$total = $this->carrito->getTotal();
			$cantidad = $this->carrito->productosAgregados();

			$return = array('total' => number_format($total), 'cantidad' => $cantidad);
			echo json_encode($return);
			//echo json_encode(array('total' => number_format(10000), 'cantidad' => 10));
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
}
?>
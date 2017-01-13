<?php
require_once "model/dbclass.php";

class ControllerAdmin
{
	
	function __construct()
	{
		$this->paginas = new Paginas();		
		$this->productos = new Productos();
		$this->categorias = new Categorias();
		$this->usuarios = new Usuarios();
	}

	public function adminLoguin(){

		if (isset($_POST["ingresarAdmin"])) {
			$email = $_POST["email"];
			$password = md5($_POST["password"]);

			$admin = $this->usuarios->loguearPersonal($email, $password);			

			var_dump($admin);

			if (count($admin)>0) {
				
				$_SESSION["admin"] = true;
				$_SESSION["admin_nombre"] = $admin["nombre"];
				$_SESSION["admin_cargo"] = $admin["cargo"];
				$_SESSION["admin_email"] = $admin["usuario"];
				$_SESSION["admin_rol"] = $admin["rol"];
				header("Location: ".URL_ADMIN."/".URL_ADMIN_INICIO);
			}else{
				
			}
		}

		include "views/admin/ingresar.php";
	}

	public function adminInicio(){

		if ($_SESSION["admin"]) {
			include "views/admin/inicio.php";	
		}
	}

	public function adminProductosLista(){

		$estados_productos = array(0,1);
		$personalizable = 0;
		$productosLista = $this->productos->listarProductos($estados_productos,0,$personalizable,"","");

		include "views/admin/productos_lista.php";
	}

	public function adminProductosPersonalizablesLista(){

		$estados_productos = array(0,1);
		$personalizable = 1;
		$productosLista = $this->productos->listarProductos($estados_productos,0,$personalizable,"","");

		include "views/admin/productos_lista.php";
	}

	public function adminProductoDetalle($idproducto){

		extract($_POST);

		$categorias = $this->categorias->listarCategorias(0,array(1));		

		if (isset($_POST["actualizarProducto"])) {
			//Upload foto
			if($_FILES["img_principal"]["error"]==UPLOAD_ERR_OK){

				$rutaimg=$_FILES["img_principal"]["tmp_name"];
				$nombreimg=$_FILES["img_principal"]["name"];
				$destino = DIR_IMG_PRODUCTOS.$nombreimg;
				move_uploaded_file($rutaimg, $destino);

			}else{

				$destino = "";
			}

			$aplica_cupon = 1;
			$url = convierte_url($_POST["nombre"]);

			$this->productos->actualizarProducto($idproducto,$nombre,$cantidad,$precio,$iva,$aplica_cupon,$precio_oferta,$presentacion,$registro,$codigo,$descripcion,$img_principal,$url,$estado,$uso,$mas_info,$metas,$personalizable,$categoria,$compania,$relevancia);
		}

		if (isset($_POST["crearProducto"])) {

			extract($_POST);

			//Upload foto
			if($_FILES["img_principal"]["error"]==UPLOAD_ERR_OK){

				$rutaimg=$_FILES["img_principal"]["tmp_name"];
				$nombreimg=$_FILES["img_principal"]["name"];
				$destino = DIR_IMG_PRODUCTOS.$nombreimg;
				move_uploaded_file($rutaimg, $destino);

			}else{

				$destino = "";
			}

			$aplica_cupon = 1;
			$url = convierte_url($_POST["nombre"]);

			$idproducto = $this->productos->crearProducto($nombre,$cantidad,$precio,$iva,$aplica_cupon,$precio_oferta,$presentacion,$registro,$codigo,$descripcion,$img_principal,$url,$estado,$uso,$mas_info,$metas,$personalizable,$categoria,$compania,$relevancia);
		}

		if (isset($idproducto) && $idproducto!='') {
			$producto = $this->productos->detalleProductos($idproducto,"");
		}

		include "views/admin/producto_detalle.php";
	}

	public function adminCategoriasLista(){

		$categoriasLista = $this->categorias->listarCategorias(0, array(0,1));		
		include "views/admin/categorias_lista.php";	
	}

	public function adminCategoriaDetalle($idcategoria){

		$categorias = $this->categorias->listarCategorias(0,array(1));	

		if (isset($_POST["actualizarCategoria"])) {

			extract($_POST);

			//Upload banner
			if($_FILES["imagen"]["error"]==UPLOAD_ERR_OK){

				$rutaimg=$_FILES["imagen"]["tmp_name"];
				$nombreimg=$_FILES["imagen"]["name"];
				$destino = DIR_IMG_CATEGORIAS.$nombreimg;
				move_uploaded_file($rutaimg, $destino);

			}else{

				$destino = "";
			}

			$imagen = $destino;
			$url = convierte_url($nombre);

			$this->categorias->actualizarCategoria($idcategoria,$nombre,$url,$imagen,$estado);

		}

		if (isset($_POST["crearCategoria"])) {

			extract($_POST);

			//Upload banner
			if($_FILES["imagen"]["error"]==UPLOAD_ERR_OK){

				$rutaimg=$_FILES["imagen"]["tmp_name"];
				$nombreimg=$_FILES["imagen"]["name"];
				$destino = DIR_IMG_CATEGORIAS.$nombreimg;
				move_uploaded_file($rutaimg, $destino);

			}else{

				$destino = "";
			}
			
			$imagen = $destino;
			$url = convierte_url($nombre);

			$idcategoria = $this->categorias->crearCategoria($nombre,$url,$imagen,$estado);
		}

		if (isset($idcategoria) && $idcategoria!='') {
			$categoria = $this->categorias->detalleCategoria($idcategoria);
		}

		include "views/admin/categoria_detalle.php";		
	}

	public function adminUsuariosLista(){

		$usuariosLista = $this->usuarios->listarUsuarios();		
		include "views/admin/usuarios_lista.php";
	}

	public function adminUsuarioDetalle($idusuario){

		extract($_POST);

		if (isset($_POST["crearUsuario"])) {			
			$this->usuarios->crearUsuario($nombre, $apellido, $sexo, $fecha_nacimiento, $email,"", $num_identificacion, 0, 0, $direccion, $telefono, $telefono_m, $tipo, $segmento, "", $estado, fecha_actual('datetime'), 0, $lider, 0, $ciudad, 0);
		}

		if (isset($_POST["actualizarUsuario"])) {
			$this->usuarios->actualizarUsuario($idusuario, $nombre, $apellido, $sexo, $fecha_nacimiento, $email, 0, $direccion, $telefono, $telefono_m, $tipo, $segmento,'', $lider, $ciudad);
		}

		if (isset($idusuario) && !empty($idusuario)) {
			$usuario = $this->usuarios->detalleUsuario($idusuario);			
		}

		$ciudades = $this->usuarios->listarCiudades();
		
		include "views/admin/usuario_detalle.php";
	}
}
?>
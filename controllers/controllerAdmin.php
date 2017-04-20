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
		$this->ordenes = new Ordenes();
		$this->suscriptores = new Suscriptores();
		$this->personal = new Personal();
		$this->plantillas = new Plantillas();
		$this->banners = new Banners();
		$this->lenguajes = new Lenguajes();
	}

	public function adminLoguin(){

		if (isset($_POST["ingresarAdmin"])) {
			$email = $_POST["email"];
			$password = md5($_POST["password"]);

			$admin = $this->usuarios->loguearPersonal($email, $password);				

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

			$this->categorias->actualizarCategoria($idcategoria,$nombre,$url,$imagen,$menu,$estado);

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

			$idcategoria = $this->categorias->crearCategoria($nombre,$url,$imagen,$menu,$estado);
		}

		if (isset($idcategoria) && $idcategoria!='') {
			$categoria = $this->categorias->detalleCategoria($idcategoria);
		}

		include "views/admin/categoria_detalle.php";		
	}

	public function adminPiezasLista(){

		$piezas = $this->productos->listarPiezas();		

		include "views/admin/piezas_lista.php";	
	}

	public function adminPiezaDetalle($idpieza){

		$productos = $this->productos->listarProductos(array(1),0,1);

		if (isset($_POST["actualizarPieza"])) {

			extract($_POST);
			$this->productos->actualizarPieza($idpieza,$nombre_pieza,$producto);

			if (isset($nombre) && count($nombre)>0) {

				foreach ($nombre as $key => $value) {

					$destino_pieza = "";
					$destino_convencion = "";

					if (!empty($nombre[$key]) && !empty($tipo_convencion[$key])) {	
						
						if($_FILES["imagen"]["error"][$key]==UPLOAD_ERR_OK){
							$rutaimg=$_FILES["imagen"]["tmp_name"][$key];
							$nombreimg=$_FILES["imagen"]["name"][$key];
							$destino_pieza = DIR_IMG_PIEZAS.$nombreimg;
							move_uploaded_file($rutaimg, $destino_pieza);
						}else{
							$destino_pieza = "";
						}

						if($_FILES["imagen_convencion"]["error"][$key]==UPLOAD_ERR_OK){
							$rutaimg=$_FILES["imagen_convencion"]["tmp_name"][$key];
							$nombreimg=$_FILES["imagen_convencion"]["name"][$key];
							$destino_convencion = DIR_IMG_CONVENCIONES.$nombreimg;
							move_uploaded_file($rutaimg, $destino_convencion);
						}else{
							$destino_convencion = "";
						}

						$idopcionpieza = $this->productos->crearOpcionPieza($idpieza, $nombre[$key], $destino_pieza, $tipo_convencion[$key], $color_convencion[$key], $destino_convencion, $estado[$key]);
					}
				}
			}
		}

		if (isset($_POST["crearPieza"])) {
			extract($_POST);
			$idpieza = $this->productos->crearPieza($nombre,$producto);
		}

		if (isset($idpieza) && $idpieza!='') {
			$pieza = $this->productos->detallePieza($idpieza);
			$opciones_pieza = $this->productos->opcionesPieza($idpieza);
		}

		include "views/admin/pieza_detalle.php";	
	}

	public function adminPiezaEliminarOpcion(){
		if (isset($_POST["idpieza"]) && !empty($_POST["idpieza"]) && isset($_POST["idopcion"]) && !empty($_POST["idopcion"])) {

			$filas = $this->productos->eliminarOpcionPieza($_POST["idpieza"], $_POST["idopcion"]);

		}else{

			$filas = 0;
		}

		$return = array('filas' => $filas);
		echo json_encode($return);
	}

	public function adminUsuariosLista(){

		$usuariosLista = $this->usuarios->listarUsuarios();		
		//var_dump($usuariosLista);
		include "views/admin/usuarios_lista.php";
	}

	public function adminUsuarioDetalle($idusuario){

		extract($_POST);

		if (isset($_POST["crearUsuario"])) {			
			$this->usuarios->crearUsuario($nombre, $apellido, $sexo, $fecha_nacimiento, $email,"", $num_identificacion, 0, 0, $direccion, $telefono, $telefono_m, $estado, fecha_actual('datetime'), $ciudad, $pais, $cod_postal);
		}

		if (isset($_POST["actualizarUsuario"])) {
			$this->usuarios->actualizarUsuario($idusuario, $nombre, $apellido, $sexo, $fecha_nacimiento, $email, $num_identificacion, 0, 0, $direccion, $telefono, $telefono_m, $estado, $ciudad, $pais, $cod_postal);
		}

		if (isset($idusuario) && !empty($idusuario)) {
			$usuario = $this->usuarios->detalleUsuario($idusuario);			
		}

		//$ciudades = $this->usuarios->listarCiudades();
		
		include "views/admin/usuario_detalle.php";
	}

	/*****Ordenes*****/

	public function eliminarOrden(){

		if (isset($_POST["idorden"]) && !empty($_POST["idorden"])) {
			
			$filas = $this->ordenes->eliminarOrden($_POST["idorden"]);

		}else{
			$filas = 0;
		}

		$return = array('filas' => $filas);

		echo json_encode($return);
	}

	public function adminOrdenesLista(){

		$ordenes = $this->ordenes->listarOrdenes();
		//var_dump($ordenes);
		include "views/admin/ordenes_lista.php";
	}

	public function adminOrdenDetalle($idorden){
		
		$estados = array('APROBADO', 'DECLINADO', 'PENDIENTE', 'FACTURADO');

		if (isset($_POST["actualizar_orden"])) {
		
			extract($_POST);
			$fecha_facturacion = fecha_actual('datetime');
			$this->usuarios->actualizarOrden($idorden, $estado, $fecha_facturacion, $num_factura, $guia_flete);

			if ($estado == "FACTURADO") {

				/*$detalle_orden = $this->usuarios->detalleOrden($idorden);
				
				$puntos_pendientes = $this->usuarios->listarPuntosUsuario($detalle_orden["detalle"]["usuarios_idusuario"], 0, $idorden);				

				if (count($puntos_pendientes)>0) {
					//Activar puntos pendientes

					$estado_puntos = 1;

					foreach ($puntos_pendientes as $key => $puntos) {
						
						$this->usuarios->actualizarPuntosEstado($puntos["idpuntos"] ,$estado_puntos);
					}
				}

				$usuario = $this->usuarios->detalleUsuario($detalle_orden["detalle"]["usuarios_idusuario"]);
				$referente = $usuario["referente"];

				if ($referente) {

					$puntos_pendientes = $this->usuarios->listarPuntosUsuario($referente, 0, $idorden);

					if (count($puntos_pendientes)>0) {
					//Activar puntos pendientes del referente

						$estado_puntos = 1;

						foreach ($puntos_pendientes as $key => $puntos) {
							
							$this->usuarios->actualizarPuntosEstado($puntos["idpuntos"] ,$estado_puntos);
						}
					}
				}*/
			}
		}

		$orden = $this->ordenes->detalleOrden($idorden);
		
		include "views/admin/orden_detalle.php";
	}

	public function adminSuscriptoresLista(){

		$suscriptores = $this->suscriptores->listarSuscriptores();		
		include "views/admin/suscriptores_lista.php";
	}

	public function adminSuscriptorDetalle($idsuscriptor){

		extract($_POST);

		if (isset($_POST["actualizarSuscriptor"])) {

			$this->suscriptores->actualizarSuscriptor($idsuscriptor,$nombre,$email);
		}

		if (isset($_POST["crearSuscriptor"])) {
			$idsuscriptor = $this->suscriptores->crearSuscriptor($nombre,$email,fecha_actual('datetime'));
		}

		if (isset($idsuscriptor) && !empty($idsuscriptor)) {
			$suscriptor = $this->suscriptores->suscriptorDetalle($idsuscriptor);
		}

		include "views/admin/suscriptor_detalle.php";

	}

	public function adminPersonalLista(){

		$personal = $this->personal->listarPersonal();
		include "views/admin/personal_lista.php";
	}

	public function adminPersonalDetalle($idpersona){

		//$companias = $this->personal->listarCompanias();

		extract($_POST);

		if (isset($_POST["actualizarPersonal"])) {

			$this->personal->actualizarPersonal($idpersona, $nombre, $cargo, $usuario, $password, $rol, $estado);
		}

		if (isset($_POST["crearPersonal"])) {
			$idpersona = $this->personal->crearPersonal($nombre, $cargo, $usuario, $password, $rol, $estado);
		}

		if (isset($idpersona) && !empty($idpersona)) {
			$persona = $this->personal->detallePersona($idpersona);
		}

		include "views/admin/personal_detalle.php";

	}

	/*****Plantillas*****/

	public function adminPlantillasLista(){
		$plantillasLista = $this->plantillas->listarPlantillas();

		include "views/admin/plantillas_lista.php";	
	}

	public function adminPlantillaDetalle($idplantilla){

		if (isset($_POST["actualizarPlantilla"])) {
			extract($_POST);
			$this->plantillas->actualizarPlantilla($idplantilla, $titulo, $asunto, $mensaje, $email, $estado);
		}

		if (isset($idplantilla) && $idplantilla!='') {
			$plantilla = $this->plantillas->detallePlantilla($idplantilla);
		}

		include "views/admin/plantilla_detalle.php";
	}

	/***banners***/

	public function adminBannersLista(){
		
		$posicion_banners = "";
		$estados = array(1,0) ;
		$bannersLista = $this->banners->listarBanners($posicion_banners, $estados);

		include "views/admin/banners_lista.php";	
	}

	public function adminBannerDetalle($idbanner){

		if (isset($_POST["actualizarBanner"])) {

			extract($_POST);

			//Upload banner
			if($_FILES["imagen"]["error"]==UPLOAD_ERR_OK){

				$rutaimg=$_FILES["imagen"]["tmp_name"];
				$nombreimg=$_FILES["imagen"]["name"];
				$destino = DIR_IMG_BANNERS.$nombreimg;
				move_uploaded_file($rutaimg, $destino);

			}else{

				$destino = "";
			}

			$imagen = $destino;

			$this->banners->actualizarBanner($idbanner,$titulo,$imagen,$link,$descripcion,$ubicacion,$estado);
		}

		if (isset($_POST["crearBanner"])) {
			
			extract($_POST);

			//Upload banner
			if($_FILES["imagen"]["error"]==UPLOAD_ERR_OK){

				$rutaimg=$_FILES["imagen"]["tmp_name"];
				$nombreimg=$_FILES["imagen"]["name"];
				$destino = DIR_IMG_BANNERS.$nombreimg;
				move_uploaded_file($rutaimg, $destino);

			}else{

				$destino = "";
			}

			$imagen = $destino;
			
			$idbanner = $this->banners->crearBanner($titulo,$imagen,$link,$descripcion,$ubicacion,$estado);
		}


		if (isset($idbanner) && $idbanner!='') {
			$banner = $this->banners->detalleBanner($idbanner);
		}

		include "views/admin/banner_detalle.php";
	}

	/***paginas***/

	public function adminPaginaDetalle($idpagina){	

		extract($_POST);	

		if (isset($_POST["actualizarPagina"])) {
			//Upload banner
			if($_FILES["banner"]["error"]==UPLOAD_ERR_OK){

				$rutaimg=$_FILES["banner"]["tmp_name"];
				$nombreimg=$_FILES["banner"]["name"];
				$destino = DIR_IMG_PAGINAS.$nombreimg;
				move_uploaded_file($rutaimg, $destino);

			}else{

				$destino = "";
			}

			$banner = $destino;
			$url = convierte_url($_POST["url"]);		

			$this->paginas->actualizarPagina($idpagina,$titulo,$url,$contenido,$posicion,$banner,$menu,$estado);
		}

		if (isset($_POST["crearPagina"])) {
			//Upload banner
			if($_FILES["banner"]["error"]==UPLOAD_ERR_OK){

				$rutaimg=$_FILES["banner"]["tmp_name"];
				$nombreimg=$_FILES["banner"]["name"];
				$destino = DIR_IMG_PAGINAS.$nombreimg;
				move_uploaded_file($rutaimg, $destino);

			}else{

				$destino = "";
			}

			$banner = $destino;

			$url = convierte_url($_POST["url"]);

			$idpagina = $this->paginas->crearPagina($titulo,$url,$contenido,$posicion,$banner,$menu,$estado);
		}


		if (isset($idpagina) && $idpagina!='') {
			$pagina = $this->paginas->detallePagina($idpagina);
		}

		include "views/admin/pagina_detalle.php";

	}

	public function adminPaginasLista(){
		
		$paginasLista = $this->paginas->listarPaginas();

		include "views/admin/paginas_lista.php";	
	}

	public function adminLenguaje(){

		if (isset($_POST["actualizarFrase"])) {
			
			extract($_POST);

			$filas = $this->lenguajes->actualizarFrase($idfrase, $es, $en);
		}

		$frases = $this->lenguajes->listarFrases();

		include "views/admin/lenguajes.php";
	}

}
?>
<?php 
function convierte_url($url){
	// reemplaza cualquier cadena inválida por "-";
	$url = str_replace("&", "and", $url);
	$arrStupid = array('feat.', 'feat', '.com', '(tm)', ' ', '*', "'s", '"', ",", ":", ";", "@", "#", "(", ")", "?", "!", "_",
	"$","+", "=", "|", "'", '/', "~", "`s", "`", "\\", "^", "[","]","{", "}", "<", ">", "%", "&#8482;");

	$url = htmlentities($url);
	$url = preg_replace('/&([a-zA-Z])(.*?);/','$1',$url);
	$url = strtolower("$url");
	$url = str_replace(".", "", $url);
	$url = str_replace($arrStupid, "-", $url);
	$flag = 1;
	while($flag){
		$newurl = str_replace("--","-",$url);
		if($url != $newurl) {
			$flag = 1;
		}
		else $flag = 0;
		$url = $newurl;
	}
	$len = strlen($url);
	if($url[$len-1] == "-") {
		$url = substr($url, 0, $len-1);
	}
	return $url;
}

function shorcodes_orden_compra($nombre,$orden,$mensaje,$productos,$estado){
		
	$mensaje = str_replace("[nombre_completo]",$nombre,$mensaje);		
	$mensaje = str_replace("[orden]",$orden,$mensaje);		
	$mensaje = str_replace("[productos]",$productos,$mensaje);		
	$mensaje = str_replace("[estado_pago]",$estado,$mensaje);		
	return $mensaje;
}

function shorcodes_registro_usuario($nombre,$email,$password,$mensaje){
		
	$mensaje = str_replace("[email]",$email,$mensaje);		
	$mensaje = str_replace("[nombre_completo]",$nombre,$mensaje);
	$mensaje = str_replace("[password]",$password,$mensaje);		
	
	return $mensaje;	
}

function shorcodes_restaurar_contrasena($nombre,$email,$password,$mensaje){
		
	$mensaje = str_replace("[email]",$email,$mensaje);		
	$mensaje = str_replace("[nombre_completo]",$nombre,$mensaje);
	$mensaje = str_replace("[nueva_contrasena]",$password,$mensaje);		
	
	return $mensaje;
}

function convertir_pesos($valor_entero){

	$valor_pesos = number_format($valor_entero,0,".",",");

	return "$".$valor_pesos;
}

function convertir_dolar($valor_entero){

	$valor_dolar = number_format($valor_entero,2,".",",");

	return "$".$valor_dolar;
}

function fecha_actual($tipo="date"){

	if ($tipo == "date") {		
		$fecha = date("Y-m-d");	

	}elseif ($tipo == "datetime") {
		$fecha = date("Y-m-d H:i:s");

	}
	
	return $fecha;
}

function filters($categorias_padre){
	
		foreach ($categorias_padre as $key => $categoria_padre) {
		?>		
		<div class="row px-1">
			<div class="col-xs-12" style="border:1px solid #000;">
				<p class="text-xs-center mt-1">
					<a data-toggle="collapse" href="#collapse<?=$categoria_padre["padre"]?>" aria-expanded="false" style="color:#000;"><?=$categoria_padre["nombre"]?>
					<i class="fa fa-caret-down float-xs-right" aria-hidden="true"></i>
					</a> 
				</p>			
				<div class="collapse" id="collapse<?=$categoria_padre["padre"]?>">
					<?php
					foreach ($categoria_padre["hijas"] as $key => $categoria_hija) {
					?>
						<hr class="m-0" style="background: #000;">
						<a href="<?=URL_SITIO.URL_CATEGORIA."/".$categoria_hija["url"]?>" style="color:#000;">
						<p class="text-xs-center mt-1"><?=$categoria_hija["nombre"]?></p>
						</a>
					<?php
					}
					?>
				</div>
			</div>
		</div>
		<?php
		}
}

function collections($collections){
	foreach ($collections as $key => $collection) {
		?>
		<div class="row px-1">
			<div class="col-xs-12" style="border:1px solid #000;">
				<a href="<?=URL_SITIO.URL_COLECCIONES."/".$collection["url"]?>" style="color:#000;">
					<p class="text-xs-center mt-1"><?=$collection["nombre"]?></p>
				</a>
			</div>
		</div>
		<?php
	}
}

function conversor_monedas($moneda_origen,$moneda_destino,$cantidad) {
	
	if ($moneda_origen != $moneda_destino) {	

		$get = file_get_contents("https://www.google.com/finance/converter?a=$cantidad&from=$moneda_origen&to=$moneda_destino");
		$get = explode("<span class=bld>",$get);
		$get = explode("</span>",$get[1]);  
		$return = preg_replace("/[^0-9\.]/", null, $get[0]);

		switch ($moneda_destino) {
			case 'COP':
				$return = convertir_pesos($return);
				break;

			case 'USD':
				$return = convertir_dolar($return);
				break;
			
			default:
				$return = round($return);
				break;
		}
	}else{

		switch ($moneda_destino) {
			case 'COP':
				$return = convertir_pesos($cantidad);
				break;

			case 'USD':
				$return = convertir_dolar($cantidad);
				break;

			default:
				$return = $cantidad;
				break;
		}
	}

	return $return;
}
?>
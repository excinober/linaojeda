<?php
/**
* 
*/
class Banners extends Database
{
	
	public function listarBanners($ubicacion="", $estados=array()){
			

		if (count($estados)>0) {

			$estados_select = "(";

			$count = 0;

			foreach ($estados as $estado) {
				if ($count>0) {
					$estados_select .= " OR ";
				}

				$estados_select .= "`estado` = '$estado'";
				$count++;
			}
			$estados_select .= ")";
		}else{
			$estados_select = "";
		}

		if (!empty($ubicacion)) {
			$ubicacion = "AND `ubicacion`='$ubicacion'";
		}else{
			$ubicacion = "";
		}

		
		$query = $this->consulta("SELECT `idbanner`, `titulo`, `imagen`, `descripcion`, `link`, `ubicacion`, `estado` FROM `banners` WHERE $estados_select $ubicacion");
		
		return $query;
	}

	public function crearBanner($titulo="",$imagen="",$link="",$descripcion="", $ubicacion="",$estado=0){
		
		$idbanner = $this->insertar("INSERT INTO `banners`(									
									`titulo`, 
									`imagen`, 
									`descripcion`, 
									`link`, 
									`ubicacion`, 
									`estado`) VALUES (									
									'$titulo',
									'$imagen',
									'$descripcion',
									'$link',
									'$ubicacion',									
									'$estado')");
		
		return $idbanner;
	}

	public function actualizarBanner($idbanner=0,$titulo="",$imagen="",$link="",$descripcion="", $ubicacion="",$estado=0){
		

		if (!empty($imagen)) {
			
			$query = $this->actualizar("UPDATE `banners` SET
									`titulo`='$titulo',
									`imagen`='$imagen',
									`link`='$link',
									`descripcion`='$descripcion',
									`ubicacion`='$ubicacion',
									`estado`='$estado' 
									WHERE `idbanner`='$idbanner'");

		}else{

			$query = $this->actualizar("UPDATE `banners` SET
									`titulo`='$titulo',									
									`link`='$link',
									`descripcion`='$descripcion',
									`ubicacion`='$ubicacion',
									`estado`='$estado' 
									WHERE `idbanner`='$idbanner'");	
		}

		
		
		return $query;
	}



	public function detalleBanner($idbanner){
		
		$query = $this->consulta("SELECT `idbanner`, `titulo`, `imagen`, `descripcion`, `link`, `ubicacion`, `estado` FROM `banners` WHERE `idbanner`='$idbanner'");
		
		return $query[0];
	}
}
?>

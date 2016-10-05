<?php
/**
* 
*/
class Banners extends Database
{
	
	public function listarBanners($posicion="", $estados=array()){
			

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

		if (!empty($posicion)) {
			$posicion = "AND `posicion`='$posicion'";
		}else{
			$posicion = "";
		}

		$this->conectar();
		$query = $this->consulta("SELECT `idbanner`, `nombre`, `imagen`, `link`, `posicion`, `estado` FROM `banners` WHERE $estados_select $posicion");
		$this->disconnect();
		return $query;
	}

	public function crearBanner($nombre="",$imagen="",$link="",$posicion="",$estado=0){
		$this->conectar();
		$idbanner = $this->insertar("INSERT INTO `banners`(									
									`nombre`, 
									`imagen`, 
									`link`, 
									`posicion`, 									
									`estado`) VALUES (									
									'$nombre',
									'$imagen',
									'$link',
									'$posicion',									
									'$estado')");
		$this->disconnect();
		return $idbanner;
	}

	public function actualizarBanner($idbanner=0,$nombre="",$imagen="",$link="",$posicion="",$estado=0){
		$this->conectar();

		if (!empty($imagen)) {
			
			$query = $this->actualizar("UPDATE `banners` SET
									`nombre`='$nombre',
									`imagen`='$imagen',
									`link`='$link',
									`posicion`='$posicion',
									`estado`='$estado' 
									WHERE `idbanner`='$idbanner'");

		}else{

			$query = $this->actualizar("UPDATE `banners` SET
									`nombre`='$nombre',									
									`link`='$link',
									`posicion`='$posicion',
									`estado`='$estado' 
									WHERE `idbanner`='$idbanner'");	
		}

		
		$this->disconnect();
		return $query;
	}



	public function detalleBanner($idbanner){
		$this->conectar();
		$query = $this->consulta("SELECT `nombre`, `imagen`, `link`, `posicion`, `estado` FROM `banners` WHERE `idbanner`='$idbanner'");
		$this->disconnect();
		return $query;
	}

	
}
?>

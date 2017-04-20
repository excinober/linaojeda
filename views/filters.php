<div class="row">
			<div class="col-xs-12 col-md-6">				
				<div class="col-xs-4 px-0">
					<?=Lenguajes::consultarFrase("ORDER", $_SESSION["lenguaje"])?>:
				</div>
				<div class="col-xs-5 px-0">
					<select class="form-control form-control-sm">
						<option><?=Lenguajes::consultarFrase("PRECIO DE MAYOR A MENOR", $_SESSION["lenguaje"])?></option>
						<option><?=Lenguajes::consultarFrase("PRECIO DE MENOR A MAYOR", $_SESSION["lenguaje"])?></option>
						<option><?=Lenguajes::consultarFrase("TEXTURA", $_SESSION["lenguaje"])?></option>
						<option><?=Lenguajes::consultarFrase("COLOR", $_SESSION["lenguaje"])?></option>
					</select>								
				</div>
				<div class="col-xs-3 px-0 text-xs-center">
					<a href="<?=URL_PRODUCTOS?>" style="text-decoration: none;"><?=Lenguajes::consultarFrase("VIEW ALL", $_SESSION["lenguaje"])?></a>
				</div>				
			</div>
			<!--<div class="col-xs-12 col-md-4">
				<h6 class="text-xs-center"><i class="fa fa-github" aria-hidden="true"></i> ALEJANDRA / LOG OUT</h6>
			</div>
			<div class="col-xs-12 col-md-2">
				<h6 class="text-xs-right">DREAM <i class="fa fa-github" aria-hidden="true"></i> BOX</h6>
			</div>-->
		</div>
<div class="row">
	<div class="col-xs-12 col-md-6">				
		<div class="col-xs-4 px-0">
			<?=Lenguajes::consultarFrase("ORDER", $_SESSION["lenguaje"])?>:
		</div>
		<div class="col-xs-5 px-0">
			<form method="get" action="<?=$modulo?>" id="formFilter">
				<select class="form-control form-control-sm" name="order" onchange="javascript:document.getElementById('formFilter').submit();">
					<option value="">--</option>
					<option value="mayor-a-menor"><?=Lenguajes::consultarFrase("PRECIO DE MAYOR A MENOR", $_SESSION["lenguaje"])?></option>
					<option value="menor-a-mayor"><?=Lenguajes::consultarFrase("PRECIO DE MENOR A MAYOR", $_SESSION["lenguaje"])?></option>
				</select>
			</form>
		</div>
		<div class="col-xs-3 px-0 text-xs-center">
			<a href="<?=URL_PRODUCTOS?>" style="text-decoration: none;"><?=Lenguajes::consultarFrase("VIEW ALL", $_SESSION["lenguaje"])?></a>
		</div>				
	</div>
</div>
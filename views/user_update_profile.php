<?php include 'header.php'; ?>
<?php include "my_bag.php"; ?>
<div class="container mb-3">
	<div class="col-xs-12 col-md-3">
		<h4>MENÚ</h4>
		<?php include "views/nav_sidebar.php"; ?>
	</div>
	<div class="col-xs-12 col-md-9">
		<h2><?=Lenguajes::consultarFrase("MY ACCOUNT", $_SESSION["lenguaje"])?></h2>
		<form method="post">
			<table class="table table-striped">
				<tr>
					<td>Identificación</td>
					<td><input type="text" class="form-control" name="num_identificacion" value="<?=$usuario["num_identificacion"]?>" required></td>
				</tr>
				<tr>
					<td>Nombre</td>
					<td><input type="text" class="form-control" name="nombre" value="<?=$usuario["nombre"]?>" required></td>
				</tr>
				<tr>
					<td>Apellido</td>
					<td><input type="text" class="form-control" name="apellido" value="<?=$usuario["apellido"]?>" required></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" class="form-control" name="email" value="<?=$usuario["email"]?>" required></td>
				</tr>
				<tr>
					<td>Género</td>
					<td>
						<select name="sexo" class="form-control" required>
							<option value="">--</option>
							<option value="FEMENINO" <?php if ($usuario["sexo"]=="FEMENINO") echo "selected"; ?>>FEMENINO</option>
							<option value="MASCULINO" <?php if ($usuario["sexo"]=="MASCULINO") echo "selected"; ?>>MASCULINO</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Fecha de Nacimiento</td>
					<td><input type="date" class="form-control" name="fecha_nacimiento" value="<?=$usuario['fecha_nacimiento']?>"></td>
				</tr>
				<tr>
                         <td>Pais</td>
                         <td>
                              <select class="form-control" name="pais" id="pais" required="required">
                                   <option value=''>SELECCIONE</option>
                                   <option value='COLOMBIA' <?php if ($usuario['pais']=='COLOMBIA') { echo 'selected'; } ?>>COLOMBIA</option>
                                   <option value='AFGANISTAN' <?php if ($usuario['pais']=='AFGANISTAN') { echo 'selected'; } ?>>AFGANISTAN</option>
                                   <option value='ALBANIA' <?php if ($usuario['pais']=='ALBANIA') { echo 'selected'; } ?>>ALBANIA</option>
                                   <option value='ALEMANIA' <?php if ($usuario['pais']=='ALEMANIA') { echo 'selected'; } ?>>ALEMANIA</option>
                                   <option value='ANDORRA' <?php if ($usuario['pais']=='ANDORRA') { echo 'selected'; } ?>>ANDORRA</option>
                                   <option value='ANGOLA' <?php if ($usuario['pais']=='ANGOLA') { echo 'selected'; } ?>>ANGOLA</option>
                                   <option value='ANGUILLA' <?php if ($usuario['pais']=='ANGUILLA') { echo 'selected'; } ?>>ANGUILLA</option>
                                   <option value='ANTIGUA Y BARBUDA' <?php if ($usuario['pais']=='ANTIGUA Y BARBUDA') { echo 'selected'; } ?>>ANTIGUA Y BARBUDA</option>
                                   <option value='ANTILLAS HOLANDESAS' <?php if ($usuario['pais']=='ANTILLAS HOLANDESAS') { echo 'selected'; } ?>>ANTILLAS HOLANDESAS</option>
                                   <option value='ARABIA SAUDI' <?php if ($usuario['pais']=='ARABIA SAUDI') { echo 'selected'; } ?>>ARABIA SAUDI</option>
                                   <option value='ARGELIA' <?php if ($usuario['pais']=='ARGELIA') { echo 'selected'; } ?>>ARGELIA</option>
                                   <option value='ARGENTINA' <?php if ($usuario['pais']=='ARGENTINA') { echo 'selected'; } ?>>ARGENTINA</option>
                                   <option value='ARMENIA' <?php if ($usuario['pais']=='ARMENIA') { echo 'selected'; } ?>>ARMENIA</option>
                                   <option value='ARUBA' <?php if ($usuario['pais']=='ARUBA') { echo 'selected'; } ?>>ARUBA</option>
                                   <option value='AUSTRALIA' <?php if ($usuario['pais']=='AUSTRALIA') { echo 'selected'; } ?>>AUSTRALIA</option>
                                   <option value='AUSTRIA' <?php if ($usuario['pais']=='AUSTRIA') { echo 'selected'; } ?>>AUSTRIA</option>
                                   <option value='AZERBAIYAN' <?php if ($usuario['pais']=='AZERBAIYAN') { echo 'selected'; } ?>>AZERBAIYAN</option>
                                   <option value='BAHAMAS' <?php if ($usuario['pais']=='BAHAMAS') { echo 'selected'; } ?>>BAHAMAS</option>
                                   <option value='BAHREIN' <?php if ($usuario['pais']=='BAHREIN') { echo 'selected'; } ?>>BAHREIN</option>
                                   <option value='BANGLADESH' <?php if ($usuario['pais']=='BANGLADESH') { echo 'selected'; } ?>>BANGLADESH</option>
                                   <option value='BARBADOS' <?php if ($usuario['pais']=='BARBADOS') { echo 'selected'; } ?>>BARBADOS</option>
                                   <option value='BELARUS' <?php if ($usuario['pais']=='BELARUS') { echo 'selected'; } ?>>BELARUS</option>
                                   <option value='BELGICA' <?php if ($usuario['pais']=='BELGICA') { echo 'selected'; } ?>>BELGICA</option>
                                   <option value='BELICE' <?php if ($usuario['pais']=='BELICE') { echo 'selected'; } ?>>BELICE</option>
                                   <option value='BENIN' <?php if ($usuario['pais']=='BENIN') { echo 'selected'; } ?>>BENIN</option>
                                   <option value='BERMUDAS' <?php if ($usuario['pais']=='BERMUDAS') { echo 'selected'; } ?>>BERMUDAS</option>
                                   <option value='BHUTÁN' <?php if ($usuario['pais']=='BHUTÁN') { echo 'selected'; } ?>>BHUTÁN</option>
                                   <option value='BOLIVIA' <?php if ($usuario['pais']=='BOLIVIA') { echo 'selected'; } ?>>BOLIVIA</option>
                                   <option value='BOSNIA Y HERZEGOVINA' <?php if ($usuario['pais']=='BOSNIA Y HERZEGOVINA') { echo 'selected'; } ?>>BOSNIA Y HERZEGOVINA</option>
                                   <option value='BOTSWANA' <?php if ($usuario['pais']=='BOTSWANA') { echo 'selected'; } ?>>BOTSWANA</option>
                                   <option value='BRASIL' <?php if ($usuario['pais']=='BRASIL') { echo 'selected'; } ?>>BRASIL</option>
                                   <option value='BRUNEI' <?php if ($usuario['pais']=='BRUNEI') { echo 'selected'; } ?>>BRUNEI</option>
                                   <option value='BULGARIA' <?php if ($usuario['pais']=='BULGARIA') { echo 'selected'; } ?>>BULGARIA</option>
                                   <option value='BURKINA FASO' <?php if ($usuario['pais']=='BURKINA FASO') { echo 'selected'; } ?>>BURKINA FASO</option>
                                   <option value='BURUNDI' <?php if ($usuario['pais']=='BURUNDI') { echo 'selected'; } ?>>BURUNDI</option>
                                   <option value='CABO VERDE' <?php if ($usuario['pais']=='CABO VERDE') { echo 'selected'; } ?>>CABO VERDE</option>
                                   <option value='CAMBOYA' <?php if ($usuario['pais']=='CAMBOYA') { echo 'selected'; } ?>>CAMBOYA</option>
                                   <option value='CAMERUN' <?php if ($usuario['pais']=='CAMERUN') { echo 'selected'; } ?>>CAMERUN</option>
                                   <option value='CANADA' <?php if ($usuario['pais']=='CANADA') { echo 'selected'; } ?>>CANADA</option>
                                   <option value='CHAD' <?php if ($usuario['pais']=='CHAD') { echo 'selected'; } ?>>CHAD</option>
                                   <option value='CHILE' <?php if ($usuario['pais']=='CHILE') { echo 'selected'; } ?>>CHILE</option>
                                   <option value='CHINA' <?php if ($usuario['pais']=='CHINA') { echo 'selected'; } ?>>CHINA</option>
                                   <option value='CHIPRE' <?php if ($usuario['pais']=='CHIPRE') { echo 'selected'; } ?>>CHIPRE</option>
                                   <option value='COLOMBIA' <?php if ($usuario['pais']=='COLOMBIA') { echo 'selected'; } ?>>COLOMBIA</option>
                                   <option value='COMORES' <?php if ($usuario['pais']=='COMORES') { echo 'selected'; } ?>>COMORES</option>
                                   <option value='CONGO' <?php if ($usuario['pais']=='CONGO') { echo 'selected'; } ?>>CONGO</option>
                                   <option value='COREA' <?php if ($usuario['pais']=='COREA') { echo 'selected'; } ?>>COREA</option>
                                   <option value='COREA DEL NORTE' <?php if ($usuario['pais']=='COREA DEL NORTE') { echo 'selected'; } ?>>COREA DEL NORTE </option>
                                   <option value='COSTA DE MARFIL' <?php if ($usuario['pais']=='COSTA DE MARFIL') { echo 'selected'; } ?>>COSTA DE MARFIL</option>
                                   <option value='COSTA RICA' <?php if ($usuario['pais']=='COSTA RICA') { echo 'selected'; } ?>>COSTA RICA</option>
                                   <option value='CROACIA' <?php if ($usuario['pais']=='CROACIA') { echo 'selected'; } ?>>CROACIA</option>
                                   <option value='CUBA' <?php if ($usuario['pais']=='CUBA') { echo 'selected'; } ?>>CUBA</option>
                                   <option value='DINAMARCA' <?php if ($usuario['pais']=='DINAMARCA') { echo 'selected'; } ?>>DINAMARCA</option>
                                   <option value='DJIBOUTI' <?php if ($usuario['pais']=='DJIBOUTI') { echo 'selected'; } ?>>DJIBOUTI</option>
                                   <option value='DOMINICA' <?php if ($usuario['pais']=='DOMINICA') { echo 'selected'; } ?>>DOMINICA</option>
                                   <option value='ECUADOR' <?php if ($usuario['pais']=='ECUADOR') { echo 'selected'; } ?>>ECUADOR</option>
                                   <option value='EGIPTO' <?php if ($usuario['pais']=='EGIPTO') { echo 'selected'; } ?>>EGIPTO</option>
                                   <option value='EL SALVADOR' <?php if ($usuario['pais']=='EL SALVADOR') { echo 'selected'; } ?>>EL SALVADOR</option>
                                   <option value='EMIRATOS ARABES UNIDOS' <?php if ($usuario['pais']=='EMIRATOS ARABES UNIDOS') { echo 'selected'; } ?>>EMIRATOS ARABES UNIDOS</option>
                                   <option value='ERITREA' <?php if ($usuario['pais']=='ERITREA') { echo 'selected'; } ?>>ERITREA</option>
                                   <option value='ESLOVENIA' <?php if ($usuario['pais']=='ESLOVENIA') { echo 'selected'; } ?>>ESLOVENIA</option>
                                   <option value='ESPAÑA' <?php if ($usuario['pais']=='ESPAÑA') { echo 'selected'; } ?>>ESPAÑA</option>
                                   <option value='ESTADOS UNIDOS DE AMERICA' <?php if ($usuario['pais']=='ESTADOS UNIDOS DE AMERICA') { echo 'selected'; } ?>>ESTADOS UNIDOS DE AMERICA</option>
                                   <option value='ESTONIA' <?php if ($usuario['pais']=='ESTONIA') { echo 'selected'; } ?>>ESTONIA</option>
                                   <option value='ETIOPIA' <?php if ($usuario['pais']=='ETIOPIA') { echo 'selected'; } ?>>ETIOPIA</option>
                                   <option value='FIJI' <?php if ($usuario['pais']=='FIJI') { echo 'selected'; } ?>>FIJI</option>
                                   <option value='FILIPINAS' <?php if ($usuario['pais']=='FILIPINAS') { echo 'selected'; } ?>>FILIPINAS</option>
                                   <option value='FINLANDIA' <?php if ($usuario['pais']=='FINLANDIA') { echo 'selected'; } ?>>FINLANDIA</option>
                                   <option value='FRANCIA' <?php if ($usuario['pais']=='FRANCIA') { echo 'selected'; } ?>>FRANCIA</option>
                                   <option value='GABON' <?php if ($usuario['pais']=='GABON') { echo 'selected'; } ?>>GABON</option>
                                   <option value='GAMBIA' <?php if ($usuario['pais']=='GAMBIA') { echo 'selected'; } ?>>GAMBIA</option>
                                   <option value='GEORGIA' <?php if ($usuario['pais']=='GEORGIA') { echo 'selected'; } ?>>GEORGIA</option>
                                   <option value='GHANA' <?php if ($usuario['pais']=='GHANA') { echo 'selected'; } ?>>GHANA</option>
                                   <option value='GIBRALTAR' <?php if ($usuario['pais']=='GIBRALTAR') { echo 'selected'; } ?>>GIBRALTAR</option>
                                   <option value='GRANADA' <?php if ($usuario['pais']=='GRANADA') { echo 'selected'; } ?>>GRANADA</option>
                                   <option value='GRECIA' <?php if ($usuario['pais']=='GRECIA') { echo 'selected'; } ?>>GRECIA</option>
                                   <option value='GROENLANDIA' <?php if ($usuario['pais']=='GROENLANDIA') { echo 'selected'; } ?>>GROENLANDIA</option>
                                   <option value='GUADALUPE' <?php if ($usuario['pais']=='GUADALUPE') { echo 'selected'; } ?>>GUADALUPE</option>
                                   <option value='GUAM' <?php if ($usuario['pais']=='GUAM') { echo 'selected'; } ?>>GUAM</option>
                                   <option value='GUATEMALA' <?php if ($usuario['pais']=='GUATEMALA') { echo 'selected'; } ?>>GUATEMALA</option>
                                   <option value='GUAYANA FRANCESA' <?php if ($usuario['pais']=='GUAYANA FRANCESA') { echo 'selected'; } ?>>GUAYANA FRANCESA</option>
                                   <option value='GUERNESEY' <?php if ($usuario['pais']=='GUERNESEY') { echo 'selected'; } ?>>GUERNESEY</option>
                                   <option value='GUINEA' <?php if ($usuario['pais']=='GUINEA') { echo 'selected'; } ?>>GUINEA</option>
                                   <option value='GUINEA ECUATORIAL' <?php if ($usuario['pais']=='GUINEA ECUATORIAL') { echo 'selected'; } ?>>GUINEA ECUATORIAL</option>
                                   <option value='GUINEA-BISSAU' <?php if ($usuario['pais']=='GUINEA-BISSAU') { echo 'selected'; } ?>>GUINEA-BISSAU</option>
                                   <option value='GUYANA' <?php if ($usuario['pais']=='GUYANA') { echo 'selected'; } ?>>GUYANA</option>
                                   <option value='HAITI' <?php if ($usuario['pais']=='HAITI') { echo 'selected'; } ?>>HAITI</option>
                                   <option value='HONDURAS' <?php if ($usuario['pais']=='HONDURAS') { echo 'selected'; } ?>>HONDURAS</option>
                                   <option value='HONG KONG' <?php if ($usuario['pais']=='HONG KONG') { echo 'selected'; } ?>>HONG KONG</option>
                                   <option value='HUNGRIA' <?php if ($usuario['pais']=='HUNGRIA') { echo 'selected'; } ?>>HUNGRIA</option>
                                   <option value='INDIA' <?php if ($usuario['pais']=='INDIA') { echo 'selected'; } ?>>INDIA</option>
                                   <option value='INDONESIA' <?php if ($usuario['pais']=='INDONESIA') { echo 'selected'; } ?>>INDONESIA</option>
                                   <option value='IRAN' <?php if ($usuario['pais']=='IRAN') { echo 'selected'; } ?>>IRAN</option>
                                   <option value='IRAQ' <?php if ($usuario['pais']=='IRAQ') { echo 'selected'; } ?>>IRAQ</option>
                                   <option value='IRLANDA' <?php if ($usuario['pais']=='IRLANDA') { echo 'selected'; } ?>>IRLANDA</option>
                                   <option value='ISLA DE MAN' <?php if ($usuario['pais']=='ISLA DE MAN') { echo 'selected'; } ?>>ISLA DE MAN</option>
                                   <option value='ISLA NORFOLK' <?php if ($usuario['pais']=='ISLA NORFOLK') { echo 'selected'; } ?>>ISLA NORFOLK</option>
                                   <option value='ISLANDIA' <?php if ($usuario['pais']=='ISLANDIA') { echo 'selected'; } ?>>ISLANDIA</option>
                                   <option value='ISLAS ALAND' <?php if ($usuario['pais']=='ISLAS ALAND') { echo 'selected'; } ?>>ISLAS ALAND</option>
                                   <option value='ISLAS CAIMÁN' <?php if ($usuario['pais']=='ISLAS CAIMÁN') { echo 'selected'; } ?>>ISLAS CAIMÁN</option>
                                   <option value='ISLAS COOK' <?php if ($usuario['pais']=='ISLAS COOK') { echo 'selected'; } ?>>ISLAS COOK</option>
                                   <option value='ISLAS DEL CANAL' <?php if ($usuario['pais']=='ISLAS DEL CANAL') { echo 'selected'; } ?>>ISLAS DEL CANAL</option>
                                   <option value='ISLAS FEROE' <?php if ($usuario['pais']=='ISLAS FEROE') { echo 'selected'; } ?>>ISLAS FEROE</option>
                                   <option value='ISLAS MALVINAS' <?php if ($usuario['pais']=='ISLAS MALVINAS') { echo 'selected'; } ?>>ISLAS MALVINAS</option>
                                   <option value='ISLAS MARIANAS DEL NORTE' <?php if ($usuario['pais']=='ISLAS MARIANAS DEL NORTE') { echo 'selected'; } ?>>ISLAS MARIANAS DEL NORTE</option>
                                   <option value='ISLAS MARSHALL' <?php if ($usuario['pais']=='ISLAS MARSHALL') { echo 'selected'; } ?>>ISLAS MARSHALL</option>
                                   <option value='ISLAS PITCAIRN' <?php if ($usuario['pais']=='ISLAS PITCAIRN') { echo 'selected'; } ?>>ISLAS PITCAIRN</option>
                                   <option value='ISLAS SALOMON' <?php if ($usuario['pais']=='ISLAS SALOMON') { echo 'selected'; } ?>>ISLAS SALOMON</option>
                                   <option value='ISLAS TURCAS Y CAICOS' <?php if ($usuario['pais']=='ISLAS TURCAS Y CAICOS') { echo 'selected'; } ?>>ISLAS TURCAS Y CAICOS</option>
                                   <option value='ISLAS VIRGENES BRITANICAS' <?php if ($usuario['pais']=='ISLAS VIRGENES BRITANICAS') { echo 'selected'; } ?>>ISLAS VIRGENES BRITANICAS</option>
                                   <option value='ISLAS VÍRGENES DE LOS ESTADOS UNIDOS' <?php if ($usuario['pais']=='ISLAS VÍRGENES DE LOS ESTADOS UNIDOS') { echo 'selected'; } ?>>ISLAS VÍRGENES DE LOS ESTADOS UNIDOS</option>
                                   <option value='ISRAEL' <?php if ($usuario['pais']=='ISRAEL') { echo 'selected'; } ?>>ISRAEL</option>
                                   <option value='ITALIA' <?php if ($usuario['pais']=='ITALIA') { echo 'selected'; } ?>>ITALIA</option>
                                   <option value='JAMAICA' <?php if ($usuario['pais']=='JAMAICA') { echo 'selected'; } ?>>JAMAICA</option>
                                   <option value='JAPON' <?php if ($usuario['pais']=='JAPON') { echo 'selected'; } ?>>JAPON</option>
                                   <option value='JERSEY' <?php if ($usuario['pais']=='JERSEY') { echo 'selected'; } ?>>JERSEY</option>
                                   <option value='JORDANIA' <?php if ($usuario['pais']=='JORDANIA') { echo 'selected'; } ?>>JORDANIA</option>
                                   <option value='KAZAJSTAN' <?php if ($usuario['pais']=='KAZAJSTAN') { echo 'selected'; } ?>>KAZAJSTAN</option>
                                   <option value='KENIA' <?php if ($usuario['pais']=='KENIA') { echo 'selected'; } ?>>KENIA</option>
                                   <option value='KIRGUISTAN' <?php if ($usuario['pais']=='KIRGUISTAN') { echo 'selected'; } ?>>KIRGUISTAN</option>
                                   <option value='KIRIBATI' <?php if ($usuario['pais']=='KIRIBATI') { echo 'selected'; } ?>>KIRIBATI</option>
                                   <option value='KUWAIT' <?php if ($usuario['pais']=='KUWAIT') { echo 'selected'; } ?>>KUWAIT</option>
                                   <option value='LAOS' <?php if ($usuario['pais']=='LAOS') { echo 'selected'; } ?>>LAOS</option>
                                   <option value='LESOTHO' <?php if ($usuario['pais']=='LESOTHO') { echo 'selected'; } ?>>LESOTHO</option>
                                   <option value='LETONIA' <?php if ($usuario['pais']=='LETONIA') { echo 'selected'; } ?>>LETONIA</option>
                                   <option value='LIBANO' <?php if ($usuario['pais']=='LIBANO') { echo 'selected'; } ?>>LIBANO</option>
                                   <option value='LIBERIA' <?php if ($usuario['pais']=='LIBERIA') { echo 'selected'; } ?>>LIBERIA</option>
                                   <option value='LIBIA' <?php if ($usuario['pais']=='LIBIA') { echo 'selected'; } ?>>LIBIA</option>
                                   <option value='LIECHTENSTEIN' <?php if ($usuario['pais']=='LIECHTENSTEIN') { echo 'selected'; } ?>>LIECHTENSTEIN</option>
                                   <option value='LITUANIA' <?php if ($usuario['pais']=='LITUANIA') { echo 'selected'; } ?>>LITUANIA</option>
                                   <option value='LUXEMBURGO' <?php if ($usuario['pais']=='LUXEMBURGO') { echo 'selected'; } ?>>LUXEMBURGO</option>
                                   <option value='MACAO' <?php if ($usuario['pais']=='MACAO') { echo 'selected'; } ?>>MACAO</option>
                                   <option value='MACEDONIA ' <?php if ($usuario['pais']=='MACEDONIA') { echo 'selected'; } ?>>MACEDONIA </option>
                                   <option value='MADAGASCAR' <?php if ($usuario['pais']=='MADAGASCAR') { echo 'selected'; } ?>>MADAGASCAR</option>
                                   <option value='MALASIA' <?php if ($usuario['pais']=='MALASIA') { echo 'selected'; } ?>>MALASIA</option>
                                   <option value='MALAWI' <?php if ($usuario['pais']=='MALAWI') { echo 'selected'; } ?>>MALAWI</option>
                                   <option value='MALDIVAS' <?php if ($usuario['pais']=='MALDIVAS') { echo 'selected'; } ?>>MALDIVAS</option>
                                   <option value='MALI' <?php if ($usuario['pais']=='MALI') { echo 'selected'; } ?>>MALI</option>
                                   <option value='MALTA' <?php if ($usuario['pais']=='MALTA') { echo 'selected'; } ?>>MALTA</option>
                                   <option value='MARRUECOS' <?php if ($usuario['pais']=='MARRUECOS') { echo 'selected'; } ?>>MARRUECOS</option>
                                   <option value='MARTINICA' <?php if ($usuario['pais']=='MARTINICA') { echo 'selected'; } ?>>MARTINICA</option>
                                   <option value='MAURICIO' <?php if ($usuario['pais']=='MAURICIO') { echo 'selected'; } ?>>MAURICIO</option>
                                   <option value='MAURITANIA' <?php if ($usuario['pais']=='MAURITANIA') { echo 'selected'; } ?>>MAURITANIA</option>
                                   <option value='MAYOTTE' <?php if ($usuario['pais']=='MAYOTTE') { echo 'selected'; } ?>>MAYOTTE</option>
                                   <option value='MEXICO' <?php if ($usuario['pais']=='MEXICO') { echo 'selected'; } ?>>MEXICO</option>
                                   <option value='MICRONESIA' <?php if ($usuario['pais']=='MICRONESIA') { echo 'selected'; } ?>>MICRONESIA</option>
                                   <option value='MOLDAVIA' <?php if ($usuario['pais']=='MOLDAVIA') { echo 'selected'; } ?>>MOLDAVIA</option>
                                   <option value='MONACO' <?php if ($usuario['pais']=='MONACO') { echo 'selected'; } ?>>MONACO</option>
                                   <option value='MONGOLIA' <?php if ($usuario['pais']=='MONGOLIA') { echo 'selected'; } ?>>MONGOLIA</option>
                                   <option value='MONTENEGRO' <?php if ($usuario['pais']=='MONTENEGRO') { echo 'selected'; } ?>>MONTENEGRO</option>
                                   <option value='MONTSERRAT' <?php if ($usuario['pais']=='MONTSERRAT') { echo 'selected'; } ?>>MONTSERRAT</option>
                                   <option value='MOZAMBIQUE' <?php if ($usuario['pais']=='MOZAMBIQUE') { echo 'selected'; } ?>>MOZAMBIQUE</option>
                                   <option value='MYANMAR' <?php if ($usuario['pais']=='MYANMAR') { echo 'selected'; } ?>>MYANMAR</option>
                                   <option value='NAMIBIA' <?php if ($usuario['pais']=='NAMIBIA') { echo 'selected'; } ?>>NAMIBIA</option>
                                   <option value='NAURU' <?php if ($usuario['pais']=='NAURU') { echo 'selected'; } ?>>NAURU</option>
                                   <option value='NEPAL' <?php if ($usuario['pais']=='NEPAL') { echo 'selected'; } ?>>NEPAL</option>
                                   <option value='NICARAGUA' <?php if ($usuario['pais']=='NICARAGUA') { echo 'selected'; } ?>>NICARAGUA</option>
                                   <option value='NIGER' <?php if ($usuario['pais']=='NIGER') { echo 'selected'; } ?>>NIGER</option>
                                   <option value='NIGERIA' <?php if ($usuario['pais']=='NIGERIA') { echo 'selected'; } ?>>NIGERIA</option>
                                   <option value='NIUE' <?php if ($usuario['pais']=='NIUE') { echo 'selected'; } ?>>NIUE</option>
                                   <option value='NORUEGA' <?php if ($usuario['pais']=='NORUEGA') { echo 'selected'; } ?>>NORUEGA</option>
                                   <option value='NUEVA CALEDONIA' <?php if ($usuario['pais']=='NUEVA CALEDONIA') { echo 'selected'; } ?>>NUEVA CALEDONIA</option>
                                   <option value='NUEVA ZELANDA' <?php if ($usuario['pais']=='NUEVA ZELANDA') { echo 'selected'; } ?>>NUEVA ZELANDA</option>
                                   <option value='OMAN' <?php if ($usuario['pais']=='OMAN') { echo 'selected'; } ?>>OMAN</option>
                                   <option value='OTROS PAISES  O TERRITORIOS DE AMERICA DEL NORTE' <?php if ($usuario['pais']=='OTROS PAISES  O TERRITORIOS DE AMERICA DEL NORTE') { echo 'selected'; } ?>>OTROS PAISES  O TERRITORIOS DE AMERICA DEL NORTE</option>
                                   <option value='OTROS PAISES O TERRITORIOS  DE SUDAMERICA' <?php if ($usuario['pais']=='OTROS PAISES O TERRITORIOS  DE SUDAMERICA') { echo 'selected'; } ?>>OTROS PAISES O TERRITORIOS  DE SUDAMERICA</option>
                                   <option value='OTROS PAISES O TERRITORIOS DE AFRICA' <?php if ($usuario['pais']=='OTROS PAISES O TERRITORIOS DE AFRICA') { echo 'selected'; } ?>>OTROS PAISES O TERRITORIOS DE AFRICA</option>
                                   <option value='OTROS PAISES O TERRITORIOS DE ASIA' <?php if ($usuario['pais']=='OTROS PAISES O TERRITORIOS DE ASIA') { echo 'selected'; } ?>>OTROS PAISES O TERRITORIOS DE ASIA</option>
                                   <option value='OTROS PAISES O TERRITORIOS DE LA UNION EUROPEA' <?php if ($usuario['pais']=='OTROS PAISES O TERRITORIOS DE LA UNION EUROPEA') { echo 'selected'; } ?>>OTROS PAISES O TERRITORIOS DE LA UNION EUROPEA</option>
                                   <option value='OTROS PAISES O TERRITORIOS DE OCEANIA' <?php if ($usuario['pais']=='OTROS PAISES O TERRITORIOS DE OCEANIA') { echo 'selected'; } ?>>OTROS PAISES O TERRITORIOS DE OCEANIA</option>
                                   <option value='OTROS PAISES O TERRITORIOS DEL CARIBE Y AMERICA CENTRAL' <?php if ($usuario['pais']=='OTROS PAISES O TERRITORIOS DEL CARIBE Y AMERICA CENTRAL') { echo 'selected'; } ?>>OTROS PAISES O TERRITORIOS DEL CARIBE Y AMERICA CENTRAL</option>
                                   <option value='OTROS PAISES O TERRITORIOS DEL RESTO DE EUROPA' <?php if ($usuario['pais']=='OTROS PAISES O TERRITORIOS DEL RESTO DE EUROPA') { echo 'selected'; } ?>>OTROS PAISES O TERRITORIOS DEL RESTO DE EUROPA</option>
                                   <option value='PAISES BAJOS' <?php if ($usuario['pais']=='PAISES BAJOS') { echo 'selected'; } ?>>PAISES BAJOS</option>
                                   <option value='PAKISTAN' <?php if ($usuario['pais']=='PAKISTAN') { echo 'selected'; } ?>>PAKISTAN</option>
                                   <option value='PALAOS' <?php if ($usuario['pais']=='PALAOS') { echo 'selected'; } ?>>PALAOS</option>
                                   <option value='PALESTINA' <?php if ($usuario['pais']=='PALESTINA') { echo 'selected'; } ?>>PALESTINA</option>
                                   <option value='PANAMA' <?php if ($usuario['pais']=='PANAMA') { echo 'selected'; } ?>>PANAMA</option>
                                   <option value='PAPUA NUEVA GUINEA' <?php if ($usuario['pais']=='PAPUA NUEVA GUINEA') { echo 'selected'; } ?>>PAPUA NUEVA GUINEA</option>
                                   <option value='PARAGUAY' <?php if ($usuario['pais']=='PARAGUAY') { echo 'selected'; } ?>>PARAGUAY</option>
                                   <option value='PERU' <?php if ($usuario['pais']=='PERU') { echo 'selected'; } ?>>PERU</option>
                                   <option value='POLINESIA FRANCESA' <?php if ($usuario['pais']=='POLINESIA FRANCESA') { echo 'selected'; } ?>>POLINESIA FRANCESA</option>
                                   <option value='POLONIA' <?php if ($usuario['pais']=='POLONIA') { echo 'selected'; } ?>>POLONIA</option>
                                   <option value='PORTUGAL' <?php if ($usuario['pais']=='PORTUGAL') { echo 'selected'; } ?>>PORTUGAL</option>
                                   <option value='PUERTO RICO' <?php if ($usuario['pais']=='PUERTO RICO') { echo 'selected'; } ?>>PUERTO RICO</option>
                                   <option value='QATAR' <?php if ($usuario['pais']=='QATAR') { echo 'selected'; } ?>>QATAR</option>
                                   <option value='REINO UNIDO' <?php if ($usuario['pais']=='REINO UNIDO') { echo 'selected'; } ?>>REINO UNIDO</option>
                                   <option value='REP.DEMOCRATICA DEL CONGO' <?php if ($usuario['pais']=='REP.DEMOCRATICA DEL CONGO') { echo 'selected'; } ?>>REP.DEMOCRATICA DEL CONGO</option>
                                   <option value='REPUBLICA CENTROAFRICANA' <?php if ($usuario['pais']=='REPUBLICA CENTROAFRICANA') { echo 'selected'; } ?>>REPUBLICA CENTROAFRICANA</option>
                                   <option value='REPUBLICA CHECA' <?php if ($usuario['pais']=='REPUBLICA CHECA') { echo 'selected'; } ?>>REPUBLICA CHECA</option>
                                   <option value='REPUBLICA DOMINICANA' <?php if ($usuario['pais']=='REPUBLICA DOMINICANA') { echo 'selected'; } ?>>REPUBLICA DOMINICANA</option>
                                   <option value='REPUBLICA ESLOVACA' <?php if ($usuario['pais']=='REPUBLICA ESLOVACA') { echo 'selected'; } ?>>REPUBLICA ESLOVACA</option>
                                   <option value='REUNION' <?php if ($usuario['pais']=='REUNION') { echo 'selected'; } ?>>REUNION</option>
                                   <option value='RUANDA' <?php if ($usuario['pais']=='RUANDA') { echo 'selected'; } ?>>RUANDA</option>
                                   <option value='RUMANIA' <?php if ($usuario['pais']=='RUMANIA') { echo 'selected'; } ?>>RUMANIA</option>
                                   <option value='RUSIA' <?php if ($usuario['pais']=='RUSIA') { echo 'selected'; } ?>>RUSIA</option>
                                   <option value='SAHARA OCCIDENTAL' <?php if ($usuario['pais']=='SAHARA OCCIDENTAL') { echo 'selected'; } ?>>SAHARA OCCIDENTAL</option>
                                   <option value='SAMOA' <?php if ($usuario['pais']=='SAMOA') { echo 'selected'; } ?>>SAMOA</option>
                                   <option value='SAMOA AMERICANA' <?php if ($usuario['pais']=='SAMOA AMERICANA') { echo 'selected'; } ?>>SAMOA AMERICANA</option>
                                   <option value='SAN BARTOLOME' <?php if ($usuario['pais']=='SAN BARTOLOME') { echo 'selected'; } ?>>SAN BARTOLOME</option>
                                   <option value='SAN CRISTOBAL Y NIEVES' <?php if ($usuario['pais']=='SAN CRISTOBAL Y NIEVES') { echo 'selected'; } ?>>SAN CRISTOBAL Y NIEVES</option>
                                   <option value='SAN MARINO' <?php if ($usuario['pais']=='SAN MARINO') { echo 'selected'; } ?>>SAN MARINO</option>
                                   <option value='SAN MARTIN (PARTE FRANCESA)' <?php if ($usuario['pais']=='SAN MARTIN (PARTE FRANCESA)') { echo 'selected'; } ?>>SAN MARTIN (PARTE FRANCESA)</option>
                                   <option value='SAN PEDRO Y MIQUELON' <?php if ($usuario['pais']=='SAN PEDRO Y MIQUELON') { echo 'selected'; } ?>>SAN PEDRO Y MIQUELON </option>
                                   <option value='SAN VICENTE Y LAS GRANADINAS' <?php if ($usuario['pais']=='SAN VICENTE Y LAS GRANADINAS') { echo 'selected'; } ?>>SAN VICENTE Y LAS GRANADINAS</option>
                                   <option value='SANTA HELENA' <?php if ($usuario['pais']=='SANTA HELENA') { echo 'selected'; } ?>>SANTA HELENA</option>
                                   <option value='SANTA LUCIA' <?php if ($usuario['pais']=='SANTA LUCIA') { echo 'selected'; } ?>>SANTA LUCIA</option>
                                   <option value='SANTA SEDE' <?php if ($usuario['pais']=='SANTA SEDE') { echo 'selected'; } ?>>SANTA SEDE</option>
                                   <option value='SANTO TOME Y PRINCIPE' <?php if ($usuario['pais']=='SANTO TOME Y PRINCIPE') { echo 'selected'; } ?>>SANTO TOME Y PRINCIPE</option>
                                   <option value='SENEGAL' <?php if ($usuario['pais']=='SENEGAL') { echo 'selected'; } ?>>SENEGAL</option>
                                   <option value='SERBIA' <?php if ($usuario['pais']=='SERBIA') { echo 'selected'; } ?>>SERBIA</option>
                                   <option value='SEYCHELLES' <?php if ($usuario['pais']=='SEYCHELLES') { echo 'selected'; } ?>>SEYCHELLES</option>
                                   <option value='SIERRA LEONA' <?php if ($usuario['pais']=='SIERRA LEONA') { echo 'selected'; } ?>>SIERRA LEONA</option>
                                   <option value='SINGAPUR' <?php if ($usuario['pais']=='SINGAPUR') { echo 'selected'; } ?>>SINGAPUR</option>
                                   <option value='SIRIA' <?php if ($usuario['pais']=='SIRIA') { echo 'selected'; } ?>>SIRIA</option>
                                   <option value='SOMALIA' <?php if ($usuario['pais']=='SOMALIA') { echo 'selected'; } ?>>SOMALIA</option>
                                   <option value='SRI LANKA' <?php if ($usuario['pais']=='SRI LANKA') { echo 'selected'; } ?>>SRI LANKA</option>
                                   <option value='SUDAFRICA' <?php if ($usuario['pais']=='SUDAFRICA') { echo 'selected'; } ?>>SUDAFRICA</option>
                                   <option value='SUDAN' <?php if ($usuario['pais']=='SUDAN') { echo 'selected'; } ?>>SUDAN</option>
                                   <option value='SUECIA' <?php if ($usuario['pais']=='SUECIA') { echo 'selected'; } ?>>SUECIA</option>
                                   <option value='SUIZA' <?php if ($usuario['pais']=='SUIZA') { echo 'selected'; } ?>>SUIZA</option>
                                   <option value='SURINAM' <?php if ($usuario['pais']=='SURINAM') { echo 'selected'; } ?>>SURINAM</option>
                                   <option value='SVALBARD Y JAN MAYEN' <?php if ($usuario['pais']=='SVALBARD Y JAN MAYEN') { echo 'selected'; } ?>>SVALBARD Y JAN MAYEN</option>
                                   <option value='SWAZILANDIA' <?php if ($usuario['pais']=='SWAZILANDIA') { echo 'selected'; } ?>>SWAZILANDIA</option>
                                   <option value='TADYIKISTAN' <?php if ($usuario['pais']=='TADYIKISTAN') { echo 'selected'; } ?>>TADYIKISTAN</option>
                                   <option value='TAILANDIA' <?php if ($usuario['pais']=='TAILANDIA') { echo 'selected'; } ?>>TAILANDIA</option>
                                   <option value='TANZANIA' <?php if ($usuario['pais']=='TANZANIA') { echo 'selected'; } ?>>TANZANIA</option>
                                   <option value='TIMOR ORIENTAL' <?php if ($usuario['pais']=='TIMOR ORIENTAL') { echo 'selected'; } ?>>TIMOR ORIENTAL</option>
                                   <option value='TOGO' <?php if ($usuario['pais']=='TOGO') { echo 'selected'; } ?>>TOGO</option>
                                   <option value='TOKELAU' <?php if ($usuario['pais']=='TOKELAU') { echo 'selected'; } ?>>TOKELAU</option>
                                   <option value='TONGA' <?php if ($usuario['pais']=='TONGA') { echo 'selected'; } ?>>TONGA</option>
                                   <option value='TRINIDAD Y TOBAGO' <?php if ($usuario['pais']=='TRINIDAD Y TOBAGO') { echo 'selected'; } ?>>TRINIDAD Y TOBAGO</option>
                                   <option value='TUNEZ' <?php if ($usuario['pais']=='TUNEZ') { echo 'selected'; } ?>>TUNEZ</option>
                                   <option value='TURKMENISTAN' <?php if ($usuario['pais']=='TURKMENISTAN') { echo 'selected'; } ?>>TURKMENISTAN</option>
                                   <option value='TURQUIA' <?php if ($usuario['pais']=='TURQUIA') { echo 'selected'; } ?>>TURQUIA</option>
                                   <option value='TUVALU' <?php if ($usuario['pais']=='TUVALU') { echo 'selected'; } ?>>TUVALU</option>
                                   <option value='UCRANIA' <?php if ($usuario['pais']=='UCRANIA') { echo 'selected'; } ?>>UCRANIA</option>
                                   <option value='UGANDA' <?php if ($usuario['pais']=='UGANDA') { echo 'selected'; } ?>>UGANDA</option>
                                   <option value='URUGUAY' <?php if ($usuario['pais']=='URUGUAY') { echo 'selected'; } ?>>URUGUAY</option>
                                   <option value='UZBEKISTAN' <?php if ($usuario['pais']=='UZBEKISTAN') { echo 'selected'; } ?>>UZBEKISTAN</option>
                                   <option value='VANUATU' <?php if ($usuario['pais']=='VANUATU') { echo 'selected'; } ?>>VANUATU</option>
                                   <option value='VENEZUELA' <?php if ($usuario['pais']=='VENEZUELA') { echo 'selected'; } ?>>VENEZUELA</option>
                                   <option value='VIETNAM' <?php if ($usuario['pais']=='VIETNAM') { echo 'selected'; } ?>>VIETNAM</option>
                                   <option value='WALLIS Y FORTUNA' <?php if ($usuario['pais']=='WALLIS Y FORTUNA') { echo 'selected'; } ?>>WALLIS Y FORTUNA</option>
                                   <option value='YEMEN' <?php if ($usuario['pais']=='YEMEN') { echo 'selected'; } ?>>YEMEN</option>
                                   <option value='ZAMBIA' <?php if ($usuario['pais']=='ZAMBIA') { echo 'selected'; } ?>>ZAMBIA</option>
                                   <option value='ZIMBABWE' <?php if ($usuario['pais']=='ZIMBABWE') { echo 'selected'; } ?>>ZIMBABWE</option>

                              </select>
                         
                         </td>
                    </tr>
				<tr>
					<td>Ciudad</td>
					<td>
                              <select name="ciudadco" id="ciudadco" class="form-control" <?php if ($_SESSION["pais"]!='COLOMBIA') {
                                   echo 'style="display:none;"';
                              } ?> required>
                                   <option value='ABEJORRAL' <?php if ($usuario['ciudad']=='ABEJORRAL') { echo 'selected'; } ?>>ABEJORRAL</option>
                                   <option value='ABREGO' <?php if ($usuario['ciudad']=='ABREGO') { echo 'selected'; } ?>>ABREGO</option>
                                   <option value='ABRIAQUI' <?php if ($usuario['ciudad']=='ABRIAQUI') { echo 'selected'; } ?>>ABRIAQUI</option>
                                   <option value='ACACIAS' <?php if ($usuario['ciudad']=='ACACIAS') { echo 'selected'; } ?>>ACACIAS</option>
                                   <option value='ACANDI' <?php if ($usuario['ciudad']=='ACANDI') { echo 'selected'; } ?>>ACANDI</option>
                                   <option value='ACEVEDO' <?php if ($usuario['ciudad']=='ACEVEDO') { echo 'selected'; } ?>>ACEVEDO</option>
                                   <option value='ACHI' <?php if ($usuario['ciudad']=='ACHI') { echo 'selected'; } ?>>ACHI</option>
                                   <option value='AGRADO' <?php if ($usuario['ciudad']=='AGRADO') { echo 'selected'; } ?>>AGRADO</option>
                                   <option value='AGUA DE DIOS' <?php if ($usuario['ciudad']=='AGUA DE DIOS') { echo 'selected'; } ?>>AGUA DE DIOS</option>
                                   <option value='AGUACHICA' <?php if ($usuario['ciudad']=='AGUACHICA') { echo 'selected'; } ?>>AGUACHICA</option>
                                   <option value='AGUADA' <?php if ($usuario['ciudad']=='AGUADA') { echo 'selected'; } ?>>AGUADA</option>
                                   <option value='AGUADAS' <?php if ($usuario['ciudad']=='AGUADAS') { echo 'selected'; } ?>>AGUADAS</option>
                                   <option value='AGUAZUL' <?php if ($usuario['ciudad']=='AGUAZUL') { echo 'selected'; } ?>>AGUAZUL</option>
                                   <option value='AGUSTIN CODAZZI' <?php if ($usuario['ciudad']=='AGUSTIN CODAZZI') { echo 'selected'; } ?>>AGUSTIN CODAZZI</option>
                                   <option value='AIPE' <?php if ($usuario['ciudad']=='AIPE') { echo 'selected'; } ?>>AIPE</option>
                                   <option value='ALBAN' <?php if ($usuario['ciudad']=='ALBAN') { echo 'selected'; } ?>>ALBAN</option>
                                   <option value='ALBAN' <?php if ($usuario['ciudad']=='ALBAN') { echo 'selected'; } ?>>ALBAN</option>
                                   <option value='ALBANIA' <?php if ($usuario['ciudad']=='ALBANIA') { echo 'selected'; } ?>>ALBANIA</option>
                                   <option value='ALBANIA' <?php if ($usuario['ciudad']=='ALBANIA') { echo 'selected'; } ?>>ALBANIA</option>
                                   <option value='ALBANIA' <?php if ($usuario['ciudad']=='ALBANIA') { echo 'selected'; } ?>>ALBANIA</option>
                                   <option value='ALCALA' <?php if ($usuario['ciudad']=='ALCALA') { echo 'selected'; } ?>>ALCALA</option>
                                   <option value='ALDANA' <?php if ($usuario['ciudad']=='ALDANA') { echo 'selected'; } ?>>ALDANA</option>
                                   <option value='ALEJANDRIA' <?php if ($usuario['ciudad']=='ALEJANDRIA') { echo 'selected'; } ?>>ALEJANDRIA</option>
                                   <option value='ALGARROBO' <?php if ($usuario['ciudad']=='ALGARROBO') { echo 'selected'; } ?>>ALGARROBO</option>
                                   <option value='ALGECIRAS' <?php if ($usuario['ciudad']=='ALGECIRAS') { echo 'selected'; } ?>>ALGECIRAS</option>
                                   <option value='ALMAGUER' <?php if ($usuario['ciudad']=='ALMAGUER') { echo 'selected'; } ?>>ALMAGUER</option>
                                   <option value='ALMEIDA' <?php if ($usuario['ciudad']=='ALMEIDA') { echo 'selected'; } ?>>ALMEIDA</option>
                                   <option value='ALPUJARRA' <?php if ($usuario['ciudad']=='ALPUJARRA') { echo 'selected'; } ?>>ALPUJARRA</option>
                                   <option value='ALTAMIRA' <?php if ($usuario['ciudad']=='ALTAMIRA') { echo 'selected'; } ?>>ALTAMIRA</option>
                                   <option value='ALTO BAUDO' <?php if ($usuario['ciudad']=='ALTO BAUDO') { echo 'selected'; } ?>>ALTO BAUDO</option>
                                   <option value='ALTOS DEL ROSARIO' <?php if ($usuario['ciudad']=='ALTOS DEL ROSARIO') { echo 'selected'; } ?>>ALTOS DEL ROSARIO</option>
                                   <option value='ALVARADO' <?php if ($usuario['ciudad']=='ALVARADO') { echo 'selected'; } ?>>ALVARADO</option>
                                   <option value='AMAGA' <?php if ($usuario['ciudad']=='AMAGA') { echo 'selected'; } ?>>AMAGA</option>
                                   <option value='AMALFI' <?php if ($usuario['ciudad']=='AMALFI') { echo 'selected'; } ?>>AMALFI</option>
                                   <option value='AMBALEMA' <?php if ($usuario['ciudad']=='AMBALEMA') { echo 'selected'; } ?>>AMBALEMA</option>
                                   <option value='ANAPOIMA' <?php if ($usuario['ciudad']=='ANAPOIMA') { echo 'selected'; } ?>>ANAPOIMA</option>
                                   <option value='ANCUYA' <?php if ($usuario['ciudad']=='ANCUYA') { echo 'selected'; } ?>>ANCUYA</option>
                                   <option value='ANDALUCIA' <?php if ($usuario['ciudad']=='ANDALUCIA') { echo 'selected'; } ?>>ANDALUCIA</option>
                                   <option value='ANDES' <?php if ($usuario['ciudad']=='ANDES') { echo 'selected'; } ?>>ANDES</option>
                                   <option value='ANGELOPOLIS' <?php if ($usuario['ciudad']=='ANGELOPOLIS') { echo 'selected'; } ?>>ANGELOPOLIS</option>
                                   <option value='ANGOSTURA' <?php if ($usuario['ciudad']=='ANGOSTURA') { echo 'selected'; } ?>>ANGOSTURA</option>
                                   <option value='ANOLAIMA' <?php if ($usuario['ciudad']=='ANOLAIMA') { echo 'selected'; } ?>>ANOLAIMA</option>
                                   <option value='ANORI' <?php if ($usuario['ciudad']=='ANORI') { echo 'selected'; } ?>>ANORI</option>
                                   <option value='ANSERMA' <?php if ($usuario['ciudad']=='ANSERMA') { echo 'selected'; } ?>>ANSERMA</option>
                                   <option value='ANSERMANUEVO' <?php if ($usuario['ciudad']=='ANSERMANUEVO') { echo 'selected'; } ?>>ANSERMANUEVO</option>
                                   <option value='ANZA' <?php if ($usuario['ciudad']=='ANZA') { echo 'selected'; } ?>>ANZA</option>
                                   <option value='ANZOATEGUI' <?php if ($usuario['ciudad']=='ANZOATEGUI') { echo 'selected'; } ?>>ANZOATEGUI</option>
                                   <option value='APARTADO' <?php if ($usuario['ciudad']=='APARTADO') { echo 'selected'; } ?>>APARTADO</option>
                                   <option value='APIA' <?php if ($usuario['ciudad']=='APIA') { echo 'selected'; } ?>>APIA</option>
                                   <option value='APULO' <?php if ($usuario['ciudad']=='APULO') { echo 'selected'; } ?>>APULO</option>
                                   <option value='AQUITANIA' <?php if ($usuario['ciudad']=='AQUITANIA') { echo 'selected'; } ?>>AQUITANIA</option>
                                   <option value='ARACATACA' <?php if ($usuario['ciudad']=='ARACATACA') { echo 'selected'; } ?>>ARACATACA</option>
                                   <option value='ARANZAZU' <?php if ($usuario['ciudad']=='ARANZAZU') { echo 'selected'; } ?>>ARANZAZU</option>
                                   <option value='ARATOCA' <?php if ($usuario['ciudad']=='ARATOCA') { echo 'selected'; } ?>>ARATOCA</option>
                                   <option value='ARAUCA' <?php if ($usuario['ciudad']=='ARAUCA') { echo 'selected'; } ?>>ARAUCA</option>
                                   <option value='ARAUQUITA' <?php if ($usuario['ciudad']=='ARAUQUITA') { echo 'selected'; } ?>>ARAUQUITA</option>
                                   <option value='ARBELAEZ' <?php if ($usuario['ciudad']=='ARBELAEZ') { echo 'selected'; } ?>>ARBELAEZ</option>
                                   <option value='ARBOLEDA' <?php if ($usuario['ciudad']=='ARBOLEDA') { echo 'selected'; } ?>>ARBOLEDA</option>
                                   <option value='ARBOLEDAS' <?php if ($usuario['ciudad']=='ARBOLEDAS') { echo 'selected'; } ?>>ARBOLEDAS</option>
                                   <option value='ARBOLETES' <?php if ($usuario['ciudad']=='ARBOLETES') { echo 'selected'; } ?>>ARBOLETES</option>
                                   <option value='ARCABUCO' <?php if ($usuario['ciudad']=='ARCABUCO') { echo 'selected'; } ?>>ARCABUCO</option>
                                   <option value='ARENAL' <?php if ($usuario['ciudad']=='ARENAL') { echo 'selected'; } ?>>ARENAL</option>
                                   <option value='ARGELIA' <?php if ($usuario['ciudad']=='ARGELIA') { echo 'selected'; } ?>>ARGELIA</option>
                                   <option value='ARGELIA' <?php if ($usuario['ciudad']=='ARGELIA') { echo 'selected'; } ?>>ARGELIA</option>
                                   <option value='ARGELIA' <?php if ($usuario['ciudad']=='ARGELIA') { echo 'selected'; } ?>>ARGELIA</option>
                                   <option value='ARIGUANI' <?php if ($usuario['ciudad']=='ARIGUANI') { echo 'selected'; } ?>>ARIGUANI</option>
                                   <option value='ARJONA' <?php if ($usuario['ciudad']=='ARJONA') { echo 'selected'; } ?>>ARJONA</option>
                                   <option value='ARMENIA' <?php if ($usuario['ciudad']=='ARMENIA') { echo 'selected'; } ?>>ARMENIA</option>
                                   <option value='ARMENIA' <?php if ($usuario['ciudad']=='ARMENIA') { echo 'selected'; } ?>>ARMENIA</option>
                                   <option value='ARMERO' <?php if ($usuario['ciudad']=='ARMERO') { echo 'selected'; } ?>>ARMERO</option>
                                   <option value='ARROYOHONDO' <?php if ($usuario['ciudad']=='ARROYOHONDO') { echo 'selected'; } ?>>ARROYOHONDO</option>
                                   <option value='ASTREA' <?php if ($usuario['ciudad']=='ASTREA') { echo 'selected'; } ?>>ASTREA</option>
                                   <option value='ATACO' <?php if ($usuario['ciudad']=='ATACO') { echo 'selected'; } ?>>ATACO</option>
                                   <option value='ATRATO' <?php if ($usuario['ciudad']=='ATRATO') { echo 'selected'; } ?>>ATRATO</option>
                                   <option value='AYAPEL' <?php if ($usuario['ciudad']=='AYAPEL') { echo 'selected'; } ?>>AYAPEL</option>
                                   <option value='BAGADO' <?php if ($usuario['ciudad']=='BAGADO') { echo 'selected'; } ?>>BAGADO</option>
                                   <option value='BAHIA SOLANO' <?php if ($usuario['ciudad']=='BAHIA SOLANO') { echo 'selected'; } ?>>BAHIA SOLANO</option>
                                   <option value='BAJO BAUDO' <?php if ($usuario['ciudad']=='BAJO BAUDO') { echo 'selected'; } ?>>BAJO BAUDO</option>
                                   <option value='BALBOA' <?php if ($usuario['ciudad']=='BALBOA') { echo 'selected'; } ?>>BALBOA</option>
                                   <option value='BALBOA' <?php if ($usuario['ciudad']=='BALBOA') { echo 'selected'; } ?>>BALBOA</option>
                                   <option value='BARANOA' <?php if ($usuario['ciudad']=='BARANOA') { echo 'selected'; } ?>>BARANOA</option>
                                   <option value='BARAYA' <?php if ($usuario['ciudad']=='BARAYA') { echo 'selected'; } ?>>BARAYA</option>
                                   <option value='BARBACOAS' <?php if ($usuario['ciudad']=='BARBACOAS') { echo 'selected'; } ?>>BARBACOAS</option>
                                   <option value='BARBOSA' <?php if ($usuario['ciudad']=='BARBOSA') { echo 'selected'; } ?>>BARBOSA</option>
                                   <option value='BARBOSA' <?php if ($usuario['ciudad']=='BARBOSA') { echo 'selected'; } ?>>BARBOSA</option>
                                   <option value='BARICHARA' <?php if ($usuario['ciudad']=='BARICHARA') { echo 'selected'; } ?>>BARICHARA</option>
                                   <option value='BARRANCA DE UPIA' <?php if ($usuario['ciudad']=='BARRANCA DE UPIA') { echo 'selected'; } ?>>BARRANCA DE UPIA</option>
                                   <option value='BARRANCABERMEJA' <?php if ($usuario['ciudad']=='BARRANCABERMEJA') { echo 'selected'; } ?>>BARRANCABERMEJA</option>
                                   <option value='BARRANCAS' <?php if ($usuario['ciudad']=='BARRANCAS') { echo 'selected'; } ?>>BARRANCAS</option>
                                   <option value='BARRANCO DE LOBA' <?php if ($usuario['ciudad']=='BARRANCO DE LOBA') { echo 'selected'; } ?>>BARRANCO DE LOBA</option>
                                   <option value='BARRANCO MINAS' <?php if ($usuario['ciudad']=='BARRANCO MINAS') { echo 'selected'; } ?>>BARRANCO MINAS</option>
                                   <option value='BARRANQUILLA' <?php if ($usuario['ciudad']=='BARRANQUILLA') { echo 'selected'; } ?>>BARRANQUILLA</option>
                                   <option value='BECERRIL' <?php if ($usuario['ciudad']=='BECERRIL') { echo 'selected'; } ?>>BECERRIL</option>
                                   <option value='BELALCAZAR' <?php if ($usuario['ciudad']=='BELALCAZAR') { echo 'selected'; } ?>>BELALCAZAR</option>
                                   <option value='BELEN' <?php if ($usuario['ciudad']=='BELEN') { echo 'selected'; } ?>>BELEN</option>
                                   <option value='BELEN' <?php if ($usuario['ciudad']=='BELEN') { echo 'selected'; } ?>>BELEN</option>
                                   <option value='BELEN DE LOS ANDAQUIES' <?php if ($usuario['ciudad']=='BELEN DE LOS ANDAQUIES') { echo 'selected'; } ?>>BELEN DE LOS ANDAQUIES</option>
                                   <option value='BELEN DE UMBRIA' <?php if ($usuario['ciudad']=='BELEN DE UMBRIA') { echo 'selected'; } ?>>BELEN DE UMBRIA</option>
                                   <option value='BELLO' <?php if ($usuario['ciudad']=='BELLO') { echo 'selected'; } ?>>BELLO</option>
                                   <option value='BELMIRA' <?php if ($usuario['ciudad']=='BELMIRA') { echo 'selected'; } ?>>BELMIRA</option>
                                   <option value='BELTRAN' <?php if ($usuario['ciudad']=='BELTRAN') { echo 'selected'; } ?>>BELTRAN</option>
                                   <option value='BERBEO' <?php if ($usuario['ciudad']=='BERBEO') { echo 'selected'; } ?>>BERBEO</option>
                                   <option value='BETANIA' <?php if ($usuario['ciudad']=='BETANIA') { echo 'selected'; } ?>>BETANIA</option>
                                   <option value='BETEITIVA' <?php if ($usuario['ciudad']=='BETEITIVA') { echo 'selected'; } ?>>BETEITIVA</option>
                                   <option value='BETULIA' <?php if ($usuario['ciudad']=='BETULIA') { echo 'selected'; } ?>>BETULIA</option>
                                   <option value='BETULIA' <?php if ($usuario['ciudad']=='BETULIA') { echo 'selected'; } ?>>BETULIA</option>
                                   <option value='BITUIMA' <?php if ($usuario['ciudad']=='BITUIMA') { echo 'selected'; } ?>>BITUIMA</option>
                                   <option value='BOAVITA' <?php if ($usuario['ciudad']=='BOAVITA') { echo 'selected'; } ?>>BOAVITA</option>
                                   <option value='BOCHALEMA' <?php if ($usuario['ciudad']=='BOCHALEMA') { echo 'selected'; } ?>>BOCHALEMA</option>
                                   <option value='BOGOTA' <?php if ($usuario['ciudad']=='BOGOTA') { echo 'selected'; } ?>>BOGOTA, D.C.</option>
                                   <option value='BOJACA' <?php if ($usuario['ciudad']=='BOJACA') { echo 'selected'; } ?>>BOJACA</option>
                                   <option value='BOJAYA' <?php if ($usuario['ciudad']=='BOJAYA') { echo 'selected'; } ?>>BOJAYA</option>
                                   <option value='BOLIVAR' <?php if ($usuario['ciudad']=='BOLIVAR') { echo 'selected'; } ?>>BOLIVAR</option>
                                   <option value='BOLIVAR' <?php if ($usuario['ciudad']=='BOLIVAR') { echo 'selected'; } ?>>BOLIVAR</option>
                                   <option value='BOLIVAR' <?php if ($usuario['ciudad']=='BOLIVAR') { echo 'selected'; } ?>>BOLIVAR</option>
                                   <option value='BOSCONIA' <?php if ($usuario['ciudad']=='BOSCONIA') { echo 'selected'; } ?>>BOSCONIA</option>
                                   <option value='BOYACA' <?php if ($usuario['ciudad']=='BOYACA') { echo 'selected'; } ?>>BOYACA</option>
                                   <option value='BRICEÑO' <?php if ($usuario['ciudad']=='BRICEÑO') { echo 'selected'; } ?>>BRICEÑO</option>
                                   <option value='BRICEÑO' <?php if ($usuario['ciudad']=='BRICEÑO') { echo 'selected'; } ?>>BRICEÑO</option>
                                   <option value='BUCARAMANGA' <?php if ($usuario['ciudad']=='BUCARAMANGA') { echo 'selected'; } ?>>BUCARAMANGA</option>
                                   <option value='BUCARASICA' <?php if ($usuario['ciudad']=='BUCARASICA') { echo 'selected'; } ?>>BUCARASICA</option>
                                   <option value='BUENAVENTURA' <?php if ($usuario['ciudad']=='BUENAVENTURA') { echo 'selected'; } ?>>BUENAVENTURA</option>
                                   <option value='BUENAVISTA' <?php if ($usuario['ciudad']=='BUENAVISTA') { echo 'selected'; } ?>>BUENAVISTA</option>
                                   <option value='BUENAVISTA' <?php if ($usuario['ciudad']=='BUENAVISTA') { echo 'selected'; } ?>>BUENAVISTA</option>
                                   <option value='BUENAVISTA' <?php if ($usuario['ciudad']=='BUENAVISTA') { echo 'selected'; } ?>>BUENAVISTA</option>
                                   <option value='BUENAVISTA' <?php if ($usuario['ciudad']=='BUENAVISTA') { echo 'selected'; } ?>>BUENAVISTA</option>
                                   <option value='BUENOS AIRES' <?php if ($usuario['ciudad']=='BUENOS AIRES') { echo 'selected'; } ?>>BUENOS AIRES</option>
                                   <option value='BUESACO' <?php if ($usuario['ciudad']=='BUESACO') { echo 'selected'; } ?>>BUESACO</option>
                                   <option value='BUGALAGRANDE' <?php if ($usuario['ciudad']=='BUGALAGRANDE') { echo 'selected'; } ?>>BUGALAGRANDE</option>
                                   <option value='BURITICA' <?php if ($usuario['ciudad']=='BURITICA') { echo 'selected'; } ?>>BURITICA</option>
                                   <option value='BUSBANZA' <?php if ($usuario['ciudad']=='BUSBANZA') { echo 'selected'; } ?>>BUSBANZA</option>
                                   <option value='CABRERA' <?php if ($usuario['ciudad']=='CABRERA') { echo 'selected'; } ?>>CABRERA</option>
                                   <option value='CABRERA' <?php if ($usuario['ciudad']=='CABRERA') { echo 'selected'; } ?>>CABRERA</option>
                                   <option value='CABUYARO' <?php if ($usuario['ciudad']=='CABUYARO') { echo 'selected'; } ?>>CABUYARO</option>
                                   <option value='CACAHUAL' <?php if ($usuario['ciudad']=='CACAHUAL') { echo 'selected'; } ?>>CACAHUAL</option>
                                   <option value='CACERES' <?php if ($usuario['ciudad']=='CACERES') { echo 'selected'; } ?>>CACERES</option>
                                   <option value='CACHIPAY' <?php if ($usuario['ciudad']=='CACHIPAY') { echo 'selected'; } ?>>CACHIPAY</option>
                                   <option value='CACHIRA' <?php if ($usuario['ciudad']=='CACHIRA') { echo 'selected'; } ?>>CACHIRA</option>
                                   <option value='CACOTA' <?php if ($usuario['ciudad']=='CACOTA') { echo 'selected'; } ?>>CACOTA</option>
                                   <option value='CAICEDO' <?php if ($usuario['ciudad']=='CAICEDO') { echo 'selected'; } ?>>CAICEDO</option>
                                   <option value='CAICEDONIA' <?php if ($usuario['ciudad']=='CAICEDONIA') { echo 'selected'; } ?>>CAICEDONIA</option>
                                   <option value='CAIMITO' <?php if ($usuario['ciudad']=='CAIMITO') { echo 'selected'; } ?>>CAIMITO</option>
                                   <option value='CAJAMARCA' <?php if ($usuario['ciudad']=='CAJAMARCA') { echo 'selected'; } ?>>CAJAMARCA</option>
                                   <option value='CAJIBIO' <?php if ($usuario['ciudad']=='CAJIBIO') { echo 'selected'; } ?>>CAJIBIO</option>
                                   <option value='CAJICA' <?php if ($usuario['ciudad']=='CAJICA') { echo 'selected'; } ?>>CAJICA</option>
                                   <option value='CALAMAR' <?php if ($usuario['ciudad']=='CALAMAR') { echo 'selected'; } ?>>CALAMAR</option>
                                   <option value='CALAMAR' <?php if ($usuario['ciudad']=='CALAMAR') { echo 'selected'; } ?>>CALAMAR</option>
                                   <option value='CALARCA' <?php if ($usuario['ciudad']=='CALARCA') { echo 'selected'; } ?>>CALARCA</option>
                                   <option value='CALDAS' <?php if ($usuario['ciudad']=='CALDAS') { echo 'selected'; } ?>>CALDAS</option>
                                   <option value='CALDAS' <?php if ($usuario['ciudad']=='CALDAS') { echo 'selected'; } ?>>CALDAS</option>
                                   <option value='CALDONO' <?php if ($usuario['ciudad']=='CALDONO') { echo 'selected'; } ?>>CALDONO</option>
                                   <option value='CALI' <?php if ($usuario['ciudad']=='CALI') { echo 'selected'; } ?>>CALI</option>
                                   <option value='CALIFORNIA' <?php if ($usuario['ciudad']=='CALIFORNIA') { echo 'selected'; } ?>>CALIFORNIA</option>
                                   <option value='CALIMA' <?php if ($usuario['ciudad']=='CALIMA') { echo 'selected'; } ?>>CALIMA</option>
                                   <option value='CALOTO' <?php if ($usuario['ciudad']=='CALOTO') { echo 'selected'; } ?>>CALOTO</option>
                                   <option value='CAMPAMENTO' <?php if ($usuario['ciudad']=='CAMPAMENTO') { echo 'selected'; } ?>>CAMPAMENTO</option>
                                   <option value='CAMPO DE LA CRUZ' <?php if ($usuario['ciudad']=='CAMPO DE LA CRUZ') { echo 'selected'; } ?>>CAMPO DE LA CRUZ</option>
                                   <option value='CAMPOALEGRE' <?php if ($usuario['ciudad']=='CAMPOALEGRE') { echo 'selected'; } ?>>CAMPOALEGRE</option>
                                   <option value='CAMPOHERMOSO' <?php if ($usuario['ciudad']=='CAMPOHERMOSO') { echo 'selected'; } ?>>CAMPOHERMOSO</option>
                                   <option value='CANALETE' <?php if ($usuario['ciudad']=='CANALETE') { echo 'selected'; } ?>>CANALETE</option>
                                   <option value='CANDELARIA' <?php if ($usuario['ciudad']=='CANDELARIA') { echo 'selected'; } ?>>CANDELARIA</option>
                                   <option value='CANDELARIA' <?php if ($usuario['ciudad']=='CANDELARIA') { echo 'selected'; } ?>>CANDELARIA</option>
                                   <option value='CANTAGALLO' <?php if ($usuario['ciudad']=='CANTAGALLO') { echo 'selected'; } ?>>CANTAGALLO</option>
                                   <option value='CAÑASGORDAS' <?php if ($usuario['ciudad']=='CAÑASGORDAS') { echo 'selected'; } ?>>CAÑASGORDAS</option>
                                   <option value='CAPARRAPI' <?php if ($usuario['ciudad']=='CAPARRAPI') { echo 'selected'; } ?>>CAPARRAPI</option>
                                   <option value='CAPITANEJO' <?php if ($usuario['ciudad']=='CAPITANEJO') { echo 'selected'; } ?>>CAPITANEJO</option>
                                   <option value='CAQUEZA' <?php if ($usuario['ciudad']=='CAQUEZA') { echo 'selected'; } ?>>CAQUEZA</option>
                                   <option value='CARACOLI' <?php if ($usuario['ciudad']=='CARACOLI') { echo 'selected'; } ?>>CARACOLI</option>
                                   <option value='CARAMANTA' <?php if ($usuario['ciudad']=='CARAMANTA') { echo 'selected'; } ?>>CARAMANTA</option>
                                   <option value='CARCASI' <?php if ($usuario['ciudad']=='CARCASI') { echo 'selected'; } ?>>CARCASI</option>
                                   <option value='CAREPA' <?php if ($usuario['ciudad']=='CAREPA') { echo 'selected'; } ?>>CAREPA</option>
                                   <option value='CARMEN DE APICALA' <?php if ($usuario['ciudad']=='CARMEN DE APICALA') { echo 'selected'; } ?>>CARMEN DE APICALA</option>
                                   <option value='CARMEN DE CARUPA' <?php if ($usuario['ciudad']=='CARMEN DE CARUPA') { echo 'selected'; } ?>>CARMEN DE CARUPA</option>
                                   <option value='CARMEN DEL DARIEN' <?php if ($usuario['ciudad']=='CARMEN DEL DARIEN') { echo 'selected'; } ?>>CARMEN DEL DARIEN</option>
                                   <option value='CAROLINA' <?php if ($usuario['ciudad']=='CAROLINA') { echo 'selected'; } ?>>CAROLINA</option>
                                   <option value='CARTAGENA' <?php if ($usuario['ciudad']=='CARTAGENA') { echo 'selected'; } ?>>CARTAGENA</option>
                                   <option value='CARTAGENA DEL CHAIRA' <?php if ($usuario['ciudad']=='CARTAGENA DEL CHAIRA') { echo 'selected'; } ?>>CARTAGENA DEL CHAIRA</option>
                                   <option value='CARTAGO' <?php if ($usuario['ciudad']=='CARTAGO') { echo 'selected'; } ?>>CARTAGO</option>
                                   <option value='CARURU' <?php if ($usuario['ciudad']=='CARURU') { echo 'selected'; } ?>>CARURU</option>
                                   <option value='CASABIANCA' <?php if ($usuario['ciudad']=='CASABIANCA') { echo 'selected'; } ?>>CASABIANCA</option>
                                   <option value='CASTILLA LA NUEVA' <?php if ($usuario['ciudad']=='CASTILLA LA NUEVA') { echo 'selected'; } ?>>CASTILLA LA NUEVA</option>
                                   <option value='CAUCASIA' <?php if ($usuario['ciudad']=='CAUCASIA') { echo 'selected'; } ?>>CAUCASIA</option>
                                   <option value='CEPITA' <?php if ($usuario['ciudad']=='CEPITA') { echo 'selected'; } ?>>CEPITA</option>
                                   <option value='CERETE' <?php if ($usuario['ciudad']=='CERETE') { echo 'selected'; } ?>>CERETE</option>
                                   <option value='CERINZA' <?php if ($usuario['ciudad']=='CERINZA') { echo 'selected'; } ?>>CERINZA</option>
                                   <option value='CERRITO' <?php if ($usuario['ciudad']=='CERRITO') { echo 'selected'; } ?>>CERRITO</option>
                                   <option value='CERRO SAN ANTONIO' <?php if ($usuario['ciudad']=='CERRO SAN ANTONIO') { echo 'selected'; } ?>>CERRO SAN ANTONIO</option>
                                   <option value='CERTEGUI' <?php if ($usuario['ciudad']=='CERTEGUI') { echo 'selected'; } ?>>CERTEGUI</option>
                                   <option value='CHACHAGsI' <?php if ($usuario['ciudad']=='CHACHAGsI') { echo 'selected'; } ?>>CHACHAGsI</option>
                                   <option value='CHAGUANI' <?php if ($usuario['ciudad']=='CHAGUANI') { echo 'selected'; } ?>>CHAGUANI</option>
                                   <option value='CHALAN' <?php if ($usuario['ciudad']=='CHALAN') { echo 'selected'; } ?>>CHALAN</option>
                                   <option value='CHAMEZA' <?php if ($usuario['ciudad']=='CHAMEZA') { echo 'selected'; } ?>>CHAMEZA</option>
                                   <option value='CHAPARRAL' <?php if ($usuario['ciudad']=='CHAPARRAL') { echo 'selected'; } ?>>CHAPARRAL</option>
                                   <option value='CHARALA' <?php if ($usuario['ciudad']=='CHARALA') { echo 'selected'; } ?>>CHARALA</option>
                                   <option value='CHARTA' <?php if ($usuario['ciudad']=='CHARTA') { echo 'selected'; } ?>>CHARTA</option>
                                   <option value='CHIA' <?php if ($usuario['ciudad']=='CHIA') { echo 'selected'; } ?>>CHIA</option>
                                   <option value='CHIBOLO' <?php if ($usuario['ciudad']=='CHIBOLO') { echo 'selected'; } ?>>CHIBOLO</option>
                                   <option value='CHIGORODO' <?php if ($usuario['ciudad']=='CHIGORODO') { echo 'selected'; } ?>>CHIGORODO</option>
                                   <option value='CHIMA' <?php if ($usuario['ciudad']=='CHIMA') { echo 'selected'; } ?>>CHIMA</option>
                                   <option value='CHIMA' <?php if ($usuario['ciudad']=='CHIMA') { echo 'selected'; } ?>>CHIMA</option>
                                   <option value='CHIMICHAGUA' <?php if ($usuario['ciudad']=='CHIMICHAGUA') { echo 'selected'; } ?>>CHIMICHAGUA</option>
                                   <option value='CHINACOTA' <?php if ($usuario['ciudad']=='CHINACOTA') { echo 'selected'; } ?>>CHINACOTA</option>
                                   <option value='CHINAVITA' <?php if ($usuario['ciudad']=='CHINAVITA') { echo 'selected'; } ?>>CHINAVITA</option>
                                   <option value='CHINCHINA' <?php if ($usuario['ciudad']=='CHINCHINA') { echo 'selected'; } ?>>CHINCHINA</option>
                                   <option value='CHINU' <?php if ($usuario['ciudad']=='CHINU') { echo 'selected'; } ?>>CHINU</option>
                                   <option value='CHIPAQUE' <?php if ($usuario['ciudad']=='CHIPAQUE') { echo 'selected'; } ?>>CHIPAQUE</option>
                                   <option value='CHIPATA' <?php if ($usuario['ciudad']=='CHIPATA') { echo 'selected'; } ?>>CHIPATA</option>
                                   <option value='CHIQUINQUIRA' <?php if ($usuario['ciudad']=='CHIQUINQUIRA') { echo 'selected'; } ?>>CHIQUINQUIRA</option>
                                   <option value='CHIQUIZA' <?php if ($usuario['ciudad']=='CHIQUIZA') { echo 'selected'; } ?>>CHIQUIZA</option>
                                   <option value='CHIRIGUANA' <?php if ($usuario['ciudad']=='CHIRIGUANA') { echo 'selected'; } ?>>CHIRIGUANA</option>
                                   <option value='CHISCAS' <?php if ($usuario['ciudad']=='CHISCAS') { echo 'selected'; } ?>>CHISCAS</option>
                                   <option value='CHITA' <?php if ($usuario['ciudad']=='CHITA') { echo 'selected'; } ?>>CHITA</option>
                                   <option value='CHITAGA' <?php if ($usuario['ciudad']=='CHITAGA') { echo 'selected'; } ?>>CHITAGA</option>
                                   <option value='CHITARAQUE' <?php if ($usuario['ciudad']=='CHITARAQUE') { echo 'selected'; } ?>>CHITARAQUE</option>
                                   <option value='CHIVATA' <?php if ($usuario['ciudad']=='CHIVATA') { echo 'selected'; } ?>>CHIVATA</option>
                                   <option value='CHIVOR' <?php if ($usuario['ciudad']=='CHIVOR') { echo 'selected'; } ?>>CHIVOR</option>
                                   <option value='CHOACHI' <?php if ($usuario['ciudad']=='CHOACHI') { echo 'selected'; } ?>>CHOACHI</option>
                                   <option value='CHOCONTA' <?php if ($usuario['ciudad']=='CHOCONTA') { echo 'selected'; } ?>>CHOCONTA</option>
                                   <option value='CICUCO' <?php if ($usuario['ciudad']=='CICUCO') { echo 'selected'; } ?>>CICUCO</option>
                                   <option value='CIENAGA' <?php if ($usuario['ciudad']=='CIENAGA') { echo 'selected'; } ?>>CIENAGA</option>
                                   <option value='CIENAGA DE ORO' <?php if ($usuario['ciudad']=='CIENAGA DE ORO') { echo 'selected'; } ?>>CIENAGA DE ORO</option>
                                   <option value='CIENEGA' <?php if ($usuario['ciudad']=='CIENEGA') { echo 'selected'; } ?>>CIENEGA</option>
                                   <option value='CIMITARRA' <?php if ($usuario['ciudad']=='CIMITARRA') { echo 'selected'; } ?>>CIMITARRA</option>
                                   <option value='CIRCASIA' <?php if ($usuario['ciudad']=='CIRCASIA') { echo 'selected'; } ?>>CIRCASIA</option>
                                   <option value='CISNEROS' <?php if ($usuario['ciudad']=='CISNEROS') { echo 'selected'; } ?>>CISNEROS</option>
                                   <option value='CIUDAD BOLIVAR' <?php if ($usuario['ciudad']=='CIUDAD BOLIVAR') { echo 'selected'; } ?>>CIUDAD BOLIVAR</option>
                                   <option value='CLEMENCIA' <?php if ($usuario['ciudad']=='CLEMENCIA') { echo 'selected'; } ?>>CLEMENCIA</option>
                                   <option value='COCORNA' <?php if ($usuario['ciudad']=='COCORNA') { echo 'selected'; } ?>>COCORNA</option>
                                   <option value='COELLO' <?php if ($usuario['ciudad']=='COELLO') { echo 'selected'; } ?>>COELLO</option>
                                   <option value='COGUA' <?php if ($usuario['ciudad']=='COGUA') { echo 'selected'; } ?>>COGUA</option>
                                   <option value='COLOMBIA' <?php if ($usuario['ciudad']=='COLOMBIA') { echo 'selected'; } ?>>COLOMBIA</option>
                                   <option value='COLON' <?php if ($usuario['ciudad']=='COLON') { echo 'selected'; } ?>>COLON</option>
                                   <option value='COLON' <?php if ($usuario['ciudad']=='COLON') { echo 'selected'; } ?>>COLON</option>
                                   <option value='COLOSO' <?php if ($usuario['ciudad']=='COLOSO') { echo 'selected'; } ?>>COLOSO</option>
                                   <option value='COMBITA' <?php if ($usuario['ciudad']=='COMBITA') { echo 'selected'; } ?>>COMBITA</option>
                                   <option value='CONCEPCION' <?php if ($usuario['ciudad']=='CONCEPCION') { echo 'selected'; } ?>>CONCEPCION</option>
                                   <option value='CONCEPCION' <?php if ($usuario['ciudad']=='CONCEPCION') { echo 'selected'; } ?>>CONCEPCION</option>
                                   <option value='CONCORDIA' <?php if ($usuario['ciudad']=='CONCORDIA') { echo 'selected'; } ?>>CONCORDIA</option>
                                   <option value='CONCORDIA' <?php if ($usuario['ciudad']=='CONCORDIA') { echo 'selected'; } ?>>CONCORDIA</option>
                                   <option value='CONDOTO' <?php if ($usuario['ciudad']=='CONDOTO') { echo 'selected'; } ?>>CONDOTO</option>
                                   <option value='CONFINES' <?php if ($usuario['ciudad']=='CONFINES') { echo 'selected'; } ?>>CONFINES</option>
                                   <option value='CONSACA' <?php if ($usuario['ciudad']=='CONSACA') { echo 'selected'; } ?>>CONSACA</option>
                                   <option value='CONTADERO' <?php if ($usuario['ciudad']=='CONTADERO') { echo 'selected'; } ?>>CONTADERO</option>
                                   <option value='CONTRATACION' <?php if ($usuario['ciudad']=='CONTRATACION') { echo 'selected'; } ?>>CONTRATACION</option>
                                   <option value='CONVENCION' <?php if ($usuario['ciudad']=='CONVENCION') { echo 'selected'; } ?>>CONVENCION</option>
                                   <option value='COPACABANA' <?php if ($usuario['ciudad']=='COPACABANA') { echo 'selected'; } ?>>COPACABANA</option>
                                   <option value='COPER' <?php if ($usuario['ciudad']=='COPER') { echo 'selected'; } ?>>COPER</option>
                                   <option value='CORDOBA' <?php if ($usuario['ciudad']=='CORDOBA') { echo 'selected'; } ?>>CORDOBA</option>
                                   <option value='CORDOBA' <?php if ($usuario['ciudad']=='CORDOBA') { echo 'selected'; } ?>>CORDOBA</option>
                                   <option value='CORDOBA' <?php if ($usuario['ciudad']=='CORDOBA') { echo 'selected'; } ?>>CORDOBA</option>
                                   <option value='CORINTO' <?php if ($usuario['ciudad']=='CORINTO') { echo 'selected'; } ?>>CORINTO</option>
                                   <option value='COROMORO' <?php if ($usuario['ciudad']=='COROMORO') { echo 'selected'; } ?>>COROMORO</option>
                                   <option value='COROZAL' <?php if ($usuario['ciudad']=='COROZAL') { echo 'selected'; } ?>>COROZAL</option>
                                   <option value='CORRALES' <?php if ($usuario['ciudad']=='CORRALES') { echo 'selected'; } ?>>CORRALES</option>
                                   <option value='COTA' <?php if ($usuario['ciudad']=='COTA') { echo 'selected'; } ?>>COTA</option>
                                   <option value='COTORRA' <?php if ($usuario['ciudad']=='COTORRA') { echo 'selected'; } ?>>COTORRA</option>
                                   <option value='COVARACHIA' <?php if ($usuario['ciudad']=='COVARACHIA') { echo 'selected'; } ?>>COVARACHIA</option>
                                   <option value='COVEÑAS' <?php if ($usuario['ciudad']=='COVEÑAS') { echo 'selected'; } ?>>COVEÑAS</option>
                                   <option value='COYAIMA' <?php if ($usuario['ciudad']=='COYAIMA') { echo 'selected'; } ?>>COYAIMA</option>
                                   <option value='CRAVO NORTE' <?php if ($usuario['ciudad']=='CRAVO NORTE') { echo 'selected'; } ?>>CRAVO NORTE</option>
                                   <option value='CUASPUD' <?php if ($usuario['ciudad']=='CUASPUD') { echo 'selected'; } ?>>CUASPUD</option>
                                   <option value='CUBARA' <?php if ($usuario['ciudad']=='CUBARA') { echo 'selected'; } ?>>CUBARA</option>
                                   <option value='CUBARRAL' <?php if ($usuario['ciudad']=='CUBARRAL') { echo 'selected'; } ?>>CUBARRAL</option>
                                   <option value='CUCAITA' <?php if ($usuario['ciudad']=='CUCAITA') { echo 'selected'; } ?>>CUCAITA</option>
                                   <option value='CUCUNUBA' <?php if ($usuario['ciudad']=='CUCUNUBA') { echo 'selected'; } ?>>CUCUNUBA</option>
                                   <option value='CUCUTA' <?php if ($usuario['ciudad']=='CUCUTA') { echo 'selected'; } ?>>CUCUTA</option>
                                   <option value='CUCUTILLA' <?php if ($usuario['ciudad']=='CUCUTILLA') { echo 'selected'; } ?>>CUCUTILLA</option>
                                   <option value='CUITIVA' <?php if ($usuario['ciudad']=='CUITIVA') { echo 'selected'; } ?>>CUITIVA</option>
                                   <option value='CUMARAL' <?php if ($usuario['ciudad']=='CUMARAL') { echo 'selected'; } ?>>CUMARAL</option>
                                   <option value='CUMARIBO' <?php if ($usuario['ciudad']=='CUMARIBO') { echo 'selected'; } ?>>CUMARIBO</option>
                                   <option value='CUMBAL' <?php if ($usuario['ciudad']=='CUMBAL') { echo 'selected'; } ?>>CUMBAL</option>
                                   <option value='CUMBITARA' <?php if ($usuario['ciudad']=='CUMBITARA') { echo 'selected'; } ?>>CUMBITARA</option>
                                   <option value='CUNDAY' <?php if ($usuario['ciudad']=='CUNDAY') { echo 'selected'; } ?>>CUNDAY</option>
                                   <option value='CURILLO' <?php if ($usuario['ciudad']=='CURILLO') { echo 'selected'; } ?>>CURILLO</option>
                                   <option value='CURITI' <?php if ($usuario['ciudad']=='CURITI') { echo 'selected'; } ?>>CURITI</option>
                                   <option value='CURUMANI' <?php if ($usuario['ciudad']=='CURUMANI') { echo 'selected'; } ?>>CURUMANI</option>
                                   <option value='DABEIBA' <?php if ($usuario['ciudad']=='DABEIBA') { echo 'selected'; } ?>>DABEIBA</option>
                                   <option value='DAGUA' <?php if ($usuario['ciudad']=='DAGUA') { echo 'selected'; } ?>>DAGUA</option>
                                   <option value='DIBULLA' <?php if ($usuario['ciudad']=='DIBULLA') { echo 'selected'; } ?>>DIBULLA</option>
                                   <option value='DISTRACCION' <?php if ($usuario['ciudad']=='DISTRACCION') { echo 'selected'; } ?>>DISTRACCION</option>
                                   <option value='DOLORES' <?php if ($usuario['ciudad']=='DOLORES') { echo 'selected'; } ?>>DOLORES</option>
                                   <option value='DON MATIAS' <?php if ($usuario['ciudad']=='DON MATIAS') { echo 'selected'; } ?>>DON MATIAS</option>
                                   <option value='DOSQUEBRADAS' <?php if ($usuario['ciudad']=='DOSQUEBRADAS') { echo 'selected'; } ?>>DOSQUEBRADAS</option>
                                   <option value='DUITAMA' <?php if ($usuario['ciudad']=='DUITAMA') { echo 'selected'; } ?>>DUITAMA</option>
                                   <option value='DURANIA' <?php if ($usuario['ciudad']=='DURANIA') { echo 'selected'; } ?>>DURANIA</option>
                                   <option value='EBEJICO' <?php if ($usuario['ciudad']=='EBEJICO') { echo 'selected'; } ?>>EBEJICO</option>
                                   <option value='EL AGUILA' <?php if ($usuario['ciudad']=='EL AGUILA') { echo 'selected'; } ?>>EL AGUILA</option>
                                   <option value='EL BAGRE' <?php if ($usuario['ciudad']=='EL BAGRE') { echo 'selected'; } ?>>EL BAGRE</option>
                                   <option value='EL BANCO' <?php if ($usuario['ciudad']=='EL BANCO') { echo 'selected'; } ?>>EL BANCO</option>
                                   <option value='EL CAIRO' <?php if ($usuario['ciudad']=='EL CAIRO') { echo 'selected'; } ?>>EL CAIRO</option>
                                   <option value='EL CALVARIO' <?php if ($usuario['ciudad']=='EL CALVARIO') { echo 'selected'; } ?>>EL CALVARIO</option>
                                   <option value='EL CANTON DEL SAN PABLO' <?php if ($usuario['ciudad']=='EL CANTON DEL SAN PABLO') { echo 'selected'; } ?>>EL CANTON DEL SAN PABLO</option>
                                   <option value='EL CARMEN' <?php if ($usuario['ciudad']=='EL CARMEN') { echo 'selected'; } ?>>EL CARMEN</option>
                                   <option value='EL CARMEN DE ATRATO' <?php if ($usuario['ciudad']=='EL CARMEN DE ATRATO') { echo 'selected'; } ?>>EL CARMEN DE ATRATO</option>
                                   <option value='EL CARMEN DE BOLIVAR' <?php if ($usuario['ciudad']=='EL CARMEN DE BOLIVAR') { echo 'selected'; } ?>>EL CARMEN DE BOLIVAR</option>
                                   <option value='EL CARMEN DE CHUCURI' <?php if ($usuario['ciudad']=='EL CARMEN DE CHUCURI') { echo 'selected'; } ?>>EL CARMEN DE CHUCURI</option>
                                   <option value='EL CARMEN DE VIBORAL' <?php if ($usuario['ciudad']=='EL CARMEN DE VIBORAL') { echo 'selected'; } ?>>EL CARMEN DE VIBORAL</option>
                                   <option value='EL CASTILLO' <?php if ($usuario['ciudad']=='EL CASTILLO') { echo 'selected'; } ?>>EL CASTILLO</option>
                                   <option value='EL CERRITO' <?php if ($usuario['ciudad']=='EL CERRITO') { echo 'selected'; } ?>>EL CERRITO</option>
                                   <option value='EL CHARCO' <?php if ($usuario['ciudad']=='EL CHARCO') { echo 'selected'; } ?>>EL CHARCO</option>
                                   <option value='EL COCUY' <?php if ($usuario['ciudad']=='EL COCUY') { echo 'selected'; } ?>>EL COCUY</option>
                                   <option value='EL COLEGIO' <?php if ($usuario['ciudad']=='EL COLEGIO') { echo 'selected'; } ?>>EL COLEGIO</option>
                                   <option value='EL COPEY' <?php if ($usuario['ciudad']=='EL COPEY') { echo 'selected'; } ?>>EL COPEY</option>
                                   <option value='EL DONCELLO' <?php if ($usuario['ciudad']=='EL DONCELLO') { echo 'selected'; } ?>>EL DONCELLO</option>
                                   <option value='EL DORADO' <?php if ($usuario['ciudad']=='EL DORADO') { echo 'selected'; } ?>>EL DORADO</option>
                                   <option value='EL DOVIO' <?php if ($usuario['ciudad']=='EL DOVIO') { echo 'selected'; } ?>>EL DOVIO</option>
                                   <option value='EL ENCANTO' <?php if ($usuario['ciudad']=='EL ENCANTO') { echo 'selected'; } ?>>EL ENCANTO</option>
                                   <option value='EL ESPINO' <?php if ($usuario['ciudad']=='EL ESPINO') { echo 'selected'; } ?>>EL ESPINO</option>
                                   <option value='EL GUACAMAYO' <?php if ($usuario['ciudad']=='EL GUACAMAYO') { echo 'selected'; } ?>>EL GUACAMAYO</option>
                                   <option value='EL GUAMO' <?php if ($usuario['ciudad']=='EL GUAMO') { echo 'selected'; } ?>>EL GUAMO</option>
                                   <option value='EL LITORAL DEL SAN JUAN' <?php if ($usuario['ciudad']=='EL LITORAL DEL SAN JUAN') { echo 'selected'; } ?>>EL LITORAL DEL SAN JUAN</option>
                                   <option value='EL MOLINO' <?php if ($usuario['ciudad']=='EL MOLINO') { echo 'selected'; } ?>>EL MOLINO</option>
                                   <option value='EL PASO' <?php if ($usuario['ciudad']=='EL PASO') { echo 'selected'; } ?>>EL PASO</option>
                                   <option value='EL PAUJIL' <?php if ($usuario['ciudad']=='EL PAUJIL') { echo 'selected'; } ?>>EL PAUJIL</option>
                                   <option value='EL PEÑOL' <?php if ($usuario['ciudad']=='EL PEÑOL') { echo 'selected'; } ?>>EL PEÑOL</option>
                                   <option value='EL PEÑON' <?php if ($usuario['ciudad']=='EL PEÑON') { echo 'selected'; } ?>>EL PEÑON</option>
                                   <option value='EL PEÑON' <?php if ($usuario['ciudad']=='EL PEÑON') { echo 'selected'; } ?>>EL PEÑON</option>
                                   <option value='EL PEÑON' <?php if ($usuario['ciudad']=='EL PEÑON') { echo 'selected'; } ?>>EL PEÑON</option>
                                   <option value='EL PIÑON' <?php if ($usuario['ciudad']=='EL PIÑON') { echo 'selected'; } ?>>EL PIÑON</option>
                                   <option value='EL PLAYON' <?php if ($usuario['ciudad']=='EL PLAYON') { echo 'selected'; } ?>>EL PLAYON</option>
                                   <option value='EL RETEN' <?php if ($usuario['ciudad']=='EL RETEN') { echo 'selected'; } ?>>EL RETEN</option>
                                   <option value='EL RETORNO' <?php if ($usuario['ciudad']=='EL RETORNO') { echo 'selected'; } ?>>EL RETORNO</option>
                                   <option value='EL ROBLE' <?php if ($usuario['ciudad']=='EL ROBLE') { echo 'selected'; } ?>>EL ROBLE</option>
                                   <option value='EL ROSAL' <?php if ($usuario['ciudad']=='EL ROSAL') { echo 'selected'; } ?>>EL ROSAL</option>
                                   <option value='EL ROSARIO' <?php if ($usuario['ciudad']=='EL ROSARIO') { echo 'selected'; } ?>>EL ROSARIO</option>
                                   <option value='EL SANTUARIO' <?php if ($usuario['ciudad']=='EL SANTUARIO') { echo 'selected'; } ?>>EL SANTUARIO</option>
                                   <option value='EL TABLON DE GOMEZ' <?php if ($usuario['ciudad']=='EL TABLON DE GOMEZ') { echo 'selected'; } ?>>EL TABLON DE GOMEZ</option>
                                   <option value='EL TAMBO' <?php if ($usuario['ciudad']=='EL TAMBO') { echo 'selected'; } ?>>EL TAMBO</option>
                                   <option value='EL TAMBO' <?php if ($usuario['ciudad']=='EL TAMBO') { echo 'selected'; } ?>>EL TAMBO</option>
                                   <option value='EL TARRA' <?php if ($usuario['ciudad']=='EL TARRA') { echo 'selected'; } ?>>EL TARRA</option>
                                   <option value='EL ZULIA' <?php if ($usuario['ciudad']=='EL ZULIA') { echo 'selected'; } ?>>EL ZULIA</option>
                                   <option value='ELIAS' <?php if ($usuario['ciudad']=='ELIAS') { echo 'selected'; } ?>>ELIAS</option>
                                   <option value='ENCINO' <?php if ($usuario['ciudad']=='ENCINO') { echo 'selected'; } ?>>ENCINO</option>
                                   <option value='ENCISO' <?php if ($usuario['ciudad']=='ENCISO') { echo 'selected'; } ?>>ENCISO</option>
                                   <option value='ENTRERRIOS' <?php if ($usuario['ciudad']=='ENTRERRIOS') { echo 'selected'; } ?>>ENTRERRIOS</option>
                                   <option value='ENVIGADO' <?php if ($usuario['ciudad']=='ENVIGADO') { echo 'selected'; } ?>>ENVIGADO</option>
                                   <option value='ESPINAL' <?php if ($usuario['ciudad']=='ESPINAL') { echo 'selected'; } ?>>ESPINAL</option>
                                   <option value='FACATATIVA' <?php if ($usuario['ciudad']=='FACATATIVA') { echo 'selected'; } ?>>FACATATIVA</option>
                                   <option value='FALAN' <?php if ($usuario['ciudad']=='FALAN') { echo 'selected'; } ?>>FALAN</option>
                                   <option value='FILADELFIA' <?php if ($usuario['ciudad']=='FILADELFIA') { echo 'selected'; } ?>>FILADELFIA</option>
                                   <option value='FILANDIA' <?php if ($usuario['ciudad']=='FILANDIA') { echo 'selected'; } ?>>FILANDIA</option>
                                   <option value='FIRAVITOBA' <?php if ($usuario['ciudad']=='FIRAVITOBA') { echo 'selected'; } ?>>FIRAVITOBA</option>
                                   <option value='FLANDES' <?php if ($usuario['ciudad']=='FLANDES') { echo 'selected'; } ?>>FLANDES</option>
                                   <option value='FLORENCIA' <?php if ($usuario['ciudad']=='FLORENCIA') { echo 'selected'; } ?>>FLORENCIA</option>
                                   <option value='FLORENCIA' <?php if ($usuario['ciudad']=='FLORENCIA') { echo 'selected'; } ?>>FLORENCIA</option>
                                   <option value='FLORESTA' <?php if ($usuario['ciudad']=='FLORESTA') { echo 'selected'; } ?>>FLORESTA</option>
                                   <option value='FLORIAN' <?php if ($usuario['ciudad']=='FLORIAN') { echo 'selected'; } ?>>FLORIAN</option>
                                   <option value='FLORIDA' <?php if ($usuario['ciudad']=='FLORIDA') { echo 'selected'; } ?>>FLORIDA</option>
                                   <option value='FLORIDABLANCA' <?php if ($usuario['ciudad']=='FLORIDABLANCA') { echo 'selected'; } ?>>FLORIDABLANCA</option>
                                   <option value='FOMEQUE' <?php if ($usuario['ciudad']=='FOMEQUE') { echo 'selected'; } ?>>FOMEQUE</option>
                                   <option value='FONSECA' <?php if ($usuario['ciudad']=='FONSECA') { echo 'selected'; } ?>>FONSECA</option>
                                   <option value='FORTUL' <?php if ($usuario['ciudad']=='FORTUL') { echo 'selected'; } ?>>FORTUL</option>
                                   <option value='FOSCA' <?php if ($usuario['ciudad']=='FOSCA') { echo 'selected'; } ?>>FOSCA</option>
                                   <option value='FRANCISCO PIZARRO' <?php if ($usuario['ciudad']=='FRANCISCO PIZARRO') { echo 'selected'; } ?>>FRANCISCO PIZARRO</option>
                                   <option value='FREDONIA' <?php if ($usuario['ciudad']=='FREDONIA') { echo 'selected'; } ?>>FREDONIA</option>
                                   <option value='FRESNO' <?php if ($usuario['ciudad']=='FRESNO') { echo 'selected'; } ?>>FRESNO</option>
                                   <option value='FRONTINO' <?php if ($usuario['ciudad']=='FRONTINO') { echo 'selected'; } ?>>FRONTINO</option>
                                   <option value='FUENTE DE ORO' <?php if ($usuario['ciudad']=='FUENTE DE ORO') { echo 'selected'; } ?>>FUENTE DE ORO</option>
                                   <option value='FUNDACION' <?php if ($usuario['ciudad']=='FUNDACION') { echo 'selected'; } ?>>FUNDACION</option>
                                   <option value='FUNES' <?php if ($usuario['ciudad']=='FUNES') { echo 'selected'; } ?>>FUNES</option>
                                   <option value='FUNZA' <?php if ($usuario['ciudad']=='FUNZA') { echo 'selected'; } ?>>FUNZA</option>
                                   <option value='FUQUENE' <?php if ($usuario['ciudad']=='FUQUENE') { echo 'selected'; } ?>>FUQUENE</option>
                                   <option value='FUSAGASUGA' <?php if ($usuario['ciudad']=='FUSAGASUGA') { echo 'selected'; } ?>>FUSAGASUGA</option>
                                   <option value='GACHALA' <?php if ($usuario['ciudad']=='GACHALA') { echo 'selected'; } ?>>GACHALA</option>
                                   <option value='GACHANCIPA' <?php if ($usuario['ciudad']=='GACHANCIPA') { echo 'selected'; } ?>>GACHANCIPA</option>
                                   <option value='GACHANTIVA' <?php if ($usuario['ciudad']=='GACHANTIVA') { echo 'selected'; } ?>>GACHANTIVA</option>
                                   <option value='GACHETA' <?php if ($usuario['ciudad']=='GACHETA') { echo 'selected'; } ?>>GACHETA</option>
                                   <option value='GALAN' <?php if ($usuario['ciudad']=='GALAN') { echo 'selected'; } ?>>GALAN</option>
                                   <option value='GALAPA' <?php if ($usuario['ciudad']=='GALAPA') { echo 'selected'; } ?>>GALAPA</option>
                                   <option value='GALERAS' <?php if ($usuario['ciudad']=='GALERAS') { echo 'selected'; } ?>>GALERAS</option>
                                   <option value='GAMA' <?php if ($usuario['ciudad']=='GAMA') { echo 'selected'; } ?>>GAMA</option>
                                   <option value='GAMARRA' <?php if ($usuario['ciudad']=='GAMARRA') { echo 'selected'; } ?>>GAMARRA</option>
                                   <option value='GAMBITA' <?php if ($usuario['ciudad']=='GAMBITA') { echo 'selected'; } ?>>GAMBITA</option>
                                   <option value='GAMEZA' <?php if ($usuario['ciudad']=='GAMEZA') { echo 'selected'; } ?>>GAMEZA</option>
                                   <option value='GARAGOA' <?php if ($usuario['ciudad']=='GARAGOA') { echo 'selected'; } ?>>GARAGOA</option>
                                   <option value='GARZON' <?php if ($usuario['ciudad']=='GARZON') { echo 'selected'; } ?>>GARZON</option>
                                   <option value='GENOVA' <?php if ($usuario['ciudad']=='GENOVA') { echo 'selected'; } ?>>GENOVA</option>
                                   <option value='GIGANTE' <?php if ($usuario['ciudad']=='GIGANTE') { echo 'selected'; } ?>>GIGANTE</option>
                                   <option value='GINEBRA' <?php if ($usuario['ciudad']=='GINEBRA') { echo 'selected'; } ?>>GINEBRA</option>
                                   <option value='GIRALDO' <?php if ($usuario['ciudad']=='GIRALDO') { echo 'selected'; } ?>>GIRALDO</option>
                                   <option value='GIRARDOT' <?php if ($usuario['ciudad']=='GIRARDOT') { echo 'selected'; } ?>>GIRARDOT</option>
                                   <option value='GIRARDOTA' <?php if ($usuario['ciudad']=='GIRARDOTA') { echo 'selected'; } ?>>GIRARDOTA</option>
                                   <option value='GIRON' <?php if ($usuario['ciudad']=='GIRON') { echo 'selected'; } ?>>GIRON</option>
                                   <option value='GOMEZ PLATA' <?php if ($usuario['ciudad']=='GOMEZ PLATA') { echo 'selected'; } ?>>GOMEZ PLATA</option>
                                   <option value='GONZALEZ' <?php if ($usuario['ciudad']=='GONZALEZ') { echo 'selected'; } ?>>GONZALEZ</option>
                                   <option value='GRAMALOTE' <?php if ($usuario['ciudad']=='GRAMALOTE') { echo 'selected'; } ?>>GRAMALOTE</option>
                                   <option value='GRANADA' <?php if ($usuario['ciudad']=='GRANADA') { echo 'selected'; } ?>>GRANADA</option>
                                   <option value='GRANADA' <?php if ($usuario['ciudad']=='GRANADA') { echo 'selected'; } ?>>GRANADA</option>
                                   <option value='GRANADA' <?php if ($usuario['ciudad']=='GRANADA') { echo 'selected'; } ?>>GRANADA</option>
                                   <option value='GsEPSA' <?php if ($usuario['ciudad']=='GsEPSA') { echo 'selected'; } ?>>GsEPSA</option>
                                   <option value='GsICAN' <?php if ($usuario['ciudad']=='GsICAN') { echo 'selected'; } ?>>GsICAN</option>
                                   <option value='GUACA' <?php if ($usuario['ciudad']=='GUACA') { echo 'selected'; } ?>>GUACA</option>
                                   <option value='GUACAMAYAS' <?php if ($usuario['ciudad']=='GUACAMAYAS') { echo 'selected'; } ?>>GUACAMAYAS</option>
                                   <option value='GUACARI' <?php if ($usuario['ciudad']=='GUACARI') { echo 'selected'; } ?>>GUACARI</option>
                                   <option value='GUACHENE' <?php if ($usuario['ciudad']=='GUACHENE') { echo 'selected'; } ?>>GUACHENE</option>
                                   <option value='GUACHETA' <?php if ($usuario['ciudad']=='GUACHETA') { echo 'selected'; } ?>>GUACHETA</option>
                                   <option value='GUACHUCAL' <?php if ($usuario['ciudad']=='GUACHUCAL') { echo 'selected'; } ?>>GUACHUCAL</option>
                                   <option value='GUADALAJARA DE BUGA' <?php if ($usuario['ciudad']=='GUADALAJARA DE BUGA') { echo 'selected'; } ?>>GUADALAJARA DE BUGA</option>
                                   <option value='GUADALUPE' <?php if ($usuario['ciudad']=='GUADALUPE') { echo 'selected'; } ?>>GUADALUPE</option>
                                   <option value='GUADALUPE' <?php if ($usuario['ciudad']=='GUADALUPE') { echo 'selected'; } ?>>GUADALUPE</option>
                                   <option value='GUADALUPE' <?php if ($usuario['ciudad']=='GUADALUPE') { echo 'selected'; } ?>>GUADALUPE</option>
                                   <option value='GUADUAS' <?php if ($usuario['ciudad']=='GUADUAS') { echo 'selected'; } ?>>GUADUAS</option>
                                   <option value='GUAITARILLA' <?php if ($usuario['ciudad']=='GUAITARILLA') { echo 'selected'; } ?>>GUAITARILLA</option>
                                   <option value='GUALMATAN' <?php if ($usuario['ciudad']=='GUALMATAN') { echo 'selected'; } ?>>GUALMATAN</option>
                                   <option value='GUAMAL' <?php if ($usuario['ciudad']=='GUAMAL') { echo 'selected'; } ?>>GUAMAL</option>
                                   <option value='GUAMAL' <?php if ($usuario['ciudad']=='GUAMAL') { echo 'selected'; } ?>>GUAMAL</option>
                                   <option value='GUAMO' <?php if ($usuario['ciudad']=='GUAMO') { echo 'selected'; } ?>>GUAMO</option>
                                   <option value='GUAPI' <?php if ($usuario['ciudad']=='GUAPI') { echo 'selected'; } ?>>GUAPI</option>
                                   <option value='GUAPOTA' <?php if ($usuario['ciudad']=='GUAPOTA') { echo 'selected'; } ?>>GUAPOTA</option>
                                   <option value='GUARANDA' <?php if ($usuario['ciudad']=='GUARANDA') { echo 'selected'; } ?>>GUARANDA</option>
                                   <option value='GUARNE' <?php if ($usuario['ciudad']=='GUARNE') { echo 'selected'; } ?>>GUARNE</option>
                                   <option value='GUASCA' <?php if ($usuario['ciudad']=='GUASCA') { echo 'selected'; } ?>>GUASCA</option>
                                   <option value='GUATAPE' <?php if ($usuario['ciudad']=='GUATAPE') { echo 'selected'; } ?>>GUATAPE</option>
                                   <option value='GUATAQUI' <?php if ($usuario['ciudad']=='GUATAQUI') { echo 'selected'; } ?>>GUATAQUI</option>
                                   <option value='GUATAVITA' <?php if ($usuario['ciudad']=='GUATAVITA') { echo 'selected'; } ?>>GUATAVITA</option>
                                   <option value='GUATEQUE' <?php if ($usuario['ciudad']=='GUATEQUE') { echo 'selected'; } ?>>GUATEQUE</option>
                                   <option value='GUATICA' <?php if ($usuario['ciudad']=='GUATICA') { echo 'selected'; } ?>>GUATICA</option>
                                   <option value='GUAVATA' <?php if ($usuario['ciudad']=='GUAVATA') { echo 'selected'; } ?>>GUAVATA</option>
                                   <option value='GUAYABAL DE SIQUIMA' <?php if ($usuario['ciudad']=='GUAYABAL DE SIQUIMA') { echo 'selected'; } ?>>GUAYABAL DE SIQUIMA</option>
                                   <option value='GUAYABETAL' <?php if ($usuario['ciudad']=='GUAYABETAL') { echo 'selected'; } ?>>GUAYABETAL</option>
                                   <option value='GUAYATA' <?php if ($usuario['ciudad']=='GUAYATA') { echo 'selected'; } ?>>GUAYATA</option>
                                   <option value='GUTIERREZ' <?php if ($usuario['ciudad']=='GUTIERREZ') { echo 'selected'; } ?>>GUTIERREZ</option>
                                   <option value='HACARI' <?php if ($usuario['ciudad']=='HACARI') { echo 'selected'; } ?>>HACARI</option>
                                   <option value='HATILLO DE LOBA' <?php if ($usuario['ciudad']=='HATILLO DE LOBA') { echo 'selected'; } ?>>HATILLO DE LOBA</option>
                                   <option value='HATO' <?php if ($usuario['ciudad']=='HATO') { echo 'selected'; } ?>>HATO</option>
                                   <option value='HATO COROZAL' <?php if ($usuario['ciudad']=='HATO COROZAL') { echo 'selected'; } ?>>HATO COROZAL</option>
                                   <option value='HATONUEVO' <?php if ($usuario['ciudad']=='HATONUEVO') { echo 'selected'; } ?>>HATONUEVO</option>
                                   <option value='HELICONIA' <?php if ($usuario['ciudad']=='HELICONIA') { echo 'selected'; } ?>>HELICONIA</option>
                                   <option value='HERRAN' <?php if ($usuario['ciudad']=='HERRAN') { echo 'selected'; } ?>>HERRAN</option>
                                   <option value='HERVEO' <?php if ($usuario['ciudad']=='HERVEO') { echo 'selected'; } ?>>HERVEO</option>
                                   <option value='HISPANIA' <?php if ($usuario['ciudad']=='HISPANIA') { echo 'selected'; } ?>>HISPANIA</option>
                                   <option value='HOBO' <?php if ($usuario['ciudad']=='HOBO') { echo 'selected'; } ?>>HOBO</option>
                                   <option value='HONDA' <?php if ($usuario['ciudad']=='HONDA') { echo 'selected'; } ?>>HONDA</option>
                                   <option value='IBAGUE' <?php if ($usuario['ciudad']=='IBAGUE') { echo 'selected'; } ?>>IBAGUE</option>
                                   <option value='ICONONZO' <?php if ($usuario['ciudad']=='ICONONZO') { echo 'selected'; } ?>>ICONONZO</option>
                                   <option value='ILES' <?php if ($usuario['ciudad']=='ILES') { echo 'selected'; } ?>>ILES</option>
                                   <option value='IMUES' <?php if ($usuario['ciudad']=='IMUES') { echo 'selected'; } ?>>IMUES</option>
                                   <option value='INIRIDA' <?php if ($usuario['ciudad']=='INIRIDA') { echo 'selected'; } ?>>INIRIDA</option>
                                   <option value='INZA' <?php if ($usuario['ciudad']=='INZA') { echo 'selected'; } ?>>INZA</option>
                                   <option value='IPIALES' <?php if ($usuario['ciudad']=='IPIALES') { echo 'selected'; } ?>>IPIALES</option>
                                   <option value='IQUIRA' <?php if ($usuario['ciudad']=='IQUIRA') { echo 'selected'; } ?>>IQUIRA</option>
                                   <option value='ISNOS' <?php if ($usuario['ciudad']=='ISNOS') { echo 'selected'; } ?>>ISNOS</option>
                                   <option value='ISTMINA' <?php if ($usuario['ciudad']=='ISTMINA') { echo 'selected'; } ?>>ISTMINA</option>
                                   <option value='ITAGUI' <?php if ($usuario['ciudad']=='ITAGUI') { echo 'selected'; } ?>>ITAGUI</option>
                                   <option value='ITUANGO' <?php if ($usuario['ciudad']=='ITUANGO') { echo 'selected'; } ?>>ITUANGO</option>
                                   <option value='IZA' <?php if ($usuario['ciudad']=='IZA') { echo 'selected'; } ?>>IZA</option>
                                   <option value='JAMBALO' <?php if ($usuario['ciudad']=='JAMBALO') { echo 'selected'; } ?>>JAMBALO</option>
                                   <option value='JAMUNDI' <?php if ($usuario['ciudad']=='JAMUNDI') { echo 'selected'; } ?>>JAMUNDI</option>
                                   <option value='JARDIN' <?php if ($usuario['ciudad']=='JARDIN') { echo 'selected'; } ?>>JARDIN</option>
                                   <option value='JENESANO' <?php if ($usuario['ciudad']=='JENESANO') { echo 'selected'; } ?>>JENESANO</option>
                                   <option value='JERICO' <?php if ($usuario['ciudad']=='JERICO') { echo 'selected'; } ?>>JERICO</option>
                                   <option value='JERICO' <?php if ($usuario['ciudad']=='JERICO') { echo 'selected'; } ?>>JERICO</option>
                                   <option value='JERUSALEN' <?php if ($usuario['ciudad']=='JERUSALEN') { echo 'selected'; } ?>>JERUSALEN</option>
                                   <option value='JESUS MARIA' <?php if ($usuario['ciudad']=='JESUS MARIA') { echo 'selected'; } ?>>JESUS MARIA</option>
                                   <option value='JORDAN' <?php if ($usuario['ciudad']=='JORDAN') { echo 'selected'; } ?>>JORDAN</option>
                                   <option value='JUAN DE ACOSTA' <?php if ($usuario['ciudad']=='JUAN DE ACOSTA') { echo 'selected'; } ?>>JUAN DE ACOSTA</option>
                                   <option value='JUNIN' <?php if ($usuario['ciudad']=='JUNIN') { echo 'selected'; } ?>>JUNIN</option>
                                   <option value='JURADO' <?php if ($usuario['ciudad']=='JURADO') { echo 'selected'; } ?>>JURADO</option>
                                   <option value='LA APARTADA' <?php if ($usuario['ciudad']=='LA APARTADA') { echo 'selected'; } ?>>LA APARTADA</option>
                                   <option value='LA ARGENTINA' <?php if ($usuario['ciudad']=='LA ARGENTINA') { echo 'selected'; } ?>>LA ARGENTINA</option>
                                   <option value='LA BELLEZA' <?php if ($usuario['ciudad']=='LA BELLEZA') { echo 'selected'; } ?>>LA BELLEZA</option>
                                   <option value='LA CALERA' <?php if ($usuario['ciudad']=='LA CALERA') { echo 'selected'; } ?>>LA CALERA</option>
                                   <option value='LA CAPILLA' <?php if ($usuario['ciudad']=='LA CAPILLA') { echo 'selected'; } ?>>LA CAPILLA</option>
                                   <option value='LA CEJA' <?php if ($usuario['ciudad']=='LA CEJA') { echo 'selected'; } ?>>LA CEJA</option>
                                   <option value='LA CELIA' <?php if ($usuario['ciudad']=='LA CELIA') { echo 'selected'; } ?>>LA CELIA</option>
                                   <option value='LA CHORRERA' <?php if ($usuario['ciudad']=='LA CHORRERA') { echo 'selected'; } ?>>LA CHORRERA</option>
                                   <option value='LA CRUZ' <?php if ($usuario['ciudad']=='LA CRUZ') { echo 'selected'; } ?>>LA CRUZ</option>
                                   <option value='LA CUMBRE' <?php if ($usuario['ciudad']=='LA CUMBRE') { echo 'selected'; } ?>>LA CUMBRE</option>
                                   <option value='LA DORADA' <?php if ($usuario['ciudad']=='LA DORADA') { echo 'selected'; } ?>>LA DORADA</option>
                                   <option value='LA ESPERANZA' <?php if ($usuario['ciudad']=='LA ESPERANZA') { echo 'selected'; } ?>>LA ESPERANZA</option>
                                   <option value='LA ESTRELLA' <?php if ($usuario['ciudad']=='LA ESTRELLA') { echo 'selected'; } ?>>LA ESTRELLA</option>
                                   <option value='LA FLORIDA' <?php if ($usuario['ciudad']=='LA FLORIDA') { echo 'selected'; } ?>>LA FLORIDA</option>
                                   <option value='LA GLORIA' <?php if ($usuario['ciudad']=='LA GLORIA') { echo 'selected'; } ?>>LA GLORIA</option>
                                   <option value='LA GUADALUPE' <?php if ($usuario['ciudad']=='LA GUADALUPE') { echo 'selected'; } ?>>LA GUADALUPE</option>
                                   <option value='LA JAGUA DE IBIRICO' <?php if ($usuario['ciudad']=='LA JAGUA DE IBIRICO') { echo 'selected'; } ?>>LA JAGUA DE IBIRICO</option>
                                   <option value='LA JAGUA DEL PILAR' <?php if ($usuario['ciudad']=='LA JAGUA DEL PILAR') { echo 'selected'; } ?>>LA JAGUA DEL PILAR</option>
                                   <option value='LA LLANADA' <?php if ($usuario['ciudad']=='LA LLANADA') { echo 'selected'; } ?>>LA LLANADA</option>
                                   <option value='LA MACARENA' <?php if ($usuario['ciudad']=='LA MACARENA') { echo 'selected'; } ?>>LA MACARENA</option>
                                   <option value='LA MERCED' <?php if ($usuario['ciudad']=='LA MERCED') { echo 'selected'; } ?>>LA MERCED</option>
                                   <option value='LA MESA' <?php if ($usuario['ciudad']=='LA MESA') { echo 'selected'; } ?>>LA MESA</option>
                                   <option value='LA MONTAÑITA' <?php if ($usuario['ciudad']=='LA MONTAÑITA') { echo 'selected'; } ?>>LA MONTAÑITA</option>
                                   <option value='LA PALMA' <?php if ($usuario['ciudad']=='LA PALMA') { echo 'selected'; } ?>>LA PALMA</option>
                                   <option value='LA PAZ' <?php if ($usuario['ciudad']=='LA PAZ') { echo 'selected'; } ?>>LA PAZ</option>
                                   <option value='LA PAZ' <?php if ($usuario['ciudad']=='LA PAZ') { echo 'selected'; } ?>>LA PAZ</option>
                                   <option value='LA PEDRERA' <?php if ($usuario['ciudad']=='LA PEDRERA') { echo 'selected'; } ?>>LA PEDRERA</option>
                                   <option value='LA PEÑA' <?php if ($usuario['ciudad']=='LA PEÑA') { echo 'selected'; } ?>>LA PEÑA</option>
                                   <option value='LA PINTADA' <?php if ($usuario['ciudad']=='LA PINTADA') { echo 'selected'; } ?>>LA PINTADA</option>
                                   <option value='LA PLATA' <?php if ($usuario['ciudad']=='LA PLATA') { echo 'selected'; } ?>>LA PLATA</option>
                                   <option value='LA PLAYA' <?php if ($usuario['ciudad']=='LA PLAYA') { echo 'selected'; } ?>>LA PLAYA</option>
                                   <option value='LA PRIMAVERA' <?php if ($usuario['ciudad']=='LA PRIMAVERA') { echo 'selected'; } ?>>LA PRIMAVERA</option>
                                   <option value='LA SALINA' <?php if ($usuario['ciudad']=='LA SALINA') { echo 'selected'; } ?>>LA SALINA</option>
                                   <option value='LA SIERRA' <?php if ($usuario['ciudad']=='LA SIERRA') { echo 'selected'; } ?>>LA SIERRA</option>
                                   <option value='LA TEBAIDA' <?php if ($usuario['ciudad']=='LA TEBAIDA') { echo 'selected'; } ?>>LA TEBAIDA</option>
                                   <option value='LA TOLA' <?php if ($usuario['ciudad']=='LA TOLA') { echo 'selected'; } ?>>LA TOLA</option>
                                   <option value='LA UNION' <?php if ($usuario['ciudad']=='LA UNION') { echo 'selected'; } ?>>LA UNION</option>
                                   <option value='LA UNION' <?php if ($usuario['ciudad']=='LA UNION') { echo 'selected'; } ?>>LA UNION</option>
                                   <option value='LA UNION' <?php if ($usuario['ciudad']=='LA UNION') { echo 'selected'; } ?>>LA UNION</option>
                                   <option value='LA UNION' <?php if ($usuario['ciudad']=='LA UNION') { echo 'selected'; } ?>>LA UNION</option>
                                   <option value='LA UVITA' <?php if ($usuario['ciudad']=='LA UVITA') { echo 'selected'; } ?>>LA UVITA</option>
                                   <option value='LA VEGA' <?php if ($usuario['ciudad']=='LA VEGA') { echo 'selected'; } ?>>LA VEGA</option>
                                   <option value='LA VEGA' <?php if ($usuario['ciudad']=='LA VEGA') { echo 'selected'; } ?>>LA VEGA</option>
                                   <option value='LA VICTORIA' <?php if ($usuario['ciudad']=='LA VICTORIA') { echo 'selected'; } ?>>LA VICTORIA</option>
                                   <option value='LA VICTORIA' <?php if ($usuario['ciudad']=='LA VICTORIA') { echo 'selected'; } ?>>LA VICTORIA</option>
                                   <option value='LA VICTORIA' <?php if ($usuario['ciudad']=='LA VICTORIA') { echo 'selected'; } ?>>LA VICTORIA</option>
                                   <option value='LA VIRGINIA' <?php if ($usuario['ciudad']=='LA VIRGINIA') { echo 'selected'; } ?>>LA VIRGINIA</option>
                                   <option value='LABATECA' <?php if ($usuario['ciudad']=='LABATECA') { echo 'selected'; } ?>>LABATECA</option>
                                   <option value='LABRANZAGRANDE' <?php if ($usuario['ciudad']=='LABRANZAGRANDE') { echo 'selected'; } ?>>LABRANZAGRANDE</option>
                                   <option value='LANDAZURI' <?php if ($usuario['ciudad']=='LANDAZURI') { echo 'selected'; } ?>>LANDAZURI</option>
                                   <option value='LEBRIJA' <?php if ($usuario['ciudad']=='LEBRIJA') { echo 'selected'; } ?>>LEBRIJA</option>
                                   <option value='LEGUIZAMO' <?php if ($usuario['ciudad']=='LEGUIZAMO') { echo 'selected'; } ?>>LEGUIZAMO</option>
                                   <option value='LEIVA' <?php if ($usuario['ciudad']=='LEIVA') { echo 'selected'; } ?>>LEIVA</option>
                                   <option value='LEJANIAS' <?php if ($usuario['ciudad']=='LEJANIAS') { echo 'selected'; } ?>>LEJANIAS</option>
                                   <option value='LENGUAZAQUE' <?php if ($usuario['ciudad']=='LENGUAZAQUE') { echo 'selected'; } ?>>LENGUAZAQUE</option>
                                   <option value='LERIDA' <?php if ($usuario['ciudad']=='LERIDA') { echo 'selected'; } ?>>LERIDA</option>
                                   <option value='LETICIA' <?php if ($usuario['ciudad']=='LETICIA') { echo 'selected'; } ?>>LETICIA</option>
                                   <option value='LIBANO' <?php if ($usuario['ciudad']=='LIBANO') { echo 'selected'; } ?>>LIBANO</option>
                                   <option value='LIBORINA' <?php if ($usuario['ciudad']=='LIBORINA') { echo 'selected'; } ?>>LIBORINA</option>
                                   <option value='LINARES' <?php if ($usuario['ciudad']=='LINARES') { echo 'selected'; } ?>>LINARES</option>
                                   <option value='LLORO' <?php if ($usuario['ciudad']=='LLORO') { echo 'selected'; } ?>>LLORO</option>
                                   <option value='LOPEZ' <?php if ($usuario['ciudad']=='LOPEZ') { echo 'selected'; } ?>>LOPEZ</option>
                                   <option value='LORICA' <?php if ($usuario['ciudad']=='LORICA') { echo 'selected'; } ?>>LORICA</option>
                                   <option value='LOS ANDES' <?php if ($usuario['ciudad']=='LOS ANDES') { echo 'selected'; } ?>>LOS ANDES</option>
                                   <option value='LOS CORDOBAS' <?php if ($usuario['ciudad']=='LOS CORDOBAS') { echo 'selected'; } ?>>LOS CORDOBAS</option>
                                   <option value='LOS PALMITOS' <?php if ($usuario['ciudad']=='LOS PALMITOS') { echo 'selected'; } ?>>LOS PALMITOS</option>
                                   <option value='LOS PATIOS' <?php if ($usuario['ciudad']=='LOS PATIOS') { echo 'selected'; } ?>>LOS PATIOS</option>
                                   <option value='LOS SANTOS' <?php if ($usuario['ciudad']=='LOS SANTOS') { echo 'selected'; } ?>>LOS SANTOS</option>
                                   <option value='LOURDES' <?php if ($usuario['ciudad']=='LOURDES') { echo 'selected'; } ?>>LOURDES</option>
                                   <option value='LURUACO' <?php if ($usuario['ciudad']=='LURUACO') { echo 'selected'; } ?>>LURUACO</option>
                                   <option value='MACANAL' <?php if ($usuario['ciudad']=='MACANAL') { echo 'selected'; } ?>>MACANAL</option>
                                   <option value='MACARAVITA' <?php if ($usuario['ciudad']=='MACARAVITA') { echo 'selected'; } ?>>MACARAVITA</option>
                                   <option value='MACEO' <?php if ($usuario['ciudad']=='MACEO') { echo 'selected'; } ?>>MACEO</option>
                                   <option value='MACHETA' <?php if ($usuario['ciudad']=='MACHETA') { echo 'selected'; } ?>>MACHETA</option>
                                   <option value='MADRID' <?php if ($usuario['ciudad']=='MADRID') { echo 'selected'; } ?>>MADRID</option>
                                   <option value='MAGANGUE' <?php if ($usuario['ciudad']=='MAGANGUE') { echo 'selected'; } ?>>MAGANGUE</option>
                                   <option value='MAGsI' <?php if ($usuario['ciudad']=='MAGsI') { echo 'selected'; } ?>>MAGsI</option>
                                   <option value='MAHATES' <?php if ($usuario['ciudad']=='MAHATES') { echo 'selected'; } ?>>MAHATES</option>
                                   <option value='MAICAO' <?php if ($usuario['ciudad']=='MAICAO') { echo 'selected'; } ?>>MAICAO</option>
                                   <option value='MAJAGUAL' <?php if ($usuario['ciudad']=='MAJAGUAL') { echo 'selected'; } ?>>MAJAGUAL</option>
                                   <option value='MALAGA' <?php if ($usuario['ciudad']=='MALAGA') { echo 'selected'; } ?>>MALAGA</option>
                                   <option value='MALAMBO' <?php if ($usuario['ciudad']=='MALAMBO') { echo 'selected'; } ?>>MALAMBO</option>
                                   <option value='MALLAMA' <?php if ($usuario['ciudad']=='MALLAMA') { echo 'selected'; } ?>>MALLAMA</option>
                                   <option value='MANATI' <?php if ($usuario['ciudad']=='MANATI') { echo 'selected'; } ?>>MANATI</option>
                                   <option value='MANAURE' <?php if ($usuario['ciudad']=='MANAURE') { echo 'selected'; } ?>>MANAURE</option>
                                   <option value='MANAURE' <?php if ($usuario['ciudad']=='MANAURE') { echo 'selected'; } ?>>MANAURE</option>
                                   <option value='MANI' <?php if ($usuario['ciudad']=='MANI') { echo 'selected'; } ?>>MANI</option>
                                   <option value='MANIZALES' <?php if ($usuario['ciudad']=='MANIZALES') { echo 'selected'; } ?>>MANIZALES</option>
                                   <option value='MANTA' <?php if ($usuario['ciudad']=='MANTA') { echo 'selected'; } ?>>MANTA</option>
                                   <option value='MANZANARES' <?php if ($usuario['ciudad']=='MANZANARES') { echo 'selected'; } ?>>MANZANARES</option>
                                   <option value='MAPIRIPAN' <?php if ($usuario['ciudad']=='MAPIRIPAN') { echo 'selected'; } ?>>MAPIRIPAN</option>
                                   <option value='MAPIRIPANA' <?php if ($usuario['ciudad']=='MAPIRIPANA') { echo 'selected'; } ?>>MAPIRIPANA</option>
                                   <option value='MARGARITA' <?php if ($usuario['ciudad']=='MARGARITA') { echo 'selected'; } ?>>MARGARITA</option>
                                   <option value='MARIA LA BAJA' <?php if ($usuario['ciudad']=='MARIA LA BAJA') { echo 'selected'; } ?>>MARIA LA BAJA</option>
                                   <option value='MARINILLA' <?php if ($usuario['ciudad']=='MARINILLA') { echo 'selected'; } ?>>MARINILLA</option>
                                   <option value='MARIPI' <?php if ($usuario['ciudad']=='MARIPI') { echo 'selected'; } ?>>MARIPI</option>
                                   <option value='MARIQUITA' <?php if ($usuario['ciudad']=='MARIQUITA') { echo 'selected'; } ?>>MARIQUITA</option>
                                   <option value='MARMATO' <?php if ($usuario['ciudad']=='MARMATO') { echo 'selected'; } ?>>MARMATO</option>
                                   <option value='MARQUETALIA' <?php if ($usuario['ciudad']=='MARQUETALIA') { echo 'selected'; } ?>>MARQUETALIA</option>
                                   <option value='MARSELLA' <?php if ($usuario['ciudad']=='MARSELLA') { echo 'selected'; } ?>>MARSELLA</option>
                                   <option value='MARULANDA' <?php if ($usuario['ciudad']=='MARULANDA') { echo 'selected'; } ?>>MARULANDA</option>
                                   <option value='MATANZA' <?php if ($usuario['ciudad']=='MATANZA') { echo 'selected'; } ?>>MATANZA</option>
                                   <option value='MEDELLIN' <?php if ($usuario['ciudad']=='MEDELLIN') { echo 'selected'; } ?>>MEDELLIN</option>
                                   <option value='MEDINA' <?php if ($usuario['ciudad']=='MEDINA') { echo 'selected'; } ?>>MEDINA</option>
                                   <option value='MEDIO ATRATO' <?php if ($usuario['ciudad']=='MEDIO ATRATO') { echo 'selected'; } ?>>MEDIO ATRATO</option>
                                   <option value='MEDIO BAUDO' <?php if ($usuario['ciudad']=='MEDIO BAUDO') { echo 'selected'; } ?>>MEDIO BAUDO</option>
                                   <option value='MEDIO SAN JUAN' <?php if ($usuario['ciudad']=='MEDIO SAN JUAN') { echo 'selected'; } ?>>MEDIO SAN JUAN</option>
                                   <option value='MELGAR' <?php if ($usuario['ciudad']=='MELGAR') { echo 'selected'; } ?>>MELGAR</option>
                                   <option value='MERCADERES' <?php if ($usuario['ciudad']=='MERCADERES') { echo 'selected'; } ?>>MERCADERES</option>
                                   <option value='MESETAS' <?php if ($usuario['ciudad']=='MESETAS') { echo 'selected'; } ?>>MESETAS</option>
                                   <option value='MILAN' <?php if ($usuario['ciudad']=='MILAN') { echo 'selected'; } ?>>MILAN</option>
                                   <option value='MIRAFLORES' <?php if ($usuario['ciudad']=='MIRAFLORES') { echo 'selected'; } ?>>MIRAFLORES</option>
                                   <option value='MIRAFLORES' <?php if ($usuario['ciudad']=='MIRAFLORES') { echo 'selected'; } ?>>MIRAFLORES</option>
                                   <option value='MIRANDA' <?php if ($usuario['ciudad']=='MIRANDA') { echo 'selected'; } ?>>MIRANDA</option>
                                   <option value='MIRITI - PARANA' <?php if ($usuario['ciudad']=='MIRITI - PARANA') { echo 'selected'; } ?>>MIRITI - PARANA</option>
                                   <option value='MISTRATO' <?php if ($usuario['ciudad']=='MISTRATO') { echo 'selected'; } ?>>MISTRATO</option>
                                   <option value='MITU' <?php if ($usuario['ciudad']=='MITU') { echo 'selected'; } ?>>MITU</option>
                                   <option value='MOCOA' <?php if ($usuario['ciudad']=='MOCOA') { echo 'selected'; } ?>>MOCOA</option>
                                   <option value='MOGOTES' <?php if ($usuario['ciudad']=='MOGOTES') { echo 'selected'; } ?>>MOGOTES</option>
                                   <option value='MOLAGAVITA' <?php if ($usuario['ciudad']=='MOLAGAVITA') { echo 'selected'; } ?>>MOLAGAVITA</option>
                                   <option value='MOMIL' <?php if ($usuario['ciudad']=='MOMIL') { echo 'selected'; } ?>>MOMIL</option>
                                   <option value='MOMPOS' <?php if ($usuario['ciudad']=='MOMPOS') { echo 'selected'; } ?>>MOMPOS</option>
                                   <option value='MONGUA' <?php if ($usuario['ciudad']=='MONGUA') { echo 'selected'; } ?>>MONGUA</option>
                                   <option value='MONGUI' <?php if ($usuario['ciudad']=='MONGUI') { echo 'selected'; } ?>>MONGUI</option>
                                   <option value='MONIQUIRA' <?php if ($usuario['ciudad']=='MONIQUIRA') { echo 'selected'; } ?>>MONIQUIRA</option>
                                   <option value='MONTEBELLO' <?php if ($usuario['ciudad']=='MONTEBELLO') { echo 'selected'; } ?>>MONTEBELLO</option>
                                   <option value='MONTECRISTO' <?php if ($usuario['ciudad']=='MONTECRISTO') { echo 'selected'; } ?>>MONTECRISTO</option>
                                   <option value='MONTELIBANO' <?php if ($usuario['ciudad']=='MONTELIBANO') { echo 'selected'; } ?>>MONTELIBANO</option>
                                   <option value='MONTENEGRO' <?php if ($usuario['ciudad']=='MONTENEGRO') { echo 'selected'; } ?>>MONTENEGRO</option>
                                   <option value='MONTERIA' <?php if ($usuario['ciudad']=='MONTERIA') { echo 'selected'; } ?>>MONTERIA</option>
                                   <option value='MONTERREY' <?php if ($usuario['ciudad']=='MONTERREY') { echo 'selected'; } ?>>MONTERREY</option>
                                   <option value='MOÑITOS' <?php if ($usuario['ciudad']=='MOÑITOS') { echo 'selected'; } ?>>MOÑITOS</option>
                                   <option value='MORALES' <?php if ($usuario['ciudad']=='MORALES') { echo 'selected'; } ?>>MORALES</option>
                                   <option value='MORALES' <?php if ($usuario['ciudad']=='MORALES') { echo 'selected'; } ?>>MORALES</option>
                                   <option value='MORELIA' <?php if ($usuario['ciudad']=='MORELIA') { echo 'selected'; } ?>>MORELIA</option>
                                   <option value='MORICHAL' <?php if ($usuario['ciudad']=='MORICHAL') { echo 'selected'; } ?>>MORICHAL</option>
                                   <option value='MORROA' <?php if ($usuario['ciudad']=='MORROA') { echo 'selected'; } ?>>MORROA</option>
                                   <option value='MOSQUERA' <?php if ($usuario['ciudad']=='MOSQUERA') { echo 'selected'; } ?>>MOSQUERA</option>
                                   <option value='MOSQUERA' <?php if ($usuario['ciudad']=='MOSQUERA') { echo 'selected'; } ?>>MOSQUERA</option>
                                   <option value='MOTAVITA' <?php if ($usuario['ciudad']=='MOTAVITA') { echo 'selected'; } ?>>MOTAVITA</option>
                                   <option value='MURILLO' <?php if ($usuario['ciudad']=='MURILLO') { echo 'selected'; } ?>>MURILLO</option>
                                   <option value='MURINDO' <?php if ($usuario['ciudad']=='MURINDO') { echo 'selected'; } ?>>MURINDO</option>
                                   <option value='MUTATA' <?php if ($usuario['ciudad']=='MUTATA') { echo 'selected'; } ?>>MUTATA</option>
                                   <option value='MUTISCUA' <?php if ($usuario['ciudad']=='MUTISCUA') { echo 'selected'; } ?>>MUTISCUA</option>
                                   <option value='MUZO' <?php if ($usuario['ciudad']=='MUZO') { echo 'selected'; } ?>>MUZO</option>
                                   <option value='NARIÑO' <?php if ($usuario['ciudad']=='NARIÑO') { echo 'selected'; } ?>>NARIÑO</option>
                                   <option value='NARIÑO' <?php if ($usuario['ciudad']=='NARIÑO') { echo 'selected'; } ?>>NARIÑO</option>
                                   <option value='NARIÑO' <?php if ($usuario['ciudad']=='NARIÑO') { echo 'selected'; } ?>>NARIÑO</option>
                                   <option value='NATAGA' <?php if ($usuario['ciudad']=='NATAGA') { echo 'selected'; } ?>>NATAGA</option>
                                   <option value='NATAGAIMA' <?php if ($usuario['ciudad']=='NATAGAIMA') { echo 'selected'; } ?>>NATAGAIMA</option>
                                   <option value='NECHI' <?php if ($usuario['ciudad']=='NECHI') { echo 'selected'; } ?>>NECHI</option>
                                   <option value='NECOCLI' <?php if ($usuario['ciudad']=='NECOCLI') { echo 'selected'; } ?>>NECOCLI</option>
                                   <option value='NEIRA' <?php if ($usuario['ciudad']=='NEIRA') { echo 'selected'; } ?>>NEIRA</option>
                                   <option value='NEIVA' <?php if ($usuario['ciudad']=='NEIVA') { echo 'selected'; } ?>>NEIVA</option>
                                   <option value='NEMOCON' <?php if ($usuario['ciudad']=='NEMOCON') { echo 'selected'; } ?>>NEMOCON</option>
                                   <option value='NILO' <?php if ($usuario['ciudad']=='NILO') { echo 'selected'; } ?>>NILO</option>
                                   <option value='NIMAIMA' <?php if ($usuario['ciudad']=='NIMAIMA') { echo 'selected'; } ?>>NIMAIMA</option>
                                   <option value='NOBSA' <?php if ($usuario['ciudad']=='NOBSA') { echo 'selected'; } ?>>NOBSA</option>
                                   <option value='NOCAIMA' <?php if ($usuario['ciudad']=='NOCAIMA') { echo 'selected'; } ?>>NOCAIMA</option>
                                   <option value='NORCASIA' <?php if ($usuario['ciudad']=='NORCASIA') { echo 'selected'; } ?>>NORCASIA</option>
                                   <option value='NOROSI' <?php if ($usuario['ciudad']=='NOROSI') { echo 'selected'; } ?>>NOROSI</option>
                                   <option value='NOVITA' <?php if ($usuario['ciudad']=='NOVITA') { echo 'selected'; } ?>>NOVITA</option>
                                   <option value='NUEVA GRANADA' <?php if ($usuario['ciudad']=='NUEVA GRANADA') { echo 'selected'; } ?>>NUEVA GRANADA</option>
                                   <option value='NUEVO COLON' <?php if ($usuario['ciudad']=='NUEVO COLON') { echo 'selected'; } ?>>NUEVO COLON</option>
                                   <option value='NUNCHIA' <?php if ($usuario['ciudad']=='NUNCHIA') { echo 'selected'; } ?>>NUNCHIA</option>
                                   <option value='NUQUI' <?php if ($usuario['ciudad']=='NUQUI') { echo 'selected'; } ?>>NUQUI</option>
                                   <option value='OBANDO' <?php if ($usuario['ciudad']=='OBANDO') { echo 'selected'; } ?>>OBANDO</option>
                                   <option value='OCAMONTE' <?php if ($usuario['ciudad']=='OCAMONTE') { echo 'selected'; } ?>>OCAMONTE</option>
                                   <option value='OCAÑA' <?php if ($usuario['ciudad']=='OCAÑA') { echo 'selected'; } ?>>OCAÑA</option>
                                   <option value='OIBA' <?php if ($usuario['ciudad']=='OIBA') { echo 'selected'; } ?>>OIBA</option>
                                   <option value='OICATA' <?php if ($usuario['ciudad']=='OICATA') { echo 'selected'; } ?>>OICATA</option>
                                   <option value='OLAYA' <?php if ($usuario['ciudad']=='OLAYA') { echo 'selected'; } ?>>OLAYA</option>
                                   <option value='OLAYA HERRERA' <?php if ($usuario['ciudad']=='OLAYA HERRERA') { echo 'selected'; } ?>>OLAYA HERRERA</option>
                                   <option value='ONZAGA' <?php if ($usuario['ciudad']=='ONZAGA') { echo 'selected'; } ?>>ONZAGA</option>
                                   <option value='OPORAPA' <?php if ($usuario['ciudad']=='OPORAPA') { echo 'selected'; } ?>>OPORAPA</option>
                                   <option value='ORITO' <?php if ($usuario['ciudad']=='ORITO') { echo 'selected'; } ?>>ORITO</option>
                                   <option value='OROCUE' <?php if ($usuario['ciudad']=='OROCUE') { echo 'selected'; } ?>>OROCUE</option>
                                   <option value='ORTEGA' <?php if ($usuario['ciudad']=='ORTEGA') { echo 'selected'; } ?>>ORTEGA</option>
                                   <option value='OSPINA' <?php if ($usuario['ciudad']=='OSPINA') { echo 'selected'; } ?>>OSPINA</option>
                                   <option value='OTANCHE' <?php if ($usuario['ciudad']=='OTANCHE') { echo 'selected'; } ?>>OTANCHE</option>
                                   <option value='OVEJAS' <?php if ($usuario['ciudad']=='OVEJAS') { echo 'selected'; } ?>>OVEJAS</option>
                                   <option value='PACHAVITA' <?php if ($usuario['ciudad']=='PACHAVITA') { echo 'selected'; } ?>>PACHAVITA</option>
                                   <option value='PACHO' <?php if ($usuario['ciudad']=='PACHO') { echo 'selected'; } ?>>PACHO</option>
                                   <option value='PACOA' <?php if ($usuario['ciudad']=='PACOA') { echo 'selected'; } ?>>PACOA</option>
                                   <option value='PACORA' <?php if ($usuario['ciudad']=='PACORA') { echo 'selected'; } ?>>PACORA</option>
                                   <option value='PADILLA' <?php if ($usuario['ciudad']=='PADILLA') { echo 'selected'; } ?>>PADILLA</option>
                                   <option value='PAEZ' <?php if ($usuario['ciudad']=='PAEZ') { echo 'selected'; } ?>>PAEZ</option>
                                   <option value='PAEZ' <?php if ($usuario['ciudad']=='PAEZ') { echo 'selected'; } ?>>PAEZ</option>
                                   <option value='PAICOL' <?php if ($usuario['ciudad']=='PAICOL') { echo 'selected'; } ?>>PAICOL</option>
                                   <option value='PAILITAS' <?php if ($usuario['ciudad']=='PAILITAS') { echo 'selected'; } ?>>PAILITAS</option>
                                   <option value='PAIME' <?php if ($usuario['ciudad']=='PAIME') { echo 'selected'; } ?>>PAIME</option>
                                   <option value='PAIPA' <?php if ($usuario['ciudad']=='PAIPA') { echo 'selected'; } ?>>PAIPA</option>
                                   <option value='PAJARITO' <?php if ($usuario['ciudad']=='PAJARITO') { echo 'selected'; } ?>>PAJARITO</option>
                                   <option value='PALERMO' <?php if ($usuario['ciudad']=='PALERMO') { echo 'selected'; } ?>>PALERMO</option>
                                   <option value='PALESTINA' <?php if ($usuario['ciudad']=='PALESTINA') { echo 'selected'; } ?>>PALESTINA</option>
                                   <option value='PALESTINA' <?php if ($usuario['ciudad']=='PALESTINA') { echo 'selected'; } ?>>PALESTINA</option>
                                   <option value='PALMAR' <?php if ($usuario['ciudad']=='PALMAR') { echo 'selected'; } ?>>PALMAR</option>
                                   <option value='PALMAR DE VARELA' <?php if ($usuario['ciudad']=='PALMAR DE VARELA') { echo 'selected'; } ?>>PALMAR DE VARELA</option>
                                   <option value='PALMAS DEL SOCORRO' <?php if ($usuario['ciudad']=='PALMAS DEL SOCORRO') { echo 'selected'; } ?>>PALMAS DEL SOCORRO</option>
                                   <option value='PALMIRA' <?php if ($usuario['ciudad']=='PALMIRA') { echo 'selected'; } ?>>PALMIRA</option>
                                   <option value='PALMITO' <?php if ($usuario['ciudad']=='PALMITO') { echo 'selected'; } ?>>PALMITO</option>
                                   <option value='PALOCABILDO' <?php if ($usuario['ciudad']=='PALOCABILDO') { echo 'selected'; } ?>>PALOCABILDO</option>
                                   <option value='PAMPLONA' <?php if ($usuario['ciudad']=='PAMPLONA') { echo 'selected'; } ?>>PAMPLONA</option>
                                   <option value='PAMPLONITA' <?php if ($usuario['ciudad']=='PAMPLONITA') { echo 'selected'; } ?>>PAMPLONITA</option>
                                   <option value='PANA PANA' <?php if ($usuario['ciudad']=='PANA PANA') { echo 'selected'; } ?>>PANA PANA</option>
                                   <option value='PANDI' <?php if ($usuario['ciudad']=='PANDI') { echo 'selected'; } ?>>PANDI</option>
                                   <option value='PANQUEBA' <?php if ($usuario['ciudad']=='PANQUEBA') { echo 'selected'; } ?>>PANQUEBA</option>
                                   <option value='PAPUNAUA' <?php if ($usuario['ciudad']=='PAPUNAUA') { echo 'selected'; } ?>>PAPUNAUA</option>
                                   <option value='PARAMO' <?php if ($usuario['ciudad']=='PARAMO') { echo 'selected'; } ?>>PARAMO</option>
                                   <option value='PARATEBUENO' <?php if ($usuario['ciudad']=='PARATEBUENO') { echo 'selected'; } ?>>PARATEBUENO</option>
                                   <option value='PASCA' <?php if ($usuario['ciudad']=='PASCA') { echo 'selected'; } ?>>PASCA</option>
                                   <option value='PASTO' <?php if ($usuario['ciudad']=='PASTO') { echo 'selected'; } ?>>PASTO</option>
                                   <option value='PATIA' <?php if ($usuario['ciudad']=='PATIA') { echo 'selected'; } ?>>PATIA</option>
                                   <option value='PAUNA' <?php if ($usuario['ciudad']=='PAUNA') { echo 'selected'; } ?>>PAUNA</option>
                                   <option value='PAYA' <?php if ($usuario['ciudad']=='PAYA') { echo 'selected'; } ?>>PAYA</option>
                                   <option value='PAZ DE ARIPORO' <?php if ($usuario['ciudad']=='PAZ DE ARIPORO') { echo 'selected'; } ?>>PAZ DE ARIPORO</option>
                                   <option value='PAZ DE RIO' <?php if ($usuario['ciudad']=='PAZ DE RIO') { echo 'selected'; } ?>>PAZ DE RIO</option>
                                   <option value='PEÐOL' <?php if ($usuario['ciudad']=='PEÐOL') { echo 'selected'; } ?>>PEÐOL</option>
                                   <option value='PEDRAZA' <?php if ($usuario['ciudad']=='PEDRAZA') { echo 'selected'; } ?>>PEDRAZA</option>
                                   <option value='PELAYA' <?php if ($usuario['ciudad']=='PELAYA') { echo 'selected'; } ?>>PELAYA</option>
                                   <option value='PENSILVANIA' <?php if ($usuario['ciudad']=='PENSILVANIA') { echo 'selected'; } ?>>PENSILVANIA</option>
                                   <option value='PEQUE' <?php if ($usuario['ciudad']=='PEQUE') { echo 'selected'; } ?>>PEQUE</option>
                                   <option value='PEREIRA' <?php if ($usuario['ciudad']=='PEREIRA') { echo 'selected'; } ?>>PEREIRA</option>
                                   <option value='PESCA' <?php if ($usuario['ciudad']=='PESCA') { echo 'selected'; } ?>>PESCA</option>
                                   <option value='PIAMONTE' <?php if ($usuario['ciudad']=='PIAMONTE') { echo 'selected'; } ?>>PIAMONTE</option>
                                   <option value='PIEDECUESTA' <?php if ($usuario['ciudad']=='PIEDECUESTA') { echo 'selected'; } ?>>PIEDECUESTA</option>
                                   <option value='PIEDRAS' <?php if ($usuario['ciudad']=='PIEDRAS') { echo 'selected'; } ?>>PIEDRAS</option>
                                   <option value='PIENDAMO' <?php if ($usuario['ciudad']=='PIENDAMO') { echo 'selected'; } ?>>PIENDAMO</option>
                                   <option value='PIJAO' <?php if ($usuario['ciudad']=='PIJAO') { echo 'selected'; } ?>>PIJAO</option>
                                   <option value='PIJIÑO DEL CARMEN' <?php if ($usuario['ciudad']=='PIJIÑO DEL CARMEN') { echo 'selected'; } ?>>PIJIÑO DEL CARMEN</option>
                                   <option value='PINCHOTE' <?php if ($usuario['ciudad']=='PINCHOTE') { echo 'selected'; } ?>>PINCHOTE</option>
                                   <option value='PINILLOS' <?php if ($usuario['ciudad']=='PINILLOS') { echo 'selected'; } ?>>PINILLOS</option>
                                   <option value='PIOJO' <?php if ($usuario['ciudad']=='PIOJO') { echo 'selected'; } ?>>PIOJO</option>
                                   <option value='PISBA' <?php if ($usuario['ciudad']=='PISBA') { echo 'selected'; } ?>>PISBA</option>
                                   <option value='PITAL' <?php if ($usuario['ciudad']=='PITAL') { echo 'selected'; } ?>>PITAL</option>
                                   <option value='PITALITO' <?php if ($usuario['ciudad']=='PITALITO') { echo 'selected'; } ?>>PITALITO</option>
                                   <option value='PIVIJAY' <?php if ($usuario['ciudad']=='PIVIJAY') { echo 'selected'; } ?>>PIVIJAY</option>
                                   <option value='PLANADAS' <?php if ($usuario['ciudad']=='PLANADAS') { echo 'selected'; } ?>>PLANADAS</option>
                                   <option value='PLANETA RICA' <?php if ($usuario['ciudad']=='PLANETA RICA') { echo 'selected'; } ?>>PLANETA RICA</option>
                                   <option value='PLATO' <?php if ($usuario['ciudad']=='PLATO') { echo 'selected'; } ?>>PLATO</option>
                                   <option value='POLICARPA' <?php if ($usuario['ciudad']=='POLICARPA') { echo 'selected'; } ?>>POLICARPA</option>
                                   <option value='POLONUEVO' <?php if ($usuario['ciudad']=='POLONUEVO') { echo 'selected'; } ?>>POLONUEVO</option>
                                   <option value='PONEDERA' <?php if ($usuario['ciudad']=='PONEDERA') { echo 'selected'; } ?>>PONEDERA</option>
                                   <option value='POPAYAN' <?php if ($usuario['ciudad']=='POPAYAN') { echo 'selected'; } ?>>POPAYAN</option>
                                   <option value='PORE' <?php if ($usuario['ciudad']=='PORE') { echo 'selected'; } ?>>PORE</option>
                                   <option value='POTOSI' <?php if ($usuario['ciudad']=='POTOSI') { echo 'selected'; } ?>>POTOSI</option>
                                   <option value='PRADERA' <?php if ($usuario['ciudad']=='PRADERA') { echo 'selected'; } ?>>PRADERA</option>
                                   <option value='PRADO' <?php if ($usuario['ciudad']=='PRADO') { echo 'selected'; } ?>>PRADO</option>
                                   <option value='PROVIDENCIA' <?php if ($usuario['ciudad']=='PROVIDENCIA') { echo 'selected'; } ?>>PROVIDENCIA</option>
                                   <option value='PROVIDENCIA' <?php if ($usuario['ciudad']=='PROVIDENCIA') { echo 'selected'; } ?>>PROVIDENCIA</option>
                                   <option value='PUEBLO BELLO' <?php if ($usuario['ciudad']=='PUEBLO BELLO') { echo 'selected'; } ?>>PUEBLO BELLO</option>
                                   <option value='PUEBLO NUEVO' <?php if ($usuario['ciudad']=='PUEBLO NUEVO') { echo 'selected'; } ?>>PUEBLO NUEVO</option>
                                   <option value='PUEBLO RICO' <?php if ($usuario['ciudad']=='PUEBLO RICO') { echo 'selected'; } ?>>PUEBLO RICO</option>
                                   <option value='PUEBLORRICO' <?php if ($usuario['ciudad']=='PUEBLORRICO') { echo 'selected'; } ?>>PUEBLORRICO</option>
                                   <option value='PUEBLOVIEJO' <?php if ($usuario['ciudad']=='PUEBLOVIEJO') { echo 'selected'; } ?>>PUEBLOVIEJO</option>
                                   <option value='PUENTE NACIONAL' <?php if ($usuario['ciudad']=='PUENTE NACIONAL') { echo 'selected'; } ?>>PUENTE NACIONAL</option>
                                   <option value='PUERRES' <?php if ($usuario['ciudad']=='PUERRES') { echo 'selected'; } ?>>PUERRES</option>
                                   <option value='PUERTO ALEGRIA' <?php if ($usuario['ciudad']=='PUERTO ALEGRIA') { echo 'selected'; } ?>>PUERTO ALEGRIA</option>
                                   <option value='PUERTO ARICA' <?php if ($usuario['ciudad']=='PUERTO ARICA') { echo 'selected'; } ?>>PUERTO ARICA</option>
                                   <option value='PUERTO ASIS' <?php if ($usuario['ciudad']=='PUERTO ASIS') { echo 'selected'; } ?>>PUERTO ASIS</option>
                                   <option value='PUERTO BERRIO' <?php if ($usuario['ciudad']=='PUERTO BERRIO') { echo 'selected'; } ?>>PUERTO BERRIO</option>
                                   <option value='PUERTO BOYACA' <?php if ($usuario['ciudad']=='PUERTO BOYACA') { echo 'selected'; } ?>>PUERTO BOYACA</option>
                                   <option value='PUERTO CAICEDO' <?php if ($usuario['ciudad']=='PUERTO CAICEDO') { echo 'selected'; } ?>>PUERTO CAICEDO</option>
                                   <option value='PUERTO CARREÑO' <?php if ($usuario['ciudad']=='PUERTO CARREÑO') { echo 'selected'; } ?>>PUERTO CARREÑO</option>
                                   <option value='PUERTO COLOMBIA' <?php if ($usuario['ciudad']=='PUERTO COLOMBIA') { echo 'selected'; } ?>>PUERTO COLOMBIA</option>
                                   <option value='PUERTO COLOMBIA' <?php if ($usuario['ciudad']=='PUERTO COLOMBIA') { echo 'selected'; } ?>>PUERTO COLOMBIA</option>
                                   <option value='PUERTO CONCORDIA' <?php if ($usuario['ciudad']=='PUERTO CONCORDIA') { echo 'selected'; } ?>>PUERTO CONCORDIA</option>
                                   <option value='PUERTO ESCONDIDO' <?php if ($usuario['ciudad']=='PUERTO ESCONDIDO') { echo 'selected'; } ?>>PUERTO ESCONDIDO</option>
                                   <option value='PUERTO GAITAN' <?php if ($usuario['ciudad']=='PUERTO GAITAN') { echo 'selected'; } ?>>PUERTO GAITAN</option>
                                   <option value='PUERTO GUZMAN' <?php if ($usuario['ciudad']=='PUERTO GUZMAN') { echo 'selected'; } ?>>PUERTO GUZMAN</option>
                                   <option value='PUERTO LIBERTADOR' <?php if ($usuario['ciudad']=='PUERTO LIBERTADOR') { echo 'selected'; } ?>>PUERTO LIBERTADOR</option>
                                   <option value='PUERTO LLERAS' <?php if ($usuario['ciudad']=='PUERTO LLERAS') { echo 'selected'; } ?>>PUERTO LLERAS</option>
                                   <option value='PUERTO LOPEZ' <?php if ($usuario['ciudad']=='PUERTO LOPEZ') { echo 'selected'; } ?>>PUERTO LOPEZ</option>
                                   <option value='PUERTO NARE' <?php if ($usuario['ciudad']=='PUERTO NARE') { echo 'selected'; } ?>>PUERTO NARE</option>
                                   <option value='PUERTO NARIÑO' <?php if ($usuario['ciudad']=='PUERTO NARIÑO') { echo 'selected'; } ?>>PUERTO NARIÑO</option>
                                   <option value='PUERTO PARRA' <?php if ($usuario['ciudad']=='PUERTO PARRA') { echo 'selected'; } ?>>PUERTO PARRA</option>
                                   <option value='PUERTO RICO' <?php if ($usuario['ciudad']=='PUERTO RICO') { echo 'selected'; } ?>>PUERTO RICO</option>
                                   <option value='PUERTO RICO' <?php if ($usuario['ciudad']=='PUERTO RICO') { echo 'selected'; } ?>>PUERTO RICO</option>
                                   <option value='PUERTO RONDON' <?php if ($usuario['ciudad']=='PUERTO RONDON') { echo 'selected'; } ?>>PUERTO RONDON</option>
                                   <option value='PUERTO SALGAR' <?php if ($usuario['ciudad']=='PUERTO SALGAR') { echo 'selected'; } ?>>PUERTO SALGAR</option>
                                   <option value='PUERTO SANTANDER' <?php if ($usuario['ciudad']=='PUERTO SANTANDER') { echo 'selected'; } ?>>PUERTO SANTANDER</option>
                                   <option value='PUERTO SANTANDER' <?php if ($usuario['ciudad']=='PUERTO SANTANDER') { echo 'selected'; } ?>>PUERTO SANTANDER</option>
                                   <option value='PUERTO TEJADA' <?php if ($usuario['ciudad']=='PUERTO TEJADA') { echo 'selected'; } ?>>PUERTO TEJADA</option>
                                   <option value='PUERTO TRIUNFO' <?php if ($usuario['ciudad']=='PUERTO TRIUNFO') { echo 'selected'; } ?>>PUERTO TRIUNFO</option>
                                   <option value='PUERTO WILCHES' <?php if ($usuario['ciudad']=='PUERTO WILCHES') { echo 'selected'; } ?>>PUERTO WILCHES</option>
                                   <option value='PULI' <?php if ($usuario['ciudad']=='PULI') { echo 'selected'; } ?>>PULI</option>
                                   <option value='PUPIALES' <?php if ($usuario['ciudad']=='PUPIALES') { echo 'selected'; } ?>>PUPIALES</option>
                                   <option value='PURACE' <?php if ($usuario['ciudad']=='PURACE') { echo 'selected'; } ?>>PURACE</option>
                                   <option value='PURIFICACION' <?php if ($usuario['ciudad']=='PURIFICACION') { echo 'selected'; } ?>>PURIFICACION</option>
                                   <option value='PURISIMA' <?php if ($usuario['ciudad']=='PURISIMA') { echo 'selected'; } ?>>PURISIMA</option>
                                   <option value='QUEBRADANEGRA' <?php if ($usuario['ciudad']=='QUEBRADANEGRA') { echo 'selected'; } ?>>QUEBRADANEGRA</option>
                                   <option value='QUETAME' <?php if ($usuario['ciudad']=='QUETAME') { echo 'selected'; } ?>>QUETAME</option>
                                   <option value='QUIBDO' <?php if ($usuario['ciudad']=='QUIBDO') { echo 'selected'; } ?>>QUIBDO</option>
                                   <option value='QUIMBAYA' <?php if ($usuario['ciudad']=='QUIMBAYA') { echo 'selected'; } ?>>QUIMBAYA</option>
                                   <option value='QUINCHIA' <?php if ($usuario['ciudad']=='QUINCHIA') { echo 'selected'; } ?>>QUINCHIA</option>
                                   <option value='QUIPAMA' <?php if ($usuario['ciudad']=='QUIPAMA') { echo 'selected'; } ?>>QUIPAMA</option>
                                   <option value='QUIPILE' <?php if ($usuario['ciudad']=='QUIPILE') { echo 'selected'; } ?>>QUIPILE</option>
                                   <option value='RAGONVALIA' <?php if ($usuario['ciudad']=='RAGONVALIA') { echo 'selected'; } ?>>RAGONVALIA</option>
                                   <option value='RAMIRIQUI' <?php if ($usuario['ciudad']=='RAMIRIQUI') { echo 'selected'; } ?>>RAMIRIQUI</option>
                                   <option value='RAQUIRA' <?php if ($usuario['ciudad']=='RAQUIRA') { echo 'selected'; } ?>>RAQUIRA</option>
                                   <option value='RECETOR' <?php if ($usuario['ciudad']=='RECETOR') { echo 'selected'; } ?>>RECETOR</option>
                                   <option value='REGIDOR' <?php if ($usuario['ciudad']=='REGIDOR') { echo 'selected'; } ?>>REGIDOR</option>
                                   <option value='REMEDIOS' <?php if ($usuario['ciudad']=='REMEDIOS') { echo 'selected'; } ?>>REMEDIOS</option>
                                   <option value='REMOLINO' <?php if ($usuario['ciudad']=='REMOLINO') { echo 'selected'; } ?>>REMOLINO</option>
                                   <option value='REPELON' <?php if ($usuario['ciudad']=='REPELON') { echo 'selected'; } ?>>REPELON</option>
                                   <option value='RESTREPO' <?php if ($usuario['ciudad']=='RESTREPO') { echo 'selected'; } ?>>RESTREPO</option>
                                   <option value='RESTREPO' <?php if ($usuario['ciudad']=='RESTREPO') { echo 'selected'; } ?>>RESTREPO</option>
                                   <option value='RETIRO' <?php if ($usuario['ciudad']=='RETIRO') { echo 'selected'; } ?>>RETIRO</option>
                                   <option value='RICAURTE' <?php if ($usuario['ciudad']=='RICAURTE') { echo 'selected'; } ?>>RICAURTE</option>
                                   <option value='RICAURTE' <?php if ($usuario['ciudad']=='RICAURTE') { echo 'selected'; } ?>>RICAURTE</option>
                                   <option value='RIO DE ORO' <?php if ($usuario['ciudad']=='RIO DE ORO') { echo 'selected'; } ?>>RIO DE ORO</option>
                                   <option value='RIO IRO' <?php if ($usuario['ciudad']=='RIO IRO') { echo 'selected'; } ?>>RIO IRO</option>
                                   <option value='RIO QUITO' <?php if ($usuario['ciudad']=='RIO QUITO') { echo 'selected'; } ?>>RIO QUITO</option>
                                   <option value='RIO VIEJO' <?php if ($usuario['ciudad']=='RIO VIEJO') { echo 'selected'; } ?>>RIO VIEJO</option>
                                   <option value='RIOBLANCO' <?php if ($usuario['ciudad']=='RIOBLANCO') { echo 'selected'; } ?>>RIOBLANCO</option>
                                   <option value='RIOFRIO' <?php if ($usuario['ciudad']=='RIOFRIO') { echo 'selected'; } ?>>RIOFRIO</option>
                                   <option value='RIOHACHA' <?php if ($usuario['ciudad']=='RIOHACHA') { echo 'selected'; } ?>>RIOHACHA</option>
                                   <option value='RIONEGRO' <?php if ($usuario['ciudad']=='RIONEGRO') { echo 'selected'; } ?>>RIONEGRO</option>
                                   <option value='RIONEGRO' <?php if ($usuario['ciudad']=='RIONEGRO') { echo 'selected'; } ?>>RIONEGRO</option>
                                   <option value='RIOSUCIO' <?php if ($usuario['ciudad']=='RIOSUCIO') { echo 'selected'; } ?>>RIOSUCIO</option>
                                   <option value='RIOSUCIO' <?php if ($usuario['ciudad']=='RIOSUCIO') { echo 'selected'; } ?>>RIOSUCIO</option>
                                   <option value='RISARALDA' <?php if ($usuario['ciudad']=='RISARALDA') { echo 'selected'; } ?>>RISARALDA</option>
                                   <option value='RIVERA' <?php if ($usuario['ciudad']=='RIVERA') { echo 'selected'; } ?>>RIVERA</option>
                                   <option value='ROBERTO PAYAN' <?php if ($usuario['ciudad']=='ROBERTO PAYAN') { echo 'selected'; } ?>>ROBERTO PAYAN</option>
                                   <option value='ROLDANILLO' <?php if ($usuario['ciudad']=='ROLDANILLO') { echo 'selected'; } ?>>ROLDANILLO</option>
                                   <option value='RONCESVALLES' <?php if ($usuario['ciudad']=='RONCESVALLES') { echo 'selected'; } ?>>RONCESVALLES</option>
                                   <option value='RONDON' <?php if ($usuario['ciudad']=='RONDON') { echo 'selected'; } ?>>RONDON</option>
                                   <option value='ROSAS' <?php if ($usuario['ciudad']=='ROSAS') { echo 'selected'; } ?>>ROSAS</option>
                                   <option value='ROVIRA' <?php if ($usuario['ciudad']=='ROVIRA') { echo 'selected'; } ?>>ROVIRA</option>
                                   <option value='SABANA DE TORRES' <?php if ($usuario['ciudad']=='SABANA DE TORRES') { echo 'selected'; } ?>>SABANA DE TORRES</option>
                                   <option value='SABANAGRANDE' <?php if ($usuario['ciudad']=='SABANAGRANDE') { echo 'selected'; } ?>>SABANAGRANDE</option>
                                   <option value='SABANALARGA' <?php if ($usuario['ciudad']=='SABANALARGA') { echo 'selected'; } ?>>SABANALARGA</option>
                                   <option value='SABANALARGA' <?php if ($usuario['ciudad']=='SABANALARGA') { echo 'selected'; } ?>>SABANALARGA</option>
                                   <option value='SABANALARGA' <?php if ($usuario['ciudad']=='SABANALARGA') { echo 'selected'; } ?>>SABANALARGA</option>
                                   <option value='SABANAS DE SAN ANGEL' <?php if ($usuario['ciudad']=='SABANAS DE SAN ANGEL') { echo 'selected'; } ?>>SABANAS DE SAN ANGEL</option>
                                   <option value='SABANETA' <?php if ($usuario['ciudad']=='SABANETA') { echo 'selected'; } ?>>SABANETA</option>
                                   <option value='SABOYA' <?php if ($usuario['ciudad']=='SABOYA') { echo 'selected'; } ?>>SABOYA</option>
                                   <option value='SACAMA' <?php if ($usuario['ciudad']=='SACAMA') { echo 'selected'; } ?>>SACAMA</option>
                                   <option value='SACHICA' <?php if ($usuario['ciudad']=='SACHICA') { echo 'selected'; } ?>>SACHICA</option>
                                   <option value='SAHAGUN' <?php if ($usuario['ciudad']=='SAHAGUN') { echo 'selected'; } ?>>SAHAGUN</option>
                                   <option value='SALADOBLANCO' <?php if ($usuario['ciudad']=='SALADOBLANCO') { echo 'selected'; } ?>>SALADOBLANCO</option>
                                   <option value='SALAMINA' <?php if ($usuario['ciudad']=='SALAMINA') { echo 'selected'; } ?>>SALAMINA</option>
                                   <option value='SALAMINA' <?php if ($usuario['ciudad']=='SALAMINA') { echo 'selected'; } ?>>SALAMINA</option>
                                   <option value='SALAZAR' <?php if ($usuario['ciudad']=='SALAZAR') { echo 'selected'; } ?>>SALAZAR</option>
                                   <option value='SALDAÑA' <?php if ($usuario['ciudad']=='SALDAÑA') { echo 'selected'; } ?>>SALDAÑA</option>
                                   <option value='SALENTO' <?php if ($usuario['ciudad']=='SALENTO') { echo 'selected'; } ?>>SALENTO</option>
                                   <option value='SALGAR' <?php if ($usuario['ciudad']=='SALGAR') { echo 'selected'; } ?>>SALGAR</option>
                                   <option value='SAMACA' <?php if ($usuario['ciudad']=='SAMACA') { echo 'selected'; } ?>>SAMACA</option>
                                   <option value='SAMANA' <?php if ($usuario['ciudad']=='SAMANA') { echo 'selected'; } ?>>SAMANA</option>
                                   <option value='SAMANIEGO' <?php if ($usuario['ciudad']=='SAMANIEGO') { echo 'selected'; } ?>>SAMANIEGO</option>
                                   <option value='SAMPUES' <?php if ($usuario['ciudad']=='SAMPUES') { echo 'selected'; } ?>>SAMPUES</option>
                                   <option value='SAN AGUSTIN' <?php if ($usuario['ciudad']=='SAN AGUSTIN') { echo 'selected'; } ?>>SAN AGUSTIN</option>
                                   <option value='SAN ALBERTO' <?php if ($usuario['ciudad']=='SAN ALBERTO') { echo 'selected'; } ?>>SAN ALBERTO</option>
                                   <option value='SAN ANDRES' <?php if ($usuario['ciudad']=='SAN ANDRES') { echo 'selected'; } ?>>SAN ANDRES</option>
                                   <option value='SAN ANDRES' <?php if ($usuario['ciudad']=='SAN ANDRES') { echo 'selected'; } ?>>SAN ANDRES</option>
                                   <option value='SAN ANDRES DE CUERQUIA' <?php if ($usuario['ciudad']=='SAN ANDRES DE CUERQUIA') { echo 'selected'; } ?>>SAN ANDRES DE CUERQUIA</option>
                                   <option value='SAN ANDRES DE TUMACO' <?php if ($usuario['ciudad']=='SAN ANDRES DE TUMACO') { echo 'selected'; } ?>>SAN ANDRES DE TUMACO</option>
                                   <option value='SAN ANDRES SOTAVENTO' <?php if ($usuario['ciudad']=='SAN ANDRES SOTAVENTO') { echo 'selected'; } ?>>SAN ANDRES SOTAVENTO</option>
                                   <option value='SAN ANTERO' <?php if ($usuario['ciudad']=='SAN ANTERO') { echo 'selected'; } ?>>SAN ANTERO</option>
                                   <option value='SAN ANTONIO' <?php if ($usuario['ciudad']=='SAN ANTONIO') { echo 'selected'; } ?>>SAN ANTONIO</option>
                                   <option value='SAN ANTONIO DEL TEQUENDAMA' <?php if ($usuario['ciudad']=='SAN ANTONIO DEL TEQUENDAMA') { echo 'selected'; } ?>>SAN ANTONIO DEL TEQUENDAMA</option>
                                   <option value='SAN BENITO' <?php if ($usuario['ciudad']=='SAN BENITO') { echo 'selected'; } ?>>SAN BENITO</option>
                                   <option value='SAN BENITO ABAD' <?php if ($usuario['ciudad']=='SAN BENITO ABAD') { echo 'selected'; } ?>>SAN BENITO ABAD</option>
                                   <option value='SAN BERNARDO' <?php if ($usuario['ciudad']=='SAN BERNARDO') { echo 'selected'; } ?>>SAN BERNARDO</option>
                                   <option value='SAN BERNARDO' <?php if ($usuario['ciudad']=='SAN BERNARDO') { echo 'selected'; } ?>>SAN BERNARDO</option>
                                   <option value='SAN BERNARDO DEL VIENTO' <?php if ($usuario['ciudad']=='SAN BERNARDO DEL VIENTO') { echo 'selected'; } ?>>SAN BERNARDO DEL VIENTO</option>
                                   <option value='SAN CALIXTO' <?php if ($usuario['ciudad']=='SAN CALIXTO') { echo 'selected'; } ?>>SAN CALIXTO</option>
                                   <option value='SAN CARLOS' <?php if ($usuario['ciudad']=='SAN CARLOS') { echo 'selected'; } ?>>SAN CARLOS</option>
                                   <option value='SAN CARLOS' <?php if ($usuario['ciudad']=='SAN CARLOS') { echo 'selected'; } ?>>SAN CARLOS</option>
                                   <option value='SAN CARLOS DE GUAROA' <?php if ($usuario['ciudad']=='SAN CARLOS DE GUAROA') { echo 'selected'; } ?>>SAN CARLOS DE GUAROA</option>
                                   <option value='SAN CAYETANO' <?php if ($usuario['ciudad']=='SAN CAYETANO') { echo 'selected'; } ?>>SAN CAYETANO</option>
                                   <option value='SAN CAYETANO' <?php if ($usuario['ciudad']=='SAN CAYETANO') { echo 'selected'; } ?>>SAN CAYETANO</option>
                                   <option value='SAN CRISTOBAL' <?php if ($usuario['ciudad']=='SAN CRISTOBAL') { echo 'selected'; } ?>>SAN CRISTOBAL</option>
                                   <option value='SAN DIEGO' <?php if ($usuario['ciudad']=='SAN DIEGO') { echo 'selected'; } ?>>SAN DIEGO</option>
                                   <option value='SAN EDUARDO' <?php if ($usuario['ciudad']=='SAN EDUARDO') { echo 'selected'; } ?>>SAN EDUARDO</option>
                                   <option value='SAN ESTANISLAO' <?php if ($usuario['ciudad']=='SAN ESTANISLAO') { echo 'selected'; } ?>>SAN ESTANISLAO</option>
                                   <option value='SAN FELIPE' <?php if ($usuario['ciudad']=='SAN FELIPE') { echo 'selected'; } ?>>SAN FELIPE</option>
                                   <option value='SAN FERNANDO' <?php if ($usuario['ciudad']=='SAN FERNANDO') { echo 'selected'; } ?>>SAN FERNANDO</option>
                                   <option value='SAN FRANCISCO' <?php if ($usuario['ciudad']=='SAN FRANCISCO') { echo 'selected'; } ?>>SAN FRANCISCO</option>
                                   <option value='SAN FRANCISCO' <?php if ($usuario['ciudad']=='SAN FRANCISCO') { echo 'selected'; } ?>>SAN FRANCISCO</option>
                                   <option value='SAN FRANCISCO' <?php if ($usuario['ciudad']=='SAN FRANCISCO') { echo 'selected'; } ?>>SAN FRANCISCO</option>
                                   <option value='SAN GIL' <?php if ($usuario['ciudad']=='SAN GIL') { echo 'selected'; } ?>>SAN GIL</option>
                                   <option value='SAN JACINTO' <?php if ($usuario['ciudad']=='SAN JACINTO') { echo 'selected'; } ?>>SAN JACINTO</option>
                                   <option value='SAN JACINTO DEL CAUCA' <?php if ($usuario['ciudad']=='SAN JACINTO DEL CAUCA') { echo 'selected'; } ?>>SAN JACINTO DEL CAUCA</option>
                                   <option value='SAN JERONIMO' <?php if ($usuario['ciudad']=='SAN JERONIMO') { echo 'selected'; } ?>>SAN JERONIMO</option>
                                   <option value='SAN JOAQUIN' <?php if ($usuario['ciudad']=='SAN JOAQUIN') { echo 'selected'; } ?>>SAN JOAQUIN</option>
                                   <option value='SAN JOSE' <?php if ($usuario['ciudad']=='SAN JOSE') { echo 'selected'; } ?>>SAN JOSE</option>
                                   <option value='SAN JOSE DE LA MONTAÑA' <?php if ($usuario['ciudad']=='SAN JOSE DE LA MONTAÑA') { echo 'selected'; } ?>>SAN JOSE DE LA MONTAÑA</option>
                                   <option value='SAN JOSE DE MIRANDA' <?php if ($usuario['ciudad']=='SAN JOSE DE MIRANDA') { echo 'selected'; } ?>>SAN JOSE DE MIRANDA</option>
                                   <option value='SAN JOSE DE PARE' <?php if ($usuario['ciudad']=='SAN JOSE DE PARE') { echo 'selected'; } ?>>SAN JOSE DE PARE</option>
                                   <option value='SAN JOSE DEL FRAGUA' <?php if ($usuario['ciudad']=='SAN JOSE DEL FRAGUA') { echo 'selected'; } ?>>SAN JOSE DEL FRAGUA</option>
                                   <option value='SAN JOSE DEL GUAVIARE' <?php if ($usuario['ciudad']=='SAN JOSE DEL GUAVIARE') { echo 'selected'; } ?>>SAN JOSE DEL GUAVIARE</option>
                                   <option value='SAN JOSE DEL PALMAR' <?php if ($usuario['ciudad']=='SAN JOSE DEL PALMAR') { echo 'selected'; } ?>>SAN JOSE DEL PALMAR</option>
                                   <option value='SAN JUAN DE ARAMA' <?php if ($usuario['ciudad']=='SAN JUAN DE ARAMA') { echo 'selected'; } ?>>SAN JUAN DE ARAMA</option>
                                   <option value='SAN JUAN DE BETULIA' <?php if ($usuario['ciudad']=='SAN JUAN DE BETULIA') { echo 'selected'; } ?>>SAN JUAN DE BETULIA</option>
                                   <option value='SAN JUAN DE RIO SECO' <?php if ($usuario['ciudad']=='SAN JUAN DE RIO SECO') { echo 'selected'; } ?>>SAN JUAN DE RIO SECO</option>
                                   <option value='SAN JUAN DE URABA' <?php if ($usuario['ciudad']=='SAN JUAN DE URABA') { echo 'selected'; } ?>>SAN JUAN DE URABA</option>
                                   <option value='SAN JUAN DEL CESAR' <?php if ($usuario['ciudad']=='SAN JUAN DEL CESAR') { echo 'selected'; } ?>>SAN JUAN DEL CESAR</option>
                                   <option value='SAN JUAN NEPOMUCENO' <?php if ($usuario['ciudad']=='SAN JUAN NEPOMUCENO') { echo 'selected'; } ?>>SAN JUAN NEPOMUCENO</option>
                                   <option value='SAN JUANITO' <?php if ($usuario['ciudad']=='SAN JUANITO') { echo 'selected'; } ?>>SAN JUANITO</option>
                                   <option value='SAN LORENZO' <?php if ($usuario['ciudad']=='SAN LORENZO') { echo 'selected'; } ?>>SAN LORENZO</option>
                                   <option value='SAN LUIS' <?php if ($usuario['ciudad']=='SAN LUIS') { echo 'selected'; } ?>>SAN LUIS</option>
                                   <option value='SAN LUIS' <?php if ($usuario['ciudad']=='SAN LUIS') { echo 'selected'; } ?>>SAN LUIS</option>
                                   <option value='SAN LUIS DE GACENO' <?php if ($usuario['ciudad']=='SAN LUIS DE GACENO') { echo 'selected'; } ?>>SAN LUIS DE GACENO</option>
                                   <option value='SAN LUIS DE PALENQUE' <?php if ($usuario['ciudad']=='SAN LUIS DE PALENQUE') { echo 'selected'; } ?>>SAN LUIS DE PALENQUE</option>
                                   <option value='SAN LUIS DE SINCE' <?php if ($usuario['ciudad']=='SAN LUIS DE SINCE') { echo 'selected'; } ?>>SAN LUIS DE SINCE</option>
                                   <option value='SAN MARCOS' <?php if ($usuario['ciudad']=='SAN MARCOS') { echo 'selected'; } ?>>SAN MARCOS</option>
                                   <option value='SAN MARTIN' <?php if ($usuario['ciudad']=='SAN MARTIN') { echo 'selected'; } ?>>SAN MARTIN</option>
                                   <option value='SAN MARTIN' <?php if ($usuario['ciudad']=='SAN MARTIN') { echo 'selected'; } ?>>SAN MARTIN</option>
                                   <option value='SAN MARTIN DE LOBA' <?php if ($usuario['ciudad']=='SAN MARTIN DE LOBA') { echo 'selected'; } ?>>SAN MARTIN DE LOBA</option>
                                   <option value='SAN MATEO' <?php if ($usuario['ciudad']=='SAN MATEO') { echo 'selected'; } ?>>SAN MATEO</option>
                                   <option value='SAN MIGUEL' <?php if ($usuario['ciudad']=='SAN MIGUEL') { echo 'selected'; } ?>>SAN MIGUEL</option>
                                   <option value='SAN MIGUEL' <?php if ($usuario['ciudad']=='SAN MIGUEL') { echo 'selected'; } ?>>SAN MIGUEL</option>
                                   <option value='SAN MIGUEL DE SEMA' <?php if ($usuario['ciudad']=='SAN MIGUEL DE SEMA') { echo 'selected'; } ?>>SAN MIGUEL DE SEMA</option>
                                   <option value='SAN ONOFRE' <?php if ($usuario['ciudad']=='SAN ONOFRE') { echo 'selected'; } ?>>SAN ONOFRE</option>
                                   <option value='SAN PABLO' <?php if ($usuario['ciudad']=='SAN PABLO') { echo 'selected'; } ?>>SAN PABLO</option>
                                   <option value='SAN PABLO' <?php if ($usuario['ciudad']=='SAN PABLO') { echo 'selected'; } ?>>SAN PABLO</option>
                                   <option value='SAN PABLO DE BORBUR' <?php if ($usuario['ciudad']=='SAN PABLO DE BORBUR') { echo 'selected'; } ?>>SAN PABLO DE BORBUR</option>
                                   <option value='SAN PEDRO' <?php if ($usuario['ciudad']=='SAN PEDRO') { echo 'selected'; } ?>>SAN PEDRO</option>
                                   <option value='SAN PEDRO' <?php if ($usuario['ciudad']=='SAN PEDRO') { echo 'selected'; } ?>>SAN PEDRO</option>
                                   <option value='SAN PEDRO' <?php if ($usuario['ciudad']=='SAN PEDRO') { echo 'selected'; } ?>>SAN PEDRO</option>
                                   <option value='SAN PEDRO DE CARTAGO' <?php if ($usuario['ciudad']=='SAN PEDRO DE CARTAGO') { echo 'selected'; } ?>>SAN PEDRO DE CARTAGO</option>
                                   <option value='SAN PEDRO DE URABA' <?php if ($usuario['ciudad']=='SAN PEDRO DE URABA') { echo 'selected'; } ?>>SAN PEDRO DE URABA</option>
                                   <option value='SAN PELAYO' <?php if ($usuario['ciudad']=='SAN PELAYO') { echo 'selected'; } ?>>SAN PELAYO</option>
                                   <option value='SAN RAFAEL' <?php if ($usuario['ciudad']=='SAN RAFAEL') { echo 'selected'; } ?>>SAN RAFAEL</option>
                                   <option value='SAN ROQUE' <?php if ($usuario['ciudad']=='SAN ROQUE') { echo 'selected'; } ?>>SAN ROQUE</option>
                                   <option value='SAN SEBASTIAN' <?php if ($usuario['ciudad']=='SAN SEBASTIAN') { echo 'selected'; } ?>>SAN SEBASTIAN</option>
                                   <option value='SAN SEBASTIAN DE BUENAVISTA' <?php if ($usuario['ciudad']=='SAN SEBASTIAN DE BUENAVISTA') { echo 'selected'; } ?>>SAN SEBASTIAN DE BUENAVISTA</option>
                                   <option value='SAN VICENTE' <?php if ($usuario['ciudad']=='SAN VICENTE') { echo 'selected'; } ?>>SAN VICENTE</option>
                                   <option value='SAN VICENTE DE CHUCURI' <?php if ($usuario['ciudad']=='SAN VICENTE DE CHUCURI') { echo 'selected'; } ?>>SAN VICENTE DE CHUCURI</option>
                                   <option value='SAN VICENTE DEL CAGUAN' <?php if ($usuario['ciudad']=='SAN VICENTE DEL CAGUAN') { echo 'selected'; } ?>>SAN VICENTE DEL CAGUAN</option>
                                   <option value='SAN ZENON' <?php if ($usuario['ciudad']=='SAN ZENON') { echo 'selected'; } ?>>SAN ZENON</option>
                                   <option value='SANDONA' <?php if ($usuario['ciudad']=='SANDONA') { echo 'selected'; } ?>>SANDONA</option>
                                   <option value='SANTA ANA' <?php if ($usuario['ciudad']=='SANTA ANA') { echo 'selected'; } ?>>SANTA ANA</option>
                                   <option value='SANTA BARBARA' <?php if ($usuario['ciudad']=='SANTA BARBARA') { echo 'selected'; } ?>>SANTA BARBARA</option>
                                   <option value='SANTA BARBARA' <?php if ($usuario['ciudad']=='SANTA BARBARA') { echo 'selected'; } ?>>SANTA BARBARA</option>
                                   <option value='SANTA BARBARA' <?php if ($usuario['ciudad']=='SANTA BARBARA') { echo 'selected'; } ?>>SANTA BARBARA</option>
                                   <option value='SANTA BARBARA DE PINTO' <?php if ($usuario['ciudad']=='SANTA BARBARA DE PINTO') { echo 'selected'; } ?>>SANTA BARBARA DE PINTO</option>
                                   <option value='SANTA CATALINA' <?php if ($usuario['ciudad']=='SANTA CATALINA') { echo 'selected'; } ?>>SANTA CATALINA</option>
                                   <option value='SANTA HELENA DEL OPON' <?php if ($usuario['ciudad']=='SANTA HELENA DEL OPON') { echo 'selected'; } ?>>SANTA HELENA DEL OPON</option>
                                   <option value='SANTA ISABEL' <?php if ($usuario['ciudad']=='SANTA ISABEL') { echo 'selected'; } ?>>SANTA ISABEL</option>
                                   <option value='SANTA LUCIA' <?php if ($usuario['ciudad']=='SANTA LUCIA') { echo 'selected'; } ?>>SANTA LUCIA</option>
                                   <option value='SANTA MARIA' <?php if ($usuario['ciudad']=='SANTA MARIA') { echo 'selected'; } ?>>SANTA MARIA</option>
                                   <option value='SANTA MARIA' <?php if ($usuario['ciudad']=='SANTA MARIA') { echo 'selected'; } ?>>SANTA MARIA</option>
                                   <option value='SANTA MARTA' <?php if ($usuario['ciudad']=='SANTA MARTA') { echo 'selected'; } ?>>SANTA MARTA</option>
                                   <option value='SANTA ROSA' <?php if ($usuario['ciudad']=='SANTA ROSA') { echo 'selected'; } ?>>SANTA ROSA</option>
                                   <option value='SANTA ROSA' <?php if ($usuario['ciudad']=='SANTA ROSA') { echo 'selected'; } ?>>SANTA ROSA</option>
                                   <option value='SANTA ROSA DE CABAL' <?php if ($usuario['ciudad']=='SANTA ROSA DE CABAL') { echo 'selected'; } ?>>SANTA ROSA DE CABAL</option>
                                   <option value='SANTA ROSA DE OSOS' <?php if ($usuario['ciudad']=='SANTA ROSA DE OSOS') { echo 'selected'; } ?>>SANTA ROSA DE OSOS</option>
                                   <option value='SANTA ROSA DE VITERBO' <?php if ($usuario['ciudad']=='SANTA ROSA DE VITERBO') { echo 'selected'; } ?>>SANTA ROSA DE VITERBO</option>
                                   <option value='SANTA ROSA DEL SUR' <?php if ($usuario['ciudad']=='SANTA ROSA DEL SUR') { echo 'selected'; } ?>>SANTA ROSA DEL SUR</option>
                                   <option value='SANTA ROSALIA' <?php if ($usuario['ciudad']=='SANTA ROSALIA') { echo 'selected'; } ?>>SANTA ROSALIA</option>
                                   <option value='SANTA SOFIA' <?php if ($usuario['ciudad']=='SANTA SOFIA') { echo 'selected'; } ?>>SANTA SOFIA</option>
                                   <option value='SANTACRUZ' <?php if ($usuario['ciudad']=='SANTACRUZ') { echo 'selected'; } ?>>SANTACRUZ</option>
                                   <option value='SANTAFE DE ANTIOQUIA' <?php if ($usuario['ciudad']=='SANTAFE DE ANTIOQUIA') { echo 'selected'; } ?>>SANTAFE DE ANTIOQUIA</option>
                                   <option value='SANTANA' <?php if ($usuario['ciudad']=='SANTANA') { echo 'selected'; } ?>>SANTANA</option>
                                   <option value='SANTANDER DE QUILICHAO' <?php if ($usuario['ciudad']=='SANTANDER DE QUILICHAO') { echo 'selected'; } ?>>SANTANDER DE QUILICHAO</option>
                                   <option value='SANTIAGO' <?php if ($usuario['ciudad']=='SANTIAGO') { echo 'selected'; } ?>>SANTIAGO</option>
                                   <option value='SANTIAGO' <?php if ($usuario['ciudad']=='SANTIAGO') { echo 'selected'; } ?>>SANTIAGO</option>
                                   <option value='SANTIAGO DE TOLU' <?php if ($usuario['ciudad']=='SANTIAGO DE TOLU') { echo 'selected'; } ?>>SANTIAGO DE TOLU</option>
                                   <option value='SANTO DOMINGO' <?php if ($usuario['ciudad']=='SANTO DOMINGO') { echo 'selected'; } ?>>SANTO DOMINGO</option>
                                   <option value='SANTO TOMAS' <?php if ($usuario['ciudad']=='SANTO TOMAS') { echo 'selected'; } ?>>SANTO TOMAS</option>
                                   <option value='SANTUARIO' <?php if ($usuario['ciudad']=='SANTUARIO') { echo 'selected'; } ?>>SANTUARIO</option>
                                   <option value='SAPUYES' <?php if ($usuario['ciudad']=='SAPUYES') { echo 'selected'; } ?>>SAPUYES</option>
                                   <option value='SARAVENA' <?php if ($usuario['ciudad']=='SARAVENA') { echo 'selected'; } ?>>SARAVENA</option>
                                   <option value='SARDINATA' <?php if ($usuario['ciudad']=='SARDINATA') { echo 'selected'; } ?>>SARDINATA</option>
                                   <option value='SASAIMA' <?php if ($usuario['ciudad']=='SASAIMA') { echo 'selected'; } ?>>SASAIMA</option>
                                   <option value='SATIVANORTE' <?php if ($usuario['ciudad']=='SATIVANORTE') { echo 'selected'; } ?>>SATIVANORTE</option>
                                   <option value='SATIVASUR' <?php if ($usuario['ciudad']=='SATIVASUR') { echo 'selected'; } ?>>SATIVASUR</option>
                                   <option value='SEGOVIA' <?php if ($usuario['ciudad']=='SEGOVIA') { echo 'selected'; } ?>>SEGOVIA</option>
                                   <option value='SESQUILE' <?php if ($usuario['ciudad']=='SESQUILE') { echo 'selected'; } ?>>SESQUILE</option>
                                   <option value='SEVILLA' <?php if ($usuario['ciudad']=='SEVILLA') { echo 'selected'; } ?>>SEVILLA</option>
                                   <option value='SIACHOQUE' <?php if ($usuario['ciudad']=='SIACHOQUE') { echo 'selected'; } ?>>SIACHOQUE</option>
                                   <option value='SIBATE' <?php if ($usuario['ciudad']=='SIBATE') { echo 'selected'; } ?>>SIBATE</option>
                                   <option value='SIBUNDOY' <?php if ($usuario['ciudad']=='SIBUNDOY') { echo 'selected'; } ?>>SIBUNDOY</option>
                                   <option value='SILOS' <?php if ($usuario['ciudad']=='SILOS') { echo 'selected'; } ?>>SILOS</option>
                                   <option value='SILVANIA' <?php if ($usuario['ciudad']=='SILVANIA') { echo 'selected'; } ?>>SILVANIA</option>
                                   <option value='SILVIA' <?php if ($usuario['ciudad']=='SILVIA') { echo 'selected'; } ?>>SILVIA</option>
                                   <option value='SIMACOTA' <?php if ($usuario['ciudad']=='SIMACOTA') { echo 'selected'; } ?>>SIMACOTA</option>
                                   <option value='SIMIJACA' <?php if ($usuario['ciudad']=='SIMIJACA') { echo 'selected'; } ?>>SIMIJACA</option>
                                   <option value='SIMITI' <?php if ($usuario['ciudad']=='SIMITI') { echo 'selected'; } ?>>SIMITI</option>
                                   <option value='SINCELEJO' <?php if ($usuario['ciudad']=='SINCELEJO') { echo 'selected'; } ?>>SINCELEJO</option>
                                   <option value='SIPI' <?php if ($usuario['ciudad']=='SIPI') { echo 'selected'; } ?>>SIPI</option>
                                   <option value='SITIONUEVO' <?php if ($usuario['ciudad']=='SITIONUEVO') { echo 'selected'; } ?>>SITIONUEVO</option>
                                   <option value='SOACHA' <?php if ($usuario['ciudad']=='SOACHA') { echo 'selected'; } ?>>SOACHA</option>
                                   <option value='SOATA' <?php if ($usuario['ciudad']=='SOATA') { echo 'selected'; } ?>>SOATA</option>
                                   <option value='SOCHA' <?php if ($usuario['ciudad']=='SOCHA') { echo 'selected'; } ?>>SOCHA</option>
                                   <option value='SOCORRO' <?php if ($usuario['ciudad']=='SOCORRO') { echo 'selected'; } ?>>SOCORRO</option>
                                   <option value='SOCOTA' <?php if ($usuario['ciudad']=='SOCOTA') { echo 'selected'; } ?>>SOCOTA</option>
                                   <option value='SOGAMOSO' <?php if ($usuario['ciudad']=='SOGAMOSO') { echo 'selected'; } ?>>SOGAMOSO</option>
                                   <option value='SOLANO' <?php if ($usuario['ciudad']=='SOLANO') { echo 'selected'; } ?>>SOLANO</option>
                                   <option value='SOLEDAD' <?php if ($usuario['ciudad']=='SOLEDAD') { echo 'selected'; } ?>>SOLEDAD</option>
                                   <option value='SOLITA' <?php if ($usuario['ciudad']=='SOLITA') { echo 'selected'; } ?>>SOLITA</option>
                                   <option value='SOMONDOCO' <?php if ($usuario['ciudad']=='SOMONDOCO') { echo 'selected'; } ?>>SOMONDOCO</option>
                                   <option value='SONSON' <?php if ($usuario['ciudad']=='SONSON') { echo 'selected'; } ?>>SONSON</option>
                                   <option value='SOPETRAN' <?php if ($usuario['ciudad']=='SOPETRAN') { echo 'selected'; } ?>>SOPETRAN</option>
                                   <option value='SOPLAVIENTO' <?php if ($usuario['ciudad']=='SOPLAVIENTO') { echo 'selected'; } ?>>SOPLAVIENTO</option>
                                   <option value='SOPO' <?php if ($usuario['ciudad']=='SOPO') { echo 'selected'; } ?>>SOPO</option>
                                   <option value='SORA' <?php if ($usuario['ciudad']=='SORA') { echo 'selected'; } ?>>SORA</option>
                                   <option value='SORACA' <?php if ($usuario['ciudad']=='SORACA') { echo 'selected'; } ?>>SORACA</option>
                                   <option value='SOTAQUIRA' <?php if ($usuario['ciudad']=='SOTAQUIRA') { echo 'selected'; } ?>>SOTAQUIRA</option>
                                   <option value='SOTARA' <?php if ($usuario['ciudad']=='SOTARA') { echo 'selected'; } ?>>SOTARA</option>
                                   <option value='SUAITA' <?php if ($usuario['ciudad']=='SUAITA') { echo 'selected'; } ?>>SUAITA</option>
                                   <option value='SUAN' <?php if ($usuario['ciudad']=='SUAN') { echo 'selected'; } ?>>SUAN</option>
                                   <option value='SUAREZ' <?php if ($usuario['ciudad']=='SUAREZ') { echo 'selected'; } ?>>SUAREZ</option>
                                   <option value='SUAREZ' <?php if ($usuario['ciudad']=='SUAREZ') { echo 'selected'; } ?>>SUAREZ</option>
                                   <option value='SUAZA' <?php if ($usuario['ciudad']=='SUAZA') { echo 'selected'; } ?>>SUAZA</option>
                                   <option value='SUBACHOQUE' <?php if ($usuario['ciudad']=='SUBACHOQUE') { echo 'selected'; } ?>>SUBACHOQUE</option>
                                   <option value='SUCRE' <?php if ($usuario['ciudad']=='SUCRE') { echo 'selected'; } ?>>SUCRE</option>
                                   <option value='SUCRE' <?php if ($usuario['ciudad']=='SUCRE') { echo 'selected'; } ?>>SUCRE</option>
                                   <option value='SUCRE' <?php if ($usuario['ciudad']=='SUCRE') { echo 'selected'; } ?>>SUCRE</option>
                                   <option value='SUESCA' <?php if ($usuario['ciudad']=='SUESCA') { echo 'selected'; } ?>>SUESCA</option>
                                   <option value='SUPATA' <?php if ($usuario['ciudad']=='SUPATA') { echo 'selected'; } ?>>SUPATA</option>
                                   <option value='SUPIA' <?php if ($usuario['ciudad']=='SUPIA') { echo 'selected'; } ?>>SUPIA</option>
                                   <option value='SURATA' <?php if ($usuario['ciudad']=='SURATA') { echo 'selected'; } ?>>SURATA</option>
                                   <option value='SUSA' <?php if ($usuario['ciudad']=='SUSA') { echo 'selected'; } ?>>SUSA</option>
                                   <option value='SUSACON' <?php if ($usuario['ciudad']=='SUSACON') { echo 'selected'; } ?>>SUSACON</option>
                                   <option value='SUTAMARCHAN' <?php if ($usuario['ciudad']=='SUTAMARCHAN') { echo 'selected'; } ?>>SUTAMARCHAN</option>
                                   <option value='SUTATAUSA' <?php if ($usuario['ciudad']=='SUTATAUSA') { echo 'selected'; } ?>>SUTATAUSA</option>
                                   <option value='SUTATENZA' <?php if ($usuario['ciudad']=='SUTATENZA') { echo 'selected'; } ?>>SUTATENZA</option>
                                   <option value='TABIO' <?php if ($usuario['ciudad']=='TABIO') { echo 'selected'; } ?>>TABIO</option>
                                   <option value='TADO' <?php if ($usuario['ciudad']=='TADO') { echo 'selected'; } ?>>TADO</option>
                                   <option value='TALAIGUA NUEVO' <?php if ($usuario['ciudad']=='TALAIGUA NUEVO') { echo 'selected'; } ?>>TALAIGUA NUEVO</option>
                                   <option value='TAMALAMEQUE' <?php if ($usuario['ciudad']=='TAMALAMEQUE') { echo 'selected'; } ?>>TAMALAMEQUE</option>
                                   <option value='TAMARA' <?php if ($usuario['ciudad']=='TAMARA') { echo 'selected'; } ?>>TAMARA</option>
                                   <option value='TAME' <?php if ($usuario['ciudad']=='TAME') { echo 'selected'; } ?>>TAME</option>
                                   <option value='TAMESIS' <?php if ($usuario['ciudad']=='TAMESIS') { echo 'selected'; } ?>>TAMESIS</option>
                                   <option value='TAMINANGO' <?php if ($usuario['ciudad']=='TAMINANGO') { echo 'selected'; } ?>>TAMINANGO</option>
                                   <option value='TANGUA' <?php if ($usuario['ciudad']=='TANGUA') { echo 'selected'; } ?>>TANGUA</option>
                                   <option value='TARAIRA' <?php if ($usuario['ciudad']=='TARAIRA') { echo 'selected'; } ?>>TARAIRA</option>
                                   <option value='TARAPACA' <?php if ($usuario['ciudad']=='TARAPACA') { echo 'selected'; } ?>>TARAPACA</option>
                                   <option value='TARAZA' <?php if ($usuario['ciudad']=='TARAZA') { echo 'selected'; } ?>>TARAZA</option>
                                   <option value='TARQUI' <?php if ($usuario['ciudad']=='TARQUI') { echo 'selected'; } ?>>TARQUI</option>
                                   <option value='TARSO' <?php if ($usuario['ciudad']=='TARSO') { echo 'selected'; } ?>>TARSO</option>
                                   <option value='TASCO' <?php if ($usuario['ciudad']=='TASCO') { echo 'selected'; } ?>>TASCO</option>
                                   <option value='TAURAMENA' <?php if ($usuario['ciudad']=='TAURAMENA') { echo 'selected'; } ?>>TAURAMENA</option>
                                   <option value='TAUSA' <?php if ($usuario['ciudad']=='TAUSA') { echo 'selected'; } ?>>TAUSA</option>
                                   <option value='TELLO' <?php if ($usuario['ciudad']=='TELLO') { echo 'selected'; } ?>>TELLO</option>
                                   <option value='TENA' <?php if ($usuario['ciudad']=='TENA') { echo 'selected'; } ?>>TENA</option>
                                   <option value='TENERIFE' <?php if ($usuario['ciudad']=='TENERIFE') { echo 'selected'; } ?>>TENERIFE</option>
                                   <option value='TENJO' <?php if ($usuario['ciudad']=='TENJO') { echo 'selected'; } ?>>TENJO</option>
                                   <option value='TENZA' <?php if ($usuario['ciudad']=='TENZA') { echo 'selected'; } ?>>TENZA</option>
                                   <option value='TEORAMA' <?php if ($usuario['ciudad']=='TEORAMA') { echo 'selected'; } ?>>TEORAMA</option>
                                   <option value='TERUEL' <?php if ($usuario['ciudad']=='TERUEL') { echo 'selected'; } ?>>TERUEL</option>
                                   <option value='TESALIA' <?php if ($usuario['ciudad']=='TESALIA') { echo 'selected'; } ?>>TESALIA</option>
                                   <option value='TIBACUY' <?php if ($usuario['ciudad']=='TIBACUY') { echo 'selected'; } ?>>TIBACUY</option>
                                   <option value='TIBANA' <?php if ($usuario['ciudad']=='TIBANA') { echo 'selected'; } ?>>TIBANA</option>
                                   <option value='TIBASOSA' <?php if ($usuario['ciudad']=='TIBASOSA') { echo 'selected'; } ?>>TIBASOSA</option>
                                   <option value='TIBIRITA' <?php if ($usuario['ciudad']=='TIBIRITA') { echo 'selected'; } ?>>TIBIRITA</option>
                                   <option value='TIBU' <?php if ($usuario['ciudad']=='TIBU') { echo 'selected'; } ?>>TIBU</option>
                                   <option value='TIERRALTA' <?php if ($usuario['ciudad']=='TIERRALTA') { echo 'selected'; } ?>>TIERRALTA</option>
                                   <option value='TIMANA' <?php if ($usuario['ciudad']=='TIMANA') { echo 'selected'; } ?>>TIMANA</option>
                                   <option value='TIMBIO' <?php if ($usuario['ciudad']=='TIMBIO') { echo 'selected'; } ?>>TIMBIO</option>
                                   <option value='TIMBIQUI' <?php if ($usuario['ciudad']=='TIMBIQUI') { echo 'selected'; } ?>>TIMBIQUI</option>
                                   <option value='TINJACA' <?php if ($usuario['ciudad']=='TINJACA') { echo 'selected'; } ?>>TINJACA</option>
                                   <option value='TIPACOQUE' <?php if ($usuario['ciudad']=='TIPACOQUE') { echo 'selected'; } ?>>TIPACOQUE</option>
                                   <option value='TIQUISIO' <?php if ($usuario['ciudad']=='TIQUISIO') { echo 'selected'; } ?>>TIQUISIO</option>
                                   <option value='TITIRIBI' <?php if ($usuario['ciudad']=='TITIRIBI') { echo 'selected'; } ?>>TITIRIBI</option>
                                   <option value='TOCA' <?php if ($usuario['ciudad']=='TOCA') { echo 'selected'; } ?>>TOCA</option>
                                   <option value='TOCAIMA' <?php if ($usuario['ciudad']=='TOCAIMA') { echo 'selected'; } ?>>TOCAIMA</option>
                                   <option value='TOCANCIPA' <?php if ($usuario['ciudad']=='TOCANCIPA') { echo 'selected'; } ?>>TOCANCIPA</option>
                                   <option value='TOGsI' <?php if ($usuario['ciudad']=='TOGsI') { echo 'selected'; } ?>>TOGsI</option>
                                   <option value='TOLEDO' <?php if ($usuario['ciudad']=='TOLEDO') { echo 'selected'; } ?>>TOLEDO</option>
                                   <option value='TOLEDO' <?php if ($usuario['ciudad']=='TOLEDO') { echo 'selected'; } ?>>TOLEDO</option>
                                   <option value='TOLU VIEJO' <?php if ($usuario['ciudad']=='TOLU VIEJO') { echo 'selected'; } ?>>TOLU VIEJO</option>
                                   <option value='TONA' <?php if ($usuario['ciudad']=='TONA') { echo 'selected'; } ?>>TONA</option>
                                   <option value='TOPAGA' <?php if ($usuario['ciudad']=='TOPAGA') { echo 'selected'; } ?>>TOPAGA</option>
                                   <option value='TOPAIPI' <?php if ($usuario['ciudad']=='TOPAIPI') { echo 'selected'; } ?>>TOPAIPI</option>
                                   <option value='TORIBIO' <?php if ($usuario['ciudad']=='TORIBIO') { echo 'selected'; } ?>>TORIBIO</option>
                                   <option value='TORO' <?php if ($usuario['ciudad']=='TORO') { echo 'selected'; } ?>>TORO</option>
                                   <option value='TOTA' <?php if ($usuario['ciudad']=='TOTA') { echo 'selected'; } ?>>TOTA</option>
                                   <option value='TOTORO' <?php if ($usuario['ciudad']=='TOTORO') { echo 'selected'; } ?>>TOTORO</option>
                                   <option value='TRINIDAD' <?php if ($usuario['ciudad']=='TRINIDAD') { echo 'selected'; } ?>>TRINIDAD</option>
                                   <option value='TRUJILLO' <?php if ($usuario['ciudad']=='TRUJILLO') { echo 'selected'; } ?>>TRUJILLO</option>
                                   <option value='TUBARA' <?php if ($usuario['ciudad']=='TUBARA') { echo 'selected'; } ?>>TUBARA</option>
                                   <option value='TULUA' <?php if ($usuario['ciudad']=='TULUA') { echo 'selected'; } ?>>TULUA</option>
                                   <option value='TUNJA' <?php if ($usuario['ciudad']=='TUNJA') { echo 'selected'; } ?>>TUNJA</option>
                                   <option value='TUNUNGUA' <?php if ($usuario['ciudad']=='TUNUNGUA') { echo 'selected'; } ?>>TUNUNGUA</option>
                                   <option value='TUQUERRES' <?php if ($usuario['ciudad']=='TUQUERRES') { echo 'selected'; } ?>>TUQUERRES</option>
                                   <option value='TURBACO' <?php if ($usuario['ciudad']=='TURBACO') { echo 'selected'; } ?>>TURBACO</option>
                                   <option value='TURBANA' <?php if ($usuario['ciudad']=='TURBANA') { echo 'selected'; } ?>>TURBANA</option>
                                   <option value='TURBO' <?php if ($usuario['ciudad']=='TURBO') { echo 'selected'; } ?>>TURBO</option>
                                   <option value='TURMEQUE' <?php if ($usuario['ciudad']=='TURMEQUE') { echo 'selected'; } ?>>TURMEQUE</option>
                                   <option value='TUTA' <?php if ($usuario['ciudad']=='TUTA') { echo 'selected'; } ?>>TUTA</option>
                                   <option value='TUTAZA' <?php if ($usuario['ciudad']=='TUTAZA') { echo 'selected'; } ?>>TUTAZA</option>
                                   <option value='UBALA' <?php if ($usuario['ciudad']=='UBALA') { echo 'selected'; } ?>>UBALA</option>
                                   <option value='UBAQUE' <?php if ($usuario['ciudad']=='UBAQUE') { echo 'selected'; } ?>>UBAQUE</option>
                                   <option value='ULLOA' <?php if ($usuario['ciudad']=='ULLOA') { echo 'selected'; } ?>>ULLOA</option>
                                   <option value='UMBITA' <?php if ($usuario['ciudad']=='UMBITA') { echo 'selected'; } ?>>UMBITA</option>
                                   <option value='UNE' <?php if ($usuario['ciudad']=='UNE') { echo 'selected'; } ?>>UNE</option>
                                   <option value='UNGUIA' <?php if ($usuario['ciudad']=='UNGUIA') { echo 'selected'; } ?>>UNGUIA</option>
                                   <option value='UNION PANAMERICANA' <?php if ($usuario['ciudad']=='UNION PANAMERICANA') { echo 'selected'; } ?>>UNION PANAMERICANA</option>
                                   <option value='URAMITA' <?php if ($usuario['ciudad']=='URAMITA') { echo 'selected'; } ?>>URAMITA</option>
                                   <option value='URIBE' <?php if ($usuario['ciudad']=='URIBE') { echo 'selected'; } ?>>URIBE</option>
                                   <option value='URIBIA' <?php if ($usuario['ciudad']=='URIBIA') { echo 'selected'; } ?>>URIBIA</option>
                                   <option value='URRAO' <?php if ($usuario['ciudad']=='URRAO') { echo 'selected'; } ?>>URRAO</option>
                                   <option value='URUMITA' <?php if ($usuario['ciudad']=='URUMITA') { echo 'selected'; } ?>>URUMITA</option>
                                   <option value='USIACURI' <?php if ($usuario['ciudad']=='USIACURI') { echo 'selected'; } ?>>USIACURI</option>
                                   <option value='UTICA' <?php if ($usuario['ciudad']=='UTICA') { echo 'selected'; } ?>>UTICA</option>
                                   <option value='VALDIVIA' <?php if ($usuario['ciudad']=='VALDIVIA') { echo 'selected'; } ?>>VALDIVIA</option>
                                   <option value='VALENCIA' <?php if ($usuario['ciudad']=='VALENCIA') { echo 'selected'; } ?>>VALENCIA</option>
                                   <option value='VALLE DE SAN JOSE' <?php if ($usuario['ciudad']=='VALLE DE SAN JOSE') { echo 'selected'; } ?>>VALLE DE SAN JOSE</option>
                                   <option value='VALLE DE SAN JUAN' <?php if ($usuario['ciudad']=='VALLE DE SAN JUAN') { echo 'selected'; } ?>>VALLE DE SAN JUAN</option>
                                   <option value='VALLE DEL GUAMUEZ' <?php if ($usuario['ciudad']=='VALLE DEL GUAMUEZ') { echo 'selected'; } ?>>VALLE DEL GUAMUEZ</option>
                                   <option value='VALLEDUPAR' <?php if ($usuario['ciudad']=='VALLEDUPAR') { echo 'selected'; } ?>>VALLEDUPAR</option>
                                   <option value='VALPARAISO' <?php if ($usuario['ciudad']=='VALPARAISO') { echo 'selected'; } ?>>VALPARAISO</option>
                                   <option value='VALPARAISO' <?php if ($usuario['ciudad']=='VALPARAISO') { echo 'selected'; } ?>>VALPARAISO</option>
                                   <option value='VEGACHI' <?php if ($usuario['ciudad']=='VEGACHI') { echo 'selected'; } ?>>VEGACHI</option>
                                   <option value='VELEZ' <?php if ($usuario['ciudad']=='VELEZ') { echo 'selected'; } ?>>VELEZ</option>
                                   <option value='VENADILLO' <?php if ($usuario['ciudad']=='VENADILLO') { echo 'selected'; } ?>>VENADILLO</option>
                                   <option value='VENECIA' <?php if ($usuario['ciudad']=='VENECIA') { echo 'selected'; } ?>>VENECIA</option>
                                   <option value='VENECIA' <?php if ($usuario['ciudad']=='VENECIA') { echo 'selected'; } ?>>VENECIA</option>
                                   <option value='VENTAQUEMADA' <?php if ($usuario['ciudad']=='VENTAQUEMADA') { echo 'selected'; } ?>>VENTAQUEMADA</option>
                                   <option value='VERGARA' <?php if ($usuario['ciudad']=='VERGARA') { echo 'selected'; } ?>>VERGARA</option>
                                   <option value='VERSALLES' <?php if ($usuario['ciudad']=='VERSALLES') { echo 'selected'; } ?>>VERSALLES</option>
                                   <option value='VETAS' <?php if ($usuario['ciudad']=='VETAS') { echo 'selected'; } ?>>VETAS</option>
                                   <option value='VIANI' <?php if ($usuario['ciudad']=='VIANI') { echo 'selected'; } ?>>VIANI</option>
                                   <option value='VICTORIA' <?php if ($usuario['ciudad']=='VICTORIA') { echo 'selected'; } ?>>VICTORIA</option>
                                   <option value='VIGIA DEL FUERTE' <?php if ($usuario['ciudad']=='VIGIA DEL FUERTE') { echo 'selected'; } ?>>VIGIA DEL FUERTE</option>
                                   <option value='VIJES' <?php if ($usuario['ciudad']=='VIJES') { echo 'selected'; } ?>>VIJES</option>
                                   <option value='VILLA CARO' <?php if ($usuario['ciudad']=='VILLA CARO') { echo 'selected'; } ?>>VILLA CARO</option>
                                   <option value='VILLA DE LEYVA' <?php if ($usuario['ciudad']=='VILLA DE LEYVA') { echo 'selected'; } ?>>VILLA DE LEYVA</option>
                                   <option value='VILLA DE SAN DIEGO DE UBATE' <?php if ($usuario['ciudad']=='VILLA DE SAN DIEGO DE UBATE') { echo 'selected'; } ?>>VILLA DE SAN DIEGO DE UBATE</option>
                                   <option value='VILLA DEL ROSARIO' <?php if ($usuario['ciudad']=='VILLA DEL ROSARIO') { echo 'selected'; } ?>>VILLA DEL ROSARIO</option>
                                   <option value='VILLA RICA' <?php if ($usuario['ciudad']=='VILLA RICA') { echo 'selected'; } ?>>VILLA RICA</option>
                                   <option value='VILLAGARZON' <?php if ($usuario['ciudad']=='VILLAGARZON') { echo 'selected'; } ?>>VILLAGARZON</option>
                                   <option value='VILLAGOMEZ' <?php if ($usuario['ciudad']=='VILLAGOMEZ') { echo 'selected'; } ?>>VILLAGOMEZ</option>
                                   <option value='VILLAHERMOSA' <?php if ($usuario['ciudad']=='VILLAHERMOSA') { echo 'selected'; } ?>>VILLAHERMOSA</option>
                                   <option value='VILLAMARIA' <?php if ($usuario['ciudad']=='VILLAMARIA') { echo 'selected'; } ?>>VILLAMARIA</option>
                                   <option value='VILLANUEVA' <?php if ($usuario['ciudad']=='VILLANUEVA') { echo 'selected'; } ?>>VILLANUEVA</option>
                                   <option value='VILLANUEVA' <?php if ($usuario['ciudad']=='VILLANUEVA') { echo 'selected'; } ?>>VILLANUEVA</option>
                                   <option value='VILLANUEVA' <?php if ($usuario['ciudad']=='VILLANUEVA') { echo 'selected'; } ?>>VILLANUEVA</option>
                                   <option value='VILLANUEVA' <?php if ($usuario['ciudad']=='VILLANUEVA') { echo 'selected'; } ?>>VILLANUEVA</option>
                                   <option value='VILLAPINZON' <?php if ($usuario['ciudad']=='VILLAPINZON') { echo 'selected'; } ?>>VILLAPINZON</option>
                                   <option value='VILLARRICA' <?php if ($usuario['ciudad']=='VILLARRICA') { echo 'selected'; } ?>>VILLARRICA</option>
                                   <option value='VILLAVICENCIO' <?php if ($usuario['ciudad']=='VILLAVICENCIO') { echo 'selected'; } ?>>VILLAVICENCIO</option>
                                   <option value='VILLAVIEJA' <?php if ($usuario['ciudad']=='VILLAVIEJA') { echo 'selected'; } ?>>VILLAVIEJA</option>
                                   <option value='VILLETA' <?php if ($usuario['ciudad']=='VILLETA') { echo 'selected'; } ?>>VILLETA</option>
                                   <option value='VIOTA' <?php if ($usuario['ciudad']=='VIOTA') { echo 'selected'; } ?>>VIOTA</option>
                                   <option value='VIRACACHA' <?php if ($usuario['ciudad']=='VIRACACHA') { echo 'selected'; } ?>>VIRACACHA</option>
                                   <option value='VISTAHERMOSA' <?php if ($usuario['ciudad']=='VISTAHERMOSA') { echo 'selected'; } ?>>VISTAHERMOSA</option>
                                   <option value='VITERBO' <?php if ($usuario['ciudad']=='VITERBO') { echo 'selected'; } ?>>VITERBO</option>
                                   <option value='YACOPI' <?php if ($usuario['ciudad']=='YACOPI') { echo 'selected'; } ?>>YACOPI</option>
                                   <option value='YACUANQUER' <?php if ($usuario['ciudad']=='YACUANQUER') { echo 'selected'; } ?>>YACUANQUER</option>
                                   <option value='YAGUARA' <?php if ($usuario['ciudad']=='YAGUARA') { echo 'selected'; } ?>>YAGUARA</option>
                                   <option value='YALI' <?php if ($usuario['ciudad']=='YALI') { echo 'selected'; } ?>>YALI</option>
                                   <option value='YARUMAL' <?php if ($usuario['ciudad']=='YARUMAL') { echo 'selected'; } ?>>YARUMAL</option>
                                   <option value='YAVARATE' <?php if ($usuario['ciudad']=='YAVARATE') { echo 'selected'; } ?>>YAVARATE</option>
                                   <option value='YOLOMBO' <?php if ($usuario['ciudad']=='YOLOMBO') { echo 'selected'; } ?>>YOLOMBO</option>
                                   <option value='YONDO' <?php if ($usuario['ciudad']=='YONDO') { echo 'selected'; } ?>>YONDO</option>
                                   <option value='YOPAL' <?php if ($usuario['ciudad']=='YOPAL') { echo 'selected'; } ?>>YOPAL</option>
                                   <option value='YOTOCO' <?php if ($usuario['ciudad']=='YOTOCO') { echo 'selected'; } ?>>YOTOCO</option>
                                   <option value='YUMBO' <?php if ($usuario['ciudad']=='YUMBO') { echo 'selected'; } ?>>YUMBO</option>
                                   <option value='ZAMBRANO' <?php if ($usuario['ciudad']=='ZAMBRANO') { echo 'selected'; } ?>>ZAMBRANO</option>
                                   <option value='ZAPATOCA' <?php if ($usuario['ciudad']=='ZAPATOCA') { echo 'selected'; } ?>>ZAPATOCA</option>
                                   <option value='ZAPAYAN' <?php if ($usuario['ciudad']=='ZAPAYAN') { echo 'selected'; } ?>>ZAPAYAN</option>
                                   <option value='ZARAGOZA' <?php if ($usuario['ciudad']=='ZARAGOZA') { echo 'selected'; } ?>>ZARAGOZA</option>
                                   <option value='ZARZAL' <?php if ($usuario['ciudad']=='ZARZAL') { echo 'selected'; } ?>>ZARZAL</option>
                                   <option value='ZETAQUIRA' <?php if ($usuario['ciudad']=='ZETAQUIRA') { echo 'selected'; } ?>>ZETAQUIRA</option>
                                   <option value='ZIPACON' <?php if ($usuario['ciudad']=='ZIPACON') { echo 'selected'; } ?>>ZIPACON</option>
                                   <option value='ZIPAQUIRA' <?php if ($usuario['ciudad']=='ZIPAQUIRA') { echo 'selected'; } ?>>ZIPAQUIRA</option>
                                   <option value='ZONA BANANERA' <?php if ($usuario['ciudad']=='ZONA BANANERA') { echo 'selected'; } ?>>ZONA BANANERA</option>

                              </select>
                              <input type="text" class="form-control" name="ciudad" id="ciudad" value="<?=$usuario['ciudad']?>" <?php if ($_SESSION["pais"]=='COLOMBIA') {
                                   echo 'style="display:none;"';
                              } ?> required>
                         </td>
				</tr>
				
                    <tr>
                         <td>Dirección</td>
                         <td><input type="text" class="form-control" name="direccion" value="<?=$usuario['direccion']?>" required></td>
                    </tr>
				<tr>
					<td>Código Postal</td>
					<td><input type="text" class="form-control" name="cod_postal" value="<?=$usuario['cod_postal']?>"></td>
				</tr>				
				<tr>
					<td>Teléfono</td>
					<td><input type="text" class="form-control" name="telefono" value="<?=$usuario['telefono']?>" required></td>
				</tr>
				<tr>
					<td>Teléfono Móvil</td>
					<td><input type="text" class="form-control" name="telefono_m" value="<?=$usuario['telefono_m']?>" required></td>
				</tr>
				<tr>
					<td>Boletines</td>
					<td><input type="checkbox" name="boletines" value="1" <?php if ($usuario['boletines']) echo "checked"; ?>></td>
				</tr>
				<tr>
					<td>Condiciones</td>
					<td><input type="checkbox" name="condiciones" value="1" <?php if ($usuario['condiciones']) echo "checked"; ?>></td>
				</tr>
			</table>
			<h2>Cambiar Contraseña</h2>
			<table class="table table-striped">
				<tr>
					<td>Contraseña actual</td>
					<td><input type="password" class="form-control" name="contrasena_actual" value=""></td>
				</tr>
				<tr>
					<td>Nueva contraseña</td>
					<td><input type="password" class="form-control" name="nueva_contrasena"></td>
				</tr>
				<tr>
					<td>Repetir nueva contraseña</td>
					<td><input type="password" class="form-control" name="nueva_contrasena2"></td>
				</tr>
			</table>
			<button type="submit" class="btn btn-primary" name="cambiarDatos">GUARDAR PERFIL</button>
		</form>		
	</div>
</div>
<?php include 'footer.php'; ?>
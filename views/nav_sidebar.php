<ul class="list-unstyled nav flex-column pr-3 pl-1 mt-1">
	<li class="nav-item">
		<a class="nav-link" href="<?=URL_SITIO?>" style="color: #262424;border-bottom: 1px solid #000;width: 100%;"><?=Lenguajes::consultarFrase("HOME", $_SESSION["lenguaje"])?></a>
	</li>		
	<li class="nav-item dropdown mt-1">
		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?=URL_PRODUCTOS?>" role="button" aria-haspopup="true" aria-expanded="false" style="color: #262424;border-bottom: 1px solid #000;width: 100%;"><?=Lenguajes::consultarFrase("LO DESIGN", $_SESSION["lenguaje"])?></a>
		<div class="dropdown-menu">
	      <?php
	      foreach ($categorias as $key => $categoria) {
	      	if ($categoria["menu"]) {
	      ?>
	      	<a class="dropdown-item" href="<?=URL_CATEGORIA."/".$categoria["url"]?>"><?=$categoria["nombre"]?></a>
	      <?php
	      	}
	      }
	      ?>
	    </div>		
	</li>
	<li class="nav-item mt-1">
		<a class="nav-link" href="<?=URL_PRODUCTOS_PERSONALIZAR?>" style="color: #262424;border-bottom: 1px solid #000;width: 100%;"><?=Lenguajes::consultarFrase("CREATE YOUR LO", $_SESSION["lenguaje"])?></a>
	</li>
	<?php 
      if (count($menu)>0) {
        foreach ($menu as $key => $item) {
      ?>
        <li class="nav-item mt-1">
		<a class="nav-link" href="p/<?=$item["url"]?>" style="color: #262424;border-bottom: 1px solid #000;width: 100%;"><?=$item["titulo"]?></a>
	</li>
      <?php
        }
      }
      ?>
</ul>
<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=NOMBRE_SITIO?></title>
    <base href="<?=URL_SITIO?>">

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">      
      <!--<nav class="navbar navbar-dark bg-inverse p-t-2 p-b-2">-->
      <nav class="navbar navbar-light pt-2 pb-2">
        <div class="container">
          <div class="col-xs-12 col-md-2">            
              <a href="<?=URL_SITIO?>"><img src="assets/img/logo.png" class="img-fluid pull-xs-left"></a>
          </div>
          <div class="col-xs-12 col-md-6">
          <?php 
          if (empty($GLOBALS['var1'])  || $GLOBALS['var1']==URL_INICIO || $GLOBALS['var1']==URL_CARRITO || $GLOBALS['var1']==URL_RESUMEN_COMPRA) {
          ?>
              <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
                &#9776;
              </button>
              <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">            
                <ul class="nav navbar-nav">                  
                  <!--<li class="nav-item mr-2">
                    <a class="nav-link pt-1" href="<?=URL_PRODUCTOS?>"><?=Lenguajes::consultarFrase("LO DESIGN", $_SESSION["lenguaje"])?></a>
                  </li>-->
                  <li class="nav-item dropdown">
                    <a class="pt-1 nav-link dropdown-toggle" href="<?=URL_PRODUCTOS?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?=Lenguajes::consultarFrase("LO DESIGN", $_SESSION["lenguaje"])?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
                  <li class="nav-item mr-2">
                    <a class="nav-link pt-1" href="<?=URL_PRODUCTOS_PERSONALIZAR?>"><?=Lenguajes::consultarFrase("CREATE YOUR LO", $_SESSION["lenguaje"])?></a>
                  </li>
                  <?php 
                  if (count($menu)>0) {
                    foreach ($menu as $key => $item) {
                  ?>
                    <li class="nav-item mr-2">
                      <a class="nav-link pt-1" href="p/<?=$item["url"]?>"><?=$item["titulo"]?></a>
                    </li>
                  <?php
                    }
                  }
                  ?>                  
                </ul>
              </div> 
            <?php
          }
          ?>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="col-xs-12 col-md-9 px-0">
              <div class="row" style="font-size:22px;margin-top: 8px;">
                <div class="col-xs-3 pl-0">
                    <a href="<?=URL_SITIO.URL_CARRITO?>" style="text-decoration: none;color:#9E962C;">
                      <img src="assets/img/icon-cart.png" class="img-fluid" style="max-width: 20px;">
                      <div class="rounded-circle text-xs-center float-xs-right badge-header" id="cantidad-carrito"><?=Carrito::productosAgregados()?></div>
                    </a>
                </div>
                <div class="col-xs-3 pl-0">
                    <a href="#">
                      <img src="assets/img/icon-dream-box.png" class="img-fluid" style="max-width: 20px;">
                      <div class="rounded-circle text-xs-center float-xs-right badge-header" id="cantidad-carrito">0</div>
                    </a>              
                </div>              
                <div class="col-xs-6">
                  <?php if ($_SESSION["login"]) { ?>
                  <div class="dropdown">                
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-user" aria-hidden="true"></i> <!--<?=$_SESSION["nombre"]?>-->
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="<?=URL_SITIO.URL_SALIR?>">Salir</a>                    
                    </div>
                  </div>
                  <?php }else{ ?>                                    
                    <!--<a href="<?=URL_SITIO.URL_REGISTRO?>" style="color:#9E962C;">
                      <i class="fa fa-user-plus" aria-hidden="true"></i>
                    </a>-->
                    <a href="<?=URL_SITIO.URL_INGRESAR?>" style="color:#9E962C;">
                      <img src="assets/img/icon-your-lo.png" class="img-fluid" style="max-width: 20px;">
                      <span style="color: #9F972D;font-size: 13px;">YOUR LO</span>
                    </a>      
                  <?php } ?>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-md-3 text-xs-right px-0">
                <h5 class="pull-xs-right mt-1"><small><a href="?lang=es" style="color:#000000;">ESP</a> - <a href="?lang=en" style="color:#000000;">ENG</a></small></h5>
              </div>                          
            </div>          
        </div>
      </nav>      
    </div>
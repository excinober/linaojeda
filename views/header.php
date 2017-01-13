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
          <div class="col-xs-12 col-md-7">          
          <?php 
          if (empty($GLOBALS['var1'])  || $GLOBALS['var1']==URL_INICIO || $GLOBALS['var1']==URL_CARRITO) {
          ?>
              <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
                &#9776;
              </button>
              <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">            
                <ul class="nav navbar-nav">
                  <li class="nav-item active mr-2">
                    <a class="nav-link pt-1" href="#">ABOUT LO <span class="sr-only">(current)</span></a>
                  </li>                  
                  <li class="nav-item mr-2">
                    <a class="nav-link pt-1" href="<?=URL_PRODUCTOS?>">LO DESIGN</a>
                  </li>
                  <li class="nav-item mr-2">
                    <a class="nav-link pt-1" href="<?=URL_PRODUCTOS_PERSONALIZAR?>">CREATE YOUR LO</a>
                  </li>
                  <li class="nav-item mr-2">
                    <a class="nav-link pt-1" href="#">STORES</a>
                  </li>
                </ul>
              </div> 
            <?php
          }
          ?>
          </div>
          <div class="col-xs-12 col-md-3">
            <h4 style="color:#9E962C;font-size:22px;" class="mt-1 text-xs-right">
              <a href="<?=URL_SITIO.URL_CARRITO?>" style="text-decoration: none;color:#9E962C;">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge" id="cantidad-carrito"><?=Carrito::productosAgregados()?></span>
              </a>
              &nbsp;&nbsp;
              <!--<i class="fa fa-heart" aria-hidden="true"></i> <span class="badge">4</span>-->
              <small class="pull-xs-right" style="color:#000000;">ESP - ENG</small>
            </h4>
          </div>
        </div>
      </nav>      
    </div>
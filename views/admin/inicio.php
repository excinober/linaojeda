<?php include "header.php";?>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <img src="http://localhost/linaojeda/www/assets/img/logo.png" class="img-responsive center-block m-b m-t">
            <h1 class="text-center">SISTEMA DE GESTIÓN E-COMMERCE</h1>
        </div>
        <hr>
        <div class="row">        
            <a href="<?=URL_ADMIN."/".URL_ADMIN_USUARIOS?>">
                <div class="col-xs-12 col-md-4 text-center">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <h2><i class="fa fa-user" aria-hidden="true"></i></h2>
                        <p>Usuarios</p>
                      </div>
                    </div>    
                </div>
            </a>
            <a href="<?=URL_ADMIN."/".URL_ADMIN_PRODUCTOS?>">
                <div class="col-xs-12 col-md-4 text-center">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <h2><i class="fa fa-suitcase" aria-hidden="true"></i></h2>
                        <p>Productos</p>
                      </div>
                    </div>    
                </div>
            </a>
            <a href="<?=URL_ADMIN."/".URL_ADMIN_ORDENES?>">
                <div class="col-xs-12 col-md-4 text-center">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <h2><i class="fa fa-shopping-cart" aria-hidden="true"></i></h2>
                        <p>Ordenes</p>
                      </div>
                    </div>    
                </div>
            </a>
            <!--<a href="<?=URL_ADMIN."/".URL_ADMIN_CAMPANAS?>">
                <div class="col-xs-12 col-md-4 text-center">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <h2><i class="fa fa-bullhorn" aria-hidden="true"></i></h2>
                        <p>Campañas</p>
                      </div>
                    </div>    
                </div>
            </a>-->
            <!--<a href="<?=URL_ADMIN."/".URL_ADMIN_INCENTIVOS?>">
                <div class="col-xs-12 col-md-4 text-center">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <h2><i class="fa fa-dollar" aria-hidden="true"></i></h2>
                        <p>Incentivos</p>
                      </div>
                    </div>    
                </div>
            </a>-->
            <!--<a href="<?=URL_ADMIN."/".URL_ADMIN_INFORMES."/".URL_ADMIN_INFORME_USUARIOS?>">
                <div class="col-xs-12 col-md-4 text-center">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <h2><i class="fa fa-user" aria-hidden="true"></i></h2>
                        <p>Informe Clientes</p>
                      </div>
                    </div>    
                </div>
            </a>-->
            <!--<a href="<?=URL_ADMIN."/".URL_ADMIN_INFORMES."/".URL_ADMIN_INFORME_ORDENES?>">
                <div class="col-xs-12 col-md-4 text-center">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <h2><i class="fa fa-dollar" aria-hidden="true"></i></h2>
                        <p>Informe Ventas</p>
                      </div>
                    </div>    
                </div>
            </a>-->
            <!--<a href="<?=URL_ADMIN."/".URL_ADMIN_INFORMES."/".URL_ADMIN_INFORME_PRODUCTOS?>">
                <div class="col-xs-12 col-md-4 text-center">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <h2><i class="fa fa-suitcase" aria-hidden="true"></i></h2>
                        <p>Informe Productos</p>
                      </div>
                    </div>    
                </div>
            </a>-->
            <!--<a href="<?=URL_ADMIN."/".URL_ADMIN_GEOLOCALIZACION."/".URL_ADMIN_GEOLOCALIZACION_ZONAS?>">
                <div class="col-xs-12 col-md-4 text-center">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <h2><i class="fa fa-map-marker" aria-hidden="true"></i></h2>
                        <p>Zonas</p>
                      </div>
                    </div>    
                </div>
            </a>-->                      
        </div>
    </div>
<?php include "footer.php";?>
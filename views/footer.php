<div class="container-fluid pt-3 mt-2" style="border-top: 2px solid #C8B496;font-size:0.9rem;">
	<!--<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-4">
				<h2 class="text-xs-center newsletter" style="margin-bottom:-5px;">newsletter</h2>
				<input type="text" class="form-control input-newsletter" name="email" placeholder="<?=Lenguajes::consultarFrase("SIGN UP NOW", $_SESSION["lenguaje"])?>">
				<h3 class="text-xs-center mt-1" style="color:#9F972D;">
					<i class="fa fa-facebook-official" aria-hidden="true"></i>
					<i class="fa fa-instagram" aria-hidden="true"></i>
					<i class="fa fa-whatsapp" aria-hidden="true"></i>
				</h3>
			</div>
			<div class="col-xs-12 col-md-2" style="color: #9F972D;">
				<h4>MENÚ</h4>
				<ul class="list-unstyled">
					<li><a href="<?=URL_PRODUCTOS_PERSONALIZAR?>" style="color: #9F972D;"><?=Lenguajes::consultarFrase("CREATE YOUR LO", $_SESSION["lenguaje"])?></a></li>
					<?php 
	                  if (count($menu)>0) {
	                    foreach ($menu as $key => $item) {
	                  ?>
	                    <li>
	                    	<a href="p/<?=$item["url"]?>" style="color: #9F972D;" href="p/<?=$item["url"]?>"><?=$item["titulo"]?></a>
	                    </li>
	                  <?php
	                    }
	                  }
	                  ?>
				</ul>
			</div>
			<div class="col-xs-12 col-md-3">
				<h4 style="color: #9F972D;"><?=Lenguajes::consultarFrase("CUSTOMER SUPPORT", $_SESSION["lenguaje"])?></h4>
				<ul class="list-unstyled">
					<?php 
	                  if (count($pages_footer)>0) {
	                    foreach ($pages_footer as $key => $page) {
	                  ?>
	                    <li>
	                    	<a href="p/<?=$page["url"]?>" style="color: #9F972D;" href="p/<?=$page["url"]?>"><?=$page["titulo"]?></a>
	                    </li>
	                  <?php
	                    }
	                  }
	                  ?>
				</ul>
			</div>
			<div class="col-xs-12 col-md-3">
				<h4 style="color: #9F972D;"><?=Lenguajes::consultarFrase("CONTACT US", $_SESSION["lenguaje"])?></h4>
				<ul class="list-unstyled">
					<li style="color: #9F972D;">(+57 1) 333 33 33</li>				
				</ul>
			</div>
		</div>
	</div>-->
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-md-2">
				<h6 style="color:#696c70;">Menú</h6>
				<ul class="list-unstyled">
					<li><a href="<?=URL_PRODUCTOS_PERSONALIZAR?>" class="text-muted"><?=Lenguajes::consultarFrase("CREATE YOUR LO", $_SESSION["lenguaje"])?></a></li>
					<?php 
	                  if (count($menu)>0) {
	                    foreach ($menu as $key => $item) {
	                  ?>
	                    <li>
	                    	<a href="p/<?=$item["url"]?>" class="text-muted" href="p/<?=$item["url"]?>">
	                    		<?php 
						        if ($_SESSION["lenguaje"]=="es")
						          echo $item["titulo"]; 
						        else 
						          echo $item["titulo_en"]; 
						        ?>
						    </a>
	                    </li>
	                  <?php
	                    }
	                  }
	                  ?>
				</ul>
			</div>
			<div class="col-xs-6 col-md-2">
				<h6 style="color:#696c70;">
					<?=Lenguajes::consultarFrase("CUSTOMER SUPPORT", $_SESSION["lenguaje"])?>
				</h6>
				<ul class="list-unstyled">
					<?php 
	                  if (count($pages_footer)>0) {
	                    foreach ($pages_footer as $key => $page) {
	                ?>
	                    <li>
	                    	<a href="p/<?=$page["url"]?>" class="text-muted" href="p/<?=$page["url"]?>"><?=$page["titulo"]?></a>
	                    </li>
	                <?php
	                    }
	                  }
	                ?>
				</ul>				
			</div>
			<div class="col-xs-6 col-md-2">
				<h6 style="color:#696c70;">
					<?=Lenguajes::consultarFrase("CONTACT US", $_SESSION["lenguaje"])?>
				</h6>
				<ul class="list-unstyled">
					<li>
						<a href="tel:5713333333" class="text-muted">(+57 1) 333 33 33</a>
					</li>					
				</ul>
			</div>
			<div class="col-xs-6 col-md-2">
				<h6 style="color:#696c70;"><a href="<?=URL_INGRESAR?>" class="text-muted"><?=Lenguajes::consultarFrase("ACCOUNT", $_SESSION["lenguaje"])?></a></h6>
				<ul class="list-unstyled">
					
					<?php
					if (isset($_SESSION["idusuario"])) {
					?>
					<li>				
						<a href="<?=URL_USUARIO."/".URL_USUARIO_PERFIL?>" class="text-muted"><?=Lenguajes::consultarFrase("MY ACCOUNT", $_SESSION["lenguaje"])?></a>
					</li>
					<li>
						<a class="text-muted" href="<?=URL_SITIO.URL_USUARIO_ORDENES?>"><?=Lenguajes::consultarFrase("MY ORDERS", $_SESSION["lenguaje"])?></a>
					</li>
                    <li>
                      	<a class="text-muted" href="<?=URL_SITIO.URL_SALIR?>"><?=Lenguajes::consultarFrase("SIGN OUT", $_SESSION["lenguaje"])?></a>
                    </li>

					<?php
					}else{
					?>
					<li>
						<a href="<?=URL_INGRESAR?>" class="text-muted"><?=Lenguajes::consultarFrase("LOGIN", $_SESSION["lenguaje"])?></a>
					</li>
					<?php	
					}
					?>					
					<!--<li>
						<a href="#" class="text-muted">contact us</a>
					</li>
					<li><a href="#" class="text-muted">FAQS</a></li>-->
				</ul>
			</div>
			<div class="col-xs-12 col-md-2">
				<h2 style="font-family:Times;"><?=Lenguajes::consultarFrase("NEWSLETTER", $_SESSION["lenguaje"])?></h2>
				<form id="form-newsletter">
					<label class="sr-only" for="inlineFormInputGroup">Username</label>
					<div class="input-group mb-2 mr-sm-2 mb-sm-0">
						<input type="email" name="email" id="email" class="form-control" placeholder="<?=Lenguajes::consultarFrase("ENTER EMAIL", $_SESSION["lenguaje"])?>" required="required">
						<div class="input-group-addon">
							<i class="fa fa-caret-right" id="enviar_newsletter" aria-hidden="true"></i>
						</div>
				  	</div>
				</form>
			</div>
			<div class="col-xs-12 col-md-2" style="border-left:1px solid #ababad;">
				<center>
					<a href="<?=URL_SITIO?>">
						<img src="assets/img/logo.png" class="img-fluid">
					</a>
				</center>
				<div class="row mt-2">
					<center>
						<a href="#">
							<img src="assets/img/facebook.jpg">
						</a>
						<a href="#">
							<img src="assets/img/twitter.jpg">
						</a>
						<a href="#">
							<img src="assets/img/pinterest.jpg">
						</a>
					</center>
				</div>
				<div class="row">
					<center>
						<a href="#">
							<img src="assets/img/instagram.jpg">
						</a>
						<a href="#">
							<img src="assets/img/tumblr.jpg">						
						</a>
					</center>
				</div>
			</div>
		</div>
		<div class="card mt-2" style="background-color:#e0e0e0;border-color:#e0e0e0;">
		  <div class="card-block">
		    <span class="pull-left"><?=Lenguajes::consultarFrase("TEXT FOOTER LEFT", $_SESSION["lenguaje"])?></span>
		    <span class="pull-right"><?=Lenguajes::consultarFrase("TEXT FOOTER RIGHT", $_SESSION["lenguaje"])?></span>
		  </div>
		</div>	
		<h6 class="text-muted"><?=Lenguajes::consultarFrase("COPY RIGHT", $_SESSION["lenguaje"])?></h6>
	</div>
</div>
	<!--Modal-->
	<div class="modal fade" id="modal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content bg-faded">
	      <div class="modal-header">
	        <!--<h5 class="modal-title">Modal title</h5>-->
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        
	      </div>
	      <!--<div class="modal-footer">
	        <button type="button" class="btn btn-primary">Save changes</button>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>-->
	    </div>
	  </div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <script type="text/javascript" src="assets/js/jquery-3.1.0.min.js"></script>

    <!--Instagram-->
    <script type="text/javascript">

	var url = document.location;

	if (url == "<?=URL_SITIO?>") {

		$(function() {

			$.ajax({
			  type: "GET",
			  dataType: "jsonp",
			  cache: false,
			  url: "https://api.instagram.com/v1/users/185833638/media/recent/?access_token=185833638.2ed95b3.c2aa50316e5d4e80a6fb81cb9fa7b122",
			  success: function(data) {
			  	
			  	console.log(data);

			    for (var i = 0; i < 6; i++) {
			      if(data.data[i]) { // to prevent a bug with non missing images
			         $(".instagram").append('<div class="col-xs-6 col-md-4 mt-1"><a href="'+data.data[i].link+'" target="_blank"><img src="'+data.data[i].images.low_resolution.url+'" class="img-fluid"></a></div>');
			      }
			    }
			  }
			});
		});
	}
    </script>



    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/js.js"></script>
    <script type="text/javascript" src="assets/js/cart.js"></script>
    <script type="text/javascript" src="assets/js/html2canvas.js"></script>
  </body>
</html>
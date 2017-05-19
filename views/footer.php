	<hr style="border: 1px solid #9F972D;">
	<div class="container">
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
	</div>

	<!--Modal-->
	<div class="modal fade" id="modal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content" style="background-color: rgba(0,0,0,0.7);color: #fff;">
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
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/js.js"></script>
    <script type="text/javascript" src="assets/js/cart.js"></script>
    <script type="text/javascript" src="assets/js/html2canvas.js"></script>
  </body>
</html>
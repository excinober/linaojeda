
function confirmarSalida(){
	return "Si sales de esta página podrías perder tu personalización";
}

$(document).ready(function(){

	var showbox = false; 

	$(".img-product-list").mouseenter(function(){
		var idpdt = $(this).attr("idpdt");
		$("#popup"+idpdt).css("display","block");
		$("#popup"+idpdt).removeClass("animated bounceOut");
		$("#popup"+idpdt).addClass("animated bounceIn");
	})

	$(".popup-product-list").mouseleave(function(){
		$(this).removeClass("animated bounceIn");
		$(this).addClass("animated bounceOut");			
	})

	$(".opcion-pieza").click(function(){
		var urlpieza = $(this).attr("urlpieza");
		var idopcion = $(this).attr("idopcion");
		var idpieza = $(this).attr("idpieza");
		var idpdt = $(this).attr("idpdt");

		if (idopcion !='' && idpieza !='' && idpdt !='') {
			$.ajax({
			  type: "POST",
			  url: "Personalizar/agregarOpcionPieza",
			  data: { idopcion:idopcion, idpieza:idpieza, idpdt:idpdt },
			  success: function(response){
			  	//alert(response.ok);
			  },
			  dataType: 'json'
			});
		}

		$("#container-personalize").append('<img src="'+urlpieza+'" class="m-0 p-0 img-fluid" style="left:0px; top:0; position: absolute;z-index: 999;">');
	})

	$(".my-bag").click(function(){

		if (showbox) {
			$(this).css('right','-125px');			
			$('.bag-box').css('right','-380px');	
			$('.bag-box').css('display','none');

			showbox = false;

		}else{

			$(this).css('right','270px');
			$('.bag-box').css('display','block');
			$('.bag-box').css('right','0px');	

			showbox = true;
		}		
	});

	$(".quick-view").click(function(){
		var namepdt = $(this).attr("name-pdt");
		var imgpdt = $(this).attr("img-pdt");
		var refpdt = $(this).attr("ref-pdt");
		var pricepdt = $(this).attr("price-pdt");
		var urlpdt = $(this).attr("url-pdt");

		var html = '<div class="row py-2"><div class="col-xs-7 px-2"><img src="'+imgpdt+'" class="img-fluid"></div><div class="col-xs-5 pt-2"><h2>'+namepdt+'</h2><h5>'+refpdt+'<br>'+pricepdt+'</h5></div><div class="col-xs-12"><center><a href="'+urlpdt+'" class="btn btn-lg btn-success mt-2">SHOP NOW</a></center></div></div>';
		modal(html);
	});

	$(".login-popup").click(function(){
		var html = '<div class="row mx-2"><h3>CREAR UNA CUENTA</h3><form method="post" action="Registro/?return=Carrito"><div class="form-group"><label>Email</label><input type="email" class="form-control" placeholder="" name="email" required="required"></div><center><button type="submit" class="btn btn-success">CREAR UNA CUENTA</button></center></form></div><hr><div class="row px-2"><h3>¿YA ESTÁS REGISTRADO?</h3><form action="Ingresar?return=Carrito" method="post"><div class="col-xs-12 col-md-6"><div class="form-group"><label>Email</label><input type="email" class="form-control" name="email" required="required"></div></div><div class="col-xs-12 col-md-6"><div class="form-group"><label>Contraseña</label><input type="password" class="form-control" name="password" required="required"></div></div><center><button type="submit" class="btn btn-success" name="login">INICIAR SESIÓN</button></center></form></div>';
		modal(html);
	})

	$("#enviar_newsletter").click(function(){

		var email = $("#email").val();

		if (email !='') {

			$.ajax({
			  type: "POST",
			  url: "SuscribirNewsletter/",
			  data: $("#form-newsletter").serialize(),
			  success: function(data){
			  	alert(data);
			  	location.reload();
			  },
			  dataType: 'html'
			});
		}else{
			alert("Escribe tu email");
		}
	})

	$("#pais").change(function(){
		if ($(this).val() == "COLOMBIA") {
			$("#ciudad").hide();
			$("#ciudadco").show();
		}else{
			$("#ciudad").show();
			$("#ciudadco").hide();
		}
	})
	
})

//Modal	
function modal(html){

	$(".modal-body").html(html);

	$('#modal').modal({
	  keyboard: false
	})	
}
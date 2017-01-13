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
		$("#container-personalize").append('<img src="'+urlpieza+'" class="m-0 p-0 img-fluid" style="left:0px; top:0; position: absolute;z-index: 999;">');
	})

	$(".my-bag").click(function(){

		if (showbox) {
			$(this).css('right','-80px');			
			$('.bag-box').css('right','-380px');	
			$('.bag-box').css('display','none');

			showbox = false;

		}else{

			$(this).css('right','320px');
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

		var html = '<div class="row"><div class="col-xs-7"><img src="'+imgpdt+'" class="img-fluid"></div><div class="col-xs-5"><h5>'+namepdt+'<br>'+refpdt+'<br>'+pricepdt+'</h5></div><div class="col-xs-12"><center><a href="'+urlpdt+'" class="btn btn-success mt-2">SHOP NOW</a></center></div></div>';
		modal(html);
	});
	
})

//Modal	
function modal(html){

	$(".modal-body").html(html);

	$('#modal').modal({
	  keyboard: false
	})	
}
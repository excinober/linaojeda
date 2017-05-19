$(document).ready(function(){
	$(".addPdt").click(function(){

		var idpdt = $(this).attr("idpdt");
		var cantidad = $("#cantidad").val();
		var personalizable = $("#personalizable").val();

		if (personalizable==1) {

	        html2canvas($("#container-personalize"), {
			    onrendered: function (canvas) {
			        var imagedata = canvas.toDataURL('image/png');
					var imgdata = imagedata.replace(/^data:image\/(png|jpg);base64,/, "");
					//ajax call to save image inside folder
					$.ajax({
						url: 'Personalizar/GuardarImg',
						data: {
						       imgdata:imgdata
							   },
						type: 'post',
						success: function (url) {   
			             	var urlimg = url;
			             	$.ajax({
								type: 'POST',
								url: "Carrito/AgregarPdt",
								data: {	idpdt:idpdt, cantidad:cantidad, personalizable:personalizable, img:urlimg},
								dataType: 'json',
								async: false,
								success: function(response) {					
									$("#cantidad-carrito").text(response.cantidad);
									$(".count-bag").text(response.cantidad);				
									alert('El producto personalizado se agrego al carrito');
									$("body").removeAttr("onbeforeunload");
									location.href="Carrito/";
								},
								error: function() {
									alert('El producto no se agrego');
								}
							});
						}
					});
			    }
		   });

		}else{

			$.ajax({
				type: 'POST',
				url: "Carrito/AgregarPdt",
				data: {	idpdt:idpdt, cantidad:cantidad, personalizable:personalizable, img:""},
				dataType: 'json',
				async: false,
				success: function(response) {					
					$("#cantidad-carrito").text(response.cantidad);
					$(".count-bag").text(response.cantidad);				
					alert('El producto se agrego al carrito');
					//location.reload();
					location.href="Carrito/";
				},
				error: function() {
					alert('El producto no se agrego');
				}
			});
		}
		
	});

	$(".updateQuantity").change(function(){


		idpdt = $(this).attr("idpdt");
		cantidad = $(this).val();	
		
		$.ajax({
			type: 'POST',
			url: "Carrito/ActualizarCantidadPdt",
			data: {	idpdt:idpdt, cantidad:cantidad },
			dataType: 'html',
			async: false,
			success: function(response) {
				if (response=="OK") {
					window.location="Carrito/";
				}
			},
			error: function() {
				alert('No fue posible cambiar la cantidad');
			}
		});
	});

	$("#sumQty").click(function(){
		var cantidad = $("#cantidad").val();
		var max = $("#cantidad").attr("max");
		
		cantidad++;			
		
		$("#cantidad").val(cantidad);
	});

	$("#subQty").click(function(){
		var cantidad = $("#cantidad").val();
		if (cantidad>1) {
			cantidad--;
			$("#cantidad").val(cantidad);
		}
	});
});
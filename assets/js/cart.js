$(document).ready(function(){
	$(".addPdt").click(function(){

		idpdt = $(this).attr("idpdt");
		cantidad = $("#cantidad").val();

		$.ajax({
			type: 'POST',
			url: "Carrito/AgregarPdt",
			data: {	idpdt:idpdt, cantidad:cantidad },
			dataType: 'json',
			async: false,
			success: function(response) {
				/*$("#total-carrito").text("Total a pagar $"+response.total);*/
				$("#cantidad-carrito").text(response.cantidad);
				$(".count-bag").text(response.cantidad);				
				alert('El producto se agrego al carrito');				
			},
			error: function() {
				alert('El producto no se agrego');
			}
		});
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
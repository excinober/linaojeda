<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pago</title>
</head>
<body onload="enviar_form()">
<form id="form" action="https://test.secureacceptance.allegraplatform.com/CI_Secure_Acceptance/Payment" method="post">
	<input type="hidden" name="profile_id" value="HPA0002">
	<input type="hidden" name="reference_number" value="1350029885978">
	<input type="hidden" name="amount" value="<?=$amount?>">
	<input type="hidden" name="currency" value="<?=$currency?>">
	<input type="hidden" name="locale" value="en">
	<input type="hidden" name="transaction_uuid" value="fcfc212e92d23be881d1299ef3c3b314">
	<input type="hidden" name="signed_date_time" value="2013-01- 17T10:46:39Z">
	<input type="hidden" name="signed_field_names" value="comma separated list of signed fields">
	<input type="hidden" name="unsigned_field_names" value="comma separated list of unsigned fields">
	<input type="hidden" name="signature" value="WrXOhTzhBjYMZROwiCug2My3jiZHOqATimcz5EBA07M=.">
</form>
<script type="text/javascript">
		function enviar_form(){
			document.getElementById("form").submit();
		}
	</script>
</body>
</html>
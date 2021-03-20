<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
  <style>
	.navbar-brand{margin-bottom: 10px;
							}


	h1{text-align: center;
	margin-top: 10px;}



	form{text-align: center;}

	</style>
</head>
<body>
	<div class='container-fluid'>
		
		<h1>Create</h1>
		<div class='row'>
			<div class='col-12'>
	<form action='Create2.php' method='POST'>
		<label>Customer ID:</label><input type="text" name="ID" required><br>
		<label>Customer Name:</label><input type="text" name="customerName" required><br>
		<label>Tel:</label><input type="text" name="Tel" required><br>
		<label>Address Line1:</label><input type="text" name="address_line1" required><br>
		<label>City:</label><input type="text" name="city" required><br>
		<label>Country:</label><input type="text" name="country" required><br>
		
		<div class="submitbn">
		<input type="submit" >
	</div>
	</form>

</div></div>

</div>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Read</title>

  <style>
		.create_book{width: 100%;
		margin-top: 20px;}

	
	</style>
</head>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "session4";

$connection = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM customers";

$result = mysqli_query($connection, $sql);
?>

<body>

	<div class='container-fluid'>
		<div class="row">
				<div class="col-md-12">
			<button class="create_book"><a href="Create.php">Add Date</a></button>
		</div>
		</div>

		<div class='row'>
<?php

	include 'config.php';


	$sql = "SELECT * FROM customers";
	$result = mysqli_query($connection, $sql);

	if(mysqli_num_rows($result) > 0 ){
		echo "<table border='1' class='col-12'>
				<tr><th>Customer ID</th><th>Customer Name</th><th>Tel</th>
				<th>Address line1</th><th>City</th><th>Country</th><th></th>
				<tr>";
			while($customers = mysqli_fetch_assoc($result)){
				echo "<tr><td>".$customers["ID"]."</td><td>".$customers["customerName"]."</td><td>".$customers["Tel"]."</td><td>".$customers["address_line1"]."</td>
				<td>".$customers["city"]."</td><td>".$customers["country"]."</td><td>
<a href='Update.php?id=".$customers['ID']."'>Update</a>//
<a href='Delete.php?id=".$customers['ID']."&Title=".$customers['Title']."'>Delete</a>
				</td><tr>";
			}
		echo "</table>";
	}

mysqli_close($connection);






?>
</div>

</div>
</div>
</body>
</html>

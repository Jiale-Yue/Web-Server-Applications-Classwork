<!DOCTYPE html>
<html>
<head>
	<title>Create</title>


</head>

<body>
	<div class='container'>
		<div class='row'>
			<div class='col-12'>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "session4";

$connection = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM customers";


	require 'config.php';

	$sql = "INSERT INTO customers VALUES ('".$_POST["ID"]."','".$_POST["customerName"]."','".$_POST["Tel"]."',
		'".$_POST["address_line1"]."','".$_POST["city"]."','".$_POST["country"]."')";

	if ($connection->query($sql) === TRUE){
		echo "<h5>New record created successfully.<a href = 'Read.php'>click here</a> to leave this page.</h5>";
	}
	else{
		echo "<h5>Failed to add book.<a href = 'Read.php'>click here</a> to leave this page.</h5>";
	}

	$connection->close();
 ?>
</div></div></div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>BookList</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <style>
    .col-12{font-size: 20px;
	margin-top: 20px;}

    </style>
  
</head>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "session3";

$connection = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM ExcercisePart2";

$result = mysqli_query($connection, $sql);
?>

<body>

		<div class='row'>
<?php

	include 'config.php';
	$sql = "SELECT * FROM ExcercisePart2";
	$result = mysqli_query($connection, $sql);

	if(mysqli_num_rows($result) > 0 ){
		echo "<table border='1' class='col-12'>
				<tr><th>Img</th><th>Book Number</th><th>Book Name</th><th>URL</th>
				<th>Price</th><tr>";
			while($ExcercisePart2 = mysqli_fetch_assoc($result)){
				echo "<tr><td><img src='".$ExcercisePart2["Img"]."' height='30px'></td><td>".$ExcercisePart2["ID"]."</td><td>".$ExcercisePart2["BookName"]."</td><td>".$ExcercisePart2["URL"]."</td>
				<td>".$ExcercisePart2["Price"]."</td><tr>";
			}
		echo "</table>";
	}

mysqli_close($connection);






?>
</div>
</div>
</body>
</html>

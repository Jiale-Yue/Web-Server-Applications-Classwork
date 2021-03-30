<!DOCTYPE html>
<html>
<head>
	<title>Pokemon Database</title>
	<?php require 'css.php'?>

</head>
<body>

	<div class='container'>


		<?php include 'nav.php';?>

		<div class='row'>
<?php

	include 'config.php';

	$sql = "SELECT * FROM pokedex";
	$result = mysqli_query($connection, $sql);

	if(mysqli_num_rows($result) > 0 ){
				while($row = mysqli_fetch_assoc($result)){
				echo "<div class='col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3'> 
				<center><img src = '".$row["icon"]."' width='auto' style='max-height:150px;'></center>
				<center><b>".$row["pokedex_number"]." : ".$row["name"]." </b></center>
				<center><a href='pokeapi.php?id=".$row['pokedex_number']."'>Details</a>
				<a href='update.php?id=".$row['pokedex_number']."'>Update</a>
				<a href='delete.php?id=".$row['pokedex_number']."&name=".$row['name']."'>Delete</a></center>
				</div>";}
	}

mysqli_close($connection);






?>
</div>	
</div>
</body>
</html>
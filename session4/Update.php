<!DOCTYPE html>
<html>
<head>
	<title>Update</title>

	<style>
	 label{margin-top: 5px;
	 margin-bottom: 15px;}

	 h1{text-align: center;
	 margin-top: 20px;
 margin-bottom: 30px;}

 h5{text-align: center;
 color: red;
margin-top: 10px;}

	 form{text-align: center;}
	</style>
</head>

<body>
	<div class='container'>
		<h1>Update Information</h1>
				<div class='row'>
					<div class='col-12'>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "session4";

	$connection = new mysqli($servername, $username, $password, $dbname);

		$sql = "SELECT * FROM customers WHERE ID = ".$_GET['id'];
		$result = mysqli_query($connection, $sql);

		if(mysqli_num_rows($result) > 0 ){
			while($row = mysqli_fetch_assoc($result)){
				?>
				<form action='Update.php?id=<?php echo $_GET['id'];?>' method='post'>
					<label>Customer ID:</label><input type='text' name='ID' value="<?php echo $row['ID'];?>"><br>
					<label>Customer Name:</label><input type='text' name='customerName' value="<?php echo $row['customerName'];?>"><br>
					<label>Tel:</label><input type='text' name='Tel' value="<?php echo $row['Tel'];?>"><br>
					<label>Address Line1: </label><input type='text' name='address_line1' value="<?php echo $row['address_line1'];?>"><br>
					<label>City: </label><input type='text' name='city' value="<?php echo $row['city'];?>"><br>
					<label>Country: </label><input type='text' name='country' value="<?php echo $row['country'];?>"><br>

					<input type='submit' name='submit'>
					</form>
        <?php
				}
			}

			if ($_SERVER["REQUEST_METHOD"] == "POST"){
						$sqlupdate = "UPDATE customers SET ID = '".$_POST['ID']."',customerName = '".$_POST['customerName']."',
						 Tel = '".$_POST['Tel']."', address_line1 = '".$_POST['address_line1']."',
						  city = '".$_POST['city']."', country = '".$_POST['country']."' WHERE ID = ".$_GET['id'];



					 if ($connection->query($sqlupdate) === TRUE){
										echo "<h5>New record updated successfully,<a href='Read.php'>click here</a> to leave this page.</h5>";
									}
									else{
										echo "<h5>Update Failed, please try again later.</h5>";
									}



					}
	?>
</div></div></div>
</body>
</html>

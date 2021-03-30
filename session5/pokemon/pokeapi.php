<html>
<head>
<title>Pokemon Api</title>
</head>
<body>
<div class='container'>
<div class='row'> 

<?php


$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
require "config.php";
if(isset($_GET['id'])){
   $pokemon = $_GET['id'];}
else{
  $pokemon = "5";}

$url = "https://pokeapi.co/api/v2/pokemon/".$pokemon;
curl_setopt($curl,CURLOPT_URL,$url);

$result = json_decode(curl_exec($curl));

echo "<center><img src='".$result->sprites->front_shiny."' width='200px' height='200px'>
<h3>Name: ".ucfirst($result->name)."</h3>
<h3>Weight: ".$result->weight."</h3>
<h3>Height: ".$result->height."</h3>
<h3>Attack: " .$result->stats[1]->base_stat."</h3></center>
";

?>
</div>
</div>

</body>

</html>
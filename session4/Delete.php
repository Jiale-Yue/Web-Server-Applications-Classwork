<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete</title>
   
  </head>
  <body>


    <?php
    $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "session4";

   $connection = new mysqli($servername, $username, $password, $dbname);
   $genreid = $_GET['id'];

   $sql = ("DELETE FROM customers WHERE ID = $genreid");

   if($connection ->query($sql)===TRUE){
     echo"<h5>New record delete successfully, <a href='Read.php'>click here</a> to leave this page</h5>";
   } else{
     echo"Error:" .$sql. "<br>" .$connection -> error;
   }

   $connection->close();

   header("Read.php");

     ?>
  </body>
</html>

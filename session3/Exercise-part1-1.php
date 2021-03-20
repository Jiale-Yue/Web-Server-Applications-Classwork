<html>
    <head>
        <title>
            connection test
        </title>
    </head>
    <body>
        <?php
        $servername= "localhost";
         $username = "root";
         $password = "";
         $dbname = "classicmodels";

         $conn = new mysqli($servername,$username,$password,$dbname);
    
        $sql = "SELECT contactFirstName, city, country FROM customers";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "Surname: " . 
                    $row["contactFirstName"]. " 
                    City: " .  $row["city"]. " Country:" . 
                    $row["country"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    
        mysqli_close($conn);
    
         ?>
    </body>
</html>
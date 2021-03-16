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

         if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            exit();
        } else
        echo "Connected successfully to the ".$dbname." database.\n";
    
        $sql = "SELECT customerNumber, contactFirstName, contactLastName FROM customers";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "Customer Number: " . 
                    $row["customerNumber"]. " 
                    - Name: " .  $row["contactFirstName"]. " " . 
                    $row["contactLastName"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    
        mysqli_close($conn);
    
         ?>
    </body>
</html>
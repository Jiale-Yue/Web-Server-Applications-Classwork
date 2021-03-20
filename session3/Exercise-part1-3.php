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

        
        $sql = "SELECT productCode, productName, productLine FROM products ORDER BY products.productLine,products.productName ASC";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "Product Code:" . 
                    $row["productCode"]. " Product Name:" .  $row["productName"]. " Product Line:" . 
                    $row["productLine"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    
        mysqli_close($conn);
    
         ?>
    </body>
</html>
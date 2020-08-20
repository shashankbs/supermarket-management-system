<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
        <?php
            include "view.php";    
        ?>
        
        <h1>Product details</h1>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userregistration";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "select * from product";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>NAME</th><th>MANUFACTURE DATE</th><th>EXPIRY DATE</th><th>COMPANY</th><th>STOCK AVAILABLE</th><th>PRICE</th><th>DEPARTMENT</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["pid"]."</td><td>".$row["pname"]."</td><td>".$row["mfd"]."</td><td>".$row["exp"]."</td><td>".$row["company"]."</td><td>".$row["stock"]."</td><td>".$row["price"]."</td><td>".$row["dname"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
?>

</body>
</html>
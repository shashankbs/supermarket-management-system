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
        
        <h1>Employee details</h1>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userregistration";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "select * from customer";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>NAME</th><th>PHONE</th><th>ADDRESS</th><th>NO. OF PURCHASES</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["cid"]."</td><td>".$row["name"]."</td><td>".$row["phone"]."</td><td>".$row["address"]."</td><td>".$row["total_purchases"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
?>

</body>
</html>
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
        
        <h1>Department details</h1>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userregistration";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "select * from dept";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>DEPARTMENT NAME</th><th>NO. OF EMPLOYEES</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["dno"]."</td><td>".$row["dname"]."</td><td>".$row["total_emp"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
?>

</body>
</html>
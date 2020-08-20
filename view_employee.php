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

    $sql = "select * from emp";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>FIRST NAME</th><th>LAST NAME</th><th>GENDER</th><th>PHONE</th><th>DOB</th><th>AGE</th><th>DESIGNATION</th><th>SALARY</th><th>DEPARTMENT</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["eid"]."</td><td>".$row["fn"]."</td><td>".$row["ln"]."</td><td>".$row["gender"]."</td><td>".$row["phone"]."</td><td>".$row["dob"]."</td><td>".$row["age"]."</td><td>".$row["designation"]."</td><td>".$row["salary"]."</td><td>".$row["dname"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
?>

</body>
</html>
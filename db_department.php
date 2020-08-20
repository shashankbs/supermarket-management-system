<?php

    session_start();
    header("refresh:5;url=add_department.php");
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userregistration";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }

    $dno=$_POST['did'];
    $dname=$_POST['name'];
    
    $s="select * from dept where dname = '$dname'";

    $result = $conn->query($s);
    
    if ($result->num_rows>0)
    {
        echo "Department is already present";
    }
    else
    {
        $reg="insert into dept (dno,dname) values ('$dno','$dname')";
        $conn->query($reg);
        echo "Department added";
    }

?>
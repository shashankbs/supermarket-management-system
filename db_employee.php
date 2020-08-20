<?php

    session_start();
    header("refresh:5;url=add_employee.php");
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userregistration";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }

    $fn=$_POST['first_name'];
    $ln=$_POST['last_name'];
    $ph=$_POST['phone'];
    $eid=$_POST['eid'];
    $des=$_POST['designation'];
    $sal=$_POST['salary'];
    $gen=$_POST['gender'];
    $dep=$_POST['department'];
    $dob=$_POST['dob'];
    
    $s="select * from emp where eid = '$eid'";

    $result = $conn->query($s);
    
    if ($result->num_rows>0)
    {
        echo "Employee is already present";
    }
    else
    {
        $reg="insert into emp (eid,fn,ln,gender,phone,dob,designation,salary,dname) values ('$eid','$fn','$ln','$gen',$ph,'$dob','$des',$sal,'$dep')";
        $conn->query($reg);
        echo "Employee added";
    }

?>
<?php

    session_start();
    header("refresh:5;url=add_supplier.php");
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userregistration";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }

    $name=$_POST['name'];
    $ph=$_POST['phone'];
    $sid=$_POST['sid'];
    $addr=$_POST['address'];
    $veh=$_POST['vehicle'];
    
    $s="select * from supplier where sid = '$sid'";

    $result = $conn->query($s);
    
    if ($result->num_rows>0)
    {
        echo "Supplier is already present";
    }
    else
    {
        $reg="insert into supplier (sid,name,phone,address,vehicle) values ('$sid','$name',$ph,'$addr','$veh')";
        $conn->query($reg);
        echo "Supplier added";
    }

?>
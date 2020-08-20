<?php

    session_start();
    header("refresh:5;url=add_customer.php");
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userregistration";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }

    $cid=$_POST['cid'];
    $name=$_POST['name'];
    $ph=$_POST['phone'];
    $addr=$_POST['address'];
    
    $s="select * from customer where cid = '$cid'";

    $result = $conn->query($s);
    
    if ($result->num_rows>0)
    {
        echo "Customer is already present";
    }
    else
    {
        $reg="insert into customer (cid,name,phone,address) values ('$cid','$name',$ph,'$addr')";
        $conn->query($reg);
        echo "Customer added";
    }

?>
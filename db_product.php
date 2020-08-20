<?php

    session_start();
    header("refresh:5;url=add_product.php");
    
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
    $pid=$_POST['pid'];
    $mfd=$_POST['mfd_date'];
    $exp=$_POST['exp_date'];
    $company=$_POST['company'];
    $price=$_POST['price'];
    $dep=$_POST['department'];
    
    $s="select * from product where pid = '$pid'";

    $result = $conn->query($s);
    
    if ($result->num_rows>0)
    {
        echo "Product is already present";
    }
    else
    {
        $reg="insert into product (pid,pname,mfd,exp,company,price,dname) values ('$pid','$name','$mfd','$exp','$company',$price,'$dep')";
        $conn->query($reg);
        echo "Product added";
    }

?>
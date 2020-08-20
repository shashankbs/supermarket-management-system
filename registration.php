<?php

    session_start();
    header("refresh:10;url=login.php");
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userregistration";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }

    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $uname=$_POST['username'];
    $pass=$_POST['cpassword'];
    
    $s="select * from usertable where user_name = '$uname'";

    $result = $conn->query($s);
    
    if ($result->num_rows>0)
    {
        echo "Username already taken";
    }
    else
    {
        $reg="insert into usertable (first_name,last_name,user_name,password) values ('$fname','$lname','$uname','$pass')";
        $conn->query($reg);
        echo "registration successful";
    }

?>

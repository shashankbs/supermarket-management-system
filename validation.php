<?php

    session_start();
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userregistration";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }

    $uname=$_POST['username'];
    $pass=$_POST['password'];
    
    $s="select * from usertable where user_name = '$uname' && password = '$pass'";

    $result = $conn->query($s);
    
    if ($result->num_rows > 0)
    {
        $_SESSION['username'] = $uname;
        header('location:home.php');
    }
    else
    {
        echo "Wrong Username or Password";
        header('refresh:10;url=login.php');
    }

?>

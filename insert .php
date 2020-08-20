<?php

    session_start();
    
    if(!isset($_SESSION['username']))
    {
        header('location:login.php');
    }
?>


<html>
    <head>
    
        <title>insert page</title>
    
        <style>
        
            h1
            {
                font-size: 50px;
                color: lightseagreen;
            }
            
            a
            {
                font-size: 30px;
                border-color: black;
                border-width: 3px;
            }
            button
            {
                background: none;
                border-style: none;
            }
            button:hover
            {
                color: blue;
                opacity: 0.5;
            }
            nav
            {
                color:  beige;
                background-color: black;
                float: left;
                width: 25%;
                height: 100%;
                opacity: 0.9;
                border-radius: 15px;
            }
            
            
        </style>
    </head>

    <body style="background-color: burlywood;background-image:url(nice.jpg);background-repeat: no-repeat;background-size: cover">
        <nav>
            <br>
            <br>
            <br>
            
            <h1>What do you want to insert?</h1>
            <ul>
           <li> <a style="color:#80deab" href="add_employee.php">EMPLOYEE</a><br></li>
            <br>
            <li><a style="color:#80deab" href="add_supplier.php">SUPPLIER</a><br></li>
            <br>
              <li>  <a style="color:#80deab" href="add_product.php">PRODUCT</a><br></li>
            <br>
            <li><a style="color:#80deab" href="add_department.php">DEPARTMENT</a><br></li>
            <br>
            <li><a style="color:#80deab" href="add_customer.php">CUSTOMER</a><br></li>
                </ul>
            <br>
            <br>
            <button><a style="color:white" href="home.php">HOME</a></button>
        </nav>
        
        <center><h1 style="color:black;font-family: fantasy;">SUPERMARKET MANAGEMENT SYSTEM</h1></center>
        
        
        
    </body>
    

</html>
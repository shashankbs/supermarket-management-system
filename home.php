<?php

    session_start();
    
    if(!isset($_SESSION['username']))
    {
        header('location:login.php');
    }
?>

<html>
    <head>
        <title>home page</title>
        
        <style> 
            button
            {
                height: 170px;
                width: 170px;
                margin: 50px;
                border-radius: 20%;
                border-style: none;
            }
            button:hover
            {
                opacity: 0.8;
            }
            
            h1
            {
                font-size: 50px;
                font-family: sans-serif;
            }
        </style> 
    </head>
    
    <body style="background-color: burlywood;background-image:url(homebackground.jpg);background-repeat: no-repeat;background-size: cover">
    
        <center>
        
        <h1 style="color:yellow">SUPERMARKET MANAGEMENT SYSTEM</h1>
        
            <button><a href="insert.php"><img src="insert.png" ></a></button>
            <button><a href=""><img src="modify.png" ></a></button>
            <button><a href=""><img src="delete.png" ></a></button><br>             
            <button><a href="view.php"><img src="view.png" height="150px" width="150px"></a></button>
            <button><a href="aboutus.php"><img src="aboutus.png" height="150px" width="150px"></a></button>
            <button><a href="logout.php"><img src="logout.png" height="150px" width="150px"></a></button>
            

        </center>
        
    </body>
</html>
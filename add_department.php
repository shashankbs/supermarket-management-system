<html>

    <head>
    
        <title>add department page</title>
        
        <style>
            .error {color:yellow;}       
            
            label
            {
                font-size: 30px;
                margin-left: 20px;
            }
            
        </style>
        
    </head>
    
    <body>
   
        <?php
            include "insert.php";    
        ?>
        <h1>Please enter the Department details</h1>
        
      
        <?php
    
        // define variables and set to empty values
        $name_Err = $did_Err = "";
        $name = $did = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            if (empty($_POST["name"])) 
            {
                $name_Err = "Department name is required";
            } 
            else 
            {
                $name = test_input($_POST["name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
                {
                    $name_Err = "Only letters and white space allowed";
                }
            }
            
            if (empty($_POST["did"])) 
            {
                $did_Err = "Department id is required";
            }
            else 
            {
                $did = test_input($_POST["did"]);
            }
             
        }

        function test_input($data) 
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
             
             
?>

        <p><span class="error">* required field</span></p>
        
        <form method="post" action="db_department.php">  
                <label>Department Name:</label> <input type="text" name="name" value="<?php echo $name;?>">
                <span class="error">*  <?php echo $name_Err;?></span>
                <br>
                <br>
    
                <label>Department ID:</label> <input type="text" name="did" value="<?php echo $did;?>">
                <span class="error">*  <?php echo $did_Err;?></span>
                <br>
                <br>
    
                <label>       </label>
                <input type="submit" name="submit">  

        
        </form>
    
    </body>
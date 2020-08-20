<html>

    <head>
    
        <title>add supplier page</title>
        
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
        <h1>Please enter the Supplier details</h1>
        
      
        <?php
    
        // define variables and set to empty values
        $name_Err = $sid_Err = $phone_Err = $address_Err = $vehicle_Err = "";
        $name = $sid = $phone = $address = $vehicle = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            if (empty($_POST["name"])) 
            {
                $name_Err = "Name is required";
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
            
            if (empty($_POST["sid"])) 
            {
                $sid_Err = "Supplier id is required";
            }
            else 
            {
                $sid = test_input($_POST["sid"]);
            }
             
            if (empty($_POST["phone"]))
            {
                $phone_Err = "Phone no.is required";
            }
            else
            {
                $phone = test_input($_POST["phone"]);
                if (preg_match("/^[a-zA-Z ]*$/",$phone)) 
                {
                    $phone_Err = "Only numbers allowed";
                }
            }

            if (empty($_POST["address"]))
            {
                $address_Err = "Address is required";
            }    
            else 
            {
                $address = test_input($_POST["address"]);
            }
        
            if (empty($_POST["vehicle"]))
            {
                $vehicle_Err = "Vehicle is required";
            }
            else
            {
                $vehicle = test_input($_POST["vehicle"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$vehicle)) 
                {
                    $vehicle_Err = "Only letters and white space allowed";
                }
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
        
        <form method="post" action="db_supplier.php">  
                <label>Name:</label> <input type="text" name="name" value="<?php echo $name;?>">
                <span class="error">*  <?php echo $name_Err;?></span>
                <br>
                <br>
    
                <label>Phone:</label> <input type="text" name="phone" value="<?php echo $phone;?>">
                <span class="error">*  <?php echo $phone_Err;?></span>
                <br>
                <br>
    
                <label>Supplier ID:</label> <input type="text" name="sid" value="<?php echo $sid;?>">
                <span class="error">*  <?php echo $sid_Err;?></span>
                <br>
                <br>
    
                <label>Address:</label> <input type="text" name="address" value="<?php echo $address;?>">
                <span class="error">*  <?php echo $address_Err;?></span>
                <br>
                <br>
    
                <label>Vehicle:</label> <input type="text" name="vehicle" value="<?php echo $vehicle;?>">
                <span class="error">*  <?php echo $vehicle_Err;?></span>
                <br>
                <br>
                
                <label>       </label>
                <input type="submit" name="submit">  

        
        </form>
    
    </body>
<html>

    <head>
    
        <title>add product page</title>
        
        <style>
            .error {color: yellow;}       
            
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
        <h1>Please enter the Product details</h1>
        
      
        <?php
    
        // define variables and set to empty values
        $name_Err = $department_Err = $pid_Err = $mfd_date_Err = $exp_date_Err = $company_Err = $price_Err = "";
        $name = $department = $pid = $mfd_date = $exp_date = $company = $price = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            if (empty($_POST["name"])) 
            {
                $name_Err = "Product name is required";
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
            
            if (empty($_POST["department"]))
            {
                $department_Err = "Department is required";
            } 
            else 
            {
                $department = test_input($_POST["department"]);
                // check if department only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$category)) 
                {
                    $department_Err = "Only letters and white space allowed";
                }
            }
            if (empty($_POST["pid"])) 
            {
                $pid_Err = "Product id is required";
            }
            else 
            {
                $pid = test_input($_POST["pid"]);
            }

            if (empty($_POST["mfd_date"])) 
            {
                $mfd_date_Err = "Manufacture date is required";
            }
            else
            {
                $mfd_date = test_input($_POST["mfd_date"]);
            }
             
            if (empty($_POST["exp_date"]))
            {
                $exp_date_Err = "Expiry date is required";
            }
            else
            {
                $exp_date = test_input($_POST["exp_date"]);
            }

            if (empty($_POST["company"]))
            {
                $company_Err = "Company  name is required";
            }    
            else 
            {
                $company = test_input($_POST["company"]);
                // check if company only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$company)) 
                {
                    $company_Err = "Only letters and white space allowed";
                }
            }
        
            if (empty($_POST["price"]))
            {
                $price_Err = "Price is required";
            }
            else
            {
                $price = test_input($_POST["price"]);
                if (preg_match("/^[a-zA-Z ]*$/",$price)) 
                {
                    $price_Err = "Only numbers allowed";
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
        
        <form method="post" action="db_product.php">  
                <label>Product Name:</label> <input type="text" name="name" value="<?php echo $name;?>">
                <span class="error">*  <?php echo $name_Err;?></span>
                <br>
                <br>

                <label>Product ID:</label> <input type="text" name="pid" value="<?php echo $pid;?>">
                <span class="error">*  <?php echo $pid_Err;?></span>
                <br>
                <br>
    
                <label>Department:</label> <input type="text" name="department" value="<?php echo $department;?>">
                <span class="error">*  <?php echo $department_Err;?></span>
                <br>
                <br>
       
       
                <label>Mfd. Date:</label> <input type="text" name="mfd_date" value="<?php echo $mfd_date;?>">
                <span class="error">*  <?php echo $mfd_date_Err;?></span>
                <br>
                <br>
            
                <label>Exp. Date:</label> <input type="text" name="exp_date" value="<?php echo $exp_date;?>">
                <span class="error">*  <?php echo $exp_date_Err;?></span>
                <br>
                <br>
    
                <label>Company:</label> <input type="text" name="company" value="<?php echo $company;?>">
                <span class="error">*  <?php echo $company_Err;?></span>
                <br>
                <br>
    
                <label>Price:</label> <input type="text" name="price" value="<?php echo $price;?>">
                <span class="error">*  <?php echo $price_Err;?></span>
                <br>
                <br>
  
                <label>       </label>
                <input type="submit" name="submit">  

        
        </form>
    
    </body>
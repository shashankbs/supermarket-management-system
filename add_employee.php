<html>

    <head>
    
        <title>add employee page</title>
        
        <style>
            .error {color: yellow;}       
            
            label
            {
                font-size: 25px;
                margin-left: 20px;
            }
            
        </style>
        
    </head>
    
    <body>
   
        <?php
            include "insert.php";    
        ?>
        <h1>Please enter the Employee details</h1>
        
      
        <?php
    
        // define variables and set to empty values
        $first_name_Err = $last_name_Err = $eid_Err = $gender_Err = $phone_Err = $designation_Err = $salary_Err = $department_Err = $dob_Err ="";
        $first_name = $last_name = $eid = $gender = $phone = $designation = $salary = $department = $dob = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            if (empty($_POST["first_name"])) 
            {
                $first_name_Err = "First name is required";
            } 
            else 
            {
                $first_name = test_input($_POST["first_name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) 
                {
                    $first_name_Err = "Only letters and white space allowed";
                }
            }
            
            if (empty($_POST["last_name"]))
            {
                $last_name_Err = "Last name is required";
            } 
            else 
            {
                $last_name = test_input($_POST["last_name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) 
                {
                    $last_name_Err = "Only letters and white space allowed";
                }
            }
            if (empty($_POST["eid"])) 
            {
                $eid_Err = "Employee id is required";
            }
            else 
            {
                $eid = test_input($_POST["eid"]);
            }

            if (empty($_POST["gender"])) 
            {
                $gender_Err = "Gender is required";
            }
            else
            {
                $gender = test_input($_POST["gender"]);
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

            if (empty($_POST["designation"]))
            {
                $designation_Err = "Designation is required";
            }    
            else 
            {
                $designation = test_input($_POST["designation"]);
                // check if designation only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$designation)) 
                {
                    $designation_Err = "Only letters and white space allowed";
                }
            }
            
            if (empty($_POST["dob"]))
            {
                $dob_Err = "DOB is required";
            }    
            else 
            {
                $dob = test_input($_POST["dob"]);
            }
        
            if (empty($_POST["salary"]))
            {
                $salary_Err = "Salary is required";
            }
            else
            {
                $salary = test_input($_POST["salary"]);
                if (preg_match("/^[a-zA-Z ]*$/",$salary)) 
                {
                    $salary_Err = "Only numbers allowed";
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
                if (!preg_match("/^[a-zA-Z ]*$/",$department)) 
                {
                    $department_Err = "Only letters and white space allowed";
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
        
        <form method="post" action="db_employee.php">  
                <label>First Name:</label> <input type="text" name="first_name" value="<?php echo $first_name;?>">
                <span class="error">*  <?php echo $first_name_Err;?></span>
                <br>
                <br>
    
                <label>Last Name:</label> <input type="text" name="last_name" value="<?php echo $last_name;?>">
                <span class="error">*  <?php echo $last_name_Err;?></span>
                <br>
                <br>
       
       
                <label>Phone:</label> <input type="text" name="phone" value="<?php echo $phone;?>">
                <span class="error">*  <?php echo $phone_Err;?></span>
                <br>
                <br>
    
                <label>Employee ID:</label> <input type="text" name="eid" value="<?php echo $eid;?>">
                <span class="error">*  <?php echo $eid_Err;?></span>
                <br>
                <br>
    
                <label>Designation:</label> <input type="text" name="designation" value="<?php echo $designation;?>">
                <span class="error">*  <?php echo $designation_Err;?></span>
                <br>
                <br>
            
                <label>DOB:</label> <input type="text" name="dob" value="<?php echo $dob;?>">
                <span class="error">*  <?php echo $dob_Err;?></span>
                <br>
                <br>
    
                <label>Salary:</label> <input type="text" name="salary" value="<?php echo $salary;?>">
                <span class="error">*  <?php echo $salary_Err;?></span>
                <br>
                <br>
  
                <label>Gender:</label>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
                <span class="error">*  <?php echo $gender_Err;?></span>
                <br>
                <br>
            
                <label>Department:</label> <input type="text" name="department" value="<?php echo $department;?>">
                <span class="error">*  <?php echo $department_Err;?></span>
                <br>
                <br>
                
                <label>       </label>
                <input type="submit" name="submit">  

        
        </form>
    
    </body>

<html>
<head>
    <title>Sign Up page</title>
    <link rel="stylesheet" type="text/css" href="s.css">
</head>
    <body>
    <div class="login-box">
    <img src="download.png" class="avatar">
        <h1>Sign up</h1>
            <form method="post" action="registration.php">
              <div>

            <label>First Name</label>
            <input type="text" name="firstname" placeholder="Enter Firstname" required>
            <label>Last Name</label>
            <input type="text" name="lastname" placeholder="Enter Lastname" required>

            <label>Create username</label>
            <input type="text" name="username" placeholder="Enter Username" required>
            <label>Enter new password</label>
            <input type="password" name="password" placeholder="Enter Password" required>
            <label>Confirm password</label>
            <input type="password" name="cpassword" placeholder="Re-enter Password" required>
            
            <button type="submit" name="submit" class="btn">Sign Up</button>

                  
                </div>
              <br>
<p style="text-align:center;">Alredy registered?<a href="login.php" class="button">Login here</a></p>
        </form>
        </div>
    </body>
</html>

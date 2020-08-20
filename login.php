<html>
    <head>
        <title> Login page </title>
        
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    
    <body>
        <div class="login-box">
            <img src="download.png" class="avatar">
            <h1>Login</h1>
        
            
                <form method="post" action="validation.php">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Enter Username" required>
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter Password" required>
                    <button type="submit" name="submit" class="btn">Login</button>
                    <br>
                    <br>
                    <a href="forgot_password.php">Forgot Password?</a>
        
                    <hr>

                    <a href="sign_up.php"><button type="button" name="button" class="btn">Sign Up</button></a>

                </form>

        </div>

    </body>
</html>

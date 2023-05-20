<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup page</title>
    <link rel="stylesheet" href="styles.css">
    <style>

</style>
</head>
<body>
    
    
        <div class="box">
            <div class="container">
                <div class="top-header">
                    <header>Sign Up</header>
                </div>
            
                <form method="post" action="../includes/signupinc.php">
                <div class="input-field">
                    <input type="text" name="name" class="input" placeholder="Full name" maxlength="20" value="" required>
                    <span class="error"></span><br>
                 </div> 
                 <div class="input-field">
                    <input type="email" name="email" class="input" placeholder="Email" value="" required>
                    <span class="error"></span><br>
                 </div> 
                 <div class="input-field">
                    <input type="text" name="uname" class="input" placeholder="User name" value="" required>
                    <span class="error"></span><br>
                </div>
                <div class="input-field">
                    <input type="password" name="password" class="input" placeholder="Password" maxlength="25" value="" required>
                    <span class="error"></span><br>
                </div> 
                <div class="input-field">
                    <input type="password" name="repassword" class="input" placeholder="Confirm Password" maxlength="25" value="" required>
                    <span class="error"></span><br>
                 </div> 
                <div class="input-field">
                    <input type="submit" name="submit" class="submit" value="Sign Up"><br>
                 
                </div>
                </form>


                 <div class="bottom">
                    
                    <div class="left">
                        <h5>Already have an account?</h5><a href="logindex.html" class="bottom">SIGN IN</a><br><br><a href="../index.php" style="color:#07e4ce">Home</a>
                    </div>


            </div>
        </div>

    </body>
    </html>
    
</body>
</html>
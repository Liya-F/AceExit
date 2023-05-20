<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup page</title>
    <link rel="stylesheet" href="styles.css">

    <style>
.error {
    color: #FF0000;
    font-size: 14px;
    margin-left: 10px;
    font-weight: 300;
    text-align: justify;
    }
</style>

</head>
<body>


<?php

// define variables and set to empty values
$nameErr = $emailErr = $unameErr = $passwordErr = $repasswordErr = "";
$name = $email = $uname = $password = $repassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["uname"])) {
    $unameErr = "Username is required";
  } else {
    $uname = test_input($_POST["uname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-z]\w{2,23}[^_]$/i",$uname)) {
      $unameErr = "Only letters, digits and '_' is allowed";
    }
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/",$password)) {
      $passwordErr = "Your password must 8-12 character containing letter, digit and special character (!@#$%)";
    }
  }

  if (empty($_POST["repassword"])) {
    $repasswordErr = "Comfirm your password.";
  } else {
    $repassword = test_input($_POST["repassword"]);
    // check if name only contains letters and whitespace
    if ($repassword !== $password) {
      $repasswordErr = "Your password doesn't match.";
    }
  }

  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>


    
        <div class="box">
            <div class="container">
                <div class="top-header">
                    <header>Sign Up</header>
                </div>
            
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="input-field">
                    <input type="text" name="name" class="input" placeholder="Full name" maxlength="20" value="<?php echo $name;?>" required>
                    <span class="error"><?php echo $nameErr;?></span><br>
                 </div> 
                 <div class="input-field">
                    <input type="email" name="email" class="input" placeholder="Email" value="<?php echo $email;?>" required>
                    <span class="error"><?php echo $emailErr;?></span><br>
                 </div> 
                 <div class="input-field">
                    <input type="text" name="uname" class="input" placeholder="User name" value="<?php echo $uname;?>" required>
                    <span class="error"><?php echo $unameErr;?></span><br>
                </div>
                <div class="input-field">
                    <input type="password" name="password" class="input" placeholder="Password" maxlength="25" value="<?php echo $password;?>" required>
                    <span class="error"><?php echo $passwordErr;?></span><br>
                </div> 
                <div class="input-field">
                    <input type="password" name="repassword" class="input" placeholder="Confirm Password" maxlength="25" value="<?php echo $repassword;?>" required>
                    <span class="error"><?php echo $repasswordErr;?></span><br>
                 </div> 
                <div class="input-field">
                    <input type="submit" name="submit" class="submit" value="Sign Up"><br>
                 
                </div>
                </form>


                 <div class="bottom">
                    
                    <div class="left">
                        <h5>Already have an account?</h5><a href="logindex.html" class="bottom">SIGN IN</a><br><br><a href="../index.html" style="color:#07e4ce">Home</a>
                    </div>


            </div>
        </div>
<?php
echo "<h2>Data Entered:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $uname;
echo "<br>";
echo $password;
echo "<br>";
echo $repassword;
?>

    </body>
    </html>
    
</body>
</html>
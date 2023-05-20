<?php
 if(isset($_POST["submit"])){

    //grabbing data
    
    $uname = $_POST["uname"];
    $password = $_POST["password"];
    

    //instantiate SignupCtrl class
    include "../classes/dbcls.php";
    include "../classes/logincls.php";
    include "../classes/loginctrl.php";


    $login = new LoginCtrl($uname, $password);

    //running error handlers and user signup
    $login->loginUser();

    //going back to front page
    header("location: ../index.php?error=none");
    

 }
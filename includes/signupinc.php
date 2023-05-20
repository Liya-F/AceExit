<?php
 if(isset($_POST["submit"])){

    //grabbing data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $uname = $_POST["uname"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $nameErr = "";
    $emailErr = "";
    $unameErr = "";
    $passwordErr = "";
    $repasswordErr = "";
    

    //instantiate SignupCtrl class
    include "../classes/dbcls.php";
    include "../classes/signupcls.php";
    include "../classes/signupctrl.php";


    $signup = new SignupCtrl($name, $email, $uname, $password, $repassword, $nameErr, $emailErr, $unameErr,$passwordErr, $repasswordErr);

    //running error handlers and user signup
    $signup->signupUser();

    //going back to front page
    header("location: ../Login/logindex.html?error=none");

 }
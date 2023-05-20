<?php

class SignupCtrl extends Signup{
    private $name;
    private $email;
    private $uname;
    private $password;
    private $repassword;
    

    public function __construct($name, $email, $uname, $password, $repassword)
    {
        $this->name = $name;
        $this->email = $email;
        $this->uname = $uname;
        $this->password = $password;
        $this->repassword = $repassword;
       
    }

    public function signupUser(){
        if($this->emptyInput() == false){
            header("location: ../Login/signUp.php?error=emptyinput");
            exit();
        }

        if($this->invalidName() == false){
            header("location: ../Login/signUp.php?error=invalidname");
            exit();
        }

        if($this->invalidEmail() == false){
            header("location: ../Login/signUp.php?error=invalidemail");
            exit();
        }

        if($this->invalidPassword() == false){
            header("location: ../Login/signUp.php?error=invalidpassword");
            exit();
        }

        if($this->passwordMatch() == false){
            header("location: ../Login/signUp.php?error=passwordnotmatched");
            exit();
        }

        if($this->usernameTaken() == false){
            header("location: ../Login/signUp.php?error=usernameoremailtaken");
            exit();
        }

        $this->setUser($this->name, $this->email, $this->uname, $this->password);
    }

    private function emptyInput(){
        $result;
        if(empty($this->name) || empty($this->email) || empty($this->uname) || empty($this->password) || empty($this->repassword)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidName(){
        $result;
        if(!preg_match("/^[a-zA-Z-' ]*$/", $this->name)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;

    }

    private function invalidEmail(){
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidUsername(){
        $result;
        if(!preg_match("/^[a-z]\w{2,23}[^_]$/i",$this->uname)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidPassword(){
        $result;
        if(preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/",$this->password)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    
    private function passwordMatch(){
        $result;
        if($this->password !== $this->repassword){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function usernameTaken(){
        $result;
        if(!$this->checkUser($this->uname, $this->email)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

}
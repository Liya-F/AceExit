<?php

class LoginCtrl extends Login{
    private $uname;
    private $password;

    public function __construct($uname, $password)
    {
        $this->uname = $uname;
        $this->password = $password;
    }

    public function loginUser(){
        if($this->emptyInput() == false){
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->uname, $this->password);
    }

    private function emptyInput(){
        $result;
        if(empty($this->uname) || empty($this->password)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }


    

}
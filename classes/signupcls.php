<?php

class Signup extends Dbh{

    protected function setUser($name, $email, $uname, $password){
        $stmt = $this->connect()->prepare('INSERT INTO users (users_name, users_email, users_username, users_password) VALUES (?, ?, ?, ?)');

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($name, $email, $uname, $hashedPassword))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
       
    }

    protected function checkUser($uname, $email){
        $stmt = $this->connect()->prepare('SELECT users_name FROM users WHERE users_name = ? OR users_email = ?;');
        if(!$stmt->execute(array($uname,$email))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $resultCheck;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }
        return $resultCheck;
    }





}
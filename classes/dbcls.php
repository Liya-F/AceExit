<?php

class Dbh{
    protected function connect(){
        try {
            $username = "root";
            $password = "Liya1*habte";
            $dbh = new PDO('mysql:host=localhost;port=3307;dbname=aceexitlogin', $username, $password);
            return $dbh;
            
        } catch (PDOException $e) {
            print "Error!: " .$e->getMessage() . "<br/>";
            die();
        }
    }
}
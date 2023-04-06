<?php
include_once("constant.php");

class Config{

    public $dbcon;

            //connecting to database
    function __construct(){
        $this->dbcon = new mysqli(DB_SERVER_NAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);

        if($this->dbcon->connect_error){
            die("conection Not succesful".$this->dbcon->connect_error);
        } else{
           // echo "connection successful";
        }
    }

    function register($firstname, $lastname, $email, $password){
        $pswd=password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user set firstname = '$firstname', lastname = '$lastname', email = '$email', password = '$pswd'";
        $result=$this->dbcon->query($sql);
        if($this->dbcon->affected_rows == 1){
            return true;
        } else{
            return false;
        }

    }


}

    



?>
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

    function login($email, $password){
        $sql = "SELECT * FROM user where email = '$email' ";
        $result=$this->dbcon->query($sql);
        if($this->dbcon->affected_rows == 1){
            $row = $result->fetch_assoc();
            $hash = $row ['password'];
            $confirm = password_verify($password, $hash);
            if($confirm){
                return true;
            }else{
                return false;
            }
            
        } else{
            return false;
        }
    }


}

    



?>
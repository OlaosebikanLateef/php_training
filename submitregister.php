<?php
include_once("config.php");

$bimbo = new config();

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

if($firstname == "" || $lastname == "" || $email == "" || $password == ""){
    echo ("please complete the fields");
}else{
    $register = $bimbo->register($firstname, $lastname, $email, $password);
    if($register == true){
        echo ('Register Successfully');
    }
}

?>
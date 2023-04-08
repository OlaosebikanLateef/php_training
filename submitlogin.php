<?php
include_once ('config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$object = new Config();
 
if($email == "" || $password == ""){
    echo "<div class='alert alert-danger'>";
    echo "Please Complete The Fields";
    echo "</div>";
}else {
    $result = $object->login($email, $password);
    if($result == true){
        echo "<div class='alert alert-Success'>";
        echo "Login Successfully";
        echo "</div>";
    } else{
        echo "<div class='alert alert-danger'>";
    echo "Password do not match our records";
    echo "</div>";
    }
}




?>
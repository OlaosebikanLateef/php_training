<?php
include_once("config.php");

$signup = new Config();

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

if($firstname == "" || $lastname == "" || $email == "" || $password == ""){
    echo "<div class='alert alert-danger'>";
      echo "Please Complete The Fields";
      echo "</div>";
}else{
    $output = $signup->register($firstname, $lastname, $email, $password);
    if($output == true){
        header("Location: login.php");
    } else{
      echo "<div class='alert alert-danger'>";
      echo "Please Enter Correct Details";
      echo "</div>";
    }
}


?>



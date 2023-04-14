<?php
include_once ('config.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];


$object = new Config();
 
if($firstname == "" || $lastname == "" || $email == ""){
    echo "<div class='alert alert-danger'>";
    echo "Please Complete The Fields";
    echo "</div>";
}else {
    $result = $object->update($firstname, $lastname,  $email, 1);
    if($result == true){
        echo "<div class='alert alert-Success'>";
        echo "Profile update is Successfully";
        echo "</div>";
    } else{
        echo "<div class='alert alert-danger'>";
    echo "Please update necessary fields";
    echo "</div>";
    }
}





?>
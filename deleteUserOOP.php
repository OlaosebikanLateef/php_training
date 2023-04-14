<?php
include_once ('config.php');




$object = new Config();
 

   
    $result = $object->deleteUser(1);
    if($result == true){
        echo "<div class='alert alert-Success'>";
        echo "Profile deleted Successfully";
        echo "</div>";
    } else{
        echo "<div class='alert alert-danger'>";
    echo "Profile not deleted";
    echo "</div>";
    }


?>
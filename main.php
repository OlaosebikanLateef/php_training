<?php   
$ages = array("Lateef" => 15, "Lateefat" => 9, "Aishat" => 30,  "Ibarahim" => 19, "Emeka" => 12);
$maxAge = PHP_INT_MIN;
$name = "";
foreach($ages as $key => $value){

    if($value > $maxAge){
        $maxAge = $value;
        $name = $key;
    }
}
echo $name

// $myNumber = array (
//     array(1, 2, 3, 4),
//     array(2, 4, 6, 8),
//     array(3, 6, 9),
//     array(10)
// );
// //echo $myNumber[0][3]
// for($i = 0; $i < count($myNumber); $i++){
// $child = $myNumber[$i];
// for($j = 0; $j < count($child); $j++){
//     echo $child[$j] . "";
//   }
//   echo "</br>";
// }



?>
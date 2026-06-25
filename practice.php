<?php

$capitals = array(
     "Usa" => "Washington D.C.",
     "Bangladesh" => "Dhaka",
     "India" => "New Delhi"
);



$keys = array_keys($capitals);
foreach ($keys as $key) {
     echo $key . "<br>";
}
echo count($keys) ;

$values = array_values($capitals);
foreach($values as $value){
     echo $value . "<br>";
}


?>
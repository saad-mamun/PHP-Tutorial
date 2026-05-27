<?php

// associative array

$capitals = array(
    "USA" => "Washington D.C.",
    "BANGLADESH" => "Dhaka",
    "India" => "New Delhi"
);

// echo $capitals["USA"]. "<br>";
// $capitals["USA"] = "New York"; //update value
// $capitals["CANADA"] = "Ottawa"; //add new key-value pair
// array_pop($capitals);

// $keys = array_keys($capitals); //get all keys
// $values = array_values($capitals); //get all values
// $capitals = array_flip($capitals); //flip keys and values
// $capitals = array_reverse($capitals); //reverse array
echo count($capitals); //count array elements


// foreach($keys as $key){
//     echo $key . "<br>";
// };

// foreach($values as $value){
//     echo $value . "<br>";
// };

foreach($capitals as $capital => $country){
    echo " {$country} = {$capital}<br>";
}



foreach($capitals as $country => $value){
    echo "The capital of {$country} is {$value}<br>";
}

?>
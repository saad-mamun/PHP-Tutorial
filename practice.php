<?php


$assoc = array(
    "first" => "apple",
    "second" => "banana"
);

// if(array_key_exists("second", $assoc)){
//     echo "This key exist \n";
// }else{
//     echo "Key dose not exist \n";
// }


$value = array_search('banana', $assoc);
echo $value;
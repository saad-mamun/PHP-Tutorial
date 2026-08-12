<?php


// index array....
$array1 = [1,2,3,4,5,6];

for($i = 0; $i < count($array1); $i++){
    echo $array1[$i] . " \n";
}

$array1 = [1,2,3,4,5,6];

foreach($array1 as $value){
    echo $value . "\n";
}


//Associative array....
$person1 = array(
    "first_name" => "Naima",
    "last_name" => "Islam",
    "age" => "23"
);

foreach($person1 as $key => $item){
    echo "$key : $item  \n" ;
}
<?php

$array = [1, 2, 3, 4, 5, 6];

$person = array(
    'first_name' => "Liton",
    'last_name' => " Al-Mamun",
    'age' => 24
);

$person1 = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9),
);

$users = [
    "john" => [
        "email" => "naima@gmail.com",
        "age" => "24",
    ],
    "jane" => [
        "email" => "jane@gmail.com",
        "age" => "44",
    ],
];

foreach ($users as $user => $details) {
    foreach($details as $key => $value ){
        echo "$key : $value \n " ;
    }
;}

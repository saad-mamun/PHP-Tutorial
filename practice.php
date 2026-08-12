<?php

$array1 = [
    "John" => [
        "email" => "john@gmail.com",
        "age" => 23,

    ],
    "Jane" => [
        "email" => "Jane@gmail.com",
        "age" => 23,

    ]
];

// print_r($array1["Jane"]);
// print_r($array1["Jane"]["age"]);

//easy way to access
$jane = $array1["Jane"];
print_r($jane["age"]);

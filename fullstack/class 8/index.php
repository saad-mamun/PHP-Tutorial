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



// Multidimensional array....
$array1 = array(
   array(1,2,3), 
   array(4,5,6), 
   array(7,8,9), 
);

print_r($array1[0]);
print_r($array1[1]);
print_r($array1[2]);

// array1 er mothde thaka array gulor value
echo $array1[0][1] . "\n" ;
echo $array1[1][2];



//Associative Multidimensional array....
$users = [
    "John" => [
        "email" => "john@gmail.com",
        "age" => 23,

    ],
    "Jane" => [
        "email" => "Jane@gmail.com",
        "age" => 23,

    ]
];

// print_r($users["Jane"]);
// print_r($users["Jane"]["age"]);

//easy way to access
$jane = $users["Jane"];
print_r($jane["age"]);





// $users = [
//     "John" => [
//         "email" => "john@gmail.com",
//         "age" => 23,

//     ],
//     "Jane" => [
//         "email" => "Jane@gmail.com",
//         "age" => 25,

//     ],
//     "Naima" => [
//         "email" => "naima@gmail.com",
//         "age" => 24,

//     ]
// ];

// foreach($users as $username => $details ){
//     // print_r($details);
//     echo "Username: $username \n";
//     foreach($details as $key => $value){
//         echo "$key : $value \n";
//     }
// };


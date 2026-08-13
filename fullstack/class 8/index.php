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



// array values

$assoc = array("a" => "apple", "b" => "banana", "c" => "cherry");
$values = array_values($assoc);
print_r($values);
$keys = array_keys($assoc);
print_r($keys);


// array combine....

// $keys = array("a", "b", "c");
// $values = array("apple", "banana", "cherry");
// $combined = array_combine($keys, $values);
// print_r($combined);


//array fill.....
$filled = array_fill(0,3, "Apple");
print_r($filled);


//insert element at the end

$fruits = array("apple", "banana", "cherry");
print_r($fruits);
array_push( $fruits, "dates", "elderberry");
print_r($fruits);


//remove element at the end

// $fruits = array("apple", "banana", "cherry");
// $lastFruit =  array_pop($fruits);
// print_r($fruits);
// // je element remove hoyse ta check kora jai
// echo $lastFruit;



//insert element from the SURU
$fruits = array("apple", "banana", "cherry");
$lastFruit =  array_unshift($fruits, "Dates");
print_r($fruits);

//remove element suru theke
$fruits = array("apple", "banana", "cherry");
$lastFruit =  array_shift($fruits);
print_r($fruits);



// removing a portion from an array and also adding new elements

$fruits = array("apple", "banana", "cherry");
// array_splice($fruits, 1,1);
array_splice($fruits, 1,2);
print_r($fruits);

// adding new elements
// array_splice($fruits, 1,2, array("apricot", "blackberry"));
// print_r($fruits);


//Extracting a portion from an array
// $fruits = array("apple", "banana", "cherry", "date", "elderberry");

// $portion = array_slice($fruits, 1, 3);
// print_r($portion);


// Array Informations;

$numbers = array(1,2,3,4,5);
// echo count($numbers) . "\n" ;
// echo array_sum($numbers);

//protek tar sahter protek ta gun hobe..
// echo array_product($numbers);


//important
// value chack kore ache ki na
// if(in_array(3, $numbers)){
//     echo "3 is in array.\n";
// }else{
//   echo  "The number you have selected. That would not exist in this array.";
// }


// key search
// $assoc = array(
//     "first" => "apple",
//     "second" => "banana"
// );

// if(array_key_exists("first", $assoc)){
//     echo "key exists";
// }else {
//     echo "dose not exists";
// }

// value search
// $assoc = array(
//     "first" => "apple",
//     "second" => "banana"
// );

// $value = array_search("banana", $assoc);
// echo $value;



//array map
// function squired($n){
//     return $n * $n;
// }

// $numbers = array(1,2,3,4,5);
// $numberOfSquired = array_map("squired", $numbers);
// print_r($numberOfSquired);


//array_ filter
// function is_even($n){
//     return $n % 2 == 0;
// }

// $numbers = array(1,2,3,4,5);
// $evenNumbers = array_filter($numbers, "is_even");
// print_r($evenNumbers);


//array_merge
// $array1 = array("Apple", "Banana");
// $array2 = array("Orange", "Mango");

// $merged = array_merge($array1, $array2);
// print_r($merged);

//array_replace
// $array1 = array("Apple", "Banana", "Orange");

// $replacedArray = array(0 => "Apricot", 1 => "Blackberry");
// $replaced = array_replace($array1  ,$replacedArray);
// print_r($replaced);


//array_flip
// $input = array("a" => 1, 'b' => 2, 'c' => 3);
// $flipped = array_flip($input);
// print_r($flipped);


//array_change_key_case
// $input = array("First" => 1, 'secONd' => 2, );
// $KeyChange = array_change_key_case($input, CASE_UPPER);
// print_r($KeyChange);



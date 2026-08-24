<?php

// $name = "Hello, I am Liton";

// $length = strlen($name);

// echo $length;

// echo str_word_count($name);

// echo strrev($name);

// echo strpos($name, "am");

// echo substr($name, 0,5);

// echo str_replace( "Liton", "Naima", $name);

// echo strtolower($name);



// echo ucfirst($name);
// echo ucwords($name);

// $firstName = "  Liton   ";
// $lastName = "  Al_Mamun  ";
// $fullName = "I am $firstName $lastName";
// echo trim($fullName);

//important - hash kore md5 dia
// $password = "MilonHardware@32315}";
// echo md5($password);


// FILE-
// 
// $file = "example.text";
// $content = "This is text content for example file";

// if (file_put_contents($file, $content)) {
//     echo "File created successfully \n";
// } else {
//     echo "Failed to create File \n";
// }

// Athoba...

// By using fopen() and fwrite() functions;

// $fileTwo = "second-file.txt";
// // w-means write
// $handle = fopen($fileTwo, 'w');

// if ($handle) {
//     fwrite($handle, "Hello I am second file");
//     fclose($handle);
//     echo "Second file created successfully \n";
// } else {
//     echo "Failed \n";
// }

// if (file_exists('testFILE.txt')) {
//     $content = file_get_contents('testFILE.txt');
//     echo $content . "\n";
// } else {
//     echo "File dose not exist\n";
// }



if(file_put_contents('example2.txt', "I am liton from content(argument)")){
    echo "File written successfully \n";
}
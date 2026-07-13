
<?php
//Here you can see projects

// Project: 1 - 


// echo "Enter a number: ";
// $number = (int)readline(); // readline holo terminal theke user er input receive kore.

// if ($number > 0) {
//     echo "The number is positive.";
// } elseif ($number < 0) {
//     echo "The number is Negative";
// } else {
//     echo " The number is zero";
// }

// PROJECT: 2 - Basic authentication system..

define("USERNAME", "admin");
define("PASSWORD", "2315DF");


echo "Enter username: ";
$inputUsername = readline();

echo "Enter password: ";
$inputPassword = readline();


if( $inputUsername === USERNAME && $inputPassword === PASSWORD  ){
    echo "Login Successful";
}else{
    echo "Invalid username or password";
}


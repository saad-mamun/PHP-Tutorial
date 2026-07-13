
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

// define("USERNAME", "admin");
// define("PASSWORD", "2315DF");


// echo "Enter username: ";
// $inputUsername = readline();

// echo "Enter password: ";
// $inputPassword = readline();


// if( $inputUsername === USERNAME && $inputPassword === PASSWORD  ){
//     echo "Login Successful";
// }else{
//     echo "Invalid username or password";
// }



// PROJECT: 3 - Electricity bill calculation..

echo "Enter units you consumed: ";
$units = (int)readline();

if ($units <= 100) {
    $bill = $units * 5;
} elseif ($units  <= 200) {
    $bill =  100 * 5 + ($units - 100) * 10;
} elseif ($units  > 200) {
    $bill = (100 * 5) +  (100 * 10) + ($units - 200) * 15;
} else {
    echo "You can not consumed any unite";
}
echo "Your total bill: $$bill";
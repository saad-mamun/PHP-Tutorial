
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

// echo "Enter units you consumed: ";
// $units = (int)readline();

// if ($units <= 100) {
//     $bill = $units * 5;
// } elseif ($units  <= 200) {
//     $bill =  100 * 5 + ($units - 100) * 10;
// } elseif ($units  > 200) {
//     $bill = (100 * 5) +  (100 * 10) + ($units - 200) * 15;
// } else {
//     echo "You can not consumed any unite";
// }
// echo "Your total bill: $$bill";


// PROJECT: 4 - Temperature Converter..


define("FACTOR", 9 / 5);
define("OFFSET", 32);

echo "Enter a temperature value: ";
$temperature = (float)readline();

echo "Convert to (1: Fahrenheit, 2: Celsius ) : ";
$choice = (int)readline();

switch ($choice) {
    case 1:
        $result = $temperature * FACTOR + OFFSET;
        echo "Temperature in Fahrenheit: $result";
        break;
    case 2:
        $result = ($temperature - OFFSET) / FACTOR;
        echo "Temperature in Celsius: $result";
        break;
    default:
        echo "Invalid choice";
}

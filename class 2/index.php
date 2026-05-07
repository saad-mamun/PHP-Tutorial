<?php
// Variable in PHP..
$name = "Liton Ali";
$food = "Pizza";
$email = "deco@gmail.com";

// Integer
$age = 22;

// Float
$gpa = 3.26;
$price = 5.99;
$tax = 0.07;

// Boolean
$employee = true;
$online = false;
$for_sale = true;


echo "Hello world! My name is $name.<br>";
echo "I love {$food}s.<br>";
echo "You can contact me at $email.<br>";

echo "I am $age years old.<br>";

echo "My GPA is $gpa.<br>";
echo "The price of the item is $$price.<br>";
echo "The tax is $$tax%.<br>";

echo "Am I an employee? " . ($employee ? "Yes" : "No") . "<br>";
echo "Am I online? " . ($online ? "Yes" : "No") .   "<br>";
echo "Is the item for sale? " . ($for_sale ? "Yes" : "No") . "<br>";
                                







?>
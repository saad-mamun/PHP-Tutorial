<?php

$marks = 750;


if ($marks >= 80) {
    echo "A+";
} elseif ($marks >= 70) {
    echo "A";
} elseif ($marks >= 60) {
    echo "B";
} else {
    echo "Unknown grade";
}


echo "<br>";

// Nested if else

$marksNested = 67;

if ($marksNested < 33) {
    echo "You fail";
} else {
    if ($marksNested < 60) {
        echo "Average";
    } else {
        if ($marksNested < 50) {
            echo "D";
        }
    }
}


echo "<br>";

// Nested ternary operator




echo "<br>";

//ternary operator

$age = 550;

if ($age > 18) {
    echo "ADULT";
} else {
    echo "Minor";
}

echo "<br>";

$minorityCheck = ($age >= 18) ? "You are adult" : "You are child";
echo "{$minorityCheck}";


echo "<br>";

//switch case


$weather = "Rainy";

switch ($weather) {
    case "Sunny":
        echo "It's sunny day. Lets have fun";
        break;
    case "Cloudy":
        echo "Its cloudy today.";
        break;
    case "Rainy":
        echo "Its rainy day so take umbrella";
        break;
    case "Foggy":
        echo "Its Foggy day. Have fun";
        break;
    default:
        echo "Unknown Weather";
}

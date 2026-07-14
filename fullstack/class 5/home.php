<?php

// Arithmetic Operator

// $n1 = 2;
// $n2 = 3;

// echo $n1 + $n2;
// echo $n1 / $n2;
// echo $n1 - $n2;
// echo $n1 * $n2;

// echo $n1 % $n2; // vag ses dekah jai
// echo $n1 ** $n2; // to the power


// logical Operators(&&, ||, OR, !) ( true, false)

// $isActive = true;
// $notIsActive = !$isActive;
// echo $notIsActive;


//Increment / Decrement

// Increment
// $x = 5;
// echo "Before Increment : " . $x . "\n";
// $z = $x++;
// echo "value of z : " . $z . "\n";
// echo "After Increment : " . $x . "\n";


//Decrement
// echo "Before Increment : " . $x . "\n";
// $z = --$x;
// echo "value of z : " . $z . "\n";
// echo "After Increment : " . $x . "\n";




//Loops (for, foreach, while, Do-while)

// for loop

// for($i = 1; $i <= 10; $i++){
//     echo $i . "\n";
// }


// While loop

// $i = 1;
// while($i <=5){
//     echo $i. "\n";
//     $i++;
// }

// $i = 5;
// while($i >=1){
//     echo $i. "\n";
//     $i--;
// }

//Do-While Loop

// $i = 1;
// do{
//     echo $i ."\n";
//     $i++;
// }while($i <=5);

// foreach loop

$colors = ["red", " greed", " blue", " yellow", " pink", " purple", " white", " black", " lime", " ass"];

// $blue = $colors[2];
// echo $blue;
// echo count($colors);

// $lastIndex = $arrayLength - 1; last element dekahr suttro.

// hard cord o - 3 show korbe.
// for ($i = 0; $i <=4; $i++){
//     echo $colors[$i] . "\n";
// }

// for ($i = 0; $i < count($colors); $i++){
//     echo $colors[$i] . "\n";
// }


//Array thakle foreach use korte hobe(BEST PRACTICE)
// all colors show korbe..

// foreach($colors as $color){
//     echo $color . "\n" ;
// }

//jodi color er sathe index show korte chai
// foreach ($colors as $index => $color) {
//     echo $index . " - " . $color . "\n";
// }

// foreach ($colors as $index => $color) {
//     echo $index + 1 . " - " . $color . "\n";
// }




//Break && Continue

//Break
$numbers = [1, 2, 3, 4, 5, 6];

for ($i = 1; $i <= 5; $i++) {

    if ($i == 3) {
        break;
    }
    echo $i . "\n";
}


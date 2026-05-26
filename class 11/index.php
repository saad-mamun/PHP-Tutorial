<?php
// array


$foods = array("Pizza", "Burger", "Pasta", "Salad");

// echo $foods[0] . "<br>";
// echo $foods[1] . "<br>";
// echo $foods[2] . "<br>";
// echo $foods[3] . "<br>";


// $foods[0] = "Sushi"; 
// array_push($foods, "Pineapple", "Ice Cream"); //add last element
// array_pop($foods); //remove last element
// array_shift($foods); //remove first element

// $foods = array_reverse($foods); //reverse array
// echo count ($foods) . "<br>"; //count array elements

foreach( $foods as $food){
    echo $food . "<br>";
}



?>
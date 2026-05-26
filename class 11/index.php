<?php
// array


$foods = array("Pizza", "Burger", "Pasta", "Salad");

// echo $foods[0] . "<br>";
// echo $foods[1] . "<br>";
// echo $foods[2] . "<br>";
// echo $foods[3] . "<br>";


// $foods[0] = "Sushi"; 
// array_push($foods, "Pineapple", "Ice Cream");
array_pop($foods);

foreach( $foods as $food){
    echo $food . "<br>";
}



?>
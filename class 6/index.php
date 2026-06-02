<?php

// example 1:  of if, elseif and else statement

$age =  20;
$adult = true;


$hours = 20;
$rate = 15;
$weekly_pay = null;


// if($age >= 100){
//     echo "You are too old to enter this site";
// }
// elseif($age >= 18){
//     echo "You may enter this site";
// }
// elseif($age <= 0){
//     echo "You are not born yet";
// }

// else{
//     echo "You must be 18+ to enter this site";
// }



//example 2: of if, elseif and else statement

// if($adult){
//     echo "You may enter this site";
// }
// else{
//     echo "You must be 18+ to enter this site";
// }

// example 3: of if, elseif and else statement



if($hours <= 35){
    $weekly_pay = $hours * $rate;
    echo "Your weekly pay is: $weekly_pay";
}



?>
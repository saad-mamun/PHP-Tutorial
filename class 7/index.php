<?php

$temp = 20;
$cloudy = false;

$age = 22;
$citizen = false;

$child = false;
$senior = false;
$ticket = null;




if ($temp > 0 || $temp < 30){
    echo "Weather is better. <br>";
}
else{
    echo "Weather is bad. <br>";
}

if (!$cloudy ){
    echo "Its cloudy. <br>";
}
else{
    echo "Its not cloudy. <br>";
}


if($age >=18 && $citizen){
    echo " You can vote. <br>";
}
else{
    echo " You cannot vote. <br>";
}


if($child || $senior){
    $ticket = 10;
    echo "You get a discount $$ticket. <br>";
}
else{
    $ticket = 15;
    echo "You pay $$ticket. <br>";
}








?>
<?php

$marks =750;


if ($marks >= 80){
    echo "A+";
}elseif($marks >= 70) {
    echo "A";
} elseif($marks >= 60){
    echo "B";
}else{
    echo "Unknown grade";
}


echo "<br>";

// Nested if else

$marksNested = 64;

if($marksNested < 33 ){
    echo "You fail";
}else{
    if($marksNested < 60 ){
        echo "Average";
    }
}


?>
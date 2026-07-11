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

$marksNested = 67;

if($marksNested<33){
    echo "You fail";
}else{
    if($marksNested<60 ){
        echo "Average";
    }else{
        if($marksNested<50){
            echo "D";
        }
    }
}



echo "<br>";

//ternary operator

$age = 550;

if ($age > 18){
    echo "ADULT";
}else{
    echo "Minor";
}

echo "<br>";

$minorityCheck = ($age >= 18)? "You are adult" : "You are child";
echo "{$minorityCheck}";
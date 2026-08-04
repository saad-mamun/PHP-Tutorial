<?php

$marks = 50;

if($marks <= 100 && $marks >= 80){
    echo "A+";
}elseif($marks <=50){
    echo "B";


};


$adultCheck = ($age >= 18) ? "You are adult" : "You are still a child";
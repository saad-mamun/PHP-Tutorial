<?php

function sum($n1, $n2){
    $result = $n1 + $n2;
    return $result;
}

$totalSum = sum(23,22);
// echo $totalSum;


function greeting($name = "Sir"){
    echo "Welcome $name";
}
// greeting(); 
greeting("Naima");

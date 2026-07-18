<?php


function sum($num1, $num2){
    $result = $num1 ** $num2;
    return $result;
}

$sumTest1 = sum(3,3);
$sumTest2 = sum(2,3);
$finalResult = $sumTest1 - $sumTest2;
echo $finalResult;
<?php


function sumOfInt (int $num1, int $num2) : int{
    $result = $num1 + $num2;
    return $result;
}
echo sumOfInt(10,20.5);
echo "</br>";

function sumOfFloat(float $num1, float $num2) : float{
    $result = $num1 + $num2;
    return $result;
}

echo sumOfFloat(12.2,2.3);
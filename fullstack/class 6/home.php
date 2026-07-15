<?php
// function myName($name, $age){
//     echo "My name is $name and I'm $age years old";
// }
// myName("Liton", 22);



function someOfTwoNumber($num1, $num2){
    $result = $num1 + $num2;
    return $result;
}
$sumTest1 =  someOfTwoNumber(20,50);
$sumTest2 =  someOfTwoNumber(10,20);

$myResult = $sumTest1 - $sumTest2;
echo $myResult;
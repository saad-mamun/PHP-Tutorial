<?php
// function myName($name, $age){
//     echo "My name is $name and I'm $age years old";
// }
// myName("Liton", 22);



// function someOfTwoNumber($num1, $num2){
//     $result = $num1 + $num2;
//     return $result;
// }
// $sumTest1 =  someOfTwoNumber(20,50);
// $sumTest2 =  someOfTwoNumber(10,20);

// $myResult = $sumTest1 - $sumTest2;
// echo $myResult;


// function greeting($name = "Sir"){
//     echo "Wellcome $name";
// }
//  greeting(); // oi defalt er name = sir show korebe
//  greeting("Naima");


//Variadic Function

// function sumOfNumber(...$nums){
//     $sumResult = array_sum($nums);
//     return $sumResult;
// }
// echo sumOfNumber(10,30,54);


// function add(...$nums) {  
//     $sum = 0;  
//     foreach ($nums as $n) {  
//         $sum += $n;  
//     }  
//     return $sum;  
// } 
// echo add(1, 2, 3, 4);  
 

// INTIGER NUMBER
// function sumOfTwoNumbersInt(int $num1, int $num2) : int{
//     $result = $num1 + $num2;
//     return $result;
// }
// echo sumOfTwoNumbersInt(30,50); 


//FLOAT NUMBER
// function sumOfTwoNumbersInt(float $num1, float $num2) : float{
//     $result = $num1 + $num2;
//     return $result;
// }
// echo sumOfTwoNumbersInt(30.52,50);



//float othoba int
// Union return type
function sumOfTwoNumbersInt( $num1,  $num2) : float | int{
    $result = $num1 + $num2;
    return $result;
}
echo sumOfTwoNumbersInt(30,5.60);
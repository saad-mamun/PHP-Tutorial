<?php

// Array Informations;

$numbers = array(1,2,3,4,5);
// echo count($numbers) . "\n" ;
// echo array_sum($numbers);

//protek tar sahter protek ta gun hobe..
// echo array_product($numbers);


//important
// value chack kore ache ki na
if(in_array(3, $numbers)){
    echo "3 is in array.\n";
}else{
  echo  "The number you have selected. That would not exist in this array.";
}
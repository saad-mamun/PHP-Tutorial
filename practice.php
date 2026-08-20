<?php


function squired($n){
    return $n * $n;
};

$numbers = array(1,2,3,4,5);
$numberOfSquired = array_map("squired", $numbers);
print_r($numberOfSquired);
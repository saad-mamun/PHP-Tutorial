<?php

function sum(...$nums){
    $result = array_sum($nums);
    return $result;
}

echo sum(10,20,30,40);
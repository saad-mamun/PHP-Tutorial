<?php

// removing a portion from an array and also adding new elements

$fruits = array("apple", "banana", "cherry");
// array_splice($fruits, 1,1);
array_splice($fruits, 1,2);
print_r($fruits);

// adding new elements
// array_splice($fruits, 1,2, array("apricot", "blackberry"));
// print_r($fruits);

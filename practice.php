<?php


$array1 = array("Apple", "Banana");
$array2 = array("Orange", "Mango");

$merged = array_merge($array1, $array2);
// print_r($merged);

$arrayReplace = array(0 => "Apricot", 1 => "Blackberry");
$replaced = array_replace($array1, $arrayReplace);
print_r($replaced);
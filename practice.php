<?php



$numbers = array(1,2,3,4,5);
// value search
$assoc = array(
    "first" => "apple",
    "second" => "banana"
);

$value = array_search("banana", $assoc);
echo $value;
<?php


$input = array("First" => 0, "SecONd" => 1);
$keyChanged = array_change_key_case($input, CASE_LOWER);
print_r($keyChanged);
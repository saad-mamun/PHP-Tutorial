<?php

function localScope(){
    $name = "Liton";
    echo "My name is $name \n";
}
localScope();

$name = "Liton Al-Mamun";
function globalScope(){
    global $name;
    echo "My full name is $name \n";
}
globalScope();
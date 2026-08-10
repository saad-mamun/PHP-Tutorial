<?php


function localt(){
    $name = "liton";
    echo "My name is $name \n";
}
localt();

$name = "Liton Al Mamun";
function globalScope(){
    global $name;
    echo "My name is $name";
}
globalScope();
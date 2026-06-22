<?php

$child = true;
$senior = false;
$ticket = null;


if($child || $senior){
    $ticket = 10;
    echo "You get a discount $$ticket. <br>";
}
else{
    $ticket = 15;
    echo " You pay $$ticket. <br>";
}



?>
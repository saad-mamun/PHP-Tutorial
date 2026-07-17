<?php

echo "Enter you units consumed: ";

$units = (int)readline();
if($units <= 100){
    $bill = $units * 5;
}elseif($units <=200){
    $bill = (100 * 5) + ($units - 100) * 10;
}elseif($units <=300){
    $bill = (100 * 5) + (100 * 10) + ($units - 200) * 15;
}else{
    echo "You dost not consumed any units";
}

echo "You total bill: " . $bill;
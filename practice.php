<?php

echo "Enter you unites: ";
$unites = (int)readline();


if($unites <= 100){
    $bill = $unites * 5;
} elseif($unites <= 200){
    $bill = 100 * 5 + ($unites - 100) * 10;
}elseif($unites > 200){
    $bill = (100 * 5) + (100* 10) + ($unites - 200) * 15;
}else{
    echo "You can not consumed any unite";
}
echo "Your bill is: $" .$bill;
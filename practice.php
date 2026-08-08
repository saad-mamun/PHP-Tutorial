<?php

$colors = ["red", "green", "blue", "yellow", "pink", "purple", "black", "lime", "orange"];

$numbers = [1,2,3,4,5,6,7];

for($i = 0; $i <= 5; $i++){
    if($i == 3){
        break;
    }
    echo $i . "\n";
}


for($i = 0; $i <= 5; $i++){
    if($i == 3){
        continue;
    }
    echo $i . "\n";
}
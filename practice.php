<?php

$colors = ["red", "green", "blue", "yellow", "pink", "purple", "black", "lime", "orange"];


for($i = 0; $i < count($colors); $i++){
    // echo "Colors name is: " . $colors[$i]. "\n";
}

foreach($colors as $color){
    // echo $color . "\n";
};

foreach($colors as $index => $color){
//   echo $index . " - " . $color ."\n" ;  
};


foreach($colors as $index => $color){
    echo $index + 1 . " - ". $color . "\n";
}

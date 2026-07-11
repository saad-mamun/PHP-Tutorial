<?php

$marks =750;


if ($marks >= 80){
    echo "A+";
}elseif($marks >= 70) {
    echo "A";
} elseif($marks >= 60){
    echo "B";
}else{
    echo "Unknown grade";
}

?>
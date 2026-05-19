<?php


$grade = "Fd";

switch ($grade){
    case "A":
        echo "Excellent";
        break;
    case "B":
        echo "Good";
        break;
    case "C":
        echo "Fair";
        break;
    case "D":
        echo "Poor";
        break;
    case "F":
        echo "Failing";
        break;
    default:
         echo "{$grade} is Invalid grade";
}





?>
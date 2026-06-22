<?php

$grade = "B";

switch ($grade) {
    case "A":
        echo "Excellent";
        break;
    case "B":
        echo "Good";
        break;
    case "C":
        echo "Fair";
        break;
    default:
        echo "{$grade} is Invalid grade";
}

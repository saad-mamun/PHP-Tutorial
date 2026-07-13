
<?php
//Here you can see projects

echo "Enter a number: ";
$number = (int)readline(); // readline holo terminal theke user er input receive kore.

if ($number > 0) {
    echo "The number is positive.";
} elseif ($number < 0) {
    echo "The number is Negative";
} else {
    echo " The number is zero";
}

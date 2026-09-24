<?php


define("FACTOR", 9 / 5);
define("OFFSET", 32);

echo "Enter a temperature value: ";
$temperature = (float)readline();

echo "Convert to (1: Fahrenheit, 2: Celsius ) : ";
$choice = (int)readline();